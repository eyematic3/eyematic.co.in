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
        .heading a{
               color:white;
               text-decoration: none;
          } 
         .heading a:hover {
                 color: white;
                 text-decoration: none;
                 }
         .divider {
               font-size: 10px;
               display: flex;
               align-items: center;
             }
     .divider::before, .divider::after {
                                           flex: 1;
                                           content: '';
                                           padding: 1px;
                                           background-color: grey;
                                           margin: 5px;
                                         }
              .contact-form {
                         border-right: 1px solid #B4B4B8;
                       }
 </style>
 </head>
 <body>
   <?php include 'header1.php';?>
   <div class="container-fluid bg-dark text-center text-white heading pt-4 pb-4">
      <h1><strong>Become a Dealer</strong></h1>
      <div class="subheading pt-1">
         <h6><a href="index.php">Home</a><span> / Become a dealer</span></h6>
      </div>
    </div>
    <div class="container-fluid pt-5 pb-4">
     <div class="row">
     <div class="col-lg-6 pt-4 pe-5 contact-form">
           <div class="divider"><h4>Dealer Registration</h4></div>
              <form action="/action_page.php">
                <div class="form-group">
                  <label for="name">Name :</label>
                  <input type="text" class="form-control border-secondary" placeholder="Enter your Name" id="name">
                 </div>
                 <div class="form-group">
                   <label for="email">Email :</label>
                   <input type="email" class="form-control border-secondary" placeholder="Enter your Email" id="pwd">
                 </div>
                 <div class="form-group">
                   <label for="contact-no">Contact No :</label>
                   <input type="number" class="form-control border-secondary" placeholder="Enter your Contact No" id="pwd">
                 </div>
                 <div class="form-group">
                   <label for="Message">Message :</label>
                   <textarea class="form-control border-secondary" rows="5" id="comment" placeholder="Message"></textarea>
                 </div>
                 <button type="submit" class="btn btn-block"  style="background-color: #ACC33F;">Send</button>
              </form>
        </div>
      <div class="col-lg-6  pt-4 pe-5 ps-5">
           <div class="divider"><h4>Become a Dealer</h4></div>
           <div class="pt-3 text-justify" ><h6> In the age of increasing demand for security solutions, becoming a dealer for a renowned brand like Eyematic Technologies 
       can be a lucrative and rewarding business opportunity. Eyematic Technologies is a leading global provider of security products
       and solutions, known for its advanced technology and reliability. If you're interested in becoming a  Eyematic Technologies 
       CCTV camera dealer, this guide will walk you through the necessary steps and provide useful insights to help you get started.</h6>
            </div> 
           
            <div class="divider pt-5"><h4>Contact Us</h4></div>
            <div class="pt-4 ">
            <p><span><strong>Support:</strong> <a href="tel:+919673297329" style="color: black;">+919673297329</a><span>
                  <br>
                  <span><strong>Email:</strong> <a href="mailto:info@eyematic.co.in" style="color: black;">info@eyematic.co.in</a> 
                  , <a href="mailto:sales@eyematic.co.in" style="color: black;">sales@eyematic.co.in</a> </span>
                  <br>
                  <span><strong>Standard Shipping:</strong>
                       <ul><li> Monday to Friday</li><li>9:00am to 8:00pm EST</li></ul>
                  </span>
                  <span class="me-5"><strong>Address:</strong>Eyematic Electronics Pvt. Ltd., Office No. 123, Poornima Tower, 1st floor, Shankar Sheth Road, Pune- 411037
                  </span>
                 </p>
             </div>
             <hr>
             
          </div>
   
    
    </div>
    </div>
     <?php include 'footer.php';?>
 </body>