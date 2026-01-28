@extends('admin.admin_master')
@section('admin')

<div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Contact Messages</h4>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title">All Contact Messages</h4>
                                        
                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>Sn</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Message</th>
                                                <th>Status</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>


                                            <tbody>
                                            	@php($i = 1)
                                            	@foreach($contact as $item)
                                            <tr>
                                                <td> {{ $i++}} </td>
                                                <td> {{ $item->name }} </td>
                                                <td> {{ $item->email }} </td>
                                                <td> {{ Str::limit($item->message, 50) }} </td>
                                                <td>
                                                    @if($item->status == '1')
                                                    <span class="badge bg-success">Replied</span>
                                                    @else
                                                    <span class="badge bg-danger">Pending</span>
                                                    @endif
                                                </td>
                                                <td> {{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }} </td>
                                                <td>
   <a href="{{ route('edit_answer', $item->id) }}" class="btn btn-info sm" title="Reply Data">  <i class="fas fa-edit"></i> </a>
   <a href="{{ route('delete_answer', $item->id) }}" class="btn btn-danger sm" title="Delete Data" id="delete">  <i class="fas fa-trash-alt"></i> </a>
                                                </td>
                                               
                                            </tr>
                                            @endforeach
                                            
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                        
                     
                        
                    </div> <!-- container-fluid -->
                </div>

@endsection
