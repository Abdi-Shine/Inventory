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
                <h4 class="fs-18 fw-semibold m-0">preview slider </h4>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">slider Information</h5>
                        <button onclick="window.print()" class="btn btn-danger btn-sm"><i class="fa-solid fa-print"></i> Print slider / PDF</button>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-sm-3 fw-bold">title :</div>
                            <div class="col-sm-9">{{ $slider->title }}</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3 fw-bold">description:</div>
                            <div class="col-sm-9">{{ $slider->description }}</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3 fw-bold">Image:</div>
                            <div class="col-sm-9">
                                <img src="{{ asset($slider->image) }}" style="width:150px; height:150px; border-radius: 10px;">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3 fw-bold">link:</div>
                            <div class="col-sm-9">
                                <p style="white-space: pre-wrap;">{{ $slider->link }}</p>
                            </div>
                        </div>
                        <hr class="no-print">
                        <div class="text-end no-print back-to-list">
                            <a href="{{ route('view_slider') }}" class="btn btn-secondary">Back to List</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
