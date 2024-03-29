@extends('layouts.app')
@section('content')<!-- ======= Intro Section ======= -->
<div class="intro intro-carousel swiper position-relative">

<div class="swiper-wrapper">

  <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets/images/img/slide-1.jpg)">
    <div class="overlay overlay-a"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <div class="intro-body">
                <p class="intro-title-top">Eko, Island
                  <br> 78345
                </p>
                <h1 class="intro-title mb-4 ">
                  <span class="color-b">LAGOS </span> Mount
                  <br> Olive Road Two
                </h1>
                <p class="intro-subtitle intro-price">
                  <a href="#"><span class="price-a">rent | $ 12.000</span></a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets/images/img/slide-2.jpg)">
    <div class="overlay overlay-a"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <div class="intro-body">
                <p class="intro-title-top">Doral, Florida
                  <br> 78345
                </p>
                <h1 class="intro-title mb-4">
                  <span class="color-b">204 </span> Rino
                  <br> Venda Road Five
                </h1>
                <p class="intro-subtitle intro-price">
                  <a href="#"><span class="price-a">rent | $ 12.000</span></a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets/images/img/slide-3.jpg)">
    <div class="overlay overlay-a"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <div class="intro-body">
                <p class="intro-title-top">Doral, Florida
                  <br> 78345
                </p>
                <h1 class="intro-title mb-4">
                  <span class="color-b">204 </span> Alira
                  <br> Roan Road One
                </h1>
                <p class="intro-subtitle intro-price">
                  <a href="#"><span class="price-a">rent | $ 12.000</span></a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="swiper-pagination"></div>
</div><!-- End Intro Section -->

<main id="main">

<!-- ======= Services Section ======= -->
<section class="section-services section-t8">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="title-wrap d-flex justify-content-between">
          <div class="title-box">
            <h2 class="title-a">Our Services</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="card-box-c foo">
          <div class="card-header-c d-flex">
            <div class="card-box-ico">
              <span class="bi bi-cart"></span>
            </div>
            <div class="card-title-c align-self-center">
              <h2 class="title-c">Lifestyle</h2>
            </div>
          </div>
          <div class="card-body-c">
            <p class="content-c">
              Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa,
              convallis a pellentesque
              nec, egestas non nisi.
            </p>
          </div>
          <div class="card-footer-c">
            <a href="#" class="link-c link-icon">Read more
              <span class="bi bi-chevron-right"></span>
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card-box-c foo">
          <div class="card-header-c d-flex">
            <div class="card-box-ico">
              <span class="bi bi-calendar4-week"></span>
            </div>
            <div class="card-title-c align-self-center">
              <h2 class="title-c">Loans</h2>
            </div>
          </div>
          <div class="card-body-c">
            <p class="content-c">
              Nulla porttitor accumsan tincidunt. Curabitur aliquet quam id dui posuere blandit. Mauris blandit
              aliquet elit, eget tincidunt
              nibh pulvinar a.
            </p>
          </div>
          <div class="card-footer-c">
            <a href="#" class="link-c link-icon">Read more
              <span class="bi bi-calendar4-week"></span>
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card-box-c foo">
          <div class="card-header-c d-flex">
            <div class="card-box-ico">
              <span class="bi bi-card-checklist"></span>
            </div>
            <div class="card-title-c align-self-center">
              <h2 class="title-c">Sell</h2>
            </div>
          </div>
          <div class="card-body-c">
            <p class="content-c">
              Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa,
              convallis a pellentesque
              nec, egestas non nisi.
            </p>
          </div>
          <div class="card-footer-c">
            <a href="#" class="link-c link-icon">Read more
              <span class="bi bi-chevron-right"></span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- End Services Section -->

