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
    <a href="#" class="navbar-brand text-success nav_logo">Baby Library</a>

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
        <li class="nav-item"><a href="#" class="nav-link text-white nav_list">home</a></li>
        <li class="nav-item"><a href="#" class="nav-link text-white nav_list">pages</a></li>
        <li class="nav-item"><a href="#" class="nav-link text-white nav_list">blog</a></li>
        <li class="nav-item"><a href="#" class="nav-link text-white nav_list">contact</a></li>
        <li class="nav-item">
        <a href="#" class="nav-link text-white nav_list">
          My Account
          <i class="fa fa-angle-down"></i>
        </a>
        <ul class="menu_selection">
          <li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
          <li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
        </ul>
      </li>
      </ul>
    </div>
  </div>
</nav>


<!-- Cards and Category -->

<div class="main_slider" style="background-image:url({{asset('frontend/images/slider_2.jpg')}})"></div>

<div class="container area_border">
  <div class="row">
    <div class="col-9 area_border">
    <div class="row">
      <div class="col text-center">
        <div class="section_title">
          <h4>Popular Books</h4>
        </div>
      </div>
    </div>
      <div class="row  d-flex justify-content-around">
      <div class="product-item women">
            <div class="product product_filter">
              <div class="product_image">
                <img src="{{asset('frontend/images/cover.jpg')}}" alt="">
              </div>
              <div class="favorite"></div>
              <div class="product_info">
                <h6 class="product_name"><a href="#" data-toggle="modal" data-target="#product_details">নভেরা বিভুঁইয়ে স্বভূমে - আনা ইসলাম</a></h6>
              </div>
            </div>
            <div class="red_button add_to_cart_button"><a href="#">Add to Cart</a></div>
          </div>

          
          
          <!-- Modals -->
          <div class="modal fade" id="product_details">
          <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

          <div class="product-item women">
            <div class="product product_filter">
              <div class="product_image">
                <img src="{{asset('frontend/images/cover.jpg')}}" alt="">
              </div>
              <div class="favorite"></div>
              <div class="product_info">
                <h6 class="product_name"><a href="#" data-toggle="modal" data-target="#product_details">নভেরা বিভুঁইয়ে স্বভূমে - আনা ইসলাম</a></h6>
              </div>
            </div>
            <div class="red_button add_to_cart_button"><a href="#">Add to Cart</a></div>
          </div>

          <div class="product-item women">
            <div class="product product_filter">
              <div class="product_image">
                <img src="{{asset('frontend/images/cover.jpg')}}" alt="">
              </div>
              <div class="favorite"></div>
              <div class="product_info">
                <h6 class="product_name"><a href="#" data-toggle="modal" data-target="#product_details">নভেরা বিভুঁইয়ে স্বভূমে - আনা ইসলাম</a></h6>
              </div>
            </div>
            <div class="red_button add_to_cart_button"><a href="#">Add to Cart</a></div>
          </div>

          <div class="product-item women">
            <div class="product product_filter">
              <div class="product_image">
                <img src="{{asset('frontend/images/cover.jpg')}}" alt="">
              </div>
              <div class="favorite"></div>
             <div class="product_info">
                <h6 class="product_name"><a href="#" data-toggle="modal" data-target="#product_details">নভেরা বিভুঁইয়ে স্বভূমে - আনা ইসলাম</a></h6>
              </div>
            </div>
            <div class="red_button add_to_cart_button"><a href="#">Add to Cart</a></div>
          </div>
      </div>

      <div class="row  d-flex justify-content-around">
      <div class="product-item women">
            <div class="product product_filter">
              <div class="product_image">
                <img src="{{asset('frontend/images/cover.jpg')}}" alt="">
              </div>
              <div class="favorite"></div>
              <div class="product_info">
                <h6 class="product_name"><a href="#" data-toggle="modal" data-target="#product_details">নভেরা বিভুঁইয়ে স্বভূমে - আনা ইসলাম</a></h6>
              </div>
            </div>
            <div class="red_button add_to_cart_button"><a href="#">Add to Cart</a></div>
          </div>

          <div class="product-item women">
            <div class="product product_filter">
              <div class="product_image">
                <img src="{{asset('frontend/images/cover.jpg')}}" alt="">
              </div>
              <div class="favorite"></div>
              <div class="product_info">
                <h6 class="product_name"><a href="#" data-toggle="modal" data-target="#product_details">নভেরা বিভুঁইয়ে স্বভূমে - আনা ইসলাম</a></h6>
              </div>
            </div>
            <div class="red_button add_to_cart_button"><a href="#">Add to Cart</a></div>
          </div>

          <div class="product-item women">
            <div class="product product_filter">
              <div class="product_image">
                <img src="{{asset('frontend/images/cover.jpg')}}" alt="">
              </div>
              <div class="favorite"></div>
              <div class="product_info">
                <h6 class="product_name"><a href="#" data-toggle="modal" data-target="#product_details">নভেরা বিভুঁইয়ে স্বভূমে - আনা ইসলাম</a></h6>
              </div>
            </div>
            <div class="red_button add_to_cart_button"><a href="#">Add to Cart</a></div>
          </div>

          <div class="product-item women">
            <div class="product product_filter">
              <div class="product_image">
                <img src="{{asset('frontend/images/cover.jpg')}}" alt="">
              </div>
              <div class="favorite"></div>
              <div class="product_info">
                <h6 class="product_name"><a href="#" data-toggle="modal" data-target="#product_details">নভেরা বিভুঁইয়ে স্বভূমে - আনা ইসলাম</a></h6>
              </div>
            </div>
            <div class="red_button add_to_cart_button"><a href="#">Add to Cart</a></div>
          </div>
      </div>

      <div class="row  d-flex justify-content-around">
      <div class="product-item women">
            <div class="product product_filter">
              <div class="product_image">
                <img src="{{asset('frontend/images/cover.jpg')}}" alt="">
              </div>
              <div class="favorite"></div>
              <div class="product_info">
                <h6 class="product_name"><a href="#" data-toggle="modal" data-target="#product_details">নভেরা বিভুঁইয়ে স্বভূমে - আনা ইসলাম</a></h6>
              </div>
            </div>
            <div class="red_button add_to_cart_button"><a href="#">Add to Cart</a></div>
          </div>

          <div class="product-item women">
            <div class="product product_filter">
              <div class="product_image">
                <img src="{{asset('frontend/images/cover.jpg')}}" alt="">
              </div>
              <div class="favorite"></div>
              <div class="product_info">
                <h6 class="product_name"><a href="#" data-toggle="modal" data-target="#product_details">নভেরা বিভুঁইয়ে স্বভূমে - আনা ইসলাম</a></h6>
              </div>
            </div>
            <div class="red_button add_to_cart_button"><a href="#">Add to Cart</a></div>
          </div>

          <div class="product-item women">
            <div class="product product_filter">
              <div class="product_image">
                <img src="{{asset('frontend/images/cover.jpg')}}" alt="">
              </div>
              <div class="favorite"></div>
              <div class="product_info">
                <h6 class="product_name"><a href="#" data-toggle="modal" data-target="#product_details">নভেরা বিভুঁইয়ে স্বভূমে - আনা ইসলাম</a></h6>
              </div>
            </div>
            <div class="red_button add_to_cart_button"><a href="#">Add to Cart</a></div>
          </div>

          <div class="product-item women">
            <div class="product product_filter">
              <div class="product_image">
                <img src="{{asset('frontend/images/cover.jpg')}}" alt="">
              </div>
              <div class="favorite"></div>
              <div class="product_info">
                <h6 class="product_name"><a href="#" data-toggle="modal" data-target="#product_details">নভেরা বিভুঁইয়ে স্বভূমে - আনা ইসলাম</a></h6>
              </div>
            </div>
            <div class="red_button add_to_cart_button"><a href="#">Add to Cart</a></div>
          </div>
      </div>

      <div style="margin-top:15px; margin-left:15%">
        <a href="#about" class="button" style="width:80%; justify-content:center"><i class="uil uil-user button_icon"></i>
          More about me
        </a>
      </div>      
    </div>


    <div class="col-3 area_border" >
      <div class="row d-flex justify-content-around">
      <div class="women">
            <div class="product product_filter">
              <div class="product_image">
                <img src="{{asset('frontend/images/cover.jpg')}}" alt="">
              </div>
              <div class="favorite"></div>
              <div class="product_info">
                <h6 class="product_name"><a href="#" data-toggle="modal" data-target="#product_details"  >নভেরা বিভুঁইয়ে স্বভূমে - আনা ইসলাম</a></h6>
              </div>
            </div>
            <div class="red_button add_to_cart_button"><a href="#">Add to Cart</a></div>
          </div>
      </div>
    </div>
    </div>
