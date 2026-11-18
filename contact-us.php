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
  .header1{
                background-color:#7ABA78;
                height:50px;
                }
           a{
               color:white;
               text-decoration:none;
            } 
        a:hover {
                 color: white;
                 text-decoration: none;
                 }
    .divider {
               font-size: 30px;
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
   
    <div class="container-fluid">
      <div class="row pt-5">
        <div class="col-lg-6 pt-4 pe-5 contact-form">
           <div class="divider"><h4>CONTACT US</h4></div>
              <form action="action-controller.php" method="post">
                <div class="form-group">
                  <label for="name">Name :</label> 
                  <input type="text" class="form-control border-secondary" name="name" placeholder="Enter your Name" id="name">
                 </div>
                 <div class="form-group">
                   <label for="email">Email :</label>
                   <input type="email" class="form-control border-secondary" name="email" placeholder="Enter your Email" id="pwd">
                 </div>
                 <div class="form-group">
                   <label for="contact-no">Contact No :</label>
                   <input type="number" class="form-control border-secondary" name="contactno" placeholder="Enter your Contact No" id="pwd">
                 </div>
                 <div class="form-group">
                   <label for="Message">Message :</label>
                   <textarea class="form-control border-secondary" name="message" rows="5" id="comment" placeholder="Message"></textarea>
                 </div>
                 <button type="submit" name="insertcontact" class="btn btn-block"  style="background-color: #ACC33F;">Send</button>
              </form>
        </div>
        <div class="col-lg-6  pt-4 pe-5 ps-5">
           <div class="divider"><h4>All Projects</h4></div>
           <div class="pt-3 text-justify" ><h6>You can feel free to contact us for CCTV camera installation at any point of time and we would be 
              ready to offer you with free on site review. Our team of highly trained security personnel would  
              meet you at your desired location and review your current and future security needs. We would be
              glad to entertain any questions regarding the system manufacturers that we have chosen to 
              utilize from your security consultants. Our technicians would also give you demonstrations on the
              systems that suit your requirements and explain in detail as to how easy it is to use them and how
               it will protect you.</h6>
            </div> 
            <div class="text-center pt-4"><a href="portfolio.php" class="btn  btn-lg"  style="background-color: #ACC33F;" role="button">Click here</a></div>  
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
             <div>
               <p><strong>Do you have questions about how we can help your company?</strong>
                  <br>
                  <span style="text-color: #83b735;">Send us an email and we'll get in touch shortly.</span>
               </p>
             </div>
          </div>
      </div>
      <div class="row pt-5 pb-5">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3783.6322827916765!2d73.86669410755856!3d18.500308219386206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2eabdd0000095%3A0xc840deb593849001!2sEyematic%20Electronics%20Pvt%20Ltd!5e0!3m2!1sen!2sin!4v1721038838892!5m2!1sen!2sin"
         class="w-100" height="476" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
    <?php include 'footer.php';?>
 </body>
 </html>