<!-- ======= Recent Searched Properties Section ======= -->
<section class="section-property section-t8">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="title-wrap d-flex justify-content-between">
          <div class="title-box">
            <h2 class="title-a">Recent Searched Properties</h2>
          </div>
          <div class="title-link">
            <a href="property-grid.html">View All
              <span class="bi bi-chevron-right"></span>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div id="property-carousel" class="swiper">
      <div class="swiper-wrapper">

        <div class="carousel-item-b swiper-slide">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <img src="assets/images/img/property-6.jpg" alt="" class="img-a img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <a href="property-single.html">206 Mount
                      <br /> Olive Road Two</a>
                  </h2>
                </div>
                <div class="card-body-a">
                  <div class="price-box d-flex">
                    <span class="price-a">rent | $ 12.000</span>
                  </div>
                  <a href="#" class="link-a">Click here to view
                    <span class="bi bi-chevron-right"></span>
                  </a>
                </div>
                <div class="card-footer-a">
                  <ul class="card-info d-flex justify-content-around">
                    <li>
                      <h4 class="card-info-title">Area</h4>
                      <span>340m
                        <sup>2</sup>
                      </span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Beds</h4>
                      <span>2</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Baths</h4>
                      <span>4</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Garages</h4>
                      <span>1</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div><!-- End carousel item -->

        <div class="carousel-item-b swiper-slide">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <img src="assets/images/img/property-3.jpg" alt="" class="img-a img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <a href="property-single.html">157 West
                      <br /> Central Park</a>
                  </h2>
                </div>
                <div class="card-body-a">
                  <div class="price-box d-flex">
                    <span class="price-a">rent | $ 12.000</span>
                  </div>
                  <a href="property-single.html" class="link-a">Click here to view
                    <span class="bi bi-chevron-right"></span>
                  </a>
                </div>
                <div class="card-footer-a">
                  <ul class="card-info d-flex justify-content-around">
                    <li>
                      <h4 class="card-info-title">Area</h4>
                      <span>340m
                        <sup>2</sup>
                      </span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Beds</h4>
                      <span>2</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Baths</h4>
                      <span>4</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Garages</h4>
                      <span>1</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div><!-- End carousel item -->

        <div class="carousel-item-b swiper-slide">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <img src="assets/images/img/property-7.jpg" alt="" class="img-a img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <a href="property-single.html">245 Azabu
                      <br /> Nishi Park let</a>
                  </h2>
                </div>
                <div class="card-body-a">
                  <div class="price-box d-flex">
                    <span class="price-a">rent | $ 12.000</span>
                  </div>
                  <a href="property-single.html" class="link-a">Click here to view
                    <span class="bi bi-chevron-right"></span>
                  </a>
                </div>
                <div class="card-footer-a">
                  <ul class="card-info d-flex justify-content-around">
                    <li>
                      <h4 class="card-info-title">Area</h4>
                      <span>340m
                        <sup>2</sup>
                      </span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Beds</h4>
                      <span>2</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Baths</h4>
                      <span>4</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Garages</h4>
                      <span>1</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div><!-- End carousel item -->

        <div class="carousel-item-b swiper-slide">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <img src="assets/images/img/property-10.jpg" alt="" class="img-a img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <a href="property-single.html">204 Montal
                      <br /> South Bela Two</a>
                  </h2>
                </div>
                <div class="card-body-a">
                  <div class="price-box d-flex">
                    <span class="price-a">rent | $ 12.000</span>
                  </div>
                  <a href="property-single.html" class="link-a">Click here to view
                    <span class="bi bi-chevron-right"></span>
                  </a>
                </div>
                <div class="card-footer-a">
                  <ul class="card-info d-flex justify-content-around">
                    <li>
                      <h4 class="card-info-title">Area</h4>
                      <span>340m
                        <sup>2</sup>
                      </span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Beds</h4>
                      <span>2</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Baths</h4>
                      <span>4</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Garages</h4>
                      <span>1</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div><!-- End carousel item -->
      </div>
    </div>
    <div class="propery-carousel-pagination carousel-pagination"></div>

  </div>
</section><!-- End Recent Searched Properties Section -->

