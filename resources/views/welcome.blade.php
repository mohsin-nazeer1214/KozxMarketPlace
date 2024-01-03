<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

  <title>
Kozx  </title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{url('front_assets/css/bootstrap.css')}}" />

  <!-- Custom styles for this template -->
  <link href="{{url('front_assets/css/style.css')}}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{url('front_assets/css/responsive.css')}}" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <style>
    .form{
    position: relative;
    display:flex;
    align-items:center;
}
.scroll-arrow {
    text-align: center;
    margin-top: 20px; /* Adjust the margin as needed */
  }

  .scroll-arrow img {
    width: 50px; /* Adjust the width as needed */
    height: 50px; /* Adjust the height as needed */
  }

.form .fa-search{

  position: absolute;
    top: 50%;
    left: 43px;
    color: #000;
    transform: translate(-50%, -50%);
    font-size: 1.3rem;

}

.form span{

    position: absolute;
    right: 118px;
    top: 50%;
    padding: 2px;
    /* border-left: 1px solid #d1d5db; */
    transform: translate(-50%, -50%);
    font-size: 1.3rem;


}

.left-pan{
    padding-left: 7px;
}

.left-pan i{
   
   padding-left: 10px;
}

.form-input{

    height: 55px;
    text-indent: 33px;
    border-radius: 10px;
}

.form-input:focus{

    box-shadow: none;
    border:none;
}
.custom-btn-search{
    border: none;
    outline: none;
    padding: 13px 50px;
    font-size: 1.1rem;
    font-weight: 700;
}
.account-btn{
    background-color: #324AA0;
    color: #fff;
}
.containersearch{
  background-image: url('images/1702928564_cat6.jpg'); /* Replace 'path/to/your/image.jpg' with the actual path to your background image */
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  
  width: 1600;
  height: 70vh;
}

.form {
 /* Adjust the alpha value to control the background opacity */
  padding: 20px;
  border-radius: 10px;
}
.upper-text {
  text-align: center;
  margin-bottom: 90px; /* Adjust the margin as needed */
  color: white; /* Set the color of the text */
}
.form i {
  margin-right: 10px;
}

.form-input {
  width: 90%;
  height:70px;
}

