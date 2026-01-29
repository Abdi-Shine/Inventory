@extends('admin.admin_master')    
@section('admin')
<div class="content">
    <div class="container-xxl">
        <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
            <div class="page-title-box">
                <h4 class="page-title">Title Details</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">View Title Information</h5>
                        <div>
                            <a href="{{ route('edit.title', $title->id) }}" class="btn btn-success btn-sm">Edit</a>
                            <a href="{{ route('view.title') }}" class="btn btn-secondary btn-sm">Back to List</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th width="200">ID</th>
                                    <td>{{ $title->id }}</td>
                                </tr>
                                <tr>
                                    <th>Title 1</th>
                                    <td>{{ $title->title1 ?? 'N/A' }}</td>
                                </tr>
                                <tr>
                                    <th>Description 1</th>
                                    <td>{{ $title->description1 ?? 'N/A' }}</td>
                                </tr>
                                <tr>
                                    <th>Title 2</th>
                                    <td>{{ $title->title2 ?? 'N/A' }}</td>
                                </tr>
                                <tr>
                                    <th>Title 3</th>
                                    <td>{{ $title->title3 ?? 'N/A' }}</td>
                                </tr>
                                <tr>
                                    <th>Description 3</th>
                                    <td>{{ $title->description3 ?? 'N/A' }}</td>
                                </tr>
                                <tr>
                                    <th>Title 4</th>
                                    <td>{{ $title->title4 ?? 'N/A' }}</td>
                                </tr>
                                <tr>
                                    <th>Description 4</th>
                                    <td>{{ $title->description4 ?? 'N/A' }}</td>
                                </tr>
                                <tr>
                                    <th>Created At</th>
                                    <td>{{ $title->created_at->format('Y-m-d H:i:s') }}</td>
                                </tr>
                                <tr>
                                    <th>Updated At</th>
                                    <td>{{ $title->updated_at->format('Y-m-d H:i:s') }}</td>
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
