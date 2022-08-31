<!DOCTYPE html>
<html lang="en">
<head>
<title>Ecommerce Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Template Main CSS File -->
   <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/bootstrap.min.css')}}">
  <link href="{{asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/owl.carousel.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/owl.theme.default.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/animate.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/main_styles.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/responsive.css')}}">
  
  
   
  <!-- Template Main JS File -->
  <script src="{{asset('frontend/js/jquery-3.2.1.min.js')}}"></script>
  <script src="{{asset('frontend/js/popper.js')}}"></script>
  <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('frontend/js/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('frontend/js/owl.carousel.js')}}"></script>
  <script src="{{asset('frontend/js/easing.js')}}"></script>
  <script src="{{asset('frontend/js/custom.js')}}"></script>
</head>
<body>

  <div class="super_container">

<!-- Navbar -->

  <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
    <div class="container">
      <a href="{{('/')}}" class="text-uppercase nav_logo">Baby Library</a>

      <button 
        type="button"
        class="navbar-toggler"
        data-bs-target="#navbarNav"
        data-bs-target="collapse"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle Navbar"
        >

        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <div class="mx-auto"></div>
        <ul class="navbar-nav">
          <li class="nav-item"><a href="{{url('/')}}" class="nav-link nav_list" style="color: #e8ddc3">home</a></li>
          <li class="nav-item"><a href="{{url('/blog')}}" class="nav-link nav_list" style="color: #e8ddc3">blog</a></li>
          <li class="nav-item">
            <div class="dropdown show">
              <a class="nav-link dropdown-toggle nav_list" style="color: #e8ddc3" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Free Books
              </a>

              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="{{url('/story_books')}}">Children's Story Books</a>
                <a class="dropdown-item" href="{{url('/')}}">Children's  Colouring Books</a>
                <a class="dropdown-item" href="{{url('/')}}">Children's Educational</a>
              </div>
            </div>
          </li>
          <li class="nav-item"><a href="#" class="nav-link nav_list" style="color: #e8ddc3">contact</a></li>
          <li class="nav-item">
            <div class="dropdown show">
              <a class="nav-link dropdown-toggle nav_list" style="color: #e8ddc3" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                My Account
              </a>

              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="{{url('/admin')}}">Sign In</a>
                <a class="dropdown-item" href="#">Register</a>
              </div>
            </div>
        </li>
        </ul>
      </div>
    </div>
  </nav>


<!-- Cards and Category -->
<div>
  @yield('banner')
</div>

<div class="container" style="margin-top:50px">
  <div class="row">
    <div class="col-8">
      @yield('books')
      @yield('blog')
      @yield('full_post')
    </div>

    <div class="col-4">
      <div class="section_title d-flex justify-content-center categories">
        <h4>Categories</h4>
      </div>

      <div class="border">
        <ul>
          <div class="row d-flex justify-content-center category_item">
            <img src="{{URL::to('frontend/images/play-button.png')}}" alt="" style="width:40px; height:40px;">
            <a style="margin-left:20px; margin-top:10px">Rabindranath</a>
          </div>
          <div class="row d-flex justify-content-center category_item">
            <img src="{{URL::to('frontend/images/play-button.png')}}" alt="" style="width:40px; height:40px;">
            <a style="margin-left:20px; margin-top:10px">Rabindranath</a>
          </div>
          <div class="row d-flex justify-content-center category_item">
            <img src="{{URL::to('frontend/images/play-button.png')}}" alt="" style="width:40px; height:40px;">
            <a style="margin-left:20px; margin-top:10px">Rabindranath</a>
          </div>
          <div class="row d-flex justify-content-center category_item">
            <img src="{{URL::to('frontend/images/play-button.png')}}" alt="" style="width:40px; height:40px;">
            <a style="margin-left:20px; margin-top:10px">Rabindranath</a>
          </div>
          <div class="row d-flex justify-content-center category_item">
            <img src="{{URL::to('frontend/images/play-button.png')}}" alt="" style="width:40px; height:40px;">
            <a style="margin-left:20px; margin-top:10px">Rabindranath</a>
          </div>
          <div class="row d-flex justify-content-center category_item">
            <img src="{{URL::to('frontend/images/play-button.png')}}" alt="" style="width:40px; height:40px;">
            <a style="margin-left:20px; margin-top:10px">Rabindranath</a>
          </div>
          <div class="row d-flex justify-content-center category_item">
            <img src="{{URL::to('frontend/images/play-button.png')}}" alt="" style="width:40px; height:40px;">
            <a style="margin-left:20px; margin-top:10px">Rabindranath</a>
          </div>
          <div class="row d-flex justify-content-center category_item">
            <img src="{{URL::to('frontend/images/play-button.png')}}" alt="" style="width:40px; height:40px;">
            <a style="margin-left:20px; margin-top:10px">Rabindranath</a>
          </div>
        </ul>
      </div>

      <div class="categories_border"></div>

      <div class="border">
        <div class="section_title d-flex justify-content-center categories">
          <h4>Popular Posts</h4>
        </div>
        
        <ul>
          <div class="row d-flex category_item">
            <img src="{{URL::to('frontend/images/play-button.png')}}" alt="" style="width:80px; height:80px; margin-left: 50px">
            <a style="margin-left: 20px; margin-top:10px; margin-right:0px">৫০টি কবিতার বই</a>
          </div>
          <div class="row d-flex category_item">
            <img src="{{URL::to('frontend/images/play-button.png')}}" alt="" style="width:80px; height:80px; margin-left: 50px">
            <a style="margin-left: 20px; margin-top:10px; margin-right:0px">৪৫টি বইয়ের লিঙ্ক এক সাথে</a>
          </div>
          <div class="row d-flex category_item">
            <img src="{{URL::to('frontend/images/play-button.png')}}" alt="" style="width:80px; height:80px; margin-left: 50px">
            <a style="margin-left: 20px; margin-top:10px; margin-right:0px">প্রথম আলো - সুনীল গঙ্গোপাধ্যায়</a>
          </div>
      </div>
    </div>
    </div>
</div>

<!-- Videos -->

<div class="container text-center">
  @yield('videos')
</div>



<!-- Blogs -->

<div class="blogs">
  <div class="container">
    @yield('blogs')
  </div>
</div>

<!-- Newsletter -->

<div class="newsletter">
  <div class="container">
    @yield('newsletter')
  </div>
</div>

<!-- Footer -->

<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="footer_nav_container d-flex flex-sm-row flex-column align-items-center justify-content-lg-start justify-content-center text-center">
          <ul class="footer_nav">
            <li><a href="#">Blog</a></li>
            <li><a href="#">FAQs</a></li>
            <li><a href="#">Contact us</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-center">
          <ul>
            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="footer_nav_container">
          <div class="cr">©2021 All Rights Reserverd. Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#">Jassa</a> &amp; Loved by <a href="https://therichpost.com">Jassa</a></div>
        </div>
      </div>
    </div>
  </div>
</footer>
</div>
</body>

<script>
  var nav = document.querySelector('nav');

  window.addEventListener('scroll', function() {
    if(window.pageYOffset > 100) {
      nav.classList.add('bg-dark', 'shadow');
    }
    else {
      nav.classList.remove('bg-dark', 'shadow');
    }
  })
</script>
</html>