@extends('admin.admin-layouts.admin-layout')
@section('title','Post-dashboard')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-muted">POST</h1>
        </div><!-- /.col -->
        @if (session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>          
        @endif
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><span><i class='fas fa-home'></i></span> HOME</a></li>
            <li class="breadcrumb-item active"><span><i class='fab fa-blogger'></i></span> POST</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
      <div class="card-body">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th style="width: 10px">ID</th>
              <th>POST NAME</th>
              <th>IMAGE</th>
              <th>STATUS</th>
              <th style="width: 40px">EDIT </th>
              <th style="width: 40px">DELETE </th>
            </tr>
          </thead>
          
          <tbody>
            @foreach ($posts as $post)            
            <tr>
              <td>{{ $post->id }}</td>
              <td>{{ $post->name }}</td>
              <td>
                <img src="{{ asset('images/post/'.$post->image) }}" width="40px" height="25vh" alt="">
              </td>
              <td>{{ $post->status==1 ? 'Hidden':'Shown' }}</td>
              <td> <a href="{{ url('admin/edit-post/'.$post->id) }}" class="btn btn-secondary"><i class='far fa-edit'></i></a></td>
              <td> <a href="{{ url('admin/delete-post/'.$post->id) }}" class="btn btn-secondary"><i class='far fa-trash-alt'></i></a></td>
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