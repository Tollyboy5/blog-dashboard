@extends('admin.admin-layouts.admin-layout')
@section('title','User-Dashboard')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-muted">USER</h1>
        </div><!-- /.col -->
        @if (session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>          
        @endif
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}"><span><i class='fas fa-home'></i></span> HOME</a></li>
            <li class="breadcrumb-item active"><span><i class='far fa-user'></i></span> USERS</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
      <div class="card-body">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th style="width: 10px">ID</th>
              <th>USERS NAME</th>
              <th>IMAGE</th>
              <th>EMAIL</th>
              <th style="width: 40px">EDIT</th>
              <th style="width: 40px">DELETE</th>
            </tr>
          </thead>
          
          <tbody>
            @foreach ($users as $user)            
            <tr>
              <td>{{ $user->id }}</td>
              <td>{{ $user->name }}</td>
              <td>
                <img src="{{ asset('images/user/'.$user->image) }}" width="40px" height="25vh" alt="">
              </td>
              <td>{{ $user->email}}</td>
              <td> <a href="{{ url('admin/edit-user/'.$user->id) }}" class="btn btn-success"><i class='far fa-edit'></i></a></td>
              <td> <a href="{{ url('admin/delete-user/'.$user->id) }}" class="btn btn-danger"><i class='far fa-trash-alt'></i></a></td>
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