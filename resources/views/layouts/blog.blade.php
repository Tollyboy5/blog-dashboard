@include('layouts.header')
<main class="main">

    <!-- Page Title -->
    <div class="page-title">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">@yield('page')</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="/">Home</a></li>
            <li class="current">@yield('page')</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->


    {{-- @include('layouts.navigation') --}}
    @yield('content')
</main>

    @include('layouts.footer')
  
  