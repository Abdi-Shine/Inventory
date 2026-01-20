<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        <h2 class="text-lg font-medium text-gray-900 mb-2">Registration Successful!</h2>
        {{ __('Your account has been created successfully. Please check your email and click the activation link to activate your account and log in.') }}
    </div>

    <div class="mt-4 flex items-center justify-between">
        <a href="{{ route('login') }}" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            {{ __('Back to Login') }}
        </a>
    </div>
</x-guest-layout>
