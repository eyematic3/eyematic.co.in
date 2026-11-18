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
      .heading  a{
               color:white;
               text-decoration:none;
          } 
      .heading  a:hover {
                 color: white;
                 text-decoration: none;
                 }
      .heading h1{
                 padding:20px 0px 10px 0px;
                 font-size:50px;
                 font-weight:500;
                 }
        .box2{         
                       background-color:#344955;
                       text-align:center;
                       padding:20px 0px 30px 0px;
                       margin:0px 30px 0px 20px;
                       border-radius:20px;
                       }  
           .box2 i{
                        font-size:40px;
                        padding-bottom:20px;
                        }  
            .box2 span{
                            font-size:18px;
                            font-weight:500;
                         } 
            .box2:hover{
                       background-color:#83b735;
                       }
              .box2 a {
                            color: white;
                             text-decoration: none;
                          }
            .box2 a:hover {
                            color: white;
                             text-decoration: none;
                          }
              .accordion {
                           background-color: #eee;
                             color: #444;
                             cursor: pointer;
                             padding: 18px;
                             width: 100%;
                             border-left:none;
                             border-bottom:none;
                             border-right:none;
                             text-align: left;
                             outline: none;
                             font-size: 17px;
                             transition: 0.4s;
                            }

               .active, .accordion:hover {
                             background-color: #ccc; 
                                }

                .panel {
                         padding: 0 18px;
                         display: none;
                         background-color: white;
                        overflow: hidden;
                        padding-top:10px;
                        }
                 .accordion:after {
                         content: '\02795'; /* Unicode character for "plus" sign (+) */
                          font-size: 13px;
                          color: #777;
                          float: right;
                          margin-left: 5px;
                            }

                   .active:after {
                                content: "\2796"; /* Unicode character for "minus" sign (-) */
                                  }
 </style>
 <body> 
   <?php include 'header1.php';?>
   <div class="container-fluid">
      <div class="row">
        <div class="bg-dark text-white heading text-center container-fluid main-heading">
         <h1>FAQ's</h1>
         <p><a href="index.php">Home</a> / FAQ's</p>
        </div>
      </div>
      <div class="row pt-5 mb-4">
         <div class="col-lg-2 pt-2">
           <div class="container box2" style="padding-bottom:33px;">
               <a href="repair-request.php"><i class="fa-solid fa-wrench"></i><br><span>Repair & service Request >></span></a>
           </div>
         </div>
         <div class="col-lg-2 pt-2">
           <div class="container box2" style="padding-bottom:58px;">
               <a href="return-for-credit.php"><i class="fa-solid fa-hands-holding"></i><br><span>Return for Credit >></span></a>
          </div>
         </div>
         <div class="col-lg-2 pt-2">
            <div class="container box2">
               <a href="request-for-advanced.php"><i class="fa-solid fa-copy"></i><br><span>Request for Advance Replacement >></span></a>
            </div>
         </div>
         <div class="col-lg-2 pt-2">
            <div class="container box2">
               <a href="search-eyematic.php"><i class="fa-solid fa-house-laptop"></i><br><span>Search Eyematic Knowledge Center >></span></a>
            </div>
         </div>
         <div class="col-lg-2 pt-2">
            <div class="container box2">
               <a href="need-technical-assistance.php"><i class="fa-solid fa-users-gear"></i><br><span>Need Technical Assistance >></span></a>
            </div>
         </div>
         <div class="col-lg-2 pt-2">
            <div class="container box2 pb-4">
               <a href="contact-us.php"><i class="fa-solid fa-users-gear"></i><br><span>Speak with our Inside Sales Team >></span></a> 
            </div>
          </div>
       </div>
<div class="row pt-3 pb-3">
    <div class="col-lg-6 pt-2">
        <h4>SHOPPING INFORMATION</h4>
        <br>
        <button class="accordion">Delivery charges for orders from the Online Shop?</button>
        <div class="panel">
            <p>Delivery charges vary depending on the destination, weight, and size of the package. The exact delivery charge will be displayed at checkout before you finalize your order.</p>
        </div>
        <button class="accordion">How long will delivery take?</button>
        <div class="panel">
            <p>Delivery times depend on your location and the shipping method selected. Standard shipping usually takes 3-7 business days, while express shipping options are available for faster delivery.</p>
        </div>
        <button class="accordion">What exactly happens after ordering?</button>
        <div class="panel">
            <p>Once you place your order, you will receive a confirmation email with your order details. We will process and ship your order as soon as possible. You will receive another email with tracking information once your order has been dispatched.</p>
        </div>
        <button class="accordion">Do I receive an invoice for my order?</button>
        <div class="panel">
            <p>Yes, you will receive an invoice for your order via email. You can also access your invoice from your account on our website.</p>
        </div>
        <button class="accordion">Tellus ridicdiam eleifend id ullamcorper?</button>
        <div class="panel">
            <p>Our customer service team is here to assist you with any questions you may have. Feel free to contact us for any inquiries or support needed.</p>
        </div>
    </div>

    <div class="col-lg-6 pt-2">
        <h4>PAYMENT INFORMATION</h4>
        <br>
        <button class="accordion">When is the order payment taken from my bank account?</button>
        <div class="panel">
            <p>Payment is usually taken from your bank account immediately upon placing your order. You will receive a confirmation email once the payment is processed.</p>
        </div>
        <button class="accordion">What is a wishlist?</button>
        <div class="panel">
            <p>A wishlist is a feature that allows you to save products you are interested in for future reference. You can add items to your wishlist and purchase them later.</p>
        </div>
        <button class="accordion">What should I do if I receive a damaged or wrong product?</button>
        <div class="panel">
            <p>If you receive a damaged or incorrect product, please contact our customer service team immediately. Provide them with your order details and a description of the issue. We will arrange for a replacement or refund as per our return policy.</p>
        </div>
        <button class="accordion">Can I change or cancel my order?</button>
        <div class="panel">
            <p>You can change or cancel your order if it has not yet been processed or shipped. To request a change or cancellation, please contact our customer service team as soon as possible.</p>
        </div>
        <button class="accordion">What is "package tracking" in my orders?</button>
        <div class="panel">
            <p>Package tracking allows you to monitor the status and location of your order in real-time. Once your order is shipped, you will receive a tracking number that you can use to track your package on the carrier's website.</p>
        </div>
    </div>
</div>

      </div>
   <?php include 'footer.php';?>
   <script>
            var acc = document.getElementsByClassName("accordion");
            var i;

            for (i = 0; i < acc.length; i++) {
                acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.display === "block") {
                 panel.style.display = "none";
                    } else {
                            panel.style.display = "block";
                             }
                    });
               }
</script>
 </body>