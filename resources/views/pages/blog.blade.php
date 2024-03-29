@extends('layouts.app')
@section('content')
  <main id="main">

<!-- ======= Intro Single ======= -->
<section class="intro-single">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-8">
        <div class="title-single-box">
          <h1 class="title-single">Our Amazing Posts</h1>
          <span class="color-text-a">Blog News</span>
        </div>
      </div>
      <div class="col-md-12 col-lg-4">
        <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="{{url('/')}}">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              News Post
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section><!-- End Intro Single-->

<!-- =======  Blog Post ======= -->
<section class="">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        
        @foreach($posts as $post)
        <div class="card-box-b mb-4 card-shadow news-box">
          <div class="img-box-b">
            <img src="{{ asset('images/post/'.$post->image) }}" alt="" class="img-b img-fluid">
          </div>
          <div class="card-overlay">
            <div class="card-header-b">
              <div class="card-title-b">
                <h2 class="title-2">
                  <a href="{{url('blog-single/'.$post->id)}}">{{$post->name}}</a>
                </h2>
              </div>
              <div class="card-date">
                <span class="date-b">{{$post->updated_at}}</span>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        
        
       
      </div>
      <div class="col-md-4">
       
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <nav class="pagination-a">
          <ul class="pagination justify-content-end">
            <li class="page-item disabled">
              <a class="page-link" href="#" tabindex="-1">
                <span class="bi bi-chevron-left"></span>
              </a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">1</a>
            </li>
            <li class="page-item active">
              <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">3</a>
            </li>
            <li class="page-item next">
              <a class="page-link" href="#">
                <span class="bi bi-chevron-right"></span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</section><!-- End Blog Grid-->

</main><!-- End #main -->
@endsection