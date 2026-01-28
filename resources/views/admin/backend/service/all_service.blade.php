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
                    <h5 class="card-title mb-0">All Services</h5>
                    <div>
                        <a href="{{ route('add.service') }}" class="btn btn-primary btn-sm">Add Service</a>
                    </div>
                </div><!-- end card header -->
                <div class="card-body">
                    <table id="datatable" class="table table-bordered dt-responsive table-responsive nowrap">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Title</th>
                                <th>Short Description</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($services as $key => $item)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ Str::limit($item->short_description, 50, '...') }}</td>
                                    <td>
                                        <img src="{{ asset($item->image) }}" style="width:70px; height:40px;">
                                    </td>
                                    <td>
                                        <a href="{{ route('edit.service', $item->id) }}" class="btn btn-success btn-sm" title="Edit"><i class="fas fa-pen"></i></a>
                                        <a href="{{ route('delete.service', $item->id) }}" class="btn btn-danger btn-sm" id="delete" title="Delete"><i class="fas fa-trash"></i></a>
                                        <a href="{{ route('service.details', $item->slug) }}" target="_blank" class="btn btn-warning btn-sm" title="View Detail"><i class="fas fa-eye"></i></a>
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
