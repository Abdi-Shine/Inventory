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
                    <h5 class="card-title mb-0">Multi Image All</h5>
                    <div>
                        <a href="{{ route('add.multi.image') }}" class="btn btn-primary btn-sm">Add Multi Image</a>
                    </div>
                </div><!-- end card header -->
                <div class="card-body">
                    <table id="datatable" class="table table-bordered dt-responsive table-responsive nowrap">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>About Title</th>
                                <th>description</th>
                                <th>About Multi Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($allMultiImage as $item)
                            <tr>
                                <td> {{ $loop->iteration }} </td>
                                <td> {{ $item->title }} </td>
                                <td> {{ \Illuminate\Support\Str::limit($item->description, 50) }} </td>
                                <td> <img src="{{ asset($item->image) }}" style="width: 60px; height: 50px;"> </td>
                                <td>
                                    <a href="{{ route('edit.multi.image',$item->id) }}" class="btn btn-info sm" title="Edit Data">  <i class="fas fa-edit"></i> </a>
                                    <a href="{{ route('delete.multi.image',$item->id) }}" class="btn btn-danger sm" title="Delete Data" id="delete">  <i class="fas fa-trash-alt"></i> </a>
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
