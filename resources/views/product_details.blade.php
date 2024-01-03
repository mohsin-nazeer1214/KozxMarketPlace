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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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


  .slideFirst,.card-outerSecond,.card-outerThird{
    overflow-x: scroll !important;
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
.seeMoreBtn{
  border:none;
  outline:none;
  font-weight: 600;
    font-size: 16px;
    line-height: 111.8%;
    color: #00b2e2;
    background:#fff;
    padding-left: 0;
}
.carTitle{
  font-weight: 400;
    font-size: 28px;
    line-height: 111.8%;
    color: #1a1a1a;
}
.custom-mr{
  margin-right: 0;
}
.carousel-inner{
  border-radius:30px;
}
.carousel-control-next, .carousel-control-prev{
  width:9%;
}

.custom_icons-sty{
  border: 2px solid #fff;
  border-radius:20px;
  display:flex;
  justify-content:center;
  align-items:center;
  padding:7px;
  color:#fff;
}
.carousel-control-next-icon, .carousel-control-prev-icon{
  width:1.5rem;
  height:1.5rem;
  color:#fff !important;
}
.carousel-indicators [data-bs-target]{
  width:13px;
  height:13px;
  border-radius:50%;
}
.carousel-indicators .active {
  width: 30px;
  border-radius: 13px;
}
.custom-bgImg{
  object-fit:cover;
  height:587px;
  background: rgba(23, 40, 66, 0.4);
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
  background-attachment: fixed;
}
.custom_title{
  font-weight:700;
}
.custom_subTitle{
  font-weight:400;
}
.product_price{
  font-weight:700;
  font-size:26px;
}
.custom_des{
  font-size:24px;
  font-weight:600;
}
.custom_para{
  font-size:14px;
  color:#000000;
  font-weight:400;
}
.bl{
  border-right-color: #CCCCCC;
  border-right-style: solid;
  border-right-width: 2px;
}
.avatar{
  width:70px;
  height:70px;
  border:2px solid #324AA0;
  border-radius:50px;
}
.call-btn{
  padding: 14px 26px 14px 26px;
  background-color:#fff;
  color:#324AA0;
  border-radius:10px;
  border:none;
  outline:none;
}
.req-cal-btn{
  background-color: #324AA0;
  color:#fff;
  width:100%;
  border:none;
  outline:none;
  padding:14px;
  border-radius:8px;
}
.contact_content{
  position: absolute;
    top: 50%;  
    left: 50%; 
    transform: translate(-50%, -50%);
}
.contactBtn{
  padding:13px;
  border:none;
  outline:none;
  border-radius:8px;
}
.customCard-img{
  height: 270px;
  object-fit:cover;
  border-radius:13px;
  width:100%;
}
.content_details{
    border-top-color: gray;
    border-top-style: solid;
    border-top-width: 1px;
    border-bottom-color: gray;
    border-bottom-style: solid;
    border-bottom-width: 1px;
    padding: 16px 0;
    margin-left: 16px;
    margin-right: 16px;
}
.custom-br-sty{
  border-right-color: gray;
  border-right-style: solid;
  border-right-width: 1px;
}
.custom-btn-sty{
  border:none;
  outline:none;
  background-color:#324AA0;
  color:#fff;
  padding: 10px 16px;
  border-radius:8px;
  display:flex;
  justify-content:center;
  align-items:center;
}
.likebtn{
  position: absolute;
    top: 11px;
    left: 9px;
    background: #fff;
    padding: 5px 7px;
    border-radius: 50%;
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
   .resp-mt{
    margin-top:20px;
   }
   .respContact-head{
    font-size:20px;
   }
   .respContact-para{
    font-size:12px
   }
   .contactBtn{
    font-size: 13px;
   }
   .respSliderCard{
    flex-direction:column;
   }
   .res-size{
    height:130px !important;
   }
   .carousel-control-next, .carousel-control-prev{
    width: 18%;
  }
  }
  </style>
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <nav class="navbar navbar-expand-lg custom_nav-container" style="padding-bottom:0;">
    
        <a class="navbar-brand" href="">
        
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""></span>
        </button>
        

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <a class="navbar-brand" href="index.html">
          <img src="{{url('/front_assets/images/logo.jpeg')}}" alt="Giftos Logo">
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
    

    <div class="row mt-5">
      <div class="col-12 col-md-6 col-lg-6">
          <div id="carouselExampleIndicators" class="carousel slide carousel-fade">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" style="position:relative;">
              <video class="d-block w-100" controls autoplay>
        <source src="{{ asset('videos/' . $product->video) }}" type="video/mp4">
    </video>

                <div class="likebtn" style="top:19px;left:17px;">
                  <svg width="20" height="20" viewBox="0 0 22 20" fill="#324AA0" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_77_1133)">
                    <path d="M0.833496 6.92259C0.833496 6.60298 0.833496 6.28336 0.833496 5.96374C0.845817 5.88958 0.862759 5.81647 0.87046 5.74178C0.985458 4.58813 1.34226 3.52483 1.98604 2.56128C3.29004 0.61015 5.68755 -0.349224 7.94593 0.194961C9.2412 0.507267 10.2541 1.26401 11.0842 2.29806C11.1638 2.39729 11.2403 2.49965 11.3281 2.6135C11.4236 2.48869 11.496 2.38789 11.574 2.29232C13.0069 0.537035 14.8109 -0.278721 17.0508 0.160492C19.2122 0.58456 20.6512 1.93876 21.3925 4.00948C22.2124 6.29903 21.8617 8.47681 20.5675 10.5099C19.8493 11.638 18.9698 12.6303 17.9903 13.5197C16.0687 15.2635 14.1194 16.9743 12.1742 18.691C11.6223 19.1777 11.0093 19.1558 10.4343 18.6534C8.93727 17.3446 7.43922 16.0369 5.95091 14.7177C4.69774 13.6074 3.48205 12.4574 2.48403 11.0949C1.8346 10.2081 1.31351 9.25183 1.05425 8.1692C0.956708 7.75976 0.905883 7.3383 0.833496 6.92259Z" fill="#324AA0"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_77_1133">
                    <rect width="21" height="19" fill="white" transform="translate(0.833496 0.0437012)"/>
                    </clipPath>
                    </defs>
                  </svg>
                </div>
              </div>
              <div class="carousel-item">
                <img src="https://images.pexels.com/photos/707046/pexels-photo-707046.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block w-100 custom-bgImg"  alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://images.pexels.com/photos/909907/pexels-photo-909907.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block w-100 custom-bgImg" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <div class="custom_icons-sty">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </div>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <div class="custom_icons-sty">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </div>
            </button>
          </div>
          <div class="d-flex mt-3 respSliderCard" style="gap: 5px;">
    @foreach($images as $imagePath)
        <div>
            <img src="{{ asset('images/' . $imagePath) }}" style="width: 100%; height: 190px; object-fit: cover; border-radius: 16px; border: 2px solid #ccc;" class="res-size" />
        </div>
    @endforeach
</div>



          <div class="d-flex flex-column my-4">
            <div class="custom_des">Description</div>
            <div>
              <p class="custom_para">
              {{$product->description}}
<br/><br/>
</p>
            </div>
          </div>

          <div class="my-3">
            <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3321.269987651001!2d73.07731567549853!3d33.650165573311035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38df9531d8e68fb7%3A0x5baa8b2b0b92c2d9!2sShamsabad%20Metro%20Station!5e0!3m2!1sen!2s!4v1704194208804!5m2!1sen!2s" width="800" height="710" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>


      </div>
      <div class="col-12 col-lg-6">
        <div class="d-flex justify-content-between align-items-center mb-4">
          <div class="d-flex flex-column">
            <h2 class="custom_title">{{$product->name}}</h2>
            <div>
              <p class="custom_para">
             {{$product->description}}
              </p>
            </div>
            <div class="product_price">
    {{ number_format($product->price) }} BTC
