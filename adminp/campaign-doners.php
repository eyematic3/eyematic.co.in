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
                                                    <li class="breadcrumb-item"><a href="#!">Doners List</a>
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
                                     <?php $qe=null; $t=3; $cdate=date('Y-m-d');
                                     $camp_id=$_GET['camp_id'];
                                     $grfees=$grpayed=$grremain=0.00;
 $qo = "SELECT * FROM campaign_details as c INNER JOIN ordanizers as b ON c.org_id=b.org_id  WHERE c.camp_id =".$camp_id;
                                     $queryh = mysqli_query($conf, $qo);
                                 $res = mysqli_fetch_array($queryh);
                                         $tdoners=0;
                                         $camp_id=$res['camp_id'];
                                         $camp_slug=$res['comp_slug'];
                                         $camp_mainimage=$res['camp_img'];
                                         ?>
                                     
 </h4>                          
 <div class="card-block">   
  <h5 style="text-align: left;text-transform: uppercase;color: chocolate;">
 <?php echo $res['camp_title']; ?>
</h5>
<h6>By <?php echo $res['org_name']; ?></h6>
 <h3 style="text-align: right;">
 <a href="campaign-details.php?camp_id=<?php echo $camp_id; ?>" class="btn btn-danger">View Campaign Details</a> &nbsp; 
 <a href="../campaign-details.php?c=<?php echo $camp_id; ?>&s=<?php echo $camp_slug; ?>" target="_blank" class="btn btn-success">  <i class="feather icon-eye"></i> </a></h3>      
     <h4 class="sub-title" style="color: chocolate;font-size: 20px;">
Add Doner:</h4>    

<form action="action-controller.php" class="form-inline" method="post">
<input name="camp_id" type="hidden" value="<?php echo $camp_id; ?>" readonly class="form-control" required>


<div  style="padding: 5px;">
<label>Date: </label>
<input name="do_date"  type="date" class="form-control" required>


<label> Donors Name: </label>
<input type="text" name="do_name"  maxlength="50" placeholder="Title"  class="form-control" required>
</div><div  style="padding: 5px;">
<label> Contcat No: </label>
<input type="tel" name="do_conatctno"  maxlength="20" placeholder="Contact No"  class="form-control" required>
<label> Email: </label>
<input type="text" name="do_email"  maxlength="30" placeholder="Email"  class="form-control" >
</div>

<div  style="padding: 5px;">
<label> Amount: </label>
<input type="number" name="do_amount"  maxlength="10" placeholder="Title"  class="form-control" required>

<label> Address: </label>
<input type="text" name="do_address"  maxlength="50" placeholder="Address"  class="form-control" required>
</div><div  style="padding: 5px;">
<label> Pin No: </label>
<input type="text" name="do_pin"  maxlength="10" placeholder="Pin No"  class="form-control" >
<br><br><button name="Adddonersmanually" type="submit" class="btn btn-success" > Add </button>
</div>

</form>

                   
<div style="width: 100%;overflow: scroll;"><br>
  <h4 class="sub-title" style="color: chocolate;font-size: 20px;">
  
Doners List:</h4> 
        <table id="dom-jqry" class="table table-striped table-bordered nowrap" style="overflow: scroll;">
                                          
                  <thead >
                  
                                                            <tr>
                       <th >No</th>
                          
                          <th >Date</th>
                           <th >do_transid</th>
                         <th >Name</th>
   
         <th >Status</th>
           <th >Amount</th>
                       <th >Email</th>
                   <th >Conatct No</th>               
                    <th >DOB</th>
                     <th >Address</th>
 					<th>Pin </th>
       			<th>Message </th>
       			
                    	<th>Action </th>
                    	<th>Timestamp </th>
                    	                                             
          </thead>
   <tbody >  
            <?php
       
            $toatalamount=0;
                $qot = "SELECT * FROM donars_list WHERE camp_id='$camp_id' ORDER BY do_id DESC";
                $queryht = mysqli_query($con, $qot);
                while ($rest = mysqli_fetch_array($queryht)) { 
                    $tdoners=1+$tdoners;
           
           
                 if($rest['do_ststus']==2){    ?><tr style="background: #e2fff5;">
                 <?php } else { ?><tr style="background: antiquewhite;"> <?php } ?>
            <td>
            <?php echo "MYSP/DO/".$camp_id."/".$rest['do_id']; ?></td>
              <td><?php echo convertdate($rest['do_date']);  ?> </td>
           <td><?php echo $rest['do_transid']; ?></td>
            <td><?php echo $rest['do_name']; ?></td>
                    <td>  <?php if($rest['do_ststus']==2){ $toatalamount+=$rest['do_amount'];  ?> <button class="btn btn-success">Paid</button>
 <?php } else if($rest['do_ststus']==1){ ?>  <button class="btn btn-danger">Fail</button> <?php } ?>
</td>
 <td><?php echo formatCustomNumber($rest['do_amount']); ?></td>
             <td><?php echo $rest['do_email']; ?></td>
              <td><?php echo $rest['do_conatctno']; ?></td>
              
                <td><?php echo $rest['do_dob']; ?></td>
                 <td><?php echo $rest['do_address']; ?></td>                 
                  <td><?php echo $rest['do_pin']; ?></td>
                   <td><?php echo $rest['do_message']; ?></td>
                    <td><?php echo $rest['do_admin_veri']; ?></td>                  
                      <td><?php echo $rest['do_timestamp']; ?></td>
          </tr> <?php } ?>
     </tbody>     
     </table>         
    </div>
    
              <div class="row">
                                 
                                               <div class="col-xl-3 col-md-6">
                                                <div class="card bg-c-green update-card">
                                                    <div class="card-block">
                                                        <div class="row align-items-end">
                                                            <div class="col-12">
                                                                <h4 class="text-white">Total Doners: <?php echo $tdoners; ?></h4>
                                                              
                                                            </div>
                                                        
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
 
   <a href="old-case-list.php" class="text-white m-b-0" style="font-size: 22px;"><b> Rs. <?php echo  formatCustomNumber($toatalamount); ?> </b></a>
 <hr>
      </div>
      </div>
                                            </div>
          
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
