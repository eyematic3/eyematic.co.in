<?php include('session.php');   include('aconnection.php'); include_once 'functions.php';
/* $url1=$_SERVER['REQUEST_URI'];
 header("Refresh: 300; URL=$url1"); */
?>

<!DOCTYPE html>
<html lang="en">
<head>	
<title><?php echo $firmname; ?></title>
<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="#">
<meta name="author" content="#">
<!-- Favicon icon -->
     <link rel="icon" href="files/assets/images/favicon1.png" type="image/x-icon">
    <!-- Google font--><link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="files/bower_components/bootstrap/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="files/assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="files/assets/icon/icofont/css/icofont.css">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="files/assets/icon/feather/css/feather.css">
    <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css" href="files/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="files/assets/pages/data-table/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="files/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="files/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="files/assets/css/jquery.mCustomScrollbar.css">
    
    <style type="text/css">
    td a img{
    margin-bottom: 5px;
    }
    
     .table td,.table th {
        white-space: normal;
    }
    
    </style>
</head>


<body> 
<?php include 'sidebar.php'; ?> 
                 <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <!-- Main-body start -->
                        <div class="main-body">
                            <div class="page-wrapper">
                                <!-- Page-header start -->
                                <div class="page-header">
                                    <div class="row align-items-end">
                                        <div class="col-lg-8">
          <h6 style="color: red;">
                                         <?php    if(isset($_GET['Error'])){
                                                  echo $_GET['Error']; }    ?>
       </h6>
       <h6 style=" color: green;">
         <?php    if(isset($_GET['msg'])){
                  echo $_GET['msg']; }    ?>
       </h6>                                </div>
                                        <div class="col-lg-4">
                                            <div class="page-header-breadcrumb">
                                                <ul class="breadcrumb-title">
                                                    <li class="breadcrumb-item">
                                                        <a href="dashboard.php"> <i class="feather icon-home"></i> </a>
                                                    </li>
                                                    <li class="breadcrumb-item"><a href="#!">Return Request List</a>
                                                    </li>
                                                   
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Page-header end -->

                                <!-- Page body start -->
                                <div class="page-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                          
                                            <div class="card">
                              <div class="row">
                               
          <div class="col-lg-12 col-md-12 col-sm-12">     
                                     <div class="card-block">         
                                   
 
   <h4 class="sub-title" style="color: chocolate;font-size: 20px;">
                              
                                     
 </h4>                          
 <div class="card-block">   
