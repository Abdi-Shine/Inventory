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
                        @foreach ($reviews as $key => $item)
                           <tr>
                             <td>{{ $key + 1 }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->position }}</td>
                            <td>
                                <img src="{{ asset($item->image) }}" style="width:70px; height:40px;">
                            </td>
                            <td>{{ Str::limit($item->message, 50, '...') }}</td>
                            <td>
                              <a href="{{ route('edit_review', $item->id) }}" class="btn btn-success btn-sm">Edit   </a>
                              <a href="{{ route('delete_review', $item->id) }}" class="btn btn-danger btn-sm" id="delete">Delete</a>
                              <a href="{{ route('review.details.pdf', $item->id) }}" class="btn btn-warning btn-sm" title="PDF Detail"><i class="fa fa-file-pdf"></i></a>
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