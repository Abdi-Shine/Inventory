@extends('admin.admin_master')    
@section('admin')
<div class="content">
     <div class="container-xxl">
    <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
   
    </div>
<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">Review Datatable</h5>
                    <a href="{{ route('add_review') }}" class="btn btn-primary btn-sm">Add Review</a>
                </div><!-- end card header -->
                <div class="card-body">
                    <table id="datatable" class="table table-bordered dt-responsive table-responsive nowrap">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Position</th>
                                <th>Message</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($reviews as $key => $review)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $review->name }}</td>
                                <td>
                                    <img src="{{ (!empty($review->image)) ? url($review->image) : url('upload/no_image.jpg') }}" alt="" style="width: 50px; height: 50px;">
                                </td>
                                <td>{{ $review->position }}</td>
                                <td>{{ Str::limit($review->message, 50) }}</td>
                                <td>
                                    <a href="{{ route('edit_review', $review->id) }}" class="btn btn-info btn-sm" title="Edit Data"><i class="fa fa-edit"></i></a>
                                    <a href="{{ route('delete_review', $review->id) }}" class="btn btn-danger btn-sm" title="Delete Data" id="delete"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
     </div>
</div>
@endsection