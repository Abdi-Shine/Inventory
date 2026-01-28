@extends('admin.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">

        <!-- Page Title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Compose Reply</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('view_answer') }}">Contacts</a></li>
                            <li class="breadcrumb-item active">Reply</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            
            <!-- Left Column: Original Message Details -->
            <div class="col-xl-4 col-lg-5">
                <div class="card overflow-hidden">
                    <div class="bg-primary bg-soft">
                        <div class="row">
                            <div class="col-7">
                                <div class="text-primary p-3">
                                    <h5 class="text-primary">Sender Details</h5>
                                    <p>Original Message Info</p>
                                </div>
                            </div>
                            <div class="col-5 align-self-end">
                                <img src="{{ asset('backend/assets/images/profile-img.png') }}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="avatar-md profile-user-wid mb-4">
                                    <span class="avatar-title rounded-circle bg-light border border-primary">
                                        <i class="mdi mdi-account-circle text-primary font-size-24"></i>
                                    </span>
                                </div>
                                <h5 class="font-size-15 text-truncate">{{ $contact->name }}</h5>
                                <p class="text-muted mb-0 text-truncate">{{ $contact->email }}</p>
                            </div>
                        </div>
                        
                        <div class="card-body border-top mt-4">
                            <h5 class="font-size-14 mb-3"><i class="mdi mdi-message-text-outline me-1"></i> Incoming Message :</h5>
                            <p class="text-muted mb-0">
                                {{ $contact->message }}
                            </p>
                            <br>
                             <h6 class="font-size-12"><i class="mdi mdi-clock-outline me-1"></i> Received: {{ $contact->created_at->format('d M Y, h:i A') }}</h6>
                        </div>

                         @if($contact->status == '1')
                        <div class="card-body border-top mt-4 bg-success bg-soft">
                             <h5 class="font-size-14 mb-3 text-success"><i class="mdi mdi-check-circle-outline me-1"></i> You Replied :</h5>
                             <p class="text-success mb-0">
                                {{ $contact->reply_message }}
                            </p>
                        </div>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Right Column: Reply Form -->
            <div class="col-xl-8 col-lg-7">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Compose Reply Email</h4>

                        <form method="post" action="{{ route('reply.message') }}">
                            @csrf
                            <input type="hidden" name="id" value="{{ $contact->id }}">
                            <input type="hidden" name="email" value="{{ $contact->email }}">
                            <input type="hidden" name="name" value="{{ $contact->name }}">

                            <div class="mb-3">
                                <label class="form-label">To:</label>
                                <div class="input-group">
                                    <div class="input-group-text"><i class="mdi mdi-email-outline"></i></div>
                                    <input type="text" class="form-control" value="{{ $contact->email }}" readonly disabled>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Subject:</label>
                                <div class="input-group">
                                    <div class="input-group-text"><i class="mdi mdi-format-title"></i></div>
                                    <input type="text" class="form-control" name="subject" placeholder="Enter Subject" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Message:</label>
                                <textarea id="elm1" name="reply_message" class="form-control" rows="10" placeholder="Type your reply here..."></textarea>
                            </div>

                            <div class="d-flex justify-content-end gap-2">
                                <a href="{{ route('view_answer') }}" class="btn btn-secondary waves-effect">
                                    <i class="mdi mdi-close-circle-outline me-1"></i> Cancel
                                </a>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                    <i class="mdi mdi-send me-1"></i> Send Reply
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div> <!-- end row -->

    </div> <!-- container-fluid -->
</div>
@endsection

@section('scripts')
<!-- TinyMCE CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.8.2/tinymce.min.js" referrerpolicy="origin"></script>

<script>
    tinymce.init({
        selector: '#elm1',
        height: 300,
        menubar: false,
        branding: false,
        promotion: false,
        plugins: [
            'advlist autolink lists link charmap print preview anchor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table paste code help wordcount'
        ],
        toolbar: 'formatselect | bold italic underline | alignleft aligncenter alignright alignjustify | ' +
        'bullist numlist outdent indent | link | removeformat',
        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
    });
</script>
@endsection
