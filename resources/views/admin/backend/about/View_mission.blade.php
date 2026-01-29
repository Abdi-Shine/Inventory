@extends('admin.admin_master')
@section('admin')
<div class="content">
    <div class="container-xxl">
        <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
            <div class="page-title-box">
                <h4 class="page-title">Mission/Vision Details</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">About Page Information</h5>
                        <div>
                            <a href="{{ route('edit.about.page') }}" class="btn btn-info btn-sm">Edit Mission/Vision</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th width="200">Title</th>
                                    <td>{{ $about->title ?? 'N/A' }}</td>
                                </tr>
                                <tr>
                                    <th>Short Description</th>
                                    <td>{{ $about->short_description ?? 'N/A' }}</td>
                                </tr>
                                <tr>
                                    <th>Long Title</th>
                                    <td>{{ $about->long_title ?? 'N/A' }}</td>
                                </tr>
                                <tr>
                                    <th>Long Description</th>
                                    <td>{{ $about->long_description ?? 'N/A' }}</td>
                                </tr>
                                <tr>
                                    <th>About Image</th>
                                    <td>
                                        <img src="{{ (!empty($about->about_image)) ? asset($about->about_image) : url('upload/no_image.jpg') }}" 
                                             alt="About Image" 
                                             style="width: 100px; height: auto; border-radius: 5px;">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
