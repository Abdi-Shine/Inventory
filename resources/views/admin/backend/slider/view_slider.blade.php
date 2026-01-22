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
                    <h5 class="card-title mb-0">Slider Datatable</h5>
                    <div>
                        <a href="{{ route('add_slider') }}" class="btn btn-primary btn-sm">Add Slider</a>
                    </div>
                </div><!-- end card header -->
                <div class="card-body">
                    <table id="datatable" class="table table-bordered dt-responsive table-responsive nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>title</th>
                                <th>description</th>
                                <th>image</th>
                                <th>link</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sliders as $key => $item)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->link }}</td>
                                    <td>
                                        <img src="{{ asset($item->image) }}" style="width:70px; height:40px;">
                                    </td>
                                    <td>{{ Str::limit($item->description, 50, '...') }}</td>
                                    <td>
                                        <a href="{{ route('edit_slider', $item->id) }}" class="btn btn-success btn-sm">Edit</a>
                                        <a href="{{ route('delete_slider', $item->id) }}" class="btn btn-danger btn-sm" id="delete">Delete</a>
                                        <a href="{{ route('preview_slider', $item->id) }}" class="btn btn-warning btn-sm" title="View Detail"><i class="fa-solid fa-eye"></i></a>
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