</div>

            <div class="row mt-3 mb-5" style="border:2px solid #CCCCCC;border-radius:16px;">
              <div class="col-12 col-md-6 col-lg-6"style="padding:0;">
                <div class="d-flex justify-content-between px-3 py-3 bl" style="background-color:#FAFAFA;border-top-left-radius:16px;">
                  <div>
                    <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg" style="margin-right:7px;">
                    <path d="M8.50386 12.4274C6.22875 12.4274 3.95313 12.4274 1.67802 12.4274C1.31081 12.4274 1.21268 12.5165 1.22179 12.8733C1.22786 13.1115 1.19599 13.328 0.987095 13.4836C0.794383 13.6273 0.580933 13.6548 0.363437 13.5564C0.148976 13.4589 0.00937379 13.2916 0.00886798 13.0529C0.00583315 11.5957 -0.0128816 10.1374 0.0154434 8.68068C0.0407337 7.3755 1.20156 6.1535 2.53334 5.97239C2.71998 5.9468 2.91016 5.934 3.09883 5.934C6.70117 5.93203 10.304 5.93203 13.9064 5.93252C15.5265 5.93252 16.795 7.02559 16.9903 8.58766C16.9963 8.63639 16.9978 8.6856 16.9983 8.73482C16.9994 10.1616 17.0009 11.5883 16.9994 13.015C16.9989 13.3167 16.7723 13.5707 16.4829 13.6056C16.1784 13.6425 15.8906 13.4698 15.8132 13.1843C15.7834 13.0741 15.7905 12.9535 15.789 12.8374C15.7849 12.5303 15.6822 12.4274 15.3676 12.4274C13.0799 12.4274 10.7921 12.4274 8.50386 12.4274Z" fill="#324AA0"/>
                    <path d="M8.50203 0.617282C10.0002 0.617282 11.4979 0.616789 12.9961 0.617282C14.2632 0.618266 15.1782 1.51053 15.1797 2.74582C15.1807 3.57608 15.1802 4.40633 15.1797 5.23658C15.1797 5.48118 15.1321 5.50333 14.8833 5.46199C14.5545 5.40785 14.2227 5.36897 13.8904 5.34486C13.7472 5.33452 13.6724 5.29466 13.639 5.15587C13.4771 4.48901 13.0452 4.15976 12.3406 4.15878C11.6957 4.15829 11.0513 4.1573 10.4064 4.15878C9.73468 4.16026 9.28249 4.51214 9.13935 5.14701C9.109 5.28137 9.04577 5.34732 8.89454 5.3419C8.63557 5.33255 8.37609 5.33403 8.11712 5.34141C7.98055 5.34535 7.91024 5.29761 7.87585 5.16571C7.69527 4.46834 7.28304 4.15829 6.5476 4.15829C5.91535 4.1578 5.2836 4.1573 4.65134 4.15829C3.96496 4.15927 3.5239 4.49984 3.37014 5.15292C3.33776 5.29072 3.26493 5.33255 3.12077 5.34436C2.77632 5.37192 2.43288 5.41819 2.09146 5.47085C1.89369 5.50136 1.82895 5.46691 1.82844 5.27596C1.82743 4.37828 1.82035 3.48011 1.83097 2.58243C1.84311 1.54941 2.792 0.626632 3.85622 0.619742C5.40448 0.609899 6.95326 0.617282 8.50203 0.617282C8.50203 0.617774 8.50203 0.617774 8.50203 0.617282Z" fill="#324AA0"/>
                    </svg>
                      Bedrooms
                  </div>
                  <div>05</div>
                </div>
                <div class="d-flex justify-content-between px-3 py-3 bl" style="background-color:#fff;">
                  <div>
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"style="margin-right:7px;">
                    <g clip-path="url(#clip0_76_1006)">
                    <path d="M0.0020534 8.65729C0.0020534 8.13264 -0.00409769 7.62004 0.00489237 7.10745C0.00915082 6.86345 0.212137 6.68245 0.47001 6.66413C0.528682 6.66011 0.587827 6.66189 0.646972 6.66189C6.21561 6.66189 11.7842 6.66189 17.3533 6.66189C17.8336 6.66189 18.0002 6.81965 18.0002 7.27459C18.0002 7.73132 18.0002 8.18805 18.0002 8.65685H0.0020534V8.65729Z" fill="#324AA0"/>
                    <path d="M4.52308 17.101C4.02721 17.101 3.54364 17.101 3.06007 17.101C2.22778 17.101 1.39501 17.1019 0.562722 17.1006C0.199334 17.1001 0.00155289 16.916 0.00107973 16.5755C0.00013341 14.3008 0.000606572 12.026 0.000606572 9.75089C0.000606572 9.70754 0.000606572 9.66419 0.000606572 9.61414H4.52308V17.101Z" fill="#324AA0"/>
                    <path d="M13.4736 17.101V9.61414H17.9999V9.79111C17.9999 12.0323 17.9999 14.2739 17.9999 16.5151C17.9999 16.9343 17.8229 17.101 17.3782 17.101C16.1385 17.101 14.8983 17.101 13.6586 17.101C13.6009 17.101 13.5432 17.101 13.4741 17.101H13.4736Z" fill="#324AA0"/>
                    <path d="M5.54053 9.61365H12.4629V12.872H5.54053V9.61365Z" fill="#324AA0"/>
                    <path d="M12.4615 17.0979H5.5415V13.8337H12.4615V17.0979Z" fill="#324AA0"/>
                    <path d="M9.49295 5.71756H8.50404C8.50404 5.65142 8.50404 5.58707 8.50404 5.52271C8.50404 4.24101 8.50546 2.95931 8.50309 1.6776C8.50215 1.22623 8.08151 0.932176 7.65235 1.07608C7.40772 1.15831 7.24117 1.37103 7.22982 1.62174C7.22461 1.73302 7.23455 1.84519 7.22319 1.95602C7.19906 2.19019 6.99655 2.36761 6.75287 2.37744C6.51108 2.38728 6.27592 2.22505 6.24801 1.99401C6.15905 1.25305 6.41929 0.556335 7.25158 0.220714C8.26982 -0.190432 9.46456 0.50807 9.48632 1.55292C9.51518 2.93428 9.49342 4.31653 9.49342 5.71756H9.49295Z" fill="#324AA0"/>
                    <path d="M5.53233 5.05574V5.71312H4.54343V5.05574C4.42182 5.05574 4.31252 5.05797 4.2037 5.05574C3.90513 5.04859 3.68795 4.8515 3.68653 4.59007C3.68511 4.32819 3.90182 4.12351 4.19896 4.12127C4.75398 4.1168 5.309 4.1168 5.86402 4.12127C6.16164 4.12351 6.37834 4.32819 6.37645 4.59051C6.37503 4.8524 6.15785 5.04859 5.85881 5.05618C5.75424 5.05886 5.6492 5.05618 5.53186 5.05618L5.53233 5.05574Z" fill="#324AA0"/>
                    <path d="M13.4637 5.05536V5.71275H12.4748V5.05536C12.3451 5.05536 12.2344 5.05849 12.1242 5.05492C11.8379 5.04464 11.6254 4.84666 11.6235 4.59059C11.6217 4.33452 11.8327 4.12448 12.1175 4.12135C12.6844 4.11509 13.2512 4.11554 13.8181 4.12135C14.1034 4.12448 14.3149 4.33273 14.3139 4.5888C14.313 4.84488 14.101 5.04419 13.8152 5.05492C13.7045 5.05894 13.5938 5.05536 13.4641 5.05536H13.4637Z" fill="#324AA0"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_76_1006">
                    <rect width="18" height="17" fill="white" transform="translate(0 0.10144)"/>
                    </clipPath>
                    </defs>
                    </svg>
                    Kitchen
                  </div>
                  <div>02</div>
                </div>
                <div class="d-flex justify-content-between px-3 py-3 bl" style="background-color:#FAFAFA;border-bottom-left-radius:16px;">
                  <div>
                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg"style="margin-right:7px;">
                      <g clip-path="url(#clip0_76_994)">
                      <path d="M18.1665 3.85168V15.5236C18.1557 15.5559 18.1393 15.5873 18.1351 15.6206C17.942 17.0779 16.8887 18.2479 15.4599 18.5887C15.3081 18.6248 15.1548 18.6548 15.0024 18.6876H3.33057C3.29822 18.6768 3.26682 18.6618 3.23354 18.6562C1.73869 18.4068 0.759004 17.5607 0.301504 16.1165C0.240566 15.9239 0.211035 15.7218 0.166504 15.524C0.166504 11.6334 0.166504 7.74278 0.166504 3.85215C0.177285 3.81981 0.192285 3.78793 0.19791 3.75465C0.42291 2.34512 1.20572 1.387 2.53838 0.886372C2.7915 0.791216 3.06572 0.75231 3.33057 0.687622C7.22119 0.687622 11.1118 0.687622 15.0024 0.687622C15.0348 0.698403 15.0667 0.713403 15.0999 0.719028C16.5971 0.96606 17.5731 1.8159 18.0315 3.25918C18.0924 3.45137 18.1224 3.65387 18.167 3.85168H18.1665ZM12.1309 5.73465C12.1365 5.74825 12.1426 5.76231 12.1482 5.7759C11.8801 6.04356 11.612 6.31075 11.3443 6.5784C10.8099 7.11278 10.2718 7.6434 9.7426 8.18247C9.38353 8.54809 9.53354 9.14481 10.0163 9.28215C10.2812 9.35762 10.5095 9.27934 10.704 9.08387C11.4521 8.33247 12.2031 7.58434 12.9512 6.83293C12.9957 6.7884 13.0201 6.72372 13.0534 6.6684C13.0763 6.68293 13.0993 6.69747 13.1218 6.712C13.1218 6.77434 13.1218 6.83668 13.1218 6.89903C13.1218 7.42637 13.1176 7.95325 13.1232 8.48059C13.1274 8.89122 13.4026 9.17293 13.7828 9.17153C14.1634 9.17012 14.4381 8.88278 14.439 8.47637C14.4409 7.35747 14.4409 6.23903 14.439 5.12012C14.4385 4.68981 14.1657 4.41653 13.7378 4.41465C13.2221 4.41278 12.707 4.41418 12.1913 4.41418C11.5646 4.41418 10.9379 4.4095 10.3112 4.41653C9.95635 4.42028 9.67697 4.70387 9.66338 5.05262C9.65025 5.39247 9.90432 5.6859 10.2526 5.7234C10.3745 5.73653 10.4982 5.73418 10.621 5.73465C11.124 5.73559 11.6274 5.73465 12.1304 5.73465H12.1309ZM5.28666 12.7139C5.26135 12.6956 5.2365 12.6778 5.21119 12.6595C5.21119 12.5972 5.21119 12.5343 5.21119 12.472C5.21119 11.9625 5.21963 11.4529 5.20604 10.9439C5.20182 10.7925 5.16572 10.6261 5.0926 10.4953C4.9515 10.2426 4.63275 10.1437 4.35666 10.2286C4.08104 10.3134 3.89494 10.5609 3.89447 10.8642C3.89166 11.9826 3.89307 13.1011 3.89354 14.2195C3.89354 14.6962 4.15557 14.9601 4.63041 14.9601C5.73104 14.9606 6.83213 14.9606 7.93275 14.9601C8.36447 14.9601 8.66635 14.6906 8.66963 14.3057C8.67291 13.9181 8.37479 13.6457 7.94119 13.6448C7.41994 13.6434 6.89869 13.6448 6.37791 13.6448C6.31603 13.6448 6.25416 13.6448 6.19182 13.6448C6.17963 13.6247 6.16697 13.604 6.15479 13.5839C6.20682 13.5478 6.26588 13.5182 6.31041 13.4737C6.7801 13.0073 7.24744 12.539 7.71525 12.0712C8.00916 11.7773 8.30822 11.4881 8.59557 11.1876C8.94479 10.822 8.80088 10.2403 8.32744 10.0964C8.05604 10.0139 7.82494 10.094 7.62479 10.2951C6.8776 11.047 6.12666 11.7947 5.37947 12.5465C5.33635 12.5901 5.31713 12.6576 5.28666 12.7143V12.7139Z" fill="#324AA0"/>
                      </g>
                      <defs>
                      <clipPath id="clip0_76_994">
                      <rect width="18" height="18" fill="white" transform="translate(0.166504 0.687622)"/>
                      </clipPath>
                      </defs>
                    </svg>
                    Size
                  </div>
                  <div>150 Sq Ft</div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-6"style="padding:0;">
              <div class="d-flex justify-content-between px-3 py-3" style="background-color:#FAFAFA;border-top-right-radius:16px;">
                  <div>
                    <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg" style="margin-left:5px;">
                    <path d="M8.50386 12.4274C6.22875 12.4274 3.95313 12.4274 1.67802 12.4274C1.31081 12.4274 1.21268 12.5165 1.22179 12.8733C1.22786 13.1115 1.19599 13.328 0.987095 13.4836C0.794383 13.6273 0.580933 13.6548 0.363437 13.5564C0.148976 13.4589 0.00937379 13.2916 0.00886798 13.0529C0.00583315 11.5957 -0.0128816 10.1374 0.0154434 8.68068C0.0407337 7.3755 1.20156 6.1535 2.53334 5.97239C2.71998 5.9468 2.91016 5.934 3.09883 5.934C6.70117 5.93203 10.304 5.93203 13.9064 5.93252C15.5265 5.93252 16.795 7.02559 16.9903 8.58766C16.9963 8.63639 16.9978 8.6856 16.9983 8.73482C16.9994 10.1616 17.0009 11.5883 16.9994 13.015C16.9989 13.3167 16.7723 13.5707 16.4829 13.6056C16.1784 13.6425 15.8906 13.4698 15.8132 13.1843C15.7834 13.0741 15.7905 12.9535 15.789 12.8374C15.7849 12.5303 15.6822 12.4274 15.3676 12.4274C13.0799 12.4274 10.7921 12.4274 8.50386 12.4274Z" fill="#324AA0"/>
                    <path d="M8.50203 0.617282C10.0002 0.617282 11.4979 0.616789 12.9961 0.617282C14.2632 0.618266 15.1782 1.51053 15.1797 2.74582C15.1807 3.57608 15.1802 4.40633 15.1797 5.23658C15.1797 5.48118 15.1321 5.50333 14.8833 5.46199C14.5545 5.40785 14.2227 5.36897 13.8904 5.34486C13.7472 5.33452 13.6724 5.29466 13.639 5.15587C13.4771 4.48901 13.0452 4.15976 12.3406 4.15878C11.6957 4.15829 11.0513 4.1573 10.4064 4.15878C9.73468 4.16026 9.28249 4.51214 9.13935 5.14701C9.109 5.28137 9.04577 5.34732 8.89454 5.3419C8.63557 5.33255 8.37609 5.33403 8.11712 5.34141C7.98055 5.34535 7.91024 5.29761 7.87585 5.16571C7.69527 4.46834 7.28304 4.15829 6.5476 4.15829C5.91535 4.1578 5.2836 4.1573 4.65134 4.15829C3.96496 4.15927 3.5239 4.49984 3.37014 5.15292C3.33776 5.29072 3.26493 5.33255 3.12077 5.34436C2.77632 5.37192 2.43288 5.41819 2.09146 5.47085C1.89369 5.50136 1.82895 5.46691 1.82844 5.27596C1.82743 4.37828 1.82035 3.48011 1.83097 2.58243C1.84311 1.54941 2.792 0.626632 3.85622 0.619742C5.40448 0.609899 6.95326 0.617282 8.50203 0.617282C8.50203 0.617774 8.50203 0.617774 8.50203 0.617282Z" fill="#324AA0"/>
                    </svg>
                      Bedrooms
                  </div>
                  <div>05</div>
                </div>
                <div class="d-flex justify-content-between px-3 py-3" style="background-color:#fff;">
                  <div>
                  <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_76_984)">
                  <path d="M7.7661 4.68756C7.7661 5.47335 7.76815 6.25915 7.7661 7.04494C7.76354 7.9757 7.17612 8.56377 6.24558 8.5653C4.66769 8.56735 3.0898 8.56735 1.51191 8.5653C0.593656 8.56377 0.00316503 7.97314 0.00162862 7.05416C-0.000932052 5.46977 -0.00144419 3.88537 0.00162862 2.30098C0.00367716 1.39481 0.596217 0.802133 1.5027 0.800597C3.09339 0.797523 4.68408 0.797011 6.27477 0.800597C7.16947 0.802646 7.76098 1.39583 7.76559 2.29176C7.76969 3.09036 7.76662 3.88896 7.76662 4.68756H7.7661Z" fill="#324AA0"/>
                  <path d="M17.5839 4.6811C17.5839 5.46689 17.5854 6.25268 17.5839 7.03848C17.5819 7.98 16.9949 8.56396 16.0501 8.56447C14.485 8.56601 12.9199 8.56601 11.3548 8.56447C10.4089 8.56345 9.82046 7.98 9.81943 7.04002C9.81789 5.45562 9.81687 3.87123 9.81943 2.28683C9.82097 1.53895 10.2588 0.977008 10.9528 0.82948C11.0824 0.801818 11.2191 0.800794 11.3528 0.800281C12.9178 0.798232 14.4829 0.798232 16.048 0.799257C17.0026 0.800281 17.5819 1.38374 17.5834 2.34267C17.5844 3.12232 17.5834 3.90145 17.5834 4.6811H17.5839Z" fill="#324AA0"/>
                  <path d="M7.76663 14.5091C7.76663 15.2887 7.76765 16.0679 7.76663 16.8475C7.76458 17.7937 7.18177 18.3817 6.24149 18.3827C4.66975 18.3843 3.09852 18.3843 1.52678 18.3827C0.585986 18.3817 0.00215272 17.7942 0.00164058 16.848C0.00010418 15.2826 0.00010418 13.7177 0.00164058 12.1522C0.00266485 11.2061 0.585474 10.6186 1.52627 10.6175C3.11081 10.616 4.69484 10.615 6.27939 10.6175C7.02864 10.6191 7.58738 11.055 7.73641 11.7511C7.76407 11.8807 7.7656 12.0175 7.7656 12.1512C7.76816 12.937 7.76663 13.7228 7.76663 14.5086V14.5091Z" fill="#324AA0"/>
                  <path d="M13.6949 10.2068C14.0877 10.216 14.4329 10.3487 14.7131 10.6273C15.6682 11.5791 16.6259 12.5288 17.5718 13.4893C18.1413 14.0676 18.1433 14.9282 17.5749 15.506C16.6295 16.4675 15.6754 17.4208 14.7146 18.367C14.1297 18.9432 13.2678 18.9402 12.6835 18.3639C11.7283 17.4208 10.7788 16.4721 9.8365 15.5163C9.25318 14.9246 9.26035 14.063 9.84572 13.4719C10.7855 12.5227 11.7329 11.5812 12.6783 10.6376C12.958 10.3584 13.299 10.2196 13.6939 10.2068H13.6949Z" fill="#324AA0"/>
                  </g>
                  <defs>
                  <clipPath id="clip0_76_984">
                  <rect width="18" height="18" fill="white" transform="translate(0 0.797729)"/>
                  </clipPath>
                  </defs>
                  </svg>
                  Other
                  </div>
                  <div>Water Front</div>
                </div>
                <div class="d-flex justify-content-between px-3 py-3" style="background-color:#FAFAFA;border-bottom-right-radius:16px;">
                  <div>
                  <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_77_1015)">
                  <path d="M18 8.2336V14.3508C17.8743 14.6686 17.6429 14.7872 17.3007 14.7858C15.1163 14.7769 12.9323 14.7811 10.7479 14.7811H10.5067V14.9925C10.5067 15.8536 10.4935 16.7152 10.5119 17.5763C10.5217 18.0408 10.3673 18.3708 9.91811 18.5339H9.60176C9.15728 18.3816 8.98972 18.067 8.9991 17.6034C9.01694 16.7311 9.00427 15.8578 9.00427 14.985V14.7905C8.95592 14.7863 8.92776 14.782 8.89913 14.7816C8.20823 14.7783 7.51733 14.7722 6.8269 14.7727C4.81287 14.7741 2.79837 14.7797 0.784344 14.7792C0.314044 14.7792 0.00942863 14.4638 0.00942863 13.9894C0.00802054 12.2438 -0.0149782 10.4972 0.016469 8.75204C0.043692 7.23892 0.774957 6.13079 2.11123 5.42673C2.21965 5.36954 2.26142 5.31376 2.26095 5.19001C2.25626 3.94782 2.26799 2.7061 2.25297 1.46392C2.24734 1.00079 2.41021 0.685322 2.85563 0.533447H6.33454C6.65371 0.67126 6.77245 0.913135 6.76119 1.25907C6.74335 1.80329 6.75696 2.34845 6.75603 2.89313C6.75556 3.3136 6.53965 3.5297 6.11723 3.53017C5.39723 3.53157 4.67723 3.53017 3.95723 3.5311C3.89574 3.5311 3.83425 3.53626 3.77511 3.53907V5.03392C3.85913 5.03392 3.92859 5.03392 3.99853 5.03392C7.46992 5.03392 10.9413 5.03204 14.4127 5.03485C16.0555 5.03626 17.4495 6.10079 17.8771 7.67204C17.9273 7.85673 17.9601 8.0461 18.0005 8.23314L18 8.2336ZM1.51889 13.2741H5.99472C6.00035 13.2394 6.00786 13.2174 6.00786 13.1949C6.00786 11.7019 6.03556 10.2084 5.99848 8.71642C5.96281 7.29939 4.69365 6.31782 3.31185 6.57985C2.27738 6.77626 1.51842 7.69923 1.51326 8.78907C1.50669 10.2291 1.51138 11.6695 1.51185 13.1095C1.51185 13.1611 1.51655 13.2131 1.51936 13.2741H1.51889Z" fill="#324AA0"/>
                  </g>
                  <defs>
                  <clipPath id="clip0_77_1015">
                  <rect width="18" height="18" fill="white" transform="translate(0 0.534424)"/>
                  </clipPath>
                  </defs>
                  </svg>
                  Zip Code
                  </div>
                  <div>54290</div>
                </div>
              </div>
            </div>


            <div>
              <div class="d-flex flex-column" style="border:1px solid #CCCCCC;border-radius:20px;">
                <div class="d-flex justify-content-between align-items-center" style="background-color:#324AA0;padding:16px;border-top-left-radius: 20px;border-top-right-radius: 20px;">
                  <div class="d-flex justify-content-center align-items-center">
                    <div style="border:2px solid #fff;border-radius:50px;"><img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8YXZhdGFyfGVufDB8fDB8fHww"
                    class="avatar"/></div>
                    <div class="d-flex flex-column ml-3">
                      <div style="font-weight:600;color:#fff;font-size:18px;">John</div>
                      <div style="color:#AFB8DA;">+65841286 1211</div>
                    </div>
                  </div>
                  <div class="d-flex">
                    <button class="call-btn">Call</button>
                  </div>
                </div>

                <form class="row" style="padding:16px;">
                  <div class="col-12 col-md-6 col-lg-6">
                    <div class="mb-4">
                      <label for="firstNameinput" class="form-label" style="font-weight:600;">First Name</label>
                      <input type="name" class="form-control" id="firstNameinput" placeholder="Enter Your First Name"
                      style="background-color:#F8F9FC;">
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-6 ">
                    <div class="mb-4">
                      <label for="LastNameinput" class="form-label"style="font-weight:600;">Last Name</label>
                      <input type="name" class="form-control" id="LastNameinput" placeholder="Enter Your Last Name"
                      style="background-color:#F8F9FC;">
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="mb-4">
                      <label for="emailInput" class="form-label"style="font-weight:600;">Email</label>
                      <input type="email" class="form-control" id="emailInput" placeholder="Enter Your Email"
                      style="background-color:#F8F9FC;">
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="mb-4">
                      <label for="phoneNumberInput" class="form-label"style="font-weight:600;">Phone Number</label>
                      <input type="number" class="form-control" id="phoneNumberInput" placeholder="Enter Your Phone Number"
                      style="background-color:#F8F9FC;">
                    </div>
                  </div>
                  <div class="mb-4">
                    <label for="messageInput" class="form-label"style="font-weight:600;">Message</label>
                    <textarea class="form-control" id="messageInput" rows="4" placeholder="Write Your Message" style="background-color:#F8F9FC;"></textarea>
                  </div>
                  <div class="col-12">
                    <div class="form-check mb-4">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" style="border: 2px solid #00000080;">
                      <label class="form-check-label" for="flexCheckDefault" style="font-weight:400;color:#00000080;">
                      By submitting this form, you agree to
                      <span style="color:#324AA0;text-decoration: underline;">Terms of Use.</span>
                      </label>
                    </div>
                  </div>
                  <div class="col-12">
                    <button class="req-cal-btn" type="submit">Request Call</button>
                  </div>
                </form>
              </div>
            </div>

            <div class="my-3">
              <div style="position:relative;">
                <img src="https://images.pexels.com/photos/707046/pexels-photo-707046.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                style="width:100%;height:350px;object-fit:cover;aspect-ratio:16/4;border-radius: 36px;"/>
                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: #324AA0; opacity: 0.9;border-radius: 36px;"></div>
                <div class="contact_content d-flex flex-column justify-content-center align-items-center">
                  <div>
                    <h2 class="text-white respContact-head" style="font-weight:700;text-align:center;">Do you have any question?</h2>
                  </div>
                  <div class="mb-3">
                    <p style="text-align:center;"class="text-white respContact-para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                  </div>
                  <div>
                    <button class="contactBtn">Contact Us</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        

        

        

      </div>
      
    </div>

    
    <!-- end slider section -->
   

    <div class="row mt-5">
      <div class="col-12 mb-3">
        <h3 style="font-weight:700;text-align:center;">More from this Dealer</h3>
      </div>
      <div class="col-12 col-md-4 col-lg-3 mb-3">
        <div class="d-flex flex-column" style="border:1px solid #CCCCCC;border-radius:20px;padding:16px;">
          <div class="d-flex justify-content-center align-items-center"style="position:relative;">
            <img src="https://images.pexels.com/photos/112460/pexels-photo-112460.jpeg" class="customCard-img"/>
            <div class="likebtn">
              <svg width="20" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_77_1133)">
                <path d="M0.833496 6.92259C0.833496 6.60298 0.833496 6.28336 0.833496 5.96374C0.845817 5.88958 0.862759 5.81647 0.87046 5.74178C0.985458 4.58813 1.34226 3.52483 1.98604 2.56128C3.29004 0.61015 5.68755 -0.349224 7.94593 0.194961C9.2412 0.507267 10.2541 1.26401 11.0842 2.29806C11.1638 2.39729 11.2403 2.49965 11.3281 2.6135C11.4236 2.48869 11.496 2.38789 11.574 2.29232C13.0069 0.537035 14.8109 -0.278721 17.0508 0.160492C19.2122 0.58456 20.6512 1.93876 21.3925 4.00948C22.2124 6.29903 21.8617 8.47681 20.5675 10.5099C19.8493 11.638 18.9698 12.6303 17.9903 13.5197C16.0687 15.2635 14.1194 16.9743 12.1742 18.691C11.6223 19.1777 11.0093 19.1558 10.4343 18.6534C8.93727 17.3446 7.43922 16.0369 5.95091 14.7177C4.69774 13.6074 3.48205 12.4574 2.48403 11.0949C1.8346 10.2081 1.31351 9.25183 1.05425 8.1692C0.956708 7.75976 0.905883 7.3383 0.833496 6.92259Z" fill="#CCCCCC"/>
                </g>
                <defs>
                <clipPath id="clip0_77_1133">
                <rect width="21" height="19" fill="white" transform="translate(0.833496 0.0437012)"/>
                </clipPath>
                </defs>
              </svg>
            </div>
          </div>
          <div style="font-weight: 700;font-size: 18px;margin: 13px;">
           mercedes benz
          </div>
          <div class="row content_details">
            <div class="col-4 d-flex justify-content-center align-items-center custom-br-sty">
              <div class="d-flex justify-content-center align-items-center">
                <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg"style="margin-right:10px;">
                  <path d="M8.83736 12.075C6.56225 12.075 4.28663 12.075 2.01152 12.075C1.64431 12.075 1.54618 12.1641 1.55528 12.5209C1.56135 12.7591 1.52949 12.9756 1.32059 13.1311C1.12788 13.2748 0.914429 13.3024 0.696933 13.204C0.482472 13.1065 0.34287 12.9392 0.342364 12.7005C0.339329 11.2433 0.320614 9.78502 0.34894 8.32826C0.37423 7.02309 1.53505 5.80108 2.86684 5.61997C3.05348 5.59438 3.24366 5.58158 3.43233 5.58158C7.03467 5.57962 10.6375 5.57962 14.2399 5.58011C15.86 5.58011 17.1285 6.67317 17.3237 8.23525C17.3298 8.28397 17.3313 8.33318 17.3318 8.3824C17.3329 9.80914 17.3344 11.2359 17.3329 12.6626C17.3323 12.9643 17.1057 13.2182 16.8164 13.2532C16.5119 13.2901 16.2241 13.1174 16.1467 12.8319C16.1169 12.7217 16.124 12.6011 16.1225 12.4849C16.1184 12.1778 16.0157 12.075 15.7011 12.075C13.4134 12.075 11.1256 12.075 8.83736 12.075Z" fill="#324AA0"/>
                  <path d="M8.83553 0.264865C10.3337 0.264865 11.8314 0.264372 13.3296 0.264865C14.5966 0.265849 15.5116 1.15811 15.5132 2.39341C15.5142 3.22366 15.5137 4.05391 15.5132 4.88417C15.5132 5.12876 15.4656 5.15091 15.2168 5.10957C14.888 5.05543 14.5562 5.01655 14.2239 4.99244C14.0807 4.9821 14.0059 4.94224 13.9725 4.80345C13.8106 4.13659 13.3787 3.80735 12.6741 3.80636C12.0292 3.80587 11.3848 3.80489 10.7399 3.80636C10.0682 3.80784 9.61599 4.15973 9.47284 4.7946C9.44249 4.92895 9.37927 4.9949 9.22803 4.98949C8.96906 4.98014 8.70958 4.98161 8.45061 4.98899C8.31404 4.99293 8.24374 4.94519 8.20934 4.8133C8.02877 4.11592 7.61654 3.80587 6.8811 3.80587C6.24884 3.80538 5.61709 3.80489 4.98484 3.80587C4.29846 3.80685 3.8574 4.14742 3.70363 4.8005C3.67126 4.9383 3.59842 4.98014 3.45427 4.99195C3.10982 5.01951 2.76638 5.06577 2.42496 5.11843C2.22719 5.14894 2.16244 5.11449 2.16194 4.92354C2.16093 4.02586 2.15385 3.12769 2.16447 2.23001C2.17661 1.19699 3.1255 0.274215 4.18971 0.267325C5.73798 0.257482 7.28675 0.264865 8.83553 0.264865C8.83553 0.265357 8.83553 0.265357 8.83553 0.264865Z" fill="#324AA0"/>
                </svg>
              </div>
              <div>05</div>
            </div>
            <div class="col-4 d-flex justify-content-center align-items-center custom-br-sty">
              <div class="d-flex justify-content-center align-items-center">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"style="margin-right:10px;">
                  <g clip-path="url(#clip0_77_1116)">
                  <path d="M3.02364 17.2622C2.7902 17.0315 2.55677 16.8004 2.31817 16.5645C2.53895 16.363 2.75927 16.1616 2.99739 15.9447C2.91255 15.8889 2.86755 15.8583 2.82161 15.8296C1.71114 15.135 1.12802 14.1601 1.09286 12.9015C1.0788 12.4043 1.09052 11.9067 1.09052 11.3972H9.52286V12.8696H14.7972V11.3967H16.901C16.9043 11.4388 16.9104 11.4813 16.9099 11.5238C16.9015 12.1042 16.9329 12.6881 16.8743 13.2641C16.7622 14.3669 16.1665 15.2102 15.1952 15.8216C15.1469 15.8521 15.0972 15.8809 15.0415 15.9146C15.2655 16.1231 15.4844 16.3267 15.7104 16.537C15.4507 16.7938 15.214 17.028 14.9768 17.2617H14.9416C14.6505 16.9824 14.3571 16.7052 14.0702 16.4219C13.9825 16.3356 13.9038 16.2993 13.7679 16.3219C13.556 16.3564 13.3371 16.3635 13.121 16.3639C10.3741 16.3666 7.62723 16.3666 4.88036 16.3635C4.6413 16.3635 4.4027 16.3289 4.16317 16.3174C4.11208 16.3148 4.0427 16.325 4.00942 16.3559C3.68927 16.6548 3.37473 16.9594 3.0588 17.2622H3.02364Z" fill="#324AA0"/>
                  <path d="M5.0625 0.262207C5.37234 0.355618 5.70094 0.413613 5.98875 0.549525C6.69703 0.88377 7.14094 1.43716 7.33828 2.16143C7.36547 2.26148 7.40578 2.30442 7.51453 2.32965C8.69016 2.59926 9.51656 3.58872 9.52734 4.73002C9.52875 4.89471 9.52734 5.05939 9.52734 5.23338H4.27219C4.10437 3.95307 4.77047 2.7064 6.27375 2.31195C6.17344 1.84002 5.66812 1.35791 5.10469 1.30213C4.56703 1.249 4.01344 1.23439 3.47766 1.29239C2.685 1.37827 2.14781 2.00958 2.14594 2.76749C2.14172 4.23861 2.14453 5.71018 2.14453 7.18129C2.14453 7.24682 2.14453 7.31278 2.14453 7.38981H1.08984V7.2114C1.08984 5.75135 1.08984 4.29085 1.08984 2.8308C1.09031 1.51242 1.97156 0.522077 3.34875 0.289655C3.37031 0.286113 3.38953 0.271947 3.41016 0.26265C3.96094 0.26265 4.51172 0.26265 5.0625 0.26265V0.262207Z" fill="#324AA0"/>
                  <path d="M0 9.227C0.01125 9.20177 0.024375 9.17698 0.0328125 9.1513C0.190781 8.66166 0.566719 8.39781 1.11516 8.39737C2.74922 8.39648 4.38281 8.39737 6.01688 8.39737C7.11797 8.39737 8.21859 8.39737 9.31969 8.39737C9.3825 8.39737 9.44578 8.39737 9.51797 8.39737V10.3896H9.31969C6.64359 10.3896 3.96703 10.3803 1.29094 10.3962C0.639844 10.4002 0.175313 10.1673 0 9.55948C0 9.4488 0 9.33812 0 9.22744L0 9.227Z" fill="#324AA0"/>
                  <path d="M17.9999 9.55915C17.9024 9.73269 17.8283 9.9235 17.7018 10.0753C17.533 10.2781 17.2822 10.3813 17.0085 10.3844C16.289 10.3923 15.5694 10.3866 14.8499 10.3857C14.8396 10.3857 14.8293 10.3782 14.8101 10.3706V8.3966C14.8677 8.3966 14.9291 8.3966 14.9905 8.3966C15.5638 8.3966 16.138 8.41386 16.7104 8.39173C17.2926 8.36915 17.7937 8.54977 18.0004 9.22667V9.55871L17.9999 9.55915Z" fill="#324AA0"/>
                  <path d="M10.5822 11.8713C10.5822 11.2679 10.5822 10.6764 10.5822 10.0849C10.5822 9.53731 10.5808 8.98968 10.5822 8.44161C10.5845 7.82492 11.0336 7.40302 11.6894 7.4008C12.0348 7.39947 12.3808 7.3946 12.7262 7.40302C13.2639 7.41541 13.7317 7.82138 13.7383 8.32562C13.7542 9.50322 13.7434 10.6813 13.7434 11.8708H10.5817L10.5822 11.8713Z" fill="#324AA0"/>
                  </g>
                  <defs>
                  <clipPath id="clip0_77_1116">
                  <rect width="18" height="17" fill="white" transform="translate(0 0.262207)"/>
                  </clipPath>
                  </defs>
                </svg>
              </div>
              <div>03</div>
            </div>
            <div class="col-4 d-flex justify-content-center align-items-center">
              <div class="d-flex justify-content-center align-items-center">
                <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg"style="margin-right:10px;">
                <g clip-path="url(#clip0_77_1124)">
                <path d="M8.90674 0.762207C9.28174 0.762207 9.65674 0.762207 10.0317 0.762207C10.0767 0.772072 10.1217 0.784285 10.1672 0.791331C10.6289 0.863201 11.0977 0.905478 11.5524 1.00976C15.0188 1.80221 17.7455 4.7038 18.3328 8.2123C18.3877 8.54065 18.4242 8.87181 18.4692 9.20157V10.3266C18.4589 10.3778 18.443 10.4285 18.4392 10.4802C18.3675 11.4338 18.1486 12.3521 17.7774 13.2334C16.0842 17.252 11.85 19.464 7.57783 18.5635C4.00971 17.8105 1.21408 14.9066 0.605645 11.3154C0.549863 10.9875 0.514238 10.6559 0.469238 10.3261C0.469238 9.95128 0.469238 9.57596 0.469238 9.2011C0.526895 8.80229 0.569551 8.40113 0.643613 8.00514C1.31533 4.41867 4.30643 1.49218 7.9008 0.900781C8.23455 0.845821 8.57158 0.807772 8.90674 0.762207ZM8.06393 7.79376C8.06393 7.02526 8.69205 6.39252 9.45799 6.38923C10.2314 6.38594 10.8408 6.98017 10.875 7.77074C10.89 8.11882 11.1253 8.36074 11.4455 8.35651C11.7661 8.35228 12.0136 8.08453 11.9958 7.73457C11.9855 7.53164 11.9616 7.32402 11.9058 7.12907C11.6606 6.27603 11.1136 5.6959 10.2764 5.40137C10.1011 5.33983 10.0083 5.25716 10.0299 5.06222C10.0425 4.94666 10.0346 4.82781 10.0317 4.71085C10.0238 4.38156 9.78143 4.13636 9.46736 4.1373C9.16643 4.1387 8.92174 4.38391 8.90861 4.70145C8.90393 4.81842 8.89643 4.93726 8.90955 5.05282C8.93299 5.25481 8.83971 5.34265 8.65502 5.40419C7.04908 5.93593 6.41861 7.90556 7.41986 9.2725C7.93127 9.97101 8.63346 10.3106 9.49971 10.3285C10.29 10.3445 10.8952 10.9927 10.8746 11.7851C10.8549 12.5442 10.2014 13.1549 9.42893 13.1375C8.68596 13.1206 8.09768 12.525 8.06439 11.756C8.04939 11.4079 7.81361 11.166 7.49393 11.1703C7.17283 11.1745 6.9258 11.4418 6.94361 11.7917C6.95393 11.9947 6.97689 12.2027 7.03314 12.3972C7.28158 13.2564 7.83377 13.8374 8.67986 14.1301C8.84158 14.186 8.92783 14.2658 8.91002 14.4462C8.8983 14.5679 8.9058 14.6924 8.90814 14.815C8.91564 15.1443 9.15799 15.3899 9.47158 15.389C9.77158 15.3881 10.0172 15.1419 10.0308 14.8244C10.0355 14.7191 10.0322 14.6135 10.0322 14.5078C10.0322 14.3142 10.1224 14.1854 10.3027 14.1212C11.5341 13.6824 12.2283 12.4108 11.9302 11.1393C11.6696 10.0269 10.6678 9.22506 9.51002 9.2011C8.68221 9.18419 8.06439 8.58245 8.06486 7.79329L8.06393 7.79376Z" fill="#324AA0"/>
                </g>
                <defs>
                <clipPath id="clip0_77_1124">
                <rect width="18" height="18" fill="white" transform="translate(0.469238 0.762207)"/>
                </clipPath>
                </defs>
                </svg>
              </div>
              <div>$40000</div>
            </div>
          </div>

          <div class="d-flex" style="margin:16px;gap: 10px;">
            <div class="d-flex align-items-center w-50">
              <buttom class="custom-btn-sty w-100">Buy</button>
            </div>
            <div class="d-flex align-items-center w-50">
              <buttom class="custom-btn-sty w-100" style="background-color:#fff;border:1px solid #324AA0;color:#324AA0;">Learn More</button>
            </div>
          </div>

        </div>

      </div>

      <div class="col-12 col-md-4 col-lg-3 mb-3">
        <div class="d-flex flex-column" style="border:1px solid #CCCCCC;border-radius:20px;padding:16px;">
          <div class="d-flex justify-content-center align-items-center" style="position:relative;">
            <img src="https://images.pexels.com/photos/112460/pexels-photo-112460.jpeg" class="customCard-img"/>
            <div class="likebtn">
              <svg width="20" height="20" viewBox="0 0 22 20" fill="#324AA0" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_77_1133)">
                <path d="M0.833496 6.92259C0.833496 6.60298 0.833496 6.28336 0.833496 5.96374C0.845817 5.88958 0.862759 5.81647 0.87046 5.74178C0.985458 4.58813 1.34226 3.52483 1.98604 2.56128C3.29004 0.61015 5.68755 -0.349224 7.94593 0.194961C9.2412 0.507267 10.2541 1.26401 11.0842 2.29806C11.1638 2.39729 11.2403 2.49965 11.3281 2.6135C11.4236 2.48869 11.496 2.38789 11.574 2.29232C13.0069 0.537035 14.8109 -0.278721 17.0508 0.160492C19.2122 0.58456 20.6512 1.93876 21.3925 4.00948C22.2124 6.29903 21.8617 8.47681 20.5675 10.5099C19.8493 11.638 18.9698 12.6303 17.9903 13.5197C16.0687 15.2635 14.1194 16.9743 12.1742 18.691C11.6223 19.1777 11.0093 19.1558 10.4343 18.6534C8.93727 17.3446 7.43922 16.0369 5.95091 14.7177C4.69774 13.6074 3.48205 12.4574 2.48403 11.0949C1.8346 10.2081 1.31351 9.25183 1.05425 8.1692C0.956708 7.75976 0.905883 7.3383 0.833496 6.92259Z" fill="#324AA0"/>
                </g>
                <defs>
                <clipPath id="clip0_77_1133">
                <rect width="21" height="19" fill="white" transform="translate(0.833496 0.0437012)"/>
                </clipPath>
                </defs>
              </svg>
            </div>
          </div>
          <div style="font-weight: 700;font-size: 18px;margin: 13px;">
           mercedes benz
          </div>
          <div class="row content_details">
            <div class="col-4 d-flex justify-content-center align-items-center custom-br-sty">
              <div class="d-flex justify-content-center align-items-center">
                <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg"style="margin-right:10px;">
                  <path d="M8.83736 12.075C6.56225 12.075 4.28663 12.075 2.01152 12.075C1.64431 12.075 1.54618 12.1641 1.55528 12.5209C1.56135 12.7591 1.52949 12.9756 1.32059 13.1311C1.12788 13.2748 0.914429 13.3024 0.696933 13.204C0.482472 13.1065 0.34287 12.9392 0.342364 12.7005C0.339329 11.2433 0.320614 9.78502 0.34894 8.32826C0.37423 7.02309 1.53505 5.80108 2.86684 5.61997C3.05348 5.59438 3.24366 5.58158 3.43233 5.58158C7.03467 5.57962 10.6375 5.57962 14.2399 5.58011C15.86 5.58011 17.1285 6.67317 17.3237 8.23525C17.3298 8.28397 17.3313 8.33318 17.3318 8.3824C17.3329 9.80914 17.3344 11.2359 17.3329 12.6626C17.3323 12.9643 17.1057 13.2182 16.8164 13.2532C16.5119 13.2901 16.2241 13.1174 16.1467 12.8319C16.1169 12.7217 16.124 12.6011 16.1225 12.4849C16.1184 12.1778 16.0157 12.075 15.7011 12.075C13.4134 12.075 11.1256 12.075 8.83736 12.075Z" fill="#324AA0"/>
                  <path d="M8.83553 0.264865C10.3337 0.264865 11.8314 0.264372 13.3296 0.264865C14.5966 0.265849 15.5116 1.15811 15.5132 2.39341C15.5142 3.22366 15.5137 4.05391 15.5132 4.88417C15.5132 5.12876 15.4656 5.15091 15.2168 5.10957C14.888 5.05543 14.5562 5.01655 14.2239 4.99244C14.0807 4.9821 14.0059 4.94224 13.9725 4.80345C13.8106 4.13659 13.3787 3.80735 12.6741 3.80636C12.0292 3.80587 11.3848 3.80489 10.7399 3.80636C10.0682 3.80784 9.61599 4.15973 9.47284 4.7946C9.44249 4.92895 9.37927 4.9949 9.22803 4.98949C8.96906 4.98014 8.70958 4.98161 8.45061 4.98899C8.31404 4.99293 8.24374 4.94519 8.20934 4.8133C8.02877 4.11592 7.61654 3.80587 6.8811 3.80587C6.24884 3.80538 5.61709 3.80489 4.98484 3.80587C4.29846 3.80685 3.8574 4.14742 3.70363 4.8005C3.67126 4.9383 3.59842 4.98014 3.45427 4.99195C3.10982 5.01951 2.76638 5.06577 2.42496 5.11843C2.22719 5.14894 2.16244 5.11449 2.16194 4.92354C2.16093 4.02586 2.15385 3.12769 2.16447 2.23001C2.17661 1.19699 3.1255 0.274215 4.18971 0.267325C5.73798 0.257482 7.28675 0.264865 8.83553 0.264865C8.83553 0.265357 8.83553 0.265357 8.83553 0.264865Z" fill="#324AA0"/>
                </svg>
              </div>
              <div>05</div>
            </div>
            <div class="col-4 d-flex justify-content-center align-items-center custom-br-sty">
              <div class="d-flex justify-content-center align-items-center">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"style="margin-right:10px;">
                  <g clip-path="url(#clip0_77_1116)">
                  <path d="M3.02364 17.2622C2.7902 17.0315 2.55677 16.8004 2.31817 16.5645C2.53895 16.363 2.75927 16.1616 2.99739 15.9447C2.91255 15.8889 2.86755 15.8583 2.82161 15.8296C1.71114 15.135 1.12802 14.1601 1.09286 12.9015C1.0788 12.4043 1.09052 11.9067 1.09052 11.3972H9.52286V12.8696H14.7972V11.3967H16.901C16.9043 11.4388 16.9104 11.4813 16.9099 11.5238C16.9015 12.1042 16.9329 12.6881 16.8743 13.2641C16.7622 14.3669 16.1665 15.2102 15.1952 15.8216C15.1469 15.8521 15.0972 15.8809 15.0415 15.9146C15.2655 16.1231 15.4844 16.3267 15.7104 16.537C15.4507 16.7938 15.214 17.028 14.9768 17.2617H14.9416C14.6505 16.9824 14.3571 16.7052 14.0702 16.4219C13.9825 16.3356 13.9038 16.2993 13.7679 16.3219C13.556 16.3564 13.3371 16.3635 13.121 16.3639C10.3741 16.3666 7.62723 16.3666 4.88036 16.3635C4.6413 16.3635 4.4027 16.3289 4.16317 16.3174C4.11208 16.3148 4.0427 16.325 4.00942 16.3559C3.68927 16.6548 3.37473 16.9594 3.0588 17.2622H3.02364Z" fill="#324AA0"/>
                  <path d="M5.0625 0.262207C5.37234 0.355618 5.70094 0.413613 5.98875 0.549525C6.69703 0.88377 7.14094 1.43716 7.33828 2.16143C7.36547 2.26148 7.40578 2.30442 7.51453 2.32965C8.69016 2.59926 9.51656 3.58872 9.52734 4.73002C9.52875 4.89471 9.52734 5.05939 9.52734 5.23338H4.27219C4.10437 3.95307 4.77047 2.7064 6.27375 2.31195C6.17344 1.84002 5.66812 1.35791 5.10469 1.30213C4.56703 1.249 4.01344 1.23439 3.47766 1.29239C2.685 1.37827 2.14781 2.00958 2.14594 2.76749C2.14172 4.23861 2.14453 5.71018 2.14453 7.18129C2.14453 7.24682 2.14453 7.31278 2.14453 7.38981H1.08984V7.2114C1.08984 5.75135 1.08984 4.29085 1.08984 2.8308C1.09031 1.51242 1.97156 0.522077 3.34875 0.289655C3.37031 0.286113 3.38953 0.271947 3.41016 0.26265C3.96094 0.26265 4.51172 0.26265 5.0625 0.26265V0.262207Z" fill="#324AA0"/>
                  <path d="M0 9.227C0.01125 9.20177 0.024375 9.17698 0.0328125 9.1513C0.190781 8.66166 0.566719 8.39781 1.11516 8.39737C2.74922 8.39648 4.38281 8.39737 6.01688 8.39737C7.11797 8.39737 8.21859 8.39737 9.31969 8.39737C9.3825 8.39737 9.44578 8.39737 9.51797 8.39737V10.3896H9.31969C6.64359 10.3896 3.96703 10.3803 1.29094 10.3962C0.639844 10.4002 0.175313 10.1673 0 9.55948C0 9.4488 0 9.33812 0 9.22744L0 9.227Z" fill="#324AA0"/>
                  <path d="M17.9999 9.55915C17.9024 9.73269 17.8283 9.9235 17.7018 10.0753C17.533 10.2781 17.2822 10.3813 17.0085 10.3844C16.289 10.3923 15.5694 10.3866 14.8499 10.3857C14.8396 10.3857 14.8293 10.3782 14.8101 10.3706V8.3966C14.8677 8.3966 14.9291 8.3966 14.9905 8.3966C15.5638 8.3966 16.138 8.41386 16.7104 8.39173C17.2926 8.36915 17.7937 8.54977 18.0004 9.22667V9.55871L17.9999 9.55915Z" fill="#324AA0"/>
                  <path d="M10.5822 11.8713C10.5822 11.2679 10.5822 10.6764 10.5822 10.0849C10.5822 9.53731 10.5808 8.98968 10.5822 8.44161C10.5845 7.82492 11.0336 7.40302 11.6894 7.4008C12.0348 7.39947 12.3808 7.3946 12.7262 7.40302C13.2639 7.41541 13.7317 7.82138 13.7383 8.32562C13.7542 9.50322 13.7434 10.6813 13.7434 11.8708H10.5817L10.5822 11.8713Z" fill="#324AA0"/>
                  </g>
                  <defs>
                  <clipPath id="clip0_77_1116">
                  <rect width="18" height="17" fill="white" transform="translate(0 0.262207)"/>
                  </clipPath>
                  </defs>
                </svg>
              </div>
              <div>03</div>
            </div>
            <div class="col-4 d-flex justify-content-center align-items-center">
              <div class="d-flex justify-content-center align-items-center">
                <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg"style="margin-right:10px;">
                <g clip-path="url(#clip0_77_1124)">
                <path d="M8.90674 0.762207C9.28174 0.762207 9.65674 0.762207 10.0317 0.762207C10.0767 0.772072 10.1217 0.784285 10.1672 0.791331C10.6289 0.863201 11.0977 0.905478 11.5524 1.00976C15.0188 1.80221 17.7455 4.7038 18.3328 8.2123C18.3877 8.54065 18.4242 8.87181 18.4692 9.20157V10.3266C18.4589 10.3778 18.443 10.4285 18.4392 10.4802C18.3675 11.4338 18.1486 12.3521 17.7774 13.2334C16.0842 17.252 11.85 19.464 7.57783 18.5635C4.00971 17.8105 1.21408 14.9066 0.605645 11.3154C0.549863 10.9875 0.514238 10.6559 0.469238 10.3261C0.469238 9.95128 0.469238 9.57596 0.469238 9.2011C0.526895 8.80229 0.569551 8.40113 0.643613 8.00514C1.31533 4.41867 4.30643 1.49218 7.9008 0.900781C8.23455 0.845821 8.57158 0.807772 8.90674 0.762207ZM8.06393 7.79376C8.06393 7.02526 8.69205 6.39252 9.45799 6.38923C10.2314 6.38594 10.8408 6.98017 10.875 7.77074C10.89 8.11882 11.1253 8.36074 11.4455 8.35651C11.7661 8.35228 12.0136 8.08453 11.9958 7.73457C11.9855 7.53164 11.9616 7.32402 11.9058 7.12907C11.6606 6.27603 11.1136 5.6959 10.2764 5.40137C10.1011 5.33983 10.0083 5.25716 10.0299 5.06222C10.0425 4.94666 10.0346 4.82781 10.0317 4.71085C10.0238 4.38156 9.78143 4.13636 9.46736 4.1373C9.16643 4.1387 8.92174 4.38391 8.90861 4.70145C8.90393 4.81842 8.89643 4.93726 8.90955 5.05282C8.93299 5.25481 8.83971 5.34265 8.65502 5.40419C7.04908 5.93593 6.41861 7.90556 7.41986 9.2725C7.93127 9.97101 8.63346 10.3106 9.49971 10.3285C10.29 10.3445 10.8952 10.9927 10.8746 11.7851C10.8549 12.5442 10.2014 13.1549 9.42893 13.1375C8.68596 13.1206 8.09768 12.525 8.06439 11.756C8.04939 11.4079 7.81361 11.166 7.49393 11.1703C7.17283 11.1745 6.9258 11.4418 6.94361 11.7917C6.95393 11.9947 6.97689 12.2027 7.03314 12.3972C7.28158 13.2564 7.83377 13.8374 8.67986 14.1301C8.84158 14.186 8.92783 14.2658 8.91002 14.4462C8.8983 14.5679 8.9058 14.6924 8.90814 14.815C8.91564 15.1443 9.15799 15.3899 9.47158 15.389C9.77158 15.3881 10.0172 15.1419 10.0308 14.8244C10.0355 14.7191 10.0322 14.6135 10.0322 14.5078C10.0322 14.3142 10.1224 14.1854 10.3027 14.1212C11.5341 13.6824 12.2283 12.4108 11.9302 11.1393C11.6696 10.0269 10.6678 9.22506 9.51002 9.2011C8.68221 9.18419 8.06439 8.58245 8.06486 7.79329L8.06393 7.79376Z" fill="#324AA0"/>
                </g>
                <defs>
                <clipPath id="clip0_77_1124">
                <rect width="18" height="18" fill="white" transform="translate(0.469238 0.762207)"/>
                </clipPath>
                </defs>
                </svg>
              </div>
              <div>$40000</div>
            </div>
          </div>

          <div class="d-flex" style="margin:16px;gap: 10px;">
            <div class="d-flex align-items-center w-50">
              <buttom class="custom-btn-sty w-100">Buy</button>
            </div>
            <div class="d-flex align-items-center w-50">
              <buttom class="custom-btn-sty w-100" style="background-color:#fff;border:1px solid #324AA0;color:#324AA0;">Learn More</button>
            </div>
          </div>

        </div>
      </div>

      <div class="col-12 col-md-4 col-lg-3 mb-3">
        <div class="d-flex flex-column" style="border:1px solid #CCCCCC;border-radius:20px;padding:16px;">
          <div class="d-flex justify-content-center align-items-center" style="position:relative;">
            <img src="https://images.pexels.com/photos/112460/pexels-photo-112460.jpeg" class="customCard-img"/>
            <div class="likebtn">
              <svg width="20" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_77_1133)">
                <path d="M0.833496 6.92259C0.833496 6.60298 0.833496 6.28336 0.833496 5.96374C0.845817 5.88958 0.862759 5.81647 0.87046 5.74178C0.985458 4.58813 1.34226 3.52483 1.98604 2.56128C3.29004 0.61015 5.68755 -0.349224 7.94593 0.194961C9.2412 0.507267 10.2541 1.26401 11.0842 2.29806C11.1638 2.39729 11.2403 2.49965 11.3281 2.6135C11.4236 2.48869 11.496 2.38789 11.574 2.29232C13.0069 0.537035 14.8109 -0.278721 17.0508 0.160492C19.2122 0.58456 20.6512 1.93876 21.3925 4.00948C22.2124 6.29903 21.8617 8.47681 20.5675 10.5099C19.8493 11.638 18.9698 12.6303 17.9903 13.5197C16.0687 15.2635 14.1194 16.9743 12.1742 18.691C11.6223 19.1777 11.0093 19.1558 10.4343 18.6534C8.93727 17.3446 7.43922 16.0369 5.95091 14.7177C4.69774 13.6074 3.48205 12.4574 2.48403 11.0949C1.8346 10.2081 1.31351 9.25183 1.05425 8.1692C0.956708 7.75976 0.905883 7.3383 0.833496 6.92259Z" fill="#CCCCCC"/>
                </g>
                <defs>
                <clipPath id="clip0_77_1133">
                <rect width="21" height="19" fill="white" transform="translate(0.833496 0.0437012)"/>
                </clipPath>
                </defs>
              </svg>
            </div>
          </div>
          <div style="font-weight: 700;font-size: 18px;margin: 13px;">
           mercedes benz
          </div>
          <div class="row content_details">
            <div class="col-4 d-flex justify-content-center align-items-center custom-br-sty">
              <div class="d-flex justify-content-center align-items-center">
                <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg"style="margin-right:10px;">
                  <path d="M8.83736 12.075C6.56225 12.075 4.28663 12.075 2.01152 12.075C1.64431 12.075 1.54618 12.1641 1.55528 12.5209C1.56135 12.7591 1.52949 12.9756 1.32059 13.1311C1.12788 13.2748 0.914429 13.3024 0.696933 13.204C0.482472 13.1065 0.34287 12.9392 0.342364 12.7005C0.339329 11.2433 0.320614 9.78502 0.34894 8.32826C0.37423 7.02309 1.53505 5.80108 2.86684 5.61997C3.05348 5.59438 3.24366 5.58158 3.43233 5.58158C7.03467 5.57962 10.6375 5.57962 14.2399 5.58011C15.86 5.58011 17.1285 6.67317 17.3237 8.23525C17.3298 8.28397 17.3313 8.33318 17.3318 8.3824C17.3329 9.80914 17.3344 11.2359 17.3329 12.6626C17.3323 12.9643 17.1057 13.2182 16.8164 13.2532C16.5119 13.2901 16.2241 13.1174 16.1467 12.8319C16.1169 12.7217 16.124 12.6011 16.1225 12.4849C16.1184 12.1778 16.0157 12.075 15.7011 12.075C13.4134 12.075 11.1256 12.075 8.83736 12.075Z" fill="#324AA0"/>
                  <path d="M8.83553 0.264865C10.3337 0.264865 11.8314 0.264372 13.3296 0.264865C14.5966 0.265849 15.5116 1.15811 15.5132 2.39341C15.5142 3.22366 15.5137 4.05391 15.5132 4.88417C15.5132 5.12876 15.4656 5.15091 15.2168 5.10957C14.888 5.05543 14.5562 5.01655 14.2239 4.99244C14.0807 4.9821 14.0059 4.94224 13.9725 4.80345C13.8106 4.13659 13.3787 3.80735 12.6741 3.80636C12.0292 3.80587 11.3848 3.80489 10.7399 3.80636C10.0682 3.80784 9.61599 4.15973 9.47284 4.7946C9.44249 4.92895 9.37927 4.9949 9.22803 4.98949C8.96906 4.98014 8.70958 4.98161 8.45061 4.98899C8.31404 4.99293 8.24374 4.94519 8.20934 4.8133C8.02877 4.11592 7.61654 3.80587 6.8811 3.80587C6.24884 3.80538 5.61709 3.80489 4.98484 3.80587C4.29846 3.80685 3.8574 4.14742 3.70363 4.8005C3.67126 4.9383 3.59842 4.98014 3.45427 4.99195C3.10982 5.01951 2.76638 5.06577 2.42496 5.11843C2.22719 5.14894 2.16244 5.11449 2.16194 4.92354C2.16093 4.02586 2.15385 3.12769 2.16447 2.23001C2.17661 1.19699 3.1255 0.274215 4.18971 0.267325C5.73798 0.257482 7.28675 0.264865 8.83553 0.264865C8.83553 0.265357 8.83553 0.265357 8.83553 0.264865Z" fill="#324AA0"/>
                </svg>
              </div>
              <div>05</div>
            </div>
            <div class="col-4 d-flex justify-content-center align-items-center custom-br-sty">
              <div class="d-flex justify-content-center align-items-center">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"style="margin-right:10px;">
                  <g clip-path="url(#clip0_77_1116)">
                  <path d="M3.02364 17.2622C2.7902 17.0315 2.55677 16.8004 2.31817 16.5645C2.53895 16.363 2.75927 16.1616 2.99739 15.9447C2.91255 15.8889 2.86755 15.8583 2.82161 15.8296C1.71114 15.135 1.12802 14.1601 1.09286 12.9015C1.0788 12.4043 1.09052 11.9067 1.09052 11.3972H9.52286V12.8696H14.7972V11.3967H16.901C16.9043 11.4388 16.9104 11.4813 16.9099 11.5238C16.9015 12.1042 16.9329 12.6881 16.8743 13.2641C16.7622 14.3669 16.1665 15.2102 15.1952 15.8216C15.1469 15.8521 15.0972 15.8809 15.0415 15.9146C15.2655 16.1231 15.4844 16.3267 15.7104 16.537C15.4507 16.7938 15.214 17.028 14.9768 17.2617H14.9416C14.6505 16.9824 14.3571 16.7052 14.0702 16.4219C13.9825 16.3356 13.9038 16.2993 13.7679 16.3219C13.556 16.3564 13.3371 16.3635 13.121 16.3639C10.3741 16.3666 7.62723 16.3666 4.88036 16.3635C4.6413 16.3635 4.4027 16.3289 4.16317 16.3174C4.11208 16.3148 4.0427 16.325 4.00942 16.3559C3.68927 16.6548 3.37473 16.9594 3.0588 17.2622H3.02364Z" fill="#324AA0"/>
                  <path d="M5.0625 0.262207C5.37234 0.355618 5.70094 0.413613 5.98875 0.549525C6.69703 0.88377 7.14094 1.43716 7.33828 2.16143C7.36547 2.26148 7.40578 2.30442 7.51453 2.32965C8.69016 2.59926 9.51656 3.58872 9.52734 4.73002C9.52875 4.89471 9.52734 5.05939 9.52734 5.23338H4.27219C4.10437 3.95307 4.77047 2.7064 6.27375 2.31195C6.17344 1.84002 5.66812 1.35791 5.10469 1.30213C4.56703 1.249 4.01344 1.23439 3.47766 1.29239C2.685 1.37827 2.14781 2.00958 2.14594 2.76749C2.14172 4.23861 2.14453 5.71018 2.14453 7.18129C2.14453 7.24682 2.14453 7.31278 2.14453 7.38981H1.08984V7.2114C1.08984 5.75135 1.08984 4.29085 1.08984 2.8308C1.09031 1.51242 1.97156 0.522077 3.34875 0.289655C3.37031 0.286113 3.38953 0.271947 3.41016 0.26265C3.96094 0.26265 4.51172 0.26265 5.0625 0.26265V0.262207Z" fill="#324AA0"/>
                  <path d="M0 9.227C0.01125 9.20177 0.024375 9.17698 0.0328125 9.1513C0.190781 8.66166 0.566719 8.39781 1.11516 8.39737C2.74922 8.39648 4.38281 8.39737 6.01688 8.39737C7.11797 8.39737 8.21859 8.39737 9.31969 8.39737C9.3825 8.39737 9.44578 8.39737 9.51797 8.39737V10.3896H9.31969C6.64359 10.3896 3.96703 10.3803 1.29094 10.3962C0.639844 10.4002 0.175313 10.1673 0 9.55948C0 9.4488 0 9.33812 0 9.22744L0 9.227Z" fill="#324AA0"/>
                  <path d="M17.9999 9.55915C17.9024 9.73269 17.8283 9.9235 17.7018 10.0753C17.533 10.2781 17.2822 10.3813 17.0085 10.3844C16.289 10.3923 15.5694 10.3866 14.8499 10.3857C14.8396 10.3857 14.8293 10.3782 14.8101 10.3706V8.3966C14.8677 8.3966 14.9291 8.3966 14.9905 8.3966C15.5638 8.3966 16.138 8.41386 16.7104 8.39173C17.2926 8.36915 17.7937 8.54977 18.0004 9.22667V9.55871L17.9999 9.55915Z" fill="#324AA0"/>
                  <path d="M10.5822 11.8713C10.5822 11.2679 10.5822 10.6764 10.5822 10.0849C10.5822 9.53731 10.5808 8.98968 10.5822 8.44161C10.5845 7.82492 11.0336 7.40302 11.6894 7.4008C12.0348 7.39947 12.3808 7.3946 12.7262 7.40302C13.2639 7.41541 13.7317 7.82138 13.7383 8.32562C13.7542 9.50322 13.7434 10.6813 13.7434 11.8708H10.5817L10.5822 11.8713Z" fill="#324AA0"/>
                  </g>
                  <defs>
                  <clipPath id="clip0_77_1116">
                  <rect width="18" height="17" fill="white" transform="translate(0 0.262207)"/>
                  </clipPath>
                  </defs>
                </svg>
              </div>
              <div>03</div>
            </div>
            <div class="col-4 d-flex justify-content-center align-items-center">
              <div class="d-flex justify-content-center align-items-center">
                <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg"style="margin-right:10px;">
                <g clip-path="url(#clip0_77_1124)">
                <path d="M8.90674 0.762207C9.28174 0.762207 9.65674 0.762207 10.0317 0.762207C10.0767 0.772072 10.1217 0.784285 10.1672 0.791331C10.6289 0.863201 11.0977 0.905478 11.5524 1.00976C15.0188 1.80221 17.7455 4.7038 18.3328 8.2123C18.3877 8.54065 18.4242 8.87181 18.4692 9.20157V10.3266C18.4589 10.3778 18.443 10.4285 18.4392 10.4802C18.3675 11.4338 18.1486 12.3521 17.7774 13.2334C16.0842 17.252 11.85 19.464 7.57783 18.5635C4.00971 17.8105 1.21408 14.9066 0.605645 11.3154C0.549863 10.9875 0.514238 10.6559 0.469238 10.3261C0.469238 9.95128 0.469238 9.57596 0.469238 9.2011C0.526895 8.80229 0.569551 8.40113 0.643613 8.00514C1.31533 4.41867 4.30643 1.49218 7.9008 0.900781C8.23455 0.845821 8.57158 0.807772 8.90674 0.762207ZM8.06393 7.79376C8.06393 7.02526 8.69205 6.39252 9.45799 6.38923C10.2314 6.38594 10.8408 6.98017 10.875 7.77074C10.89 8.11882 11.1253 8.36074 11.4455 8.35651C11.7661 8.35228 12.0136 8.08453 11.9958 7.73457C11.9855 7.53164 11.9616 7.32402 11.9058 7.12907C11.6606 6.27603 11.1136 5.6959 10.2764 5.40137C10.1011 5.33983 10.0083 5.25716 10.0299 5.06222C10.0425 4.94666 10.0346 4.82781 10.0317 4.71085C10.0238 4.38156 9.78143 4.13636 9.46736 4.1373C9.16643 4.1387 8.92174 4.38391 8.90861 4.70145C8.90393 4.81842 8.89643 4.93726 8.90955 5.05282C8.93299 5.25481 8.83971 5.34265 8.65502 5.40419C7.04908 5.93593 6.41861 7.90556 7.41986 9.2725C7.93127 9.97101 8.63346 10.3106 9.49971 10.3285C10.29 10.3445 10.8952 10.9927 10.8746 11.7851C10.8549 12.5442 10.2014 13.1549 9.42893 13.1375C8.68596 13.1206 8.09768 12.525 8.06439 11.756C8.04939 11.4079 7.81361 11.166 7.49393 11.1703C7.17283 11.1745 6.9258 11.4418 6.94361 11.7917C6.95393 11.9947 6.97689 12.2027 7.03314 12.3972C7.28158 13.2564 7.83377 13.8374 8.67986 14.1301C8.84158 14.186 8.92783 14.2658 8.91002 14.4462C8.8983 14.5679 8.9058 14.6924 8.90814 14.815C8.91564 15.1443 9.15799 15.3899 9.47158 15.389C9.77158 15.3881 10.0172 15.1419 10.0308 14.8244C10.0355 14.7191 10.0322 14.6135 10.0322 14.5078C10.0322 14.3142 10.1224 14.1854 10.3027 14.1212C11.5341 13.6824 12.2283 12.4108 11.9302 11.1393C11.6696 10.0269 10.6678 9.22506 9.51002 9.2011C8.68221 9.18419 8.06439 8.58245 8.06486 7.79329L8.06393 7.79376Z" fill="#324AA0"/>
                </g>
                <defs>
                <clipPath id="clip0_77_1124">
                <rect width="18" height="18" fill="white" transform="translate(0.469238 0.762207)"/>
                </clipPath>
                </defs>
                </svg>
              </div>
              <div>$40000</div>
            </div>
          </div>

          <div class="d-flex" style="margin:16px;gap: 10px;">
            <div class="d-flex align-items-center w-50">
              <buttom class="custom-btn-sty w-100">Buy</button>
            </div>
            <div class="d-flex align-items-center w-50">
              <buttom class="custom-btn-sty w-100" style="background-color:#fff;border:1px solid #324AA0;color:#324AA0;">Learn More</button>
            </div>
          </div>

        </div>
      </div>
      
      <div class="col-12 col-md-4 col-lg-3 mb-3">
        <div class="d-flex flex-column" style="border:1px solid #CCCCCC;border-radius:20px;padding:16px;">
          <div class="d-flex justify-content-center align-items-center" style="position:relative;">
            <img src="https://images.pexels.com/photos/112460/pexels-photo-112460.jpeg" class="customCard-img"/>
            <div class="likebtn">
              <svg width="20" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_77_1133)">
                <path d="M0.833496 6.92259C0.833496 6.60298 0.833496 6.28336 0.833496 5.96374C0.845817 5.88958 0.862759 5.81647 0.87046 5.74178C0.985458 4.58813 1.34226 3.52483 1.98604 2.56128C3.29004 0.61015 5.68755 -0.349224 7.94593 0.194961C9.2412 0.507267 10.2541 1.26401 11.0842 2.29806C11.1638 2.39729 11.2403 2.49965 11.3281 2.6135C11.4236 2.48869 11.496 2.38789 11.574 2.29232C13.0069 0.537035 14.8109 -0.278721 17.0508 0.160492C19.2122 0.58456 20.6512 1.93876 21.3925 4.00948C22.2124 6.29903 21.8617 8.47681 20.5675 10.5099C19.8493 11.638 18.9698 12.6303 17.9903 13.5197C16.0687 15.2635 14.1194 16.9743 12.1742 18.691C11.6223 19.1777 11.0093 19.1558 10.4343 18.6534C8.93727 17.3446 7.43922 16.0369 5.95091 14.7177C4.69774 13.6074 3.48205 12.4574 2.48403 11.0949C1.8346 10.2081 1.31351 9.25183 1.05425 8.1692C0.956708 7.75976 0.905883 7.3383 0.833496 6.92259Z" fill="#CCCCCC"/>
                </g>
                <defs>
                <clipPath id="clip0_77_1133">
                <rect width="21" height="19" fill="white" transform="translate(0.833496 0.0437012)"/>
                </clipPath>
                </defs>
              </svg>
            </div>
          </div>
          <div style="font-weight: 700;font-size: 18px;margin: 13px;">
           mercedes benz
          </div>
          <div class="row content_details">
            <div class="col-4 d-flex justify-content-center align-items-center custom-br-sty">
              <div class="d-flex justify-content-center align-items-center">
                <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg"style="margin-right:10px;">
                  <path d="M8.83736 12.075C6.56225 12.075 4.28663 12.075 2.01152 12.075C1.64431 12.075 1.54618 12.1641 1.55528 12.5209C1.56135 12.7591 1.52949 12.9756 1.32059 13.1311C1.12788 13.2748 0.914429 13.3024 0.696933 13.204C0.482472 13.1065 0.34287 12.9392 0.342364 12.7005C0.339329 11.2433 0.320614 9.78502 0.34894 8.32826C0.37423 7.02309 1.53505 5.80108 2.86684 5.61997C3.05348 5.59438 3.24366 5.58158 3.43233 5.58158C7.03467 5.57962 10.6375 5.57962 14.2399 5.58011C15.86 5.58011 17.1285 6.67317 17.3237 8.23525C17.3298 8.28397 17.3313 8.33318 17.3318 8.3824C17.3329 9.80914 17.3344 11.2359 17.3329 12.6626C17.3323 12.9643 17.1057 13.2182 16.8164 13.2532C16.5119 13.2901 16.2241 13.1174 16.1467 12.8319C16.1169 12.7217 16.124 12.6011 16.1225 12.4849C16.1184 12.1778 16.0157 12.075 15.7011 12.075C13.4134 12.075 11.1256 12.075 8.83736 12.075Z" fill="#324AA0"/>
                  <path d="M8.83553 0.264865C10.3337 0.264865 11.8314 0.264372 13.3296 0.264865C14.5966 0.265849 15.5116 1.15811 15.5132 2.39341C15.5142 3.22366 15.5137 4.05391 15.5132 4.88417C15.5132 5.12876 15.4656 5.15091 15.2168 5.10957C14.888 5.05543 14.5562 5.01655 14.2239 4.99244C14.0807 4.9821 14.0059 4.94224 13.9725 4.80345C13.8106 4.13659 13.3787 3.80735 12.6741 3.80636C12.0292 3.80587 11.3848 3.80489 10.7399 3.80636C10.0682 3.80784 9.61599 4.15973 9.47284 4.7946C9.44249 4.92895 9.37927 4.9949 9.22803 4.98949C8.96906 4.98014 8.70958 4.98161 8.45061 4.98899C8.31404 4.99293 8.24374 4.94519 8.20934 4.8133C8.02877 4.11592 7.61654 3.80587 6.8811 3.80587C6.24884 3.80538 5.61709 3.80489 4.98484 3.80587C4.29846 3.80685 3.8574 4.14742 3.70363 4.8005C3.67126 4.9383 3.59842 4.98014 3.45427 4.99195C3.10982 5.01951 2.76638 5.06577 2.42496 5.11843C2.22719 5.14894 2.16244 5.11449 2.16194 4.92354C2.16093 4.02586 2.15385 3.12769 2.16447 2.23001C2.17661 1.19699 3.1255 0.274215 4.18971 0.267325C5.73798 0.257482 7.28675 0.264865 8.83553 0.264865C8.83553 0.265357 8.83553 0.265357 8.83553 0.264865Z" fill="#324AA0"/>
                </svg>
              </div>
              <div>05</div>
            </div>
            <div class="col-4 d-flex justify-content-center align-items-center custom-br-sty">
              <div class="d-flex justify-content-center align-items-center">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"style="margin-right:10px;">
                  <g clip-path="url(#clip0_77_1116)">
                  <path d="M3.02364 17.2622C2.7902 17.0315 2.55677 16.8004 2.31817 16.5645C2.53895 16.363 2.75927 16.1616 2.99739 15.9447C2.91255 15.8889 2.86755 15.8583 2.82161 15.8296C1.71114 15.135 1.12802 14.1601 1.09286 12.9015C1.0788 12.4043 1.09052 11.9067 1.09052 11.3972H9.52286V12.8696H14.7972V11.3967H16.901C16.9043 11.4388 16.9104 11.4813 16.9099 11.5238C16.9015 12.1042 16.9329 12.6881 16.8743 13.2641C16.7622 14.3669 16.1665 15.2102 15.1952 15.8216C15.1469 15.8521 15.0972 15.8809 15.0415 15.9146C15.2655 16.1231 15.4844 16.3267 15.7104 16.537C15.4507 16.7938 15.214 17.028 14.9768 17.2617H14.9416C14.6505 16.9824 14.3571 16.7052 14.0702 16.4219C13.9825 16.3356 13.9038 16.2993 13.7679 16.3219C13.556 16.3564 13.3371 16.3635 13.121 16.3639C10.3741 16.3666 7.62723 16.3666 4.88036 16.3635C4.6413 16.3635 4.4027 16.3289 4.16317 16.3174C4.11208 16.3148 4.0427 16.325 4.00942 16.3559C3.68927 16.6548 3.37473 16.9594 3.0588 17.2622H3.02364Z" fill="#324AA0"/>
                  <path d="M5.0625 0.262207C5.37234 0.355618 5.70094 0.413613 5.98875 0.549525C6.69703 0.88377 7.14094 1.43716 7.33828 2.16143C7.36547 2.26148 7.40578 2.30442 7.51453 2.32965C8.69016 2.59926 9.51656 3.58872 9.52734 4.73002C9.52875 4.89471 9.52734 5.05939 9.52734 5.23338H4.27219C4.10437 3.95307 4.77047 2.7064 6.27375 2.31195C6.17344 1.84002 5.66812 1.35791 5.10469 1.30213C4.56703 1.249 4.01344 1.23439 3.47766 1.29239C2.685 1.37827 2.14781 2.00958 2.14594 2.76749C2.14172 4.23861 2.14453 5.71018 2.14453 7.18129C2.14453 7.24682 2.14453 7.31278 2.14453 7.38981H1.08984V7.2114C1.08984 5.75135 1.08984 4.29085 1.08984 2.8308C1.09031 1.51242 1.97156 0.522077 3.34875 0.289655C3.37031 0.286113 3.38953 0.271947 3.41016 0.26265C3.96094 0.26265 4.51172 0.26265 5.0625 0.26265V0.262207Z" fill="#324AA0"/>
                  <path d="M0 9.227C0.01125 9.20177 0.024375 9.17698 0.0328125 9.1513C0.190781 8.66166 0.566719 8.39781 1.11516 8.39737C2.74922 8.39648 4.38281 8.39737 6.01688 8.39737C7.11797 8.39737 8.21859 8.39737 9.31969 8.39737C9.3825 8.39737 9.44578 8.39737 9.51797 8.39737V10.3896H9.31969C6.64359 10.3896 3.96703 10.3803 1.29094 10.3962C0.639844 10.4002 0.175313 10.1673 0 9.55948C0 9.4488 0 9.33812 0 9.22744L0 9.227Z" fill="#324AA0"/>
                  <path d="M17.9999 9.55915C17.9024 9.73269 17.8283 9.9235 17.7018 10.0753C17.533 10.2781 17.2822 10.3813 17.0085 10.3844C16.289 10.3923 15.5694 10.3866 14.8499 10.3857C14.8396 10.3857 14.8293 10.3782 14.8101 10.3706V8.3966C14.8677 8.3966 14.9291 8.3966 14.9905 8.3966C15.5638 8.3966 16.138 8.41386 16.7104 8.39173C17.2926 8.36915 17.7937 8.54977 18.0004 9.22667V9.55871L17.9999 9.55915Z" fill="#324AA0"/>
                  <path d="M10.5822 11.8713C10.5822 11.2679 10.5822 10.6764 10.5822 10.0849C10.5822 9.53731 10.5808 8.98968 10.5822 8.44161C10.5845 7.82492 11.0336 7.40302 11.6894 7.4008C12.0348 7.39947 12.3808 7.3946 12.7262 7.40302C13.2639 7.41541 13.7317 7.82138 13.7383 8.32562C13.7542 9.50322 13.7434 10.6813 13.7434 11.8708H10.5817L10.5822 11.8713Z" fill="#324AA0"/>
                  </g>
                  <defs>
                  <clipPath id="clip0_77_1116">
                  <rect width="18" height="17" fill="white" transform="translate(0 0.262207)"/>
                  </clipPath>
                  </defs>
                </svg>
              </div>
              <div>03</div>
            </div>
            <div class="col-4 d-flex justify-content-center align-items-center">
              <div class="d-flex justify-content-center align-items-center">
                <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg"style="margin-right:10px;">
                <g clip-path="url(#clip0_77_1124)">
                <path d="M8.90674 0.762207C9.28174 0.762207 9.65674 0.762207 10.0317 0.762207C10.0767 0.772072 10.1217 0.784285 10.1672 0.791331C10.6289 0.863201 11.0977 0.905478 11.5524 1.00976C15.0188 1.80221 17.7455 4.7038 18.3328 8.2123C18.3877 8.54065 18.4242 8.87181 18.4692 9.20157V10.3266C18.4589 10.3778 18.443 10.4285 18.4392 10.4802C18.3675 11.4338 18.1486 12.3521 17.7774 13.2334C16.0842 17.252 11.85 19.464 7.57783 18.5635C4.00971 17.8105 1.21408 14.9066 0.605645 11.3154C0.549863 10.9875 0.514238 10.6559 0.469238 10.3261C0.469238 9.95128 0.469238 9.57596 0.469238 9.2011C0.526895 8.80229 0.569551 8.40113 0.643613 8.00514C1.31533 4.41867 4.30643 1.49218 7.9008 0.900781C8.23455 0.845821 8.57158 0.807772 8.90674 0.762207ZM8.06393 7.79376C8.06393 7.02526 8.69205 6.39252 9.45799 6.38923C10.2314 6.38594 10.8408 6.98017 10.875 7.77074C10.89 8.11882 11.1253 8.36074 11.4455 8.35651C11.7661 8.35228 12.0136 8.08453 11.9958 7.73457C11.9855 7.53164 11.9616 7.32402 11.9058 7.12907C11.6606 6.27603 11.1136 5.6959 10.2764 5.40137C10.1011 5.33983 10.0083 5.25716 10.0299 5.06222C10.0425 4.94666 10.0346 4.82781 10.0317 4.71085C10.0238 4.38156 9.78143 4.13636 9.46736 4.1373C9.16643 4.1387 8.92174 4.38391 8.90861 4.70145C8.90393 4.81842 8.89643 4.93726 8.90955 5.05282C8.93299 5.25481 8.83971 5.34265 8.65502 5.40419C7.04908 5.93593 6.41861 7.90556 7.41986 9.2725C7.93127 9.97101 8.63346 10.3106 9.49971 10.3285C10.29 10.3445 10.8952 10.9927 10.8746 11.7851C10.8549 12.5442 10.2014 13.1549 9.42893 13.1375C8.68596 13.1206 8.09768 12.525 8.06439 11.756C8.04939 11.4079 7.81361 11.166 7.49393 11.1703C7.17283 11.1745 6.9258 11.4418 6.94361 11.7917C6.95393 11.9947 6.97689 12.2027 7.03314 12.3972C7.28158 13.2564 7.83377 13.8374 8.67986 14.1301C8.84158 14.186 8.92783 14.2658 8.91002 14.4462C8.8983 14.5679 8.9058 14.6924 8.90814 14.815C8.91564 15.1443 9.15799 15.3899 9.47158 15.389C9.77158 15.3881 10.0172 15.1419 10.0308 14.8244C10.0355 14.7191 10.0322 14.6135 10.0322 14.5078C10.0322 14.3142 10.1224 14.1854 10.3027 14.1212C11.5341 13.6824 12.2283 12.4108 11.9302 11.1393C11.6696 10.0269 10.6678 9.22506 9.51002 9.2011C8.68221 9.18419 8.06439 8.58245 8.06486 7.79329L8.06393 7.79376Z" fill="#324AA0"/>
                </g>
                <defs>
                <clipPath id="clip0_77_1124">
                <rect width="18" height="18" fill="white" transform="translate(0.469238 0.762207)"/>
                </clipPath>
                </defs>
                </svg>
              </div>
              <div>$40000</div>
            </div>
          </div>

          <div class="d-flex" style="margin:16px;gap: 10px;">
            <div class="d-flex align-items-center w-50">
              <buttom class="custom-btn-sty w-100">Buy</button>
            </div>
            <div class="d-flex align-items-center w-50">
              <buttom class="custom-btn-sty w-100" style="background-color:#fff;border:1px solid #324AA0;color:#324AA0;">Learn More</button>
            </div>
          </div>

        </div>
      </div>

      <div class="d-flex justify-content-center align-items-center my-3 mb-5">
        <button class="custom-btn-sty">Load More</button>
      </div>

    </div>



  </div>
  
  <!-- end hero area -->
  


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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

