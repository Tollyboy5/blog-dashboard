@extends('admin.admin-layouts.admin-layout')
@section('title','Add-Category')
@section('content')
<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="text-muted">CATEGORY</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><span><i class='fas fa-home'></i></span>HOME</a></li>
              <li class="breadcrumb-item active"><span><i class='far fa-save'></i></span> ADD CATEGORY</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Category Form</h3>
          </div>
          <!-- /.card-header -->
          @if ($errors->any())
          <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
             <div>{{ $error }}</div>
            @endforeach
          </div>

          @endif
          <form action="{{ url('admin/add-category') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Category Name</label>
                      <input type="text" name="name" class="form-control">
                    </div>
                      <!-- /.form-group -->
                    <div class="form-group">
                        <label>Slug</label>
                        <input type="text" name="slug" class="form-control">
                    </div>

                    <h4>Status Mode</h4>
                      <!-- /.form-group -->
                    <div class="form-group">
                        <label>Navbar Status</label>
                        <input type="checkbox" name="navbar_status" class="form-control">
                    </div>
                      <!-- /.form-group -->
                    <div class="form-group">
                        <label>Status</label>
                        <input type="checkbox" name="status" class="form-control">
                    </div>
                      <!-- /.form-group -->
                      <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                      <!-- /.form-group -->
                  </div>
                  <!-- /.col -->
                  <div class="col-md-6">
                    <h4>Meta Data</h4>
                    <div class="form-group">
                        <label>Meta Title</label>
                        <input type="text" name="meta_title" class="form-control">
                    </div>
                      <!-- /.form-group -->
                      <div class="form-group">
                        <label>Meta Description</label>
                        <input type="text" name="meta_description" class="form-control">
                    </div>
                      <!-- /.form-group -->
                      <div class="form-group">
                        <label>Meta Keyword</label>
                        <input type="text" name="meta_keyword" class="form-control">
                    </div>
                      <!-- /.form-group -->
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" name="description" class="form-control">
                    </div>
                      <!-- /.form-group -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
                <div class="col-md-6">
                    <button type="submit" class="btn btn-secondary">Submit</button>
                </div>
              </div>
          </form>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection