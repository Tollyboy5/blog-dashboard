@extends('admin.admin-layouts.admin-layout')
@section('title','Admin-panel')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Category</h1>
        </div><!-- /.col -->
        @if (session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>          
        @endif
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
      <div class="card-body">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th style="width: 10px">ID</th>
              <th>CATEGORY NAME</th>
              <th>IMAGE</th>
              <th>STATUS</th>
              <th style="width: 40px">EDIT</th>
              <th style="width: 40px">DELETE</th>
            </tr>
          </thead>
          
          <tbody>
            @foreach ($category as $cate)            
            <tr>
              <td>{{ $cate->id }}</td>
              <td>{{ $cate->name }}</td>
              <td>
                <img src="{{ asset('images/category/'.$cate->image) }}" width="40px" height="25vh" alt="">
              </td>
              <td>{{ $cate->status==1 ? 'Hidden':'Shown' }}</td>
              <td> <a href="{{ url('admin/edit-category/'.$cate->id) }}" class="btn btn-success">Edit</a></td>
              <td> <a href="{{ url('admin/delete-category/'.$cate->id) }}" class="btn btn-danger">Delete</a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

@endsection