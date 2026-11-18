<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Eyematic Electronics Pvt Ltd</title>
   <link rel="icon" href="adminp/files/assets/images/favicon1.png" type="image/x-icon">

    <!-- To link external styling file -->
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
 <style>
    .main-heading a{
                    text-decoration:none;
                    color:#ffffff;
                    }
     .main-heading a:hover{
                             text-decoration:none;
                             color:#ffffff;
                             }
   .heading h1{
                 padding:20px 0px 10px 0px;
                 font-size:50px;
                 font-weight:500;
                 }
    .sub-heading h2{
                    color:#45474B;
                    font-size: 40px;
                    font-weight: 650;
                    padding:20px 0px 10px 0px;
                    }
      .sub-heading p,.sub-heading a{
                      font-size:22px;
                      font-weight:500;
                      text-decoration:none
                     
                      }
        .sub-heading a{
                       color:#45474B;
                       text-decoration:none;
                       }  
          .sub-heading a:hover{
                       color:white;
                       text-decoration:none;
                       }      
          .box{
                       background-color:#344955;
                       text-align:center;
                       padding:20px 0px 30px 0px;
                       margin:0px 30px 0px 20px;
                       border-radius:20px;
                       }  
           .box i{
                        font-size:40px;
                        padding-bottom:20px;
                        }  
            .box span{
                            font-size:22px;
                            font-weight:500;
                         } 
            .box:hover{
                       background-color:#83b735;
                       }
             .box a{
                      color:white;
                      text-decoration:none;
                      }
            .box a:hover {
                            color: white;
                             text-decoration: none;
                          }
                  
               
 </style>
 <body>
       <?php include 'header1.php';?>
  <div class="container-fluid">
    <div class="row">
      <div class="bg-dark text-white heading text-center container-fluid main-heading">
         <h1>Support</h1>
         <p><a href="index.php">Home</a> / Support</p>
      </div>
      <div class="sub-heading text-center pt-4 pb-4 container-fluid">
         <h2>PLEASE TELL US WHAT YOU NEED BY CLICKING THE CORRESPONDING SUPPORT BUTTON</h2>
         <p>Or you may contact us at <a href="tel:+18002703060">18002703060</a> and our team of highly skilled professionals will be glad to assist you.</p>
       </div>
    </div>
    <div class="row pb-5">
       <div class="col-lg-4 ">
          <div class="container box mb-5">
               <a href="repair-request.php"><i class="fa-solid fa-wrench"></i><br><span>Repair Request >></span></a>
          </div>
          <div class="container box mb-5">
               <a href="faq.php"><i class="fa-solid fa-house-laptop"></i><br><span>Search Eyematic Knowledge Center >></span></a>
          </div>
       </div>
       <div class="col-lg-4">
          <div class="container box mb-5">
               <a href="return-for-credit.php"><i class="fa-solid fa-hands-holding"></i><br><span>Return for Credit >></span></a>
          </div>
           <div class="container box mb-5">
               <a href="need-technical-assistance.php"><i class="fa-solid fa-users-gear"></i><br><span>Need Technical Assistance >></span></a>
          </div>
       </div>
       <div class="col-lg-4">
          <div class="container box mb-5">
               <a href="request-for-advanced.php"><i class="fa-solid fa-copy"></i><br><span>Request for Advance Replacement >></span></a>
          </div>
          <div class="container box mb-5">
               <a href="contact-us.php"><i class="fa-solid fa-users-gear"></i><br><span>Speak with our Inside Sales Team >></span></a>
          </div>
       </div>
    </div>
  </div>
  <?php include 'footer.php';?>
 </body>