<h4 class="sub-title" style="color: chocolate;font-size: 20px;">
Return Request List:</h4>       


                   
<div style="width: 100%;overflow: scroll;">
<table id="dom-jqry" class="table table-striped table-bordered nowrap" style="overflow: scroll;">
    <thead>
        <tr>
            <th>No</th>
            <th>Date</th>
            <th>Customer Details</th>
            <th>Product Details</th>
            <th>Status</th>
            <th>Message</th>
            <th>Updated At</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $totalRequests = 0;
        $qot = "SELECT * FROM product_return_requests ORDER BY pr_created_at DESC";
        $queryht = mysqli_query($con, $qot);
        while ($rest = mysqli_fetch_array($queryht)) {
            $totalRequests++;
            $pr_id = $rest['pr_id'];
        ?>
            <tr style="background: <?php echo $rest['pr_status'] == 2 ? '#e2fff5' : 'antiquewhite'; ?>">
                <td><?php echo $rest['pr_id']; ?></td>
                <td><?php echo convertdate($rest['pr_created_at']); ?></td>
                <td>
                    <?php echo "<b>Name:</b> " . $rest['pr_name'] . "<br>"; ?>
                    <?php echo "<b>City:</b> " . $rest['pr_city'] . "<br>"; ?>
                    <?php echo "<b>Phone:</b> " . $rest['pr_phone'] . "<br>"; ?>
                    <?php echo "<b>Address:</b> " . $rest['pr_address'] . "<br>"; ?>
                    <?php echo "<b>Zip:</b> " . $rest['pr_zip'] . "<br>"; ?>
                    <?php echo "<b>Email:</b> " . $rest['pr_email']; ?>
                </td>
                <td>
                    <?php echo "<b>Product Name:</b> " . $rest['pr_product_name'] . "<br>"; ?>
                    <?php echo "<b>Purchase ID:</b> " . $rest['pr_purchase_id'] . "<br>"; ?>
                    <?php echo "<b>Model Code:</b> " . $rest['pr_model_code'] . "<br>"; ?>
                    <b> Purchase Date: </b><?php echo convertdate($rest['pr_purchase_date']) . "<br>"; ?>
                    <?php echo "<b>Under Warranty:</b>  " . $rest['pr_under_warranty']; ?>
                </td>
                <td>
                    <?php if ($rest['pr_status'] == 2) { ?>
                        <a href="action-controller.php?verifypr=1&v_id=<?php echo $rest['pr_id']; ?>" class="btn btn-success">Verified</a>
                    <?php } else if ($rest['pr_status'] == 1) { ?>
                        <a href="action-controller.php?verifypr=2&v_id=<?php echo $rest['pr_id']; ?>" class="btn btn-danger">Unverified</a>
                    <?php } ?>
                </td>
                <td><?php echo $rest['pr_problem_description']; ?></td>
                <td><?php echo $rest['pr_updated_at']; ?></td>
                <td>
                    <a href="action-controller.php?deletepr=1&v_id=<?php echo $rest['pr_id']; ?>" onclick="return confirm('Are you sure you want to delete?');" class="btn btn-danger"><i class="feather icon-trash"></i></a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
       
    </div>
    
          

</div>
                                        </div>
                                        <!-- Input Grid card end -->
                                       
                                        <!-- Input Alignment card end -->
                                    </div>
                                </div>
                            </div>
                            <!-- Page body end -->
                        </div>
                    </div>
                    <!-- Main-body end -->
                  
                </div>
            </div>
        </div>
    </div>
</div>
</div></div></div></div>
</div></div>
	<!-- Warning Section Ends -->
	<!-- Required Jquery -->
	    <script type="text/javascript" src="files/bower_components/jquery/js/jquery.min.js"></script>
    <script type="text/javascript" src="files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="files/bower_components/popper.js/js/popper.min.js"></script>
    <script type="text/javascript" src="files/bower_components/bootstrap/js/bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="files/bower_components/modernizr/js/modernizr.js"></script>
    <script type="text/javascript" src="files/bower_components/modernizr/js/css-scrollbars.js"></script>
   <script src="files/assets/js/vartical-layout.min.js"></script>
    <script type="text/javascript" src="files/assets/pages/dashboard/custom-dashboard.js"></script>
    <script type="text/javascript" src="files/assets/js/script.min.js"></script>


    <!-- i18next.min.js -->
    <script type="text/javascript" src="files/bower_components/i18next/js/i18next.min.js"></script>
    <script type="text/javascript" src="files/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
    <script type="text/javascript" src="files/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
    <script type="text/javascript" src="files/bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>
 <!-- data-table js -->
      <script src="files/assets/pages/data-table/js/data-table-custom.js"></script>
  <script src="files/bower_components/jquery.cookie/js/jquery.cookie.js"></script>
    <script src="files/bower_components/jquery.steps/js/jquery.steps.js"></script>
    <script src="files/bower_components/jquery-validation/js/jquery.validate.js"></script>
    <!-- Validation js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
    <script type="text/javascript" src="files/assets/pages/form-validation/validate.js"></script>
    <!-- Custom js -->
    <script src="files/assets/pages/forms-wizard-validation/form-wizard.js"></script>

    <script src="files/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="files/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="files/assets/pages/data-table/js/jszip.min.js"></script> 
    <script src="files/assets/pages/data-table/js/pdfmake.min.js"></script>
    <script src="files/assets/pages/data-table/js/vfs_fonts.js"></script>
    <script src="files/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="files/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="files/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="files/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="files/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
    
    <script src="files/assets/pages/forms-wizard-validation/form-wizard.js"></script>
    <script src="files/assets/js/pcoded.min.js"></script>
    <script src="files/assets/js/vartical-layout.min.js"></script>
    <script src="files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="files/assets/js/script.js"></script>
    <script src="files/assets/js/pcoded.min.js"></script>
    <script src="files/assets/js/vartical-layout.min.js"></script>
    <script src="files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="files/assets/js/script.js"></script>

<script>  
function matchPassword() {  
  var pw1 = document.getElementById("pswd1");  
  var pw2 = document.getElementById("pswd2");  
  if(pw1 != pw2)  
  {   
    alert("Passwords did not match");  
  } else {  
    alert("Password created successfully");  
  }  
}  
</script> 
<script>    
$('#repeatpassword').keyup(function(){
var textone;
var texttwo;
textone = $('#password').val();
texttwo = $('#repeatpassword').val();
if(textone.localeCompare(texttwo)==0){
	var b='Password Matched';
$('#message').val(b);
}else{
	var b='Password Not Matched';
	$('#message').val(b);	
}

});

</script>
<script>    
$('#password').keyup(function(){
var textone;
var texttwo;
textone = $('#password').val();
texttwo = $('#repeatpassword').val();
if(textone.localeCompare(texttwo)==0){
var b='Password Matched';
$('#message').val(b);
}else{
	var b='Password Not Matched';
	$('#message').val(b);	
}

});

</script>
      <script>
    function formatText(tag) {
      var textarea = document.getElementById('blog-description');
      var start = textarea.selectionStart;
      var end = textarea.selectionEnd;
      var selectedText = textarea.value.substring(start, end);
      var replacement = '<' + tag + '>' + selectedText + '</' + tag + '>';
      textarea.value = textarea.value.substring(0, start) + replacement + textarea.value.substring(end);
    }
  </script>
	<!-- Global site tag (gtag.js) - Google Analytics -->

</body>
</html>
