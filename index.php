<?php  include('adminp/aconnection.php'); include_once 'adminp/functions.php'; ?>
<!DOCTYPE html>
<html lang="en">


<!-- Author: Collin IT Solution -->
<head>
    
     <!-- To link external styling file -->
       <title>Eyematic Electronics Pvt Ltd</title>
   <link rel="icon" href="adminp/files/assets/images/favicon1.png" type="image/x-icon">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
<style>
     body{
          font-family:sans-serif;
          }
      a {
           text-decoration:none;
           }
       a:hover {
           text-decoration:none;
           }
   .carousel-inner img {
                               width:100%;
                               height:auto;
                                }
         
            iframe{
                       width: 100%;
                       height: 100%;
                     }    
             .icon-box {
                      background-color: #ACC33F;
                      padding-right:5px;
                      border-right:10px solid white;
                      
                      }
          .icon-box i{
                        font-size:30px;
                        }
           .icon{
                    border-radius:50%;
                    border:3px solid black;
                    padding:15px 15px 10px 15px;
                           
                 }   
            .text{
                    padding:18px 0px 0px 10px;
                    font-size:17px;
                    font-weight:700;
                   }
         .icon-box{
                    padding-bottom:10px;
                    border-left: 6px solid white;
                   } 
          .banner-shop{
                       background-color:#ACC33F
                       }
           .banner-image img{
                             height:250px
                             }
           .banner-image a:hover{
                            text-decoration:none;
                             }
           .product-box a{
                          text-decoration:none;
                          color:green;
                          }
            .product-box a:hover{
                                   text-decoration:none;
                                   color:green;
                                   }
                              
        .product-box {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Adds box shadow */
    
            border-radius: 10px; /* Adds border radius */
            overflow: hidden; /* Ensures child elements respect the border radius */
        }
        
        /* Optional: You can style other elements inside product-box as needed */
        .product-box .img-wrapper {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            overflow: hidden;
              height: 300px; /* Fixed height for the image container */
            background-size: cover; /* Ensures the background image covers the container */
            background-position: center; /* Centers the background image */
            background-repeat: no-repeat; /* Prevents the background image from repeating */
            
        }
        .product-style-chair{
        border-top: 6px solid green;padding: 10px;
        border-top: 4px solid #acc33f;
        } 
        .background-slider { background:black;
    position: relative;
    width: 100%;
height:90vh;
    overflow: hidden;
}

.sliderr {
    position: absolute;
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center center;
    animation: slide 12s linear infinite;
    opacity: 0;
    transition: property 0.5s cubic-bezier(0.25, 0.1, 0.25, 1);
} #propertySearch{ max-width: 80%; }
@media (max-width:750px){ #propertySearch{ max-width: 100%; }
.property__search__wrapper{ text-align: center; padding-top: 15px;}
.background-slider {  height: 180px; }
}
.slide-content {
    position: absolute;
    top: 50%; /* Adjust this to vertically center your content */
    left: 50%; /* Adjust this to horizontally center your content */
    transform: translate(-50%, -50%);
    text-align: center; /* Adjust as needed */
}

.slide1 {
    background-image: url('images/Banner22.png'); /* Change to your image path */
    animation-delay: 0s;
}

.slide2 {
    background-image: url('images/sliderImage27.jpg'); /* Change to your image path */
    animation-delay: 4s;
}

.slide3 {
    background-image: url('images/website-banner-3.jpg'); /* Change to your image path */
    animation-delay: 8s;
}

@keyframes slide {
    0% {
        opacity: 0;
    }
    8.33% {
        opacity: 1;
    }
    25% {
        opacity: 1;
    }
    33.33% {
        opacity: 0;
    }
    100% {
        opacity: 0;
    }
}
    </style>