.left-pan {
  cursor: pointer;
}
.titleweb{
  color:white;
  text-align:center;
  font-size:4rem;
  font-weight:900;
}
.login-btn{
  background: #324AA0;
  padding: 6px 10px;
  color: #fff !important;
}
.container-row {
    margin-top: 1%;
    display: flex;
  }

  .card-outer,.slideFirst,.card-outerSecond,.card-outerThird{
    overflow-x: scroll !important;
  }

  .card-outer::-webkit-scrollbar{
    display:none;
  }
  .slideFirst::-webkit-scrollbar{
    display:none;
  }
  .card-outerSecond::-webkit-scrollbar{
    display:none;
  }
  .card-outerThird::-webkit-scrollbar{
    display:none;
  }

  .image-container {
    width: 500px; /* Set your preferred width */
    height: 120px; /* Set your preferred height */
    border: 2px solid #ccc; /* Optional border for clarity */
    margin-right: 35px; /* Set the margin between image containers */
    box-sizing: border-box; /* Include borders and padding in the width and height */
    display: flex;
    justify-content: center; /* Center the image horizontally */
    align-items: center; /* Center the image vertically */
    border: 3px solid gray;
    padding: 10px;
    margin-left: 10px;
    margin-right: 10px;
  }
  .image-container img{
    width:150px;
    aspect-ratio: auto 150 / 150;
    object-fit:cover;
  }
  .third-sec-h{
    font-size: 2.8rem;
    font-weight: 700;
  }
  .third-sec-btn{
    outline: none;
    border: 2px solid #000;
    padding: 5px 35px;
    font-weight: 700;
}
.boxContainer{
  overflow-x: scroll !important;
}
.boxContainer::-webkit-scrollbar{
    display:none;
}
.prodName{
  margin:10px 0;
  border-top-width: 1px;
    border-top-color: gray;
    border-top-style: solid;
    border-bottom-width: 1px;
    border-bottom-color: gray;
    border-bottom-style: solid;
    padding:5px 0px;
}
.borderStyle{
  border-right-width: 2px;
    border-right-color: #000;
    border-right-style: solid;
}
.card-slider{
    border: 1px solid #000;
    border-radius: 50%;
    padding: 13px;
    width: 40px;
    height: auto;
    display: flex;
    justify-content: center;
    align-items: center;
}
.custom-subhead{
    font-size: 2rem;
    font-weight: 900;
    text-align:center;
}
.custom-h-b{
    border: 3px solid #324AA0;
    width: 130px;
}
  @media (max-width: 768px) {
    .image-container {
      width: 38%; /* Adjust width for smaller screens, two containers per row */
      margin-right: 2%; /* Adjust margin for spacing between containers */
      margin-bottom: 2%; /* Adjust margin for vertical spacing */
    }
    .hero_search {
      width:320px !important;
    }
    .form{
      flex-direction: column !important;
      justify-content: center !important;
      align-items: center !important;
      gap:15px !important;
    }
    .form .fa-search {
      top: 30% !important;
      left: 25px !important;
    }
    .form span{
      right: -7px !important;
      top: 31% !important;
    }
    .third-sec-h{
        font-size: 1.7rem;
        text-align: center !important;
    }
    .resp-para{
        text-align: center !important;
        font-size: 14px;
    }
    .resp-car-btn{
        justify-content: center !important;
    }
    .underline-text {
    text-decoration: underline;
  }
  .titleweb{
    font-size: 2.3rem;
  }
   .custom-subhead{
    font-size:1.5rem;
   } 
   .resp-explore-btn{
    justify-content:center !important;
   }
   .borderStyle{
    border:none;
   }
  }
  </style>
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
    
        <a class="navbar-brand" href="">
        
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""></span>
        </button>
        

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <a class="navbar-brand" href="index.html">
          <img src="{{url('front_assets/images/logo.jpeg')}}" alt="Giftos Logo">
        </a>
          <ul class="navbar-nav  ">
            <li class="nav-item active">
              <a class="nav-link" href="">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">
                Products
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">
               Category
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">
                Blogs
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact Us</a>
            </li>
          </ul>
          <div class="user_option">
            <a href="{{url('login')}}" class="login-btn">
              <i class="fa fa-user" aria-hidden="true"></i>
              <span>
                Login
              </span>
            </a>
            <a href="">
              <i class="fa fa-shopping-bag" aria-hidden="true"></i>
            </a>
            <form class="form-inline ">
              <button class="btn nav_search-btn" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </form>
          </div>
        </div>
      </nav>
    </header>
    <!-- end header section -->
    <!-- slider section -->
   
<div class="containersearch">
  <div class="row h-100 d-flex justify-content-center align-items-center">
    <div class="col-md-6">
    <h1 class="titleweb">Kozx Market</h1>
    <div class="text-white custom-subhead mb-3">Buy Luxuious things</div>
      <div class="form">
        <div>
          <i class="fa fa-search"></i>
          <input type="text" class="form-control form-input hero_search" placeholder="Search anything...">
          <span class="left-pan"><i class="fa fa-microphone"></i></span>
        </div>
        <div class="ml-4"><button class="custom-btn-search account-btn">Search</button></div>
      </div>
    </div>
  </div>
</div>


    <!-- end slider section -->
  </div>
  <!-- end hero area -->

  <!-- shop section -->
<div class="container">
  <div style="margin-top: 5%;" class="heading_container heading_center">
    <h2>
      Shops By Brands  
    </h2>
    <div class="d-flex justify-content-center align-items-center custom-h-b mb-3"></div>
  </div>


  <div class="container-row slideFirst">
    <div class="image-container">
      <img src="{{url('front_assets/images/logo.jpeg')}}" alt="Image 1">
    </div>
    <div class="image-container">
      <img src="{{url('front_assets/images/logo.jpeg')}}" alt="Image 2">
    </div>
    <div class="image-container">
      <img src="{{url('front_assets/images/logo.jpeg')}}" alt="Image 3">
    </div>
    <div class="image-container">
      <img src="{{url('front_assets/images/logo.jpeg')}}" alt="Image 3">
    </div>
    <div class="image-container">
      <img src="{{url('front_assets/images/logo.jpeg')}}" alt="Image 3">
    </div>
    <div class="image-container">
      <img src="{{url('front_assets/images/logo.jpeg')}}" alt="Image 3">
    </div>
    <div class="image-container">
      <img src="{{url('front_assets/images/logo.jpeg')}}" alt="Image 3">
    </div>
    <div class="image-container">
      <img src="{{url('front_assets/images/logo.jpeg')}}" alt="Image 3">
    </div>
    <div class="image-container">
      <img src="{{url('front_assets/images/logo.jpeg')}}" alt="Image 3">
    </div>
    <div class="image-container">
      <img src="{{url('front_assets/images/logo.jpeg')}}" alt="Image 3">
    </div>
    <div class="image-container">
      <img src="{{url('front_assets/images/logo.jpeg')}}" alt="Image 3">
    </div>
  
  <!-- Add more containers as needed -->
  </div>
