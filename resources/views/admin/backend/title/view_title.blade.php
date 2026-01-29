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
                        <h5 class="card-title mb-0">All Titles</h5>
                        <div>
                            <a href="{{ route('add.title') }}" class="btn btn-primary btn-sm">Add Title</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="datatable" class="table table-bordered dt-responsive table-responsive nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title 1</th>
                                    <th>Title 2</th>
                                    <th>Title 3</th>
                                    <th>Title 4</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($allTitlesData as $key => $titleRecord)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $titleRecord->title1 ?? 'N/A' }}</td>
                                        <td>{{ $titleRecord->title2 ?? 'N/A' }}</td>
                                        <td>{{ $titleRecord->title3 ?? 'N/A' }}</td>
                                        <td>{{ $titleRecord->title4 ?? 'N/A' }}</td>
                                        <td>
                                            <a href="{{ route('edit.title', $titleRecord->id) }}" class="btn btn-success btn-sm" title="Edit"><i class="fa-solid fa-pen"></i></a>
                                            <a href="{{ route('delete.title', $titleRecord->id) }}" class="btn btn-danger btn-sm" id="delete" title="Delete"><i class="fa-solid fa-trash"></i></a>
                                            <a href="{{ route('preview.title', $titleRecord->id) }}" class="btn btn-warning btn-sm" title="View Detail"><i class="fa-solid fa-eye"></i></a>
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
