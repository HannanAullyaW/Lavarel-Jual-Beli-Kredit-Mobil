@extends('Customer.templateCustomer')


@section('content')
<div class="site-wrap" id="home-section">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>



    <header class="site-navbar site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center position-relative">

          <!-- <div class="col-3 ">
            <div class="site-logo">
              <a href="index.html">Car list</a>
            </div>
          </div> -->

          <div class="col-9  text-right">


            <span class="d-inline-block d-lg-none"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>



            <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
              <ul class="site-menu main-menu js-clone-nav ml-auto ">
                <li><a href="/" class="nav-link">Home</a></li>
                <li><a href="services.html" class="nav-link">Services</a></li>
                <li><a href="cars.html" class="nav-link">Cars</a></li>
                <li><a href="about.html" class="nav-link">About</a></li>
                <li><a href="blog.html" class="nav-link">Blog</a></li>
                <li class="active"><a href="pengajuan" class="nav-link">Contact</a></li>
              </ul>
            </nav>
          </div>


        </div>
      </div>

    </header>

  <div class="ftco-blocks-cover-1">
    <div class="ftco-cover-1 overlay innerpage" style="background-image: url('images/hero_2.jpg')">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-6 text-center">
            <h1>Contact Us</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="site-section bg-light" id="contact-section">
    <div class="container">
      <div class="row justify-content-center text-center">
      <div class="col-7 text-center mb-5">
        <h2>Contact Us Or Use This Form To Rent A Car</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo assumenda, dolorum necessitatibus eius earum voluptates sed!</p>
      </div>
    </div>
      <div class="row">
        <div class="col-lg-8 mb-5" >
          <form action="#" method="post">
            <div class="form-group row">
              <div class="col-md-6 mb-4 mb-lg-0">
                <input type="text" class="form-control" placeholder="First name">
              </div>
              <div class="col-md-6">
                <input type="text" class="form-control" placeholder="First name">
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-12">
                <input type="text" class="form-control" placeholder="Email address">
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-12">
                <textarea name="" id="" class="form-control" placeholder="Write your message." cols="30" rows="10"></textarea>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-6 mr-auto">
                <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Send Message">
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-4 ml-auto">
          <div class="bg-white p-3 p-md-5">
            <h3 class="text-black mb-4">Contact Info</h3>
            <ul class="list-unstyled footer-link">
              <li class="d-block mb-3">
                <span class="d-block text-black">Address:</span>
                <span>34 Street Name, City Name Here, United States</span></li>
              <li class="d-block mb-3"><span class="d-block text-black">Phone:</span><span>+1 242 4942 290</span></li>
              <li class="d-block mb-3"><span class="d-block text-black">Email:</span><span>info@yourdomain.com</span></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
