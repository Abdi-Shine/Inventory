@extends('admin.admin_master')    
@section('admin')
<div class="content">
    <div class="container-xxl">
        <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
            <div class="page-title-box">
                <h4 class="page-title">Edit Title</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Title Information</h5>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('update_title') }}">
                            @csrf
                            <input type="hidden" name="id" value="{{ $title->id }}">

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="title1" class="form-label">Title 1</label>
                                        <input type="text" class="form-control" id="title1" name="title1" value="{{ old('title1', $title->title1) }}">
                                        @error('title1')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="description1" class="form-label">Description 1</label>
                                        <input type="text" class="form-control" id="description1" name="description1" value="{{ old('description1', $title->description1) }}">
                                        @error('description1')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="title2" class="form-label">Title 2</label>
                                        <input type="text" class="form-control" id="title2" name="title2" value="{{ old('title2', $title->title2) }}">
                                        @error('title2')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="title3" class="form-label">Title 3</label>
                                        <input type="text" class="form-control" id="title3" name="title3" value="{{ old('title3', $title->title3) }}">
                                        @error('title3')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="description3" class="form-label">Description 3</label>
                                        <input type="text" class="form-control" id="description3" name="description3" value="{{ old('description3', $title->description3) }}">
                                        @error('description3')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="title4" class="form-label">Title 4</label>
                                        <input type="text" class="form-control" id="title4" name="title4" value="{{ old('title4', $title->title4) }}">
                                        @error('title4')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="description4" class="form-label">Description 4</label>
                                        <input type="text" class="form-control" id="description4" name="description4" value="{{ old('description4', $title->description4) }}">
                                        @error('description4')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="text-end">
                                <a href="{{ route('view_title') }}" class="btn btn-secondary">Cancel</a>
                                <button type="submit" class="btn btn-primary">Update Title</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
