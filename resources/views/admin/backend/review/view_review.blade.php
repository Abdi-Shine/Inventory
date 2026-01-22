@extends('admin.admin_master')
@section('admin')

<style>
    @media print {
        .card-header, .btn, .footer, .left-side-menu, .topbar, .back-to-list {
            display: none !important;
        }
        .content-page {
            margin-left: 0 !important;
            padding: 0 !important;
        }
        .card {
            border: none !important;
            box-shadow: none !important;
        }
        .container-xxl {
            max-width: 100% !important;
            width: 100% !important;
        }
    }
</style>

<div class="content">
    <div class="container-xxl">
        <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column no-print">
            <div class="flex-grow-1">
                <h4 class="fs-18 fw-semibold m-0">Review Details</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">Review Information</h5>
                        <button onclick="window.print()" class="btn btn-danger btn-sm"><i class="fa-solid fa-print"></i> Print Review / PDF</button>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-sm-3 fw-bold">Name:</div>
                            <div class="col-sm-9">{{ $review->name }}</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3 fw-bold">Position:</div>
                            <div class="col-sm-9">{{ $review->position }}</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3 fw-bold">Image:</div>
                            <div class="col-sm-9">
                                <img src="{{ asset($review->image) }}" style="width:150px; height:150px; border-radius: 10px;">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3 fw-bold">Message:</div>
                            <div class="col-sm-9">
                                <p style="white-space: pre-wrap;">{{ $review->message }}</p>
                            </div>
                        </div>
                        <hr class="no-print">
                        <div class="text-end no-print back-to-list">
                            <a href="{{ route('all_review') }}" class="btn btn-secondary">Back to List</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