</div>

<!-- Videos -->

<div class="container text-center">
    <div class="section_title">
      <h4>Videos</h4>
    </div>

    <div class="row d-flex justify-content-around">
      <div class="col-md-4">
        <img src="{{asset('frontend/images/video_1.jpg')}}" alt="" class="img-fluid">
        <img src="{{asset('frontend/images/play-button.png')}}" class="play-btn" data-toggle="modal" data-target="#exampleModalCenter">
      </div>

      <div class="col-md-4">
        <img src="{{asset('frontend/images/video_2.jpg')}}" alt="" class="img-fluid">
        <img src="{{asset('frontend/images/play-button.png')}}" class="play-btn" data-toggle="modal" data-target="#exampleModalCenter">
      </div>

      <div class="col-md-4">
        <img src="{{asset('frontend/images/video_3.jpg')}}" alt="" class="img-fluid">
        <img src="{{asset('frontend/images/play-button.png')}}" class="play-btn" data-toggle="modal" data-target="#exampleModalCenter">
      </div>
    </div>

    <div class="row d-flex justify-content-around">
      <div class="col-md-4">
        <img src="{{asset('frontend/images/video_1.jpg')}}" alt="" class="img-fluid">
        <img src="{{asset('frontend/images/play-button.png')}}" class="play-btn" data-toggle="modal" data-target="#exampleModalCenter">
      </div>

      <div class="col-md-4">
        <img src="{{asset('frontend/images/video_2.jpg')}}" alt="" class="img-fluid">
        <img src="{{asset('frontend/images/play-button.png')}}" class="play-btn" data-toggle="modal" data-target="#exampleModalCenter">
      </div>

      <div class="col-md-4">
        <img src="{{asset('frontend/images/video_3.jpg')}}" alt="" class="img-fluid">
        <img src="{{asset('frontend/images/play-button.png')}}" class="play-btn" data-toggle="modal" data-target="#exampleModalCenter">
      </div>
    </div>

    <div class="row d-flex justify-content-around">
      <div class="col-md-4">
        <img src="{{asset('frontend/images/video_1.jpg')}}" alt="" class="img-fluid">
        <img src="{{asset('frontend/images/play-button.png')}}" class="play-btn" data-toggle="modal" data-target="#exampleModalCenter">
      </div>

      <div class="col-md-4">
        <img src="{{asset('frontend/images/video_2.jpg')}}" alt="" class="img-fluid">
        <img src="{{asset('frontend/images/play-button.png')}}" class="play-btn" data-toggle="modal" data-target="#exampleModalCenter">
      </div>

      <div class="col-md-4">
        <img src="{{asset('frontend/images/video_3.jpg')}}" alt="" class="img-fluid">
        <img src="{{asset('frontend/images/play-button.png')}}" class="play-btn" data-toggle="modal" data-target="#exampleModalCenter">
      </div>
    </div>
