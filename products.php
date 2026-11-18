<?php  include('adminp/aconnection.php'); include_once 'adminp/functions.php'; ?>
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
            .main-heading h1{
                 padding:20px 0px 10px 0px;
                 font-size:45px;
                 font-weight:500;
                 }
            .product1 button{
                                 margin-left:50px;
                                 }
             h5{
                  font-size:16px;
                  }
             .product-box  a{
                 text-decoration:none;
                 color:green;
                 }
             .product-box  a:hover{
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
 </style>
 <body>
  <?php include 'header1.php';?>
     <div class="container-fluid  bg-dark text-center text-white pt-3 pb-3 mb-3">
     <div class="row main-heading">
      <div class="col-lg-12 heading">
      <h1>Products</h1>
      <div class="subheading pt-1">
         <h6><a href="index.php">Home</a><span> / Products</span></h6>
      </div>
    </div>
    </div>
   </div>
   <div class="container-fluid mt-5">
    <div class="row">
      <div class="col-lg-2">
        <div class="list-group">
           <a href="#" class="list-group-item list-group-item-action " aria-current="true" style="background-color: #ACC33F;">
            All Categories
            </a>
                     <?php
$q="SELECT * FROM events_categories ORDER BY eca_id";
$query=mysqli_query($con,$q);
 while ($res=mysqli_fetch_array($query)) {   ?> 
           <a href="products.php?title=<?php echo $res['eca_title']; ?>&c=<?php echo $res['eca_id']; ?>" class="list-group-item list-group-item-action"><?php echo $res['eca_title']; ?></a>
                 <?php  } ?> 
                                              

     </div>
     </div>
      <div class="col-lg-10 mb-5">
             <div class="row g-sm-4 g-3">
                
                  <?php
            $eca_id = 0;
            if (isset($_GET['c']) && ctype_digit((string) $_GET['c'])) {
                $eca_id = (int) $_GET['c'];
            }
            if ($eca_id > 0) {
                $qo = "SELECT c.p_id, c.p_name, c.p_imgurl, b.eca_title
       FROM products_details AS c
       LEFT JOIN events_categories AS b ON c.eca_id=b.eca_id
       WHERE c.eca_id=$eca_id
       ORDER BY c.p_id DESC";
            } else {
                $qo = "SELECT c.p_id, c.p_name, c.p_imgurl, b.eca_title
       FROM products_details AS c
       LEFT JOIN events_categories AS b ON c.eca_id=b.eca_id
       ORDER BY c.p_id DESC";
            }

            $queryh = mysqli_query($conf, $qo);
            
            while ($res = mysqli_fetch_array($queryh)) {
                $e_id=$res['p_id'];
         
       ?>
            
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="product-box" style=" box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Adds box shadow */
            margin: 20px; /* Adds margin */
            border-radius: 10px; /* Adds border radius */
            overflow: hidden;">
                  
                            <div class="img-wrapper" style="background-image: url('<?php echo htmlspecialchars(product_image_src($res['p_name'], $res['p_imgurl']), ENT_QUOTES); ?>');">
                                                   
                        </div>
                        <div class="product-style-3 product-style-chair" style="padding: 10px;">
                            <div class="product-title d-block mb-0">
                                <p class="font-light mb-sm-2 mb-0"><?php echo htmlspecialchars((string) $res['eca_title']); ?></p>
                           
                                    <h5   class="font-default"><?php echo htmlspecialchars($res['p_name']); ?></h5>
                              
                            </div>
                      
                        </div> 
                    </div>
                </div>
<?php } ?>

            </div>
   </div>
  <?php include 'footer.php';?>
 </body>