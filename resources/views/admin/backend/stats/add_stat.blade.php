@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
<div class="container-fluid">

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title">Add Stat Page </h4> <br><br>
            
            <form method="post" action="{{ route('store.stat') }}">
                @csrf

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Stat Title</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="title" id="example-text-input" placeholder="e.g. Happy Clients" required>
                </div>
            </div>
            <!-- end row -->

              <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Count Number</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="count" id="example-text-input" placeholder="e.g. 1700" required>
                </div>
            </div>
            <!-- end row -->

             <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Icon Class</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="icon" id="example-text-input" placeholder="e.g. fas fa-users" required>
                     <small>Find icons on FontAwesome</small>
                </div>
            </div>
            <!-- end row -->

<input type="submit" class="btn btn-info waves-effect waves-light" value="Insert Stat Data">
            </form>
             
           
        </div>
    </div>
</div> <!-- end col -->
</div>
 


</div>
</div>
@endsection