</div>


  <div class="container">
      <div class="my-5 ">
          <div class="row" style="background: #F4F4F4;">
              <div class="col-12 col-md-6 col-lg-6 px-0">
                  <img src="https://www.lamborghini.com/sites/it-en/files/DAM/lamborghini/facelift_2019/model_detail/menu/09_09/menu_asterion.png" alt="" class="w-100">
              </div>
              <div class="col-12 col-md-6 col-lg-6 d-flex p-5 flex-column">
                  <div class="text-end third-sec-h"style="text-align:end;">Buy and Sell Your Supercar online</div>
                  <div class="text-end py-3 resp-para" style="color: #000; font-weight: 500;text-align:end;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reprehenderit aliquid eaque nihil minus</div>
                  <div class="d-flex justify-content-end resp-car-btn">
                      <button class="third-sec-btn">Explore <i class="fa-solid fa-arrow-right"></i></button>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <section class="shop_section layout_padding">
    <div class="container" style="padding-left:0;padding-right:0;">
      <div class="heading_container heading_center">
        <h2>
          Collectibles  
        </h2>
        <div class="d-flex justify-content-center align-items-center custom-h-b mb-3"></div>
      </div>
      <div class="d-flex">
          <div class="d-flex justify-content-center align-items-center" style="margin-right:7px;">
              <div class="card-slider card-arrow-left">
                <i class="fa-solid fa-arrow-left"></i>
              </div>
          </div>
        <div class="container-row card-outer"style="gap:20px;">
          @foreach($products as $product)
            <div class="">
              <div class="box">
                <a href="{{ url('product.show', $product->id) }}">
                  <div class="img-box">
                    @if($product->image)
                      <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}">
                    @else
                    <img src="images/default-image.jpg" style="width: 300px; height: 400px;" alt="Default Image">
                    @endif
                  </div>
                  <div class="detail-box">
                    <h6 class="prodName">{{ $product->name }}</h6>
                    <div class="d-flex justify-content-between">
                      <h6 style="color:gray;">
                        Price
                        <span style="color:gray;">BTC{{ $product->price }}</span>
                      </h6>
                      <span><i class="fa-regular fa-heart"></i></span>
                    </div>
                    <div class="d-flex justify-content-end"style="border-top-color: #000;border-top-width: 1px;border-top-style: solid;color:#324AA0;padding:7px 0px;">see all...</div>
                  </div>
                  @if($product->created_at >= now()->subDays(7))
                    <div class="new">
                      <span>New</span>
                    </div>
                  @endif
                </a>
              </div>
            </div>
          @endforeach
        </div>
          <div class="d-flex justify-content-center align-items-center" style="margin-left:7px;">
              <div class="card-slider card-arrow-right">
                  <i class="fa-solid fa-arrow-right"></i>
              </div>
          </div>
      </div>
      <div class="d-flex justify-content-end mt-4 resp-explore-btn" style="margin-right:2.5rem;">
        <button class="third-sec-btn">Explore <i class="fa-solid fa-arrow-right"></i></button>
      </div>
    </div>
  
  </section>

  <section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Vehicles  
        </h2>
        <div class="d-flex justify-content-center align-items-center custom-h-b mb-3"></div>
      </div>
      <div class="d-flex">
        <div class="d-flex justify-content-center align-items-center" style="margin-right:7px;">
              <div class="card-slider cardSecond-arrow-left">
                <i class="fa-solid fa-arrow-left"></i>
              </div>
          </div>
        <div class="container-row card-outerSecond"style="gap:20px;">
          @foreach($vehcles as $product)
            <div class="">
              <div class="box">
                <a href="{{ url('product.show', $product->id) }}">
                  <div class="img-box">
                    @if($product->image)
                      <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}">
                    @else
                    <img src="images/default-image.jpg" style="width: 300px; height: 400px;" alt="Default Image">
                    @endif
                  </div>
                  <div class="detail-box">
                    <h6 class="prodName">{{ $product->name }}</h6>
                    <div class="d-flex justify-content-between">
                      <h6 style="color:gray;">
                        Price
                        <span style="color:gray;">BTC{{ $product->price }}</span>
                      </h6>
                      <span><i class="fa-regular fa-heart"></i></span>
                    </div>
                    <div class="d-flex justify-content-end"style="border-top-color: #000;border-top-width: 1px;border-top-style: solid;color:#324AA0;padding:7px 0px;">see all...</div>
                  </div>
                  @if($product->created_at >= now()->subDays(7))
                    <div class="new">
                      <span>New</span>
                    </div>
                  @endif
                </a>
              </div>
            </div>
          @endforeach
        </div>
        <div class="d-flex justify-content-center align-items-center" style="margin-left:7px;">
              <div class="card-slider cardSecond-arrow-right">
                  <i class="fa-solid fa-arrow-right"></i>
              </div>
          </div>
      </div>
     

      <div class="d-flex justify-content-end mt-4 resp-car-btn"style="margin-right:2.5rem;">
                      <button class="third-sec-btn">Explore <i class="fa-solid fa-arrow-right"></i></button>
                  </div>
    </div>
    
  </section>



  <section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Reall Estate
        </h2>
        <div class="d-flex justify-content-center align-items-center custom-h-b mb-3"></div>
        <hr>
      </div>
      <div class="d-flex">
      <div class="d-flex justify-content-center align-items-center" style="margin-right:7px;">
              <div class="card-slider cardThird-arrow-left">
                <i class="fa-solid fa-arrow-left"></i>
              </div>
          </div>
        <div class="container-row card-outerThird"style="gap:20px;">
        @foreach($reallestate as $product)
          <div>
            <div class="box">
              <a href="{{ url('product.show', $product->id) }}">
                <div class="img-box">
                  @if($product->image)
                    <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}">
                  @else
                  <img src="images/default-image.jpg" style="width: 300px; height: 400px;" alt="Default Image">
                  @endif
                </div>
                <div class="detail-box">
                  <h6 class="prodName">{{ $product->name }}</h6>
                  <div class="d-flex justify-content-between">
                    <h6 style="color:gray;">
                      Price
                      <span style="color:gray;">BTC{{ $product->price }}</span>
                    </h6>
                    <span><i class="fa-regular fa-heart"></i></span>
                  </div>
                  <div class="d-flex justify-content-end"style="border-top-color: #000;border-top-width: 1px;border-top-style: solid;color:#324AA0;padding:7px 0px;">see all...</div>
                </div>
                @if($product->created_at >= now()->subDays(7))
                  <div class="new">
                    <span>New</span>
                  </div>
                @endif
              </a>
            </div>
          </div>
        @endforeach
      </div>
      <div class="d-flex justify-content-center align-items-center" style="margin-left:7px;">
              <div class="card-slider cardThird-arrow-right">
                  <i class="fa-solid fa-arrow-right"></i>
              </div>
          </div>
        
      </div>
      <div class="d-flex justify-content-end mt-4 resp-car-btn"style="margin-right:2.5rem;">
        <button class="third-sec-btn">Explore <i class="fa-solid fa-arrow-right"></i></button>
      </div>
    </div>
  </section>

  <!-- end shop section -->

  <!-- saving section -->



  <!-- end saving section -->

  <!-- why section -->

  <section class="why_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Latest News
        </h2>
        <div class="d-flex justify-content-center align-items-center custom-h-b mb-3"></div>
      </div>
      <div class="row">
      
        <div class="col-md-4">
          <div class="box ">
            <div class="img-box">
              <img src="{{url('front_assets/images/one.jpg')}}" style="height: 240px; width: 320px;" alt="Description of the image">
            </div>
          
            <div class="detail-box">
              <h5>
                Collectibles
              </h5>
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box ">
            <div class="img-box">
              <img src="{{url('front_assets/images/one.jpg')}}" style="height: 240px; width: 320px;" alt="Description of the image">
            </div>
          
            <div class="detail-box">
              <h5>
                Reallestate
              </h5>
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box ">
            <div class="img-box">
              <img src="{{url('front_assets/images/one.jpg')}}" style="height: 240px; width: 320px;" alt="Description of the image">
            </div>
          
            <div class="detail-box">
              <h5>
                Vehicles
              </h5>
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry              </p>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </section>

  <!-- end why section -->


  <!-- gift section -->



  <!-- end gift section -->


  <!-- contact section -->



  <!-- end contact section -->

  <!-- client section -->
  
  <!-- end client section -->

  <!-- info section -->

  <section class="info_section  layout_padding2-top">
    <div class="social_container">
      <div class="social_box">
        <a href="">
          <i class="fa-brands fa-facebook" aria-hidden="true" style="color:#000;"></i>
        </a>
        <a href="">
          <i class="fa-brands fa-twitter" aria-hidden="true" style="color:#000;"></i>
        </a>
        <a href="">
          <i class="fa-brands fa-instagram" aria-hidden="true" style="color:#000;"></i>
        </a>
        <a href="">
          <i class="fa-brands fa-youtube" aria-hidden="true" style="color:#000;"></i>
        </a>
      </div>
    </div>
    <div class="info_container">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6 col-lg-4 borderStyle"style="display:flex;justify-content:center;align-items:center;flex-direction:column;">
            <div>
              <h6 style="color:#000;">ABOUT US</h6>
              <p style="font-size:14px;color:#000;">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet,
              </p>
            </div>
            <div>
              <h6 style="color:#000;">
                NEED HELP
              </h6>
              <p style="font-size:14px;color:#000;">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet,
              </p>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4 borderStyle"style="display:flex;justify-content:center;align-items:center;">
            <div class="info_form ">
              <h5 style="color:#000;">
                Newsletter
              </h5>
              <form action="#">
                <input type="email" placeholder="Enter your email">
                <button style="background:#324AA0;">
                  Subscribe
                </button>
              </form>
            </div>
          </div>
        
          <div class="col-12 col-md-6 col-lg-4" style="display:flex;justify-content:center;align-items:center;">
            <div>
              <h6 style="color:#000;">
                CONTACT US
              </h6>
              <div class="info_link-box">
                <a href="">
                  <i class="fa fa-map-marker" aria-hidden="true" style="color:#000;"></i>
                  <span style="color:#000;"> Gb road 123 london Uk </span>
                </a>
                <a href="">
                  <i class="fa fa-phone" aria-hidden="true" style="color:#000;"></i>
                  <span style="color:#000;">+01 12345678901</span>
                </a>
                <a href="">
                  <i class="fa fa-envelope" aria-hidden="true" style="color:#000;"></i>
                  <span style="color:#000;"> demo@gmail.com</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- footer section -->
    <footer class=" footer_section">
      <div class="container">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
        </p>
      </div>
    </footer>
    <!-- footer section -->

  </section>

  <!-- end info section -->
  <script>
  document.addEventListener('DOMContentLoaded', () => {
    const cardOuter = document.querySelector(".card-outer");
    const left = document.querySelector('.card-arrow-left');
    const right = document.querySelector('.card-arrow-right');

    left.addEventListener('click', () => {
      cardOuter.scrollLeft -= 50;
      
    });

    right.addEventListener('click', () => {
      cardOuter.scrollLeft += 50;
     
    });

    const cardOuterSec = document.querySelector(".card-outerSecond");
    const leftSec = document.querySelector('.cardSecond-arrow-left');
    const rightSec = document.querySelector('.cardSecond-arrow-right');

    leftSec.addEventListener('click', () => {
      cardOuterSec.scrollLeft -= 50;
     
    });

    rightSec.addEventListener('click', () => {
      cardOuterSec.scrollLeft += 50;
      
    });

    const cardOuterThird = document.querySelector(".card-outerThird");
    const leftSecThird = document.querySelector('.cardThird-arrow-left');
    const rightSecThird = document.querySelector('.cardThird-arrow-right');

    leftSecThird.addEventListener('click', () => {
      cardOuterThird.scrollLeft -= 50;
     
    });

    rightSecThird.addEventListener('click', () => {
      cardOuterThird.scrollLeft += 50;
      
    });

  });
</script>
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="js/custom.js"></script>
  
</body>
</html>