</div>

<div class="modal fade" id="exampleModalCenter">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
     
      <div class="modal-body">
        <video width="100%" autoplay controls loop>
          <source src="{{asset('frontend/videos/1.mp4')}}" type="video/mp4">
        </video>
      </div>
      
    </div>
  </div>
</div>



<!-- Blogs -->

<div class="blogs">
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <div class="section_title">
          <h4>Latest Blogs</h4>
        </div>
      </div>
    </div>
    <div class="row blogs_container">
      <div class="col-lg-4 blog_item_col">
        <div class="blog_item">
          <div class="blog_background" style="background-image:url({{asset('frontend/images/blog_1.jpg')}})"></div>
          <div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
            <h4 class="blog_title">Here are the trends I see coming this fall</h4>
            <span class="blog_meta">by admin | dec 01, 2021</span>
            <a class="blog_more" href="#">Read more</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 blog_item_col">
        <div class="blog_item">
          <div class="blog_background" style="background-image:url({{asset('frontend/images/blog_2.jpg')}})"></div>
          <div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
            <h4 class="blog_title">Here are the trends I see coming this fall</h4>
            <span class="blog_meta">by admin | dec 01, 2021</span>
            <a class="blog_more" href="#">Read more</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 blog_item_col">
        <div class="blog_item">
          <div class="blog_background" style="background-image:url({{asset('frontend/images/blog_3.jpg')}})"></div>
          <div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
            <h4 class="blog_title">Here are the trends I see coming this fall</h4>
            <span class="blog_meta">by admin | dec 01, 2021</span>
            <a class="blog_more" href="#">Read more</a>
          </div>
        </div>
      </div>
    </div>



    <div class="row blogs_container">
      <div class="col-lg-4 blog_item_col">
        <div class="blog_item">
          <div class="blog_background" style="background-image:url({{asset('frontend/images/blog_1.jpg')}})"></div>
          <div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
            <h4 class="blog_title">Here are the trends I see coming this fall</h4>
            <span class="blog_meta">by admin | dec 01, 2021</span>
            <a class="blog_more" href="#">Read more</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 blog_item_col">
        <div class="blog_item">
          <div class="blog_background" style="background-image:url({{asset('frontend/images/blog_2.jpg')}})"></div>
          <div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
            <h4 class="blog_title">Here are the trends I see coming this fall</h4>
            <span class="blog_meta">by admin | dec 01, 2021</span>
            <a class="blog_more" href="#">Read more</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 blog_item_col">
        <div class="blog_item">
          <div class="blog_background" style="background-image:url({{asset('frontend/images/blog_3.jpg')}})"></div>
          <div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
            <h4 class="blog_title">Here are the trends I see coming this fall</h4>
            <span class="blog_meta">by admin | dec 01, 2021</span>
            <a class="blog_more" href="#">Read more</a>
          </div>
        </div>
      </div>
    </div>


    <div class="row blogs_container">
      <div class="col-lg-4 blog_item_col">
        <div class="blog_item">
          <div class="blog_background" style="background-image:url({{asset('frontend/images/blog_1.jpg')}})"></div>
          <div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
            <h4 class="blog_title">Here are the trends I see coming this fall</h4>
            <span class="blog_meta">by admin | dec 01, 2021</span>
            <a class="blog_more" href="#">Read more</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 blog_item_col">
        <div class="blog_item">
          <div class="blog_background" style="background-image:url({{asset('frontend/images/blog_2.jpg')}})"></div>
          <div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
            <h4 class="blog_title">Here are the trends I see coming this fall</h4>
            <span class="blog_meta">by admin | dec 01, 2021</span>
            <a class="blog_more" href="#">Read more</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 blog_item_col">
        <div class="blog_item">
          <div class="blog_background" style="background-image:url({{asset('frontend/images/blog_3.jpg')}})"></div>
          <div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
            <h4 class="blog_title">Here are the trends I see coming this fall</h4>
            <span class="blog_meta">by admin | dec 01, 2021</span>
            <a class="blog_more" href="#">Read more</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Newsletter -->

<div class="newsletter">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="newsletter_text d-flex flex-column justify-content-center align-items-lg-start align-items-md-center text-center">
          <h4>Newsletter</h4>
          <p>Subscribe to our newsletter and get 20% off your first purchase</p>
        </div>
      </div>
      <div class="col-lg-6">
        <form action="post">
          <div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-lg-end justify-content-center">
            <input id="newsletter_email" type="email" placeholder="Your email" required="required" data-error="Valid email is required.">
            <button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">subscribe</button>
          </div>
        </form>
      </div>
    </div>
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