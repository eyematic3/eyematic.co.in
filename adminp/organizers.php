<?php include('session.php');   include('aconnection.php'); ?>
<?php     if($_SESSION['u_role']!="Admin") { header("Location:dashboard.php");  } ?>
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
    <link rel="icon" href="files/assets/images/favicon.ico" type="image/x-icon">
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
                                                    <li class="breadcrumb-item"><a href="#!">Campaign Organizers List</a>
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
                                            <!-- Basic Form Inputs card start -->
                                            <div class="card">
                              <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-12">          
                                            <div class="card-block">
                
                   <?php
              if(isset($_GET['org_id'])){
                  $org_id=$_GET['org_id'];
$q="SELECT * FROM ordanizers WHERE org_id='$org_id'";
$query=mysqli_query($con,$q);
 while ($res=mysqli_fetch_array($query)) {   ?>  
                       <h4 class="sub-title" style="color: chocolate;font-size: 20px;">
 Update Campaign Organizers Details:</h4>                                                    
<form action="action-controller.php" method="post" enctype="multipart/form-data">
<input name="org_id" value="<?php echo $res['org_id']; ?>" type="hidden" required>
<label> Campaign Organizer:</label>
<input name="ec_name" value="<?php echo $res['org_name']; ?>"   type="text" class="form-control" required>
<label>  Contact Person:</label>
<input name="org_contactperson" value="<?php echo $res['org_contactperson']; ?>"   type="text" class="form-control" required>
<label> Contact No:</label>
<input name="org_contactno" value="<?php echo $res['org_contactno']; ?>"   type="text" class="form-control" required>
<label> Email:</label>
<input name="org_email" value="<?php echo $res['org_email']; ?>"   type="text" class="form-control" >
<label> Website:</label>
<input name="org_website" value="<?php echo $res['org_website']; ?>"   type="text" class="form-control" >
<label> Your Profession:</label>
<input name="org_profession" value="<?php echo $res['org_profession']; ?>"   type="text" class="form-control"  placeholder="eg. Student, Businessmen, etc." >
<label> Organization Logo/Individual Image:</label>
<input name="org_logopath" type="file" class="form-control" >
 <?php if(strlen($res['org_logopath']>6)) { ?> <img alt="" src="<?php echo "../".$res['org_logopath']; ?>" style="max-width: 80px;">  <?php } ?>
<br><br>
<label> Address:</label>
<textarea name="org_address" class="form-control" required><?php echo $res['org_address']; ?> </textarea>
<br><button name="updateeveorg" type="submit" class="btn btn-success" > Update </button>
</form>                        
<?php  } }  else { ?>          
 <h4 class="sub-title" style="color: chocolate;font-size: 20px;">
 Add Campaign Organizers Details:</h4>                                                    
<form action="action-controller.php" method="post">
<label> Campaign Organizer:</label>
<input name="ec_name"     type="text" class="form-control" required>

<br><button name="addevenorg" type="submit" class="btn btn-success" > Add </button>
</form>
  <?php  } ?>
                                            </div>                                       
                                          </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-12">     
                                     <div class="card-block">         
                                     <h4 class="sub-title" style="color: chocolate;font-size: 20px;">
Organizers List:</h4>                          
<div style="width: 100%;">
        <table id="dom-jqry" class="table table-striped table-bordered nowrap">
                  <thead>
                  
                                                            <tr>
                                                             <th>ID</th>
                                                                
                                                                  <th>Organization</th>
                                                                         <th >Action</th>
                                                                     <th>Details</th>     
                                                                     <th>Other</th>
                                                                      <th>Address</th>     
                                                                         
                                                                      </thead>
   <tbody>
   
            <?php
$q="SELECT * FROM ordanizers ORDER BY org_id ";
$query=mysqli_query($con,$q);
 while ($res=mysqli_fetch_array($query)) { ?> 
      <tr>
            <td ><?php echo $res['org_id']; ?></td>
         <td >
         <?php if(strlen($res['org_logopath']>6)) { ?> <img alt="" src="../<?php echo $res['org_logopath']; ?>" style="max-width: 80px;border-radius: 10px;">
           <?php } ?><br>
         <?php echo $res['org_name']; ?></td>
           <td> <a href="organizers.php?org_id=<?php echo $res['org_id']; ?>" ><button>Edit</button></a>
        </td>
                <td ><?php echo $res['org_contactperson']; ?>
                <br><?php echo $res['org_contactno']; ?> <br><?php echo $res['org_email']; ?>
                </td>
         <td >
         <?php echo $res['org_profession']; ?>
         <br><?php echo $res['org_website']; ?></td>
                 <td ><?php echo $res['org_address']; ?></td>
    
  
                                                            </tr>
       <?php  } ?>                                                                                                            
                                                        </tbody>
  </table>
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


	<!-- Global site tag (gtag.js) - Google Analytics -->

</body>
</html>
