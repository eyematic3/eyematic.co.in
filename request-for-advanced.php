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
             .box2 a{
                       text-decoration:none;
                       color:#ffffff;
                       }
            .box2 a:hover {
                            color: white;
                             text-decoration: none;
                          }
             .sub-heading2 h3{
                              font-weight:700;
                              }
 </style>
 <body>
   <?php include 'header1.php';?>
    <div class="container-fluid">
      <div class="row main-heading">
        <div class="col-lg-12 bg-dark text-white heading text-center container-fluid pt-3 pb-3">
         <h1>Request for Advanced Replacement</h1>
         <p><a href="#">Home</a> / Request for Advanced Replacement</p>
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
               <a href="faq.php"><i class="fa-solid fa-users-gear"></i><br><span>Speak with our Inside Sales Team >></span></a> 
            </div>
          </div>
       </div>
     <div class="row pb-3 pt-2">
    <div class="col-lg-12 sub-heading2">
        <h3>Request for Advanced Replacement</h3>
        <h6>Please contact the distributor from whom you purchased the product to request for advanced replacement. This service is only available for distributors, not for customers or end users.</h6>
        <br>
        <h6>Advance Replacement Eligibility Information</h6>
        <p>All network recorders and IP cameras are included in the Advance Replacement program. Analog products, AHD models, lenses, accessories, etc. are not eligible for advance replacement.</p>
    </div>
</div>

<div class="row ps-2">
    <div class="col-lg-12 pb-3">
        <h3>Distributor Details:</h3>
    </div>
</div>

<form action="action-controller.php" method="post">
    <div class="form-row pb-2 ps-2 pe-2">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="name">Name\Company Name :<span> *</span></label>
                <input type="text" class="form-control border-secondary" name="name" placeholder="Name\Company Name" id="name" required>
            </div>
            <div class="form-group">
                <label for="city">City :<span> *</span></label>
                <input type="text" class="form-control border-secondary" name="city" placeholder="City" id="city" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone :<span> *</span></label>
                <input type="tel" class="form-control border-secondary" name="phone" placeholder="Phone" id="phone" required>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label for="address">Address :<span> *</span></label>
                <input type="text" class="form-control border-secondary" name="address" placeholder="Address" id="address" required>
            </div>
            <div class="form-group">
                <label for="zip">Zip\Postal Code :<span> *</span></label>
                <input type="number" class="form-control border-secondary" name="zip" placeholder="Zip\Postal Code" id="zip" required>
            </div>
            <div class="form-group">
                <label for="email">Email :<span> *</span></label>
                <input type="email" class="form-control border-secondary" name="email" placeholder="Email" id="email" required>
            </div>
        </div>
    </div>
    <div class="container-fluid pb-3 text-left">
        <div class="row">
            <h3>Product Details:</h3>
        </div>
    </div>
    <div class="form-row pb-2 ps-2 pe-2">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="product_name">Product Name :<span> *</span></label>
                <input type="text" class="form-control border-secondary" name="product_name" placeholder="Product Name" id="product_name" required>
            </div>
            <div class="form-group">
                <label for="purchase_id">Purchase Id :</label>
                <input type="text" class="form-control border-secondary" name="purchase_id" placeholder="Purchase Id" id="purchase_id">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label for="model_code">Model Code :<span> *</span></label>
                <input type="text" class="form-control border-secondary" name="model_code" placeholder="Model Code" id="model_code" required>
            </div>
            <div class="form-group">
                <label for="purchase_date">Purchase Date :<span> *</span></label>
                <input type="date" class="form-control border-secondary" name="purchase_date" placeholder="Purchase Date" id="purchase_date" required>
            </div>
        </div>
    </div>
    <div class="row ps-2 pe-2">
        <div class="col-lg-12">
            <p>Is Your Unit Under Warranty :<span> *</span></p>
            <div class="form-check-inline ps-2">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="under_warranty" value="YES" required>YES
                </label>
            </div>
            <div class="form-check-inline ps-2">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="under_warranty" value="NO" required>NO
                </label>
            </div>
            <div class="form-check-inline ps-2">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="under_warranty" value="NOT SURE" required>NOT SURE
                </label>
            </div>
            <div class="form-group pt-3">
                <label for="problem_description">Reasons For Replacement :</label>
                <textarea class="form-control border-secondary" name="problem_description" rows="5" id="problem_description" placeholder="Reasons For Replacement"></textarea>
            </div>
            <div class="pb-4">
                <button type="submit" name="submit-advance-return" class="btn btn-rounded-pill btn-block" style="background-color:#83b735;">Submit Request</button>
            </div>
        </div>
    </div>
</form>

    </div>
      
   <?php include 'footer.php';?>
 </body>
 