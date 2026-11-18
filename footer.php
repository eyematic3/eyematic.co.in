
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
                                   initial-scale=1.0">
    <title>My Eyematic Project</title>

    <!-- To link external styling file -->
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
 <style>
 
 #movetop {
    position: fixed;
    bottom: 13px;
    right: 30px;
    z-index: 999;
    font-size: 16px;
    border: none;
    outline: none;
    cursor: pointer;
    color: #fff;
    width: 40px;
    height: 40px;
    background: var(--primary-color);
    border-radius: 50%;
    -webkit-border-radius: 50%;
    -o-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
  
}
      .social-media-icons{
                           display:inline-block;
                           padding:30px 0px 20px 80px;
                    
                          }
    .social-media-icons i{
                      font-size: 18px;
                      float: left;
                      color: white;
                      position: center;
                      margin-right:20px;
                      
                      
                      }
          .youtube{
           height: 34px;
           width: 34px;
           background-color: #cd201f;
           border-radius:5px;
           padding:8px;
           float:left;
              margin-right:20px;
           }
       .facebook{
           height: 34px;
           width: 34px;
           background-color: #3b5998;
           border-radius:5px;
           padding:8px;
           float:left;
            margin-right:20px;
           }
       .instagram{
           height: 34px;
           width: 34px;
           background-color: #F41EBD;
           border-radius:5px;
           padding:8px;
           float:left;
           margin-right:20px;
           }
        .envelope{
           height: 34px;
           width: 34px;
           background-color: #5919F6;
           border-radius:5px;
           padding:8px;
           float:right;
           position:absolute;
           margin-left:160px;
           }   
       .list4 a,list4 span{
               color:white;
               text-decoration:none;
          } 
      .list4  a:hover {
                 color: white;
                 text-decoration: none;
                 }
         .footer-list i{
                        line-height:1.8;
                        }
         .footer-banner{
                        background-image:url("images\about-us.png");
                        max-width:100%;
                        height:auto;
                        position: relative;
                       text-align: center;
                        }
          .footer-content{
                          
                         } 
           .footer-image{
                         left:0px;
                        
                         z-index:1;
                         display:inline-block;
                         position:absolute;
                         }  
         
            .centered {
                          position: absolute;
                          top: 85%;
                          left: 50%;
                          transform: translate(-50%, -50%);
                          text-color:#1A5319;
                          }
             .centered a{
                         color:#508D4E;
                         font-weight:700;
                         text-decoration:none;
                         }   
             .centered a:hover{
                         color:#508D4E;
                         font-weight:700;
                         text-decoration:none;
                         }
               .centered{
                          font-size:17px;
                          }     
 </style>
</head>
<body>
  <div class="container-fluid bg-dark">
   <div class="row pt-4 pb-4">
    <div class="col-lg-3">
      <img class="img-fluid" src="images/logo-GreenWhite.png" width=364 height=123>
      <br>
    <div class="social-media-icons" style="justify-content:center;" >
       <div class="youtube"><a href="https://www.youtube.com/channel/UC8s3eD8HtO1KaLGbkOpcD8A"><i class="fa-brands fa-youtube"></i></a></div>
       <div class="facebook"><a href="https://www.facebook.com/eyematic/"><i class="fa-brands fa-facebook"></i></a></div>
       <div class="instagram"><a href="https://www.instagram.com/eyematic_cctv/"><i class="fa-brands fa-instagram"></i></a></div>
      </div>
     </div>
    <div class="col-lg-2 text-white" style="line-height:2;">
     <h3>Links :</h3>
     <ul class="list-unstyled text-white list4">
       <li><span><i class="fa-solid fa-circle-dot"></i></span><a href="become-a-dealer.php"> Become a Dealer</li></a>
       <li><span><i class="fa-solid fa-circle-dot"></i></span><a href="news.php"> News</li></a>
       <li><span><i class="fa-solid fa-circle-dot"></i></span><a href="about-us.php"> About Us</li></a>
       <li><span><i class="fa-solid fa-circle-dot"></i></span><a href="faq.php"> FAQ's</li></a>
       <li><span><i class="fa-solid fa-circle-dot"></i></span><a href="privacy-policy.php"> Privacy Policy</li></a>
       <li><span><i class="fa-solid fa-circle-dot"></i></span><a href="support.php"> Support</li></a>
       <li><span><i class="fa-solid fa-circle-dot"></i></span><a href="contact-us.php"> Contact Us</li></a>
     </ul>
    </div>
    <div class="col-lg-4 ">
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3783.6322827916765!2d73.86669410755856!3d18.500308219386206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2eabdd0000095%3A0xc840deb593849001!2sEyematic%20Electronics%20Pvt%20Ltd!5e0!3m2!1sen!2sin!4v1721038838892!5m2!1sen!2sin"
         class="w-100" height="330" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    
    <div class="col-lg-3 text-white">
       <h3>Contact Us :</h3>
         <ul class="list-unstyled footer-list list4" style="line-height:1.8;">
         <li><span><i class="fa-solid fa-house-chimney"></i></span>
                    <a href="#"><span>Eyematic Electronics Pvt Ltd <br>Off no: 103, 1st floor,Purnima Tower,Shankar Sheth Rd, Next to Sarswati Petrol Pump, Swargate, Pune,Maharshtra 411037</span></a></li>
         <li><span><i class="fa-solid fa-square-phone"></i></span>
                     <a href="tel:+919673297329"><span>+91 9673297329</span></a></li>
         <li><span><i class="fa-solid fa-envelopes-bulk"></i></span>
                      <a href="mailto:info@eyematic.co.in"><span>info@eyematic.co.in</span></a></li>              
         <li><span><i class="fa-solid fa-clock"></i></span>
                      <a href="#"><span>Monday to Friday 9:00am-8:00pm EST</span></li>
       </ul>
    </div>
   </div>
  </div> 
  <div class="container-fluid" style="background-color:#322C2B">
   <div class="row-lg-12 pt-3 pb-3 text-center">
     <p><span class="text-white" style="font-size:12px;">CREATED BY</span><a class="text-success" href="https://collinitsolution.com/"> Collin IT Solution</a></p>
   </div>
  </div>
  <div class="container-fluid" style="background-color:#322C2B">
    <div class="row">
     <div class="col-lg-6 col-md-6 ps" style="padding-left:150px;">
        <img class="img-fluid" src="images/payments.png" width=410px height=55px>
     </div>
     <div class="col-lg-6 col-md-6 pb-4 justify-content-center" style="padding-left:190px;">
        <img class="img-fluid" src="images/paytm_icon-icons.com_62778.png" height=55px width=252px>
     </div> 
    </div>
    </div>
    <div class="container-fluid footer-banner">
     <img class="img-fluid" src="images/website-banner-7-Copy.jpg" height=543px width=1343px loading="lazyload">
      <p class="centered container" style="font-size:1.5vw;">
       <a href="https://cctvpune.in/lander">Eyematic Electronics Pvt Ltd</a>
       <span>(1993-2021)ALL RIGHTS RESERVED. CREATED BY</span>
       <a href="https://collinitsolution.com/">Collin IT Solution</a>
     </p>
      
    
   </div>
   
     <a href="https://api.whatsapp.com/send?phone=+919673297329 &amp;text=Hello, " id="movetop" target="_blank" style="background: rgb(12, 173, 9); display: block" title="Whatsapp Chat">
			<img src="images/WhatsApp.webp" style="width:100%;">
		</a>
</body>
</html>