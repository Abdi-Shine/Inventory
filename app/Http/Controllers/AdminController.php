<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerificationCodeMail;

class AdminController extends Controller
{
    // Admin Logout
    public function AdminLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('logout.success');
    }
    
    public function AdminLockScreen() 
    {
        // Capture user data before logout
        if (Auth::check()) {
            $name = Auth::user()->name;
            $email = Auth::user()->email;
            $photo = Auth::user()->photo;

            Auth::guard('web')->logout();
            
            return view('auth.lock_screen', compact('name', 'email', 'photo'));
        }
        
        return redirect()->route('login');
    }

    // Admin Login
    public function AdminLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $user = auth()->user();

            // Check if email is verified
            if ($user->email_verified_at === null) {
                auth()->logout();
                return redirect()->route('verification.notice');
            }

            if ($user->two_factor_enabled) {
                $verificationcode = random_int(100000, 999999);
                session(['verification_code' => $verificationcode, 'user_id' => $user->id]);
            
                try {
                    \Illuminate\Support\Facades\Log::info("Generating code $verificationcode for user " . $user->email);
                    Mail::to($user->email)->send(new VerificationCodeMail($verificationcode));
                } catch (\Exception $e) {
                    \Illuminate\Support\Facades\Log::error("Mail sending failed: " . $e->getMessage());
                    return redirect()->back()->withErrors(['email' => 'Mail delivery failed: returning message to sender']);
                }
                
                auth()->logout();
                return redirect()->route('custom.verification.form')->with('status', 'Verification code sent to your mail!');
            }

            return redirect()->intended(route('dashboard'));
        }
        return redirect()->back()->withErrors(['email' => 'Invalid Credentials Provided']);
    }

    // Show verification form
    public function Showverification()
    {
        return view('auth.verify');
    }

    // Verification Verify
    public function VerificationVerify(Request $request)
    {
        $request->validate(['code' => 'required|numeric']);

        if ($request->code == session('verification_code')) {
            $userId = session('user_id');
            session()->forget(['verification_code', 'user_id']);
            Auth::loginUsingId($userId);
            return redirect()->route('dashboard');
        }

        return redirect()->back()->with('error', 'Invalid verification code. Please try again.');
    } //end verification verify

    //admin profile
    public function AdminProfile()
    {
        $id = Auth::user()->id;
        $profiledata = User::find($id);
        return view('admin.admin_profile', compact('profiledata'));
    }

    public function TwoFactorUpdate(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $user->two_factor_enabled = !$user->two_factor_enabled;
        $user->save();

        $notification = array(
            'message' => 'Two Factor Authentication Status Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
    //end admin profile
    public function AdminProfileStore(Request $request)
    {
         $id = Auth::user()->id;
         $data = User::find($id);
         $data->name = $request->name;
         $data->email = $request->email;
         $data->phone = $request->phone;
         $data->address = $request->address;
         if ($request->file('photo')) {
            // Delete old image if exists
            if ($data->photo) {
                $this->deleteOldImage($data->photo);
            }
            $file = $request->file('photo');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload/admin_images'), $filename);
            $data->photo = $filename;
         }
         $data->save();
         $notification = array(
            'message' => 'Profile updated successfully',
            'alert-type' => 'success'
         );
         return redirect()->route('admin.profile')->with($notification);
    }

    // Delete old profile image
    private function deleteOldImage(string $oldPhotoPath): void
    {
        $fullPath = public_path('upload/admin_images/' . $oldPhotoPath);
        if (file_exists($fullPath)) {
            unlink($fullPath);
        }
    }
    // End private Method
    public function PasswordUpdate(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required|same:new_password',
        ]);

        if (!Hash::check($request->old_password, Auth::user()->password)) {
            return back()->withErrors(['old_password' => 'The old password does not match.']);
        }

        Auth::user()->update([
            'password' => Hash::make($request->new_password),
        ]);

        $email = Auth::user()->email;
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')
            ->with('email', $email)
            ->with('success', 'Password Updated Successfully. Please Login with new Password');
    }
    // End password update Method
    
}