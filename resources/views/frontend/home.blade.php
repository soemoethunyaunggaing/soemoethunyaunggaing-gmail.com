@extends('frontend.layouts.master')

@section('css')
  <link rel="stylesheet" href="{{asset('css/daterangepicker.css')}}">

@endsection

@section('content')


{{-- <div class="container"> --}}
    
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(45).jpg" alt="First slide" style="height: 350px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(46).jpg" alt="Second slide" style="height: 350px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(47).jpg" alt="Third slide" style="height: 350px;">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    
    <section class="roberto-about-area section-padding-100-0">
        <!-- Hotel Search Form Area -->
        <div class="hotel-search-form-area">
            {{-- <div class="container-fluid"> --}}
                <div class="hotel-search-form">
                    <form action="#" method="post">
                        <div class="col-md-12">
                            
                        <div class="row justify-content-between align-items-end">
                            <div class="col-6 col-md-2 col-lg-4">
                       
                                    <input type="text" name="search" id="search" placeholder="Search Employee Details" class="form-control" />

                            </div>
                            <div class="col-6 col-md-2 col-lg-3">
                              
                                <input type="text" class="form-control float-right" id="reservation">
                                              
                            </div>
                             <div class="col-6 col-md-2 col-lg-3">
                       
                                <input type="text" class="form-control" id="checkIn" name="checkin-date">
                            </div>
                            <div class="col-6 col-md-2">
                                <button type="submit" class="form-control btn roberto-btn w-100"></button>
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>
   

    <section class="roberto-blog-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                        <h6>Our Blog</h6>
                        <h2>Latest News &amp; Event</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Post Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-post-area mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <a href="#" class="post-thumbnail"><img src="{{asset('img/bg-img/2.jpg')}}" alt=""></a>
                        <!-- Post Meta -->
                        <div class="post-meta">
                            <a href="#" class="post-date">Jan 02, 2019</a>
                            <a href="#" class="post-catagory">Event</a>
                        </div>
                        <!-- Post Title -->
                        <a href="#" class="post-title">Learn How To Motivate Yourself</a>
                        <p>How many free autoresponders have you tried? And how many emails did you get through using them?</p>
                        <a href="index.html" class="btn continue-btn"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>

                <!-- Single Post Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-post-area mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <a href="#" class="post-thumbnail"><img src="{{asset('img/bg-img/3.jpg')}}" alt=""></a>
                        <!-- Post Meta -->
                        <div class="post-meta">
                            <a href="#" class="post-date">Jan 02, 2019</a>
                            <a href="#" class="post-catagory">Event</a>
                        </div>
                        <!-- Post Title -->
                        <a href="#" class="post-title">What If Let You Run The Hubble</a>
                        <p>My point here is that if you have no clue for the answers above you probably are not operating a followup.</p>
                        <a href="index.html" class="btn continue-btn"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>

                <!-- Single Post Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-post-area mb-100 wow fadeInUp" data-wow-delay="700ms">
                        <a href="#" class="post-thumbnail"><img src="{{asset('img/bg-img/4.jpg')}}" alt=""></a>
                        <!-- Post Meta -->
                        <div class="post-meta">
                            <a href="#" class="post-date">Jan 02, 2019</a>
                            <a href="#" class="post-catagory">Event</a>
                        </div>
                        <!-- Post Title -->
                        <a href="#" class="post-title">Six Pack Abs The Big Picture</a>
                        <p>Some good steps to take to ensure you are getting what you need out of a autoresponder include…</p>
                        <a href="index.html" class="btn continue-btn"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    
    <section class="roberto-cta-area">
        <div class="container">
            <div class="cta-content bg-img bg-overlay jarallax" style="background-image: url({{asset('img/bg-img/1.jpg')}});">
                <div class="row align-items-center">
                    <div class="col-12 col-md-7">
                        <div class="cta-text mb-50">
                            <h2>Contact us now!</h2>
                            <h6>Contact (+12) 345-678-9999 to book directly or for advice</h6>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 text-right">
                        <a href="#" class="btn roberto-btn mb-50">Contact Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action Area End -->

    <!-- Partner Area Start -->
    <div class="partner-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="partner-logo-content d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="300ms">
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo"><img src="{{asset('img/core-img/p1.png')}}" alt=""></a>
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo"><img src="{{asset('img/core-img/p2.png')}}" alt=""></a>
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo"><img src="{{asset('img/core-img/p3.png')}}" alt=""></a>
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo"><img src="{{asset('img/core-img/p4.png')}}" alt=""></a>
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo"><img src="{{asset('img/core-img/p5.png')}}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
   
  
@endsection

@section('script')
 <script>
     $('#search').click(function (event) {
     var searchedValue = $('#searchInput').val();
     $.ajax({
        url: "flights/mm/places", // Your API search URL
        type: "GET",
        data: {q: searchedValue}, // Your query parameter
        dataType: "json",
        timeout: 5000,
        context: this,
        beforeSend: function () {
            $('#content').fadeTo(500, 0.5);
        },
        success: function (data, textStatus) {
            $('html, body').animate({
                scrollTop: '0px'
            }, 300);
            $('#content').html(data.objects[0].category+'<br>'+data.objects[0].company);
        },
        error: function (x, t, m) {
            if (t === "timeout") {
                alert("Request timeout");
            } else {
                alert('Request error');
            }
        },
        complete: function () {
            $('#content').fadeTo(500, 1);
        }
    });
});
 </script>

@endsection