<!-- ======= Recent Post Section ======= -->
<section class="section-news section-t8">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="title-wrap d-flex justify-content-between">
          <div class="title-box">
            <h2 class="title-a">Recent Post</h2>
          </div>
          <div class="title-link">
            <a href="blog-grid.html">View All
              <span class="bi bi-chevron-right"></span>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div id="news-carousel" class="swiper">
      <div class="swiper-wrapper">

        <div class="carousel-item-c swiper-slide">
          <div class="card-box-b card-shadow news-box">
            <div class="img-box-b">
              <img src="assets/images/img/post-2.jpg" alt="" class="img-b img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-header-b">
                <div class="card-category-b">
                  <a href="#" class="category-b">House</a>
                </div>
                <div class="card-title-b">
                  <h2 class="title-2">
                    <a href="blog-single.html">House is comming
                      <br> new</a>
                  </h2>
                </div>
                <div class="card-date">
                  <span class="date-b">18 Sep. 2017</span>
                </div>
              </div>
            </div>
          </div>
        </div><!-- End carousel item -->

        <div class="carousel-item-c swiper-slide">
          <div class="card-box-b card-shadow news-box">
            <div class="img-box-b">
              <img src="assets/images/img/post-5.jpg" alt="" class="img-b img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-header-b">
                <div class="card-category-b">
                  <a href="#" class="category-b">Travel</a>
                </div>
                <div class="card-title-b">
                  <h2 class="title-2">
                    <a href="blog-single.html">Travel is comming
                      <br> new</a>
                  </h2>
                </div>
                <div class="card-date">
                  <span class="date-b">18 Sep. 2017</span>
                </div>
              </div>
            </div>
          </div>
        </div><!-- End carousel item -->

        <div class="carousel-item-c swiper-slide">
          <div class="card-box-b card-shadow news-box">
            <div class="img-box-b">
              <img src="assets/images/img/post-7.jpg" alt="" class="img-b img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-header-b">
                <div class="card-category-b">
                  <a href="#" class="category-b">Park</a>
                </div>
                <div class="card-title-b">
                  <h2 class="title-2">
                    <a href="blog-single.html">Park is comming
                      <br> new</a>
                  </h2>
                </div>
                <div class="card-date">
                  <span class="date-b">18 Sep. 2017</span>
                </div>
              </div>
            </div>
          </div>
        </div><!-- End carousel item -->

        <div class="carousel-item-c swiper-slide">
          <div class="card-box-b card-shadow news-box">
            <div class="img-box-b">
              <img src="assets/images/img/post-3.jpg" alt="" class="img-b img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-header-b">
                <div class="card-category-b">
                  <a href="#" class="category-b">Travel</a>
                </div>
                <div class="card-title-b">
                  <h2 class="title-2">
                    <a href="#">Travel is comming
                      <br> new</a>
                  </h2>
                </div>
                <div class="card-date">
                  <span class="date-b">18 Sep. 2017</span>
                </div>
              </div>
            </div>
          </div>
        </div><!-- End carousel item -->

      </div>
    </div>

    <div class="news-carousel-pagination carousel-pagination"></div>
  </div>
</section><!-- End Recent Post Section -->

<!-- ======= Testimonials Section ======= -->
<section class="section-testimonials section-t8 nav-arrow-a">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="title-wrap d-flex justify-content-between">
          <div class="title-box">
            <h2 class="title-a">Testimonials</h2>
          </div>
        </div>
      </div>
    </div>

    <div id="testimonial-carousel" class="swiper">
      <div class="swiper-wrapper d-inline-flex">

        <div class="carousel-item-a swiper-slide">
          <div class="testimonials-box">
            <div class="col-md-6">
              <div class="col-sm-12 ">
                <div class="testimonial-img">
                  <img src="assets/images/img/testimonial-1.jpg" alt="" class="img-fluid">
                </div>
              </div>
              <div class="col-sm-12 ">
                <div class="testimonial-ico">
                  <i class="bi bi-chat-quote-fill"></i>
                </div>
                <div class="testimonials-content">
                  <p class="testimonial-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, cupiditate ea nam praesentium
                    debitis hic ber quibusdam
                    voluptatibus officia expedita corpori.
                  </p>
                </div>
                <div class="testimonial-author-box">
                  <img src="assets/images/img/mini-testimonial-1.jpg" alt="" class="testimonial-avatar">
                  <h5 class="testimonial-author">Albert & Erika</h5>
                </div>
              </div>
            </div>
          </div>
        </div><!-- End carousel item -->

        <div class="carousel-item-a swiper-slide">
          <div class="testimonials-box ">
            <div class="col-md-6">
              <div class="col-sm-12 ">
                <div class="testimonial-img">
                  <img src="assets/images/img/testimonial-2.jpg" alt="" class="img-fluid">
                </div>
              </div>
              <div class="col-sm-12">
                <div class="testimonial-ico">
                  <i class="bi bi-chat-quote-fill"></i>
                </div>
                <div class="testimonials-content">
                  <p class="testimonial-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, cupiditate ea nam praesentium
                    debitis hic ber quibusdam
                    voluptatibus officia expedita corpori.
                  </p>
                </div>
                <div class="testimonial-author-box">
                  <img src="assets/images/img/mini-testimonial-2.jpg" alt="" class="testimonial-avatar">
                  <h5 class="testimonial-author">Pablo & Emma</h5>
                </div>
              </div>
            </div>
          </div>
        </div><!-- End carousel item -->

      </div>
    </div>
    <div class="testimonial-carousel-pagination carousel-pagination"></div>

  </div>
</section><!-- End Testimonials Section -->

</main><!-- End #main -->
@endsection