</head>
<body>
 <?php include 'header1.php';?>
 
  <div class="background-slider">
        <div class="sliderr slide1"></div>
        <div class="sliderr slide2"></div>
        <div class="sliderr slide3"></div>
    </div>
 
 

  
  <div class="container-fluid">
     <div class="row  mb-3">
       <div class="col-lg-3 icon-box mt-4 ps-4">
          <div class="d-inline-block icon">
              <i class="fa-solid fa-award"></i>
          </div>
          <div class="d-inline-block  text">
             <p>Up to 5 Years Warranty*
                 <br>& 10 Years Service Assurance
             </p>
          </div>
       </div>
       <div class="col-lg-3 icon-box mt-4 ps-5">
          <div class="d-inline-block icon">
             <i class="fa-solid fa-truck"></i>
          </div>
          <div class="d-inline-block  text"><p>Drive through/Free
             <br>Pickup in stores
          </p>
          </div>
       </div>
       <div class="col-lg-3 icon-box mt-4 ps-5">
          <div class="d-inline-block icon"><i class="fa-solid fa-hand-holding-medical"></i>
          </div>
          <div class="d-inline-block  text"><p>Safe Delivery at 
             <br>Your Doorstep
          </p>
          </div>
       </div>
       <div class="col-lg-3 icon-box mt-4 ps-5">
          <div class="d-inline-block icon"><i class="fa-solid fa-people-carry-box"></i>
          </div>
          <div class="d-inline-block  text"><p>Easy Replacement
             <br>All Over India
          </p>
          </div>
       </div>
     </div>
     </div>
     

 <!-- banner image start -->
    <section class="banner-section pt-4">
        <div>
            <div class="container-fluid">
                <div class="col-12 p-0">
                    <div class="title-3 text-center mt-4 mb-5">
                        <h3>Our Categories</h3>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-xl-3 col-lg-4 col-12">
                        <div class="banner-image">
                            <a href="products.php">
                                <img src="images/home-banner1.jpg"  class="w-100 img-fluid  lazyload "
                                    alt="">
                            </a>
                            <a href="products.php">
                            <div>
                              <h5 class="bg-secondary p-2 text-white text-center">Analog HD Camera</h5>
                            </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-12">
                        <div class="banner-image">
                            <a href="products.php">
                                <img src="images/home-banner22.jpg" class="w-100 img-fluid lazyload "
                                    alt="" >
                            </a>
                            <a href="products.php">
                            <div>
                              <h5 class="bg-secondary p-2 text-white text-center">IP Camera</h5>
                            </div>
                            </a>
                        </div>
                      </div>
                      <div class="col-xl-3 col-lg-4 col-12">
                        <div class="banner-image">
                            <a href="products.php#">
                                <img src="images/home-banner3.jpg" class="w-100 img-fluid lazyload "
                                    alt="">
                            </a>
                         </a>
                            <a href="products.php">
                            <div>
                              <h5 class="bg-secondary p-2 text-white text-center">CCTV Accessories</h5>
                            </div>
                            </a>
                        </div>
                    </div>
               
                     <div class="col-xl-3 col-lg-4 col-12">
                        <div class="banner-image">
                            <a href="products.php">
                                <img src="images/home-banner44.jfif" class="w-100 img-fluid  lazyload"
                                    alt="">
                            </a>
                            <a href="products.php">
                            <div>
                              <h5 class="bg-secondary p-2 text-white text-center">CCTV Cables</h5>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner image end -->

 <!-- New Arrival Section Start -->
    <section class="ratio_asos overflow-hidden">
        <div class="container-fluid p-sm-0 ms-3 me-3 mt-5">
            <div class="row m-0">
                <div class="col-12 p-0">
                    <div class="title-3 text-center pb-4">
                        <h4 class="text-success">Just for you</h4>
                        <h3>Our Collection</h3>
                    </div>
                </div>
            </div>

            <div class="row g-sm-4 g-3">
            
                  <?php
            $qo = "SELECT c.p_id, c.p_name, c.p_imgurl, b.eca_title
       FROM products_details AS c
       LEFT JOIN events_categories AS b ON c.eca_id=b.eca_id
      ORDER BY c.p_id DESC";
            
            $queryh = mysqli_query($conf, $qo);
            
            while ($res = mysqli_fetch_array($queryh)) {
                $e_id=$res['p_id'];
       ?>
            
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="product-box" style=" box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Adds box shadow */
            margin: 20px; /* Adds margin */
            border-radius: 10px; /* Adds border radius */
            overflow: hidden;">
                     
                            <div class="img-wrapper" style="background-image: url('<?php echo $res['p_imgurl']; ?>');">
                                                   
                        </div>
                        <div class="product-style-3 product-style-chair" style="padding: 10px;">
                            <div class="product-title d-block mb-0">
                                <p class="font-light mb-sm-2 mb-0"><?php echo htmlspecialchars((string) $res['eca_title']); ?></p>
                           
                                    <h5   class="font-default"><?php echo htmlspecialchars($res['p_name']); ?></h5>
                              
                            </div>
                     <!--       <div class="main-price">
                                <h5 class="theme-color">&#8377; <?php echo $res['p_saleprice']; ?> <del style="color: red;">&#8377; <?php echo $res['p_price']; ?> </del> </h5>
                            </div>-->  
                        </div>  
                    </div>
                </div>
<?php } ?>
            

            </div>
        </div>
    </section>
    <!-- New Arrival Section End -->
    
    
    <div class="container-fluid mt-5">
      <div class="row">
         <div class="col-lg-12  mb-3 center-heading">
            <h4 class="text-center">We Help You To Find Best CCTV Cameras</h4>
            <hr class="text-black 1px">
         </div>
      </div>
      <div class="row mt-4 mb-4">
         <div class="col-lg-6 class="embed-responsive embed-responsive-16by9">
             <iframe class="youtube-video embed-responsive-item"  src="https://www.youtube.com/embed/ug8uf8IGg0Y?feature=oembed&color&autopause=0&loop=0&muted=0&title=1&portrait=1&byline=1)"
              encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
             </iframe>
         </div>
         <div class="col-lg-6 about">
             <h2 class="pb-3 pt-2">Eyematic Technologies</h2>
             <p><strong>Eyematic Electronics</strong>is an India owned and operated business, providing electronic protection solutions
                 to its clients throughout the country.
              </p>
              <p>The Company is headed up by<strong> Mr. Shahid Hakim,</strong> who have a wealth of knowledge 
                 and experience in Loss Prevention and <strong>CCTV security systems.</strong> We specialist in
                 CCTV only providing well-known and well-supported CCTV products and services 
                 such as Pelco, Panasonic, Hikvision, Samsung, <strong>Sony CCTV cameras</strong> and other brands 
                 to the marketplace.
              </p>
              <p>
                We, <strong>Eyematic Electronics,</strong> are able to provide service and support on a national basis with our
                 In House team based in Pune and a network of experienced technical agents throughout India. 
                 These agents are controlled from a single point of contact in Pune which, experience shows,
                  provides many benefits to our clients and customers.
              </p>
              <div class="text-center">
               <a class="btn btn-style-round btn-shape-round btn-size-large btn-shop" style="background-color: #ACC33F; href="https://cctvpune.in/lander">Click Here</a>
             </div>
         </div>
      </div>
     </div>
<?php include 'footer.php';?>
</body>