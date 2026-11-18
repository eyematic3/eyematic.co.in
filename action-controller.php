<?php       include('adminp/aconnection.php');
function generateSlug($title) {
    $slug = str_replace(' ', '-', $title);  
    $slug = preg_replace('/[^A-Za-z0-9\-]/', '', $slug);
        // Replace spaces with hyphens
  

    // Convert to lowercase
    $slug = strtolower($slug);
    
    return $slug;
}
date_default_timezone_set("Asia/Calcutta");
$cdate=date("Y-m-d");
// $backdays = date('Y-m-d',strtotime("-4 days"));
$tomorrow = date("Y-m-d", strtotime('tomorrow'));
$currenttime=date("H");
$timestamp = date('Y-m-d H:i:s');



if (isset($_POST['insertcontact'])) {
    // Extract the POST data
    extract($_POST);

    // Prepare the SQL statement to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO contact_det (cd_name, cd_email, cd_mobile, cd_msg) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $contactno, $message);
    
    // Execute the statement
    if ($stmt->execute()) {
        echo "<script>
                alert('Message sent successfully!');
                location.href='contact-us.php';
              </script>";
    } else {
        echo "<script>
                alert('Error sending message. Please try again.');
                location.href='contact-us.php';
              </script>";
    }
    
    // Close the statement and connection
    $stmt->close();
    $conn->close();
}

if(isset($_POST['Adddonersmanually'])){
    $do_amount=$_POST['do_amount']; 
    $do_name=$_POST['do_name']; 
    $do_email=$_POST['do_email'];
    $org_id=$_POST['camp_id'];
    $do_date=$_POST['do_date'];
  
    $do_ststus=2;
    $do_conatctno=$_POST['do_conatctno'];
    $do_pin=$_POST['do_pin'];
    $do_transid="Manually";
    $do_address=str_replace("'", "&#39;",$_POST['do_address']);
    
    $e=1;
    $q="INSERT INTO donars_list(camp_id,do_date,do_ststus,do_transid,do_name,do_email,do_conatctno,do_amount,do_address,do_pin)
 Values('$org_id','$do_date','$do_ststus','$do_transid','$do_name','$do_email','$do_conatctno','$do_amount','$do_address','$do_pin')" ;
    
    if ($con->query($q) === TRUE) {
             
        $sq = "UPDATE campaign_details SET camp_current_amount=camp_current_amount+'$do_amount' WHERE camp_id='$org_id'";
$conn->query($sq);

        $con->close();
        
        header("location:campaign-doners.php?camp_id=$org_id&msg=Added Successfully!");
    }else {
        
        echo "ERROR: Update Faild !!!!!!".$con->error; $con->close();
    }
}
if(isset($_POST['submit-advance-return'])){
    // Extract the POST data
    $name = $_POST['name'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $zip = $_POST['zip'];
    $email = $_POST['email'];
    $product_name = $_POST['product_name'];
    $purchase_id = $_POST['purchase_id'];
    $model_code = $_POST['model_code'];
    $purchase_date = $_POST['purchase_date'];
    $under_warranty = $_POST['under_warranty'];
    $problem_description = $_POST['problem_description'];
    

    // Insert data into the database
    $sql = "INSERT INTO advanced_replacement_requests (
                ar_name,
                ar_city,
                ar_phone,
                ar_address,
                ar_zip,
                ar_email,
                ar_product_name,
                ar_purchase_id,
                ar_model_code,
                ar_purchase_date,
                ar_under_warranty,
                ar_problem_description
            ) VALUES (
                '$name',
                '$city',
                '$phone',
                '$address',
                '$zip',
                '$email',
                '$product_name',
                '$purchase_id',
                '$model_code',
                '$purchase_date',
                '$under_warranty',
                '$problem_description'
            )";
    
    if ($conn->query($sql) === TRUE) {
        echo "
            <script>
                alert('Advanced replacement request submitted successfully!');
                location.href='request-for-advanced.php';
            </script>
        ";
    } else {
        echo "<script>
                alert('Error submitting Return request. Please try again.');
                location.href='request-for-advanced.php';
              </script>";
    }
    
    $conn->close();
}
if(isset($_POST['submit-returnforcredit'])){
    // Extract the POST data
    $name = $_POST['name'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $zip = $_POST['zip'];
    $email = $_POST['email'];
    $product_name = $_POST['product_name'];
    $purchase_id = $_POST['purchase_id'];
    $model_code = $_POST['model_code'];
    $purchase_date = $_POST['purchase_date'];
    $under_warranty = $_POST['under_warranty'];
    $problem_description = $_POST['problem_description'];

    // Insert data into the database
    $sql = "INSERT INTO product_return_requests (
                pr_name,
                pr_city,
                pr_phone,
                pr_address,
                pr_zip,
                pr_email,
                pr_product_name,
                pr_purchase_id,
                pr_model_code,
                pr_purchase_date,
                pr_under_warranty,
                pr_problem_description
            ) VALUES (
                '$name',
                '$city',
                '$phone',
                '$address',
                '$zip',
                '$email',
                '$product_name',
                '$purchase_id',
                '$model_code',
                '$purchase_date',
                '$under_warranty',
                '$problem_description'
            )";
    
    if ($conn->query($sql) === TRUE) {
        echo "
            <script>
                alert('Return request submitted successfully!');
                location.href='return-for-credit.php';
            </script>
        ";
    } else {        echo "<script>
                alert('Error submitting Return request. Please try again.');
                location.href='return-for-credit.php';
              </script>";
 
    }
    
    $conn->close();
}
if (isset($_POST['submitrepairrequest'])){
    // Extract the POST data
    $name = $_POST['name'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $zip = $_POST['zip'];
    $email = $_POST['email'];
    $product_name = $_POST['product_name'];
    $purchase_id = $_POST['purchase_id'];
    $model_code = $_POST['model_code'];
    $purchase_date = $_POST['purchase_date'];
    $under_warranty = $_POST['under_warranty'];
    $problem_description = $_POST['problem_description'];
  
    // Prepare the SQL statement to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO repair_requests (rr_name, rr_city, rr_phone, rr_address, rr_zip, rr_email, rr_product_name, rr_purchase_id, rr_model_code, rr_purchase_date, rr_under_warranty, rr_problem_description) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssssss", $name, $city, $phone, $address, $zip, $email, $product_name, $purchase_id, $model_code, $purchase_date, $under_warranty, $problem_description);
    
    // Execute the statement
    if ($stmt->execute()) {
        echo "<script>
                alert('Repair request submitted successfully!');
                location.href='repair-request.php';
              </script>";
    } else {
        echo "<script>
                alert('Error submitting repair request. Please try again.');
                location.href='repair-request.php';
              </script>";
    }
    
    // Close the statement and connection
    $stmt->close();
    $conn->close();
}


if(isset($_POST['updatenewcamp'])){
    $camp_id=$_POST['camp_id'];  $e_status=$_POST['w_status'];$org_id=$_POST['org_id'];
    $ca_date=$_POST['ca_date'];  $ass_u_id=$_POST['ass_u_id']; $ca_type=$_POST['ca_type'];
    $b_id=$_POST['camp_target_amount'];$ca_bbr_code=$_POST['camp_current_amount'];$ca_bbr_addres=$_POST['camp_enddate'];
    $camp_taxbenifits=$_POST['camp_taxbenifits'];
    $slug = str_replace(' ', '-', $ca_type);
    $slug = preg_replace('/[^A-Za-z0-9\-]/', '', $slug);
    $slug = strtolower($slug);
    $ca_type=str_replace("'", "&#39;",$ca_type);
    
    $q="UPDATE campaign_details SET org_id='$org_id',camp_startdate='$ca_date',u_id='$ass_u_id',camp_title='$ca_type',camp_target_amount='$b_id',
camp_current_amount='$ca_bbr_code',comp_slug='$slug',camp_enddate='$ca_bbr_addres',camp_status='$e_status',camp_taxbenifits='$camp_taxbenifits' WHERE camp_id='$camp_id'" ;
    
    if ($con->query($q) === TRUE) {
        
        
        $con->close();
        
        header("location:campaign-details.php?camp_id=$camp_id&msg=Updated Successfully!");
    }else {
        
        echo "ERROR: Update Faild !!!!!!".$con->error; $con->close();
    }
}



if(isset($_POST['updatenewcontentcamp'])){
    $camp_id=$_POST['camp_id']; 
   $ass_u_id=$_POST['ass_u_id']; 
    $slug = str_replace(' ', '-', $ca_type);
    // Remove special characters except hyphens
    $slug = preg_replace('/[^A-Za-z0-9\-]/', '', $slug);
    $slug = strtolower($slug);
    $editorcode=str_replace("'", "&#39;",$_POST['editorcode']);
    if(strlen($editorcode)>10){
    
    $q="UPDATE campaign_details SET camp_content='$editorcode' WHERE camp_id='$camp_id'" ;
    
    if ($con->query($q) === TRUE) {
        
        
        $con->close();
        
        header("location:campaign-details.php?camp_id=$camp_id&msg=Updated Successfully!");
    }else {
        
        echo "ERROR: Update Faild !!!!!!".$con->error; $con->close();
    } } else{
        header("location:campaign-details.php?camp_id=$camp_id&error=Not Updated!");
    }
}

if(isset($_POST['addnewevent'])){
    $ca_date=$_POST['ca_date'];  $ass_u_id=$_POST['ass_u_id']; $ca_type=$_POST['ca_type'];
    $b_id=$_POST['b_id'];$ca_bbr_addres=$_POST['ca_bbr_addres'];
    $slug = str_replace(' ', '-', $ca_type);
    // Remove special characters except hyphens
    $slug = preg_replace('/[^A-Za-z0-9\-]/', '', $slug);
    $slug = strtolower($slug);
    $editorcode=str_replace("'", "&#39;",$_POST['editorcode']);
    
    $q="INSERT INTO event_details(e_date,u_id,e_title,eca_id,e_slug,e_venu,e_content)
 Values('$ca_date','$ass_u_id','$ca_type','$b_id','$slug','$ca_bbr_addres','$editorcode')" ;
    
    if ($con->query($q) === TRUE) {
        $e_id=$con->insert_id;
        
        $con->close();
        
        header("location:event_details.php?e_id=$e_id&msg=Added Successfully!");
    }else {
        
        echo "ERROR: Update Faild !!!!!!".$con->error; $con->close();
    }
}

if (isset($_POST['addnewproduct'])){
    $p_name=$_POST['p_name'];  $p_price=$_POST['p_price']; $eca_id=$_POST['eca_id'];
    $p_saleprice=$_POST['p_saleprice']; $p_url=$_POST['p_url'];$p_imgurl=$_POST['p_imgurl'];
    
    
    $q="INSERT INTO products_details(p_name,eca_id,p_price,p_saleprice,p_url,p_imgurl)
 Values('$p_name','$eca_id','$p_price','$p_saleprice','$p_url','$p_imgurl')" ;
    
    if ($con->query($q) === TRUE) {
        $p_id=$con->insert_id;
        
        
        header("location:product_details.php?p_id=$p_id&msg=Added Successfully!");
    } else {
        header("location:product_details.php?Error=Product Insert Fail");
    }
    
}


if (isset($_POST['upadtenewproduct'])){
    
    $p_id=$_POST['p_id'];  $p_name=$_POST['p_name'];  $p_price=$_POST['p_price']; $eca_id=$_POST['eca_id'];
    $p_saleprice=$_POST['p_saleprice']; $p_url=$_POST['p_url'];$p_imgurl=$_POST['p_imgurl'];
    
    
    $q="UPDATE products_details SET p_name='$p_name',eca_id='$eca_id',p_price='$p_price',
p_saleprice='$p_saleprice',p_url='$p_url',p_imgurl='$p_imgurl' WHERE p_id='$p_id'" ;
    
    
    if ($con->query($q) === TRUE) {        
        
        header("location:product_details.php?p_id=$p_id&msg=Update Successfully!");
    } else {
        header("location:product_details.php?Error=Product Update Fail");
    }
    
}


if (isset($_POST['addnewproduct2']) && !empty($_FILES["cdoc_filename"]["name"])){
    $p_name=$_POST['p_name'];  $p_price=$_POST['p_price']; $eca_id=$_POST['eca_id'];
    $p_saleprice=$_POST['p_saleprice']; $p_url=$_POST['p_url'];
   
    
    $q="INSERT INTO products_details(p_name,eca_id,p_price,p_saleprice,p_url)
 Values('$p_name','$eca_id','$p_price','$p_saleprice','$p_url')" ;
    
    if ($con->query($q) === TRUE) {
        $p_id=$con->insert_id;
    
    $statusMsg = '';
    $backlink=null;
    $targetDir = "../product-img/";
    $fileName = basename($_FILES["cdoc_filename"]["name"]);
    $targetFilePath = $targetDir.$fileName;
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
    $fileNameWithoutExtension = pathinfo($imageName, PATHINFO_FILENAME);
    
    $allowTypes = array('jpg','png','jpeg','webp');
    if(in_array($fileType, $allowTypes)){
        
        $fileid=date('Y-d-m')."".date('h-i-sa');
        $targetFilePath = $targetDir.$p_id."-".$fileid.".".$fileType;
        if(move_uploaded_file($_FILES["cdoc_filename"]["tmp_name"], $targetFilePath)){
            
            $q="UPDATE product_details SET p_imgurl='$targetFilePath' WHERE p_id='$p_id'";
           
                
                
                if ($con->query($q) === TRUE) {
                    
                    header("location:product_details.php?p_id=$p_id&msg=Upload Successfully!");
                }else {
                    header("location:product_details.php?p_id=$p_id&Error=File upload failedsss!");
                    
                }
                
        }else{
            header("location:product_details.php?p_id=$p_id&Error=File upload failed!");
        }
        
    }else{
        header("location:product_details.php?p_id=$p_id&Error=Sorry, only JPG, JPEG, PNG files are allowed to upload.");
        
    } }else {
        header("location:product_details.php?Error=Product Insert Fail");        
    }  
    
    
}







if(isset($_POST['addvideolink'])){
    $w_id=$_POST['w_id'];  $video=$_POST['video']; 
    $u_id=$_POST['u_id'];  
    
    $q="INSERT INTO campaign_videos(camp_id,u_id,wimg_url)
 Values('$w_id','$u_id','$video')";
    
    if ($con->query($q) === TRUE) {
             
        $con->close();
        
        header("location:campaign-details.php?camp_id=$w_id&msg=Added Successfully!");
    }else {
        
        echo "ERROR: Update Faild !!!!!!".$con->error; $con->close();
    }
}
if(isset($_POST['updateneweventdescription'])){
    $e_id=$_POST['e_id'];
    $ass_u_id=$_POST['ass_u_id'];
    $slug = str_replace(' ', '-', $ca_type);
    // Remove special characters except hyphens
    $slug = preg_replace('/[^A-Za-z0-9\-]/', '', $slug);
    $slug = strtolower($slug);
    $editorcode=str_replace("'", "&#39;",$_POST['editorcode']);
    if(strlen($editorcode)>10){
        
        $q="UPDATE event_details SET e_content='$editorcode' WHERE e_id='$e_id'" ;
        
        if ($con->query($q) === TRUE) {
            
            
            $con->close();
            
            header("location:event_details.php?e_id=$e_id&msg=Updated Successfully!");
        }else {
            
            echo "ERROR: Update Faild !!!!!!".$con->error; $con->close();
        } } else{
            header("location:event_details.php?e_id=$e_id&error=Not Updated!");
        }
}

if(isset($_POST['updatenewevent'])){
    $e_id=$_POST['e_id'];  $e_status=$_POST['e_status'];$eca_id=$_POST['eca_id'];
    $ca_date=$_POST['ca_date'];  $ass_u_id=$_POST['ass_u_id']; $ca_type=$_POST['ca_type'];
    $ca_bbr_addres=$_POST['ca_bbr_addres'];
    $slug = str_replace(' ', '-', $ca_type);
    // Remove special characters except hyphens
    $slug = preg_replace('/[^A-Za-z0-9\-]/', '', $slug);
    $slug = strtolower($slug);
    
    
    $q="UPDATE event_details SET e_date='$ca_date',u_id='$ass_u_id',e_title='$ca_type',eca_id='$eca_id',
e_slug='$slug',e_venu='$ca_bbr_addres',e_status='$e_status' WHERE e_id='$e_id'" ;
    
    if ($con->query($q) === TRUE) {
        
        $con->close();
        //  echo "here".$e_id;
        
        header("location:event_details.php?e_id=$e_id&msg=Updated Successfully!");
    }else {
        
        echo "ERROR: Update Faild !!!!!!".$con->error; $con->close();
    }
}


if(isset($_POST['addnewWorkdons'])){
    $ca_date=$_POST['ca_date'];  $ass_u_id=$_POST['ass_u_id']; $ca_type=$_POST['ca_type'];
    $b_id=$_POST['b_id'];
    $slug = str_replace(' ', '-', $ca_type);
    // Remove special characters except hyphens
    $slug = preg_replace('/[^A-Za-z0-9\-]/', '', $slug);
    $slug = strtolower($slug);
    $editorcode=str_replace("'", "&#39;",$_POST['editorcode']);
    
    $q="INSERT INTO workdons(w_date,u_id,w_title,eca_id,w_slug,w_content)
 Values('$ca_date','$ass_u_id','$ca_type','$b_id','$slug','$editorcode')" ;
    
    if ($con->query($q) === TRUE) {
        $w_id=$con->insert_id;
        
        $con->close();
        
        header("location:workdons-details.php?w_id=$w_id&msg=Added Successfully!");
    }else {
        
        echo "ERROR: Update Faild !!!!!!".$con->error; $con->close();
    }
}


if(isset($_POST['updatenewWorkdons'])){
    $w_id=$_POST['w_id'];  $e_status=$_POST['w_status'];
    $ca_date=$_POST['ca_date'];  $ass_u_id=$_POST['ass_u_id']; $ca_type=$_POST['ca_type'];
    $b_id=$_POST['b_id'];
    $slug = str_replace(' ', '-', $ca_type);
    // Remove special characters except hyphens
    $slug = preg_replace('/[^A-Za-z0-9\-]/', '', $slug);
    $slug = strtolower($slug);
    $editorcode=str_replace("'", "&#39;",$_POST['editorcode']);
    
    $q="UPDATE workdons SET w_date='$ca_date',u_id='$ass_u_id',w_title='$ca_type',eca_id='$b_id',
w_slug='$slug',w_content='$editorcode',w_status='$e_status' WHERE w_id='$w_id'
" ;
    
    if ($con->query($q) === TRUE) {
       $con->close();
        header("location:workdons-details.php?w_id=$w_id&msg=Updated Successfully!");
    }else {
        
        echo "ERROR: Update Faild !!!!!!".$con->error; $con->close();
    }
}


if(isset($_POST['updatenewcase'])){
    $ca_id=$_POST['ca_id']; 
    $ca_type=$_POST['ca_type'];  $ca_exec_status=$_POST['ca_exec_status'];
    $b_id=$_POST['b_id'];$ca_bbr_code=$_POST['ca_bbr_code'];$ca_bbr_addres=$_POST['ca_bbr_addres']; $ca_bbr_city=$_POST['ca_bbr_city'];
    
    $ca_bbr_mname=$_POST['ca_bbr_mname'];  $ca_bbr_mmno=$_POST['ca_bbr_mmno']; $ca_bbr_email=$_POST['ca_bbr_email'];
    $ca_bbr_refno=$_POST['ca_bbr_refno'];$ca_app_name=$_POST['ca_app_name'];$ca_app_address=$_POST['ca_app_address']; $ca_app_mno=$_POST['ca_app_mno'];
    
    $ca_vagency_name=$_POST['fa_id'];   $ca_exec_uid=$_POST['ca_exec_uid'];
    
    
    $q="UPDATE case_details SET ca_exec_status='$ca_exec_status',ca_type='$ca_type',b_id='$b_id',ca_bbr_code='$ca_bbr_code',ca_bbr_addres='$ca_bbr_addres',
ca_bbr_city='$ca_bbr_city',ca_bbr_mname='$ca_bbr_mname',ca_bbr_mmno='$ca_bbr_mmno',
ca_bbr_email='$ca_bbr_email',ca_bbr_refno='$ca_bbr_refno',ca_app_name='$ca_app_name',ca_app_address='$ca_app_address',
ca_app_mno='$ca_app_mno',fa_id='$ca_vagency_name',ca_exec_uid='$ca_exec_uid' WHERE ca_id='$ca_id'" ;
    
    if ($con->query($q) === TRUE) {
               
        $con->close();
        
        header("location:add_new_case.php?ca_id=$ca_id&msg=Updated Successfully!");
    }else {
        
        echo "ERROR: Update Faild !!!!!!".$con->error; $con->close();
    }
}


if(isset($_POST['finalcasesubmitbyexecutive'])){
    $ca_id=$_POST['ca_id'];
    $q="UPDATE case_details SET ca_exec_status=2, ca_exec_datetime='$timestamp'  WHERE ca_id='$ca_id'" ;    
    if ($con->query($q) === TRUE) {        
        $con->close();        
        header("location:executive-case-list.php?msg=Updated Successfully!");
    }else {        
        echo "ERROR: Update Faild !!!!!!".$con->error; $con->close();    }
}


if(isset($_POST['updatecasebyadmin'])){
    $ca_id=$_POST['ca_id'];  $ca_status=$_POST['ca_status'];$ca_exec_uid=$_POST['ca_exec_uid'];
    $ca_exec_status=$_POST['ca_exec_status'];
    $q="UPDATE case_details SET ca_status='$ca_status', ca_exec_uid='$ca_exec_uid', ca_exec_status='$ca_exec_status' WHERE ca_id='$ca_id'" ;
    if ($con->query($q) === TRUE) {
        $con->close();
        header("location:case_details.php?ca_id=$ca_id&msg=Updated Successfully!");
    }else {
        echo "ERROR: Update Faild !!!!!!".$con->error; $con->close();    }
}



if(isset($_POST['finalcasesubmitbyadmin'])){
    $ca_id=$_POST['ca_id'];
    $q="UPDATE case_details SET ca_status=3, ca_finalsub_datetime='$timestamp'  WHERE ca_id='$ca_id'" ;
    if ($con->query($q) === TRUE) {
        $con->close();
        header("location:case-list.php?msg=Updated Successfully!");
    }else {
        echo "ERROR: Update Faild !!!!!!".$con->error; $con->close();    }
}


if(isset($_POST["updatecampimages"]) ){
    $ca_id=$_POST['comp_id']; $u_id=$_POST['u_id'];
    if (isset($_FILES['images'])) {
        $imageCount = count($_FILES['images']['name']);
        for ($i = 0; $i < $imageCount; $i++) {
            $imageName = $_FILES['images']['name'][$i];
            $imageTmpName = $_FILES['images']['tmp_name'][$i];
            $imageSize = $_FILES['images']['size'][$i];
            
            $statusMsg = '';
            $backlink=null;
            
            $allowedExtensions = ['png', 'jpg', 'jpeg','webp'];
            $imageExtension = strtolower(pathinfo($imageName, PATHINFO_EXTENSION));
            $fileNameWithoutExtension = pathinfo($imageName, PATHINFO_FILENAME);
            
            
            if (in_array($imageExtension, $allowedExtensions) && $imageSize <= 1 * 1024 * 1024) {
                $targetDir = '../event-documents/';
                
              
                    $targetFilePath = $targetDir.$fileNameWithoutExtension."_MYSP-".date('Y-m')."-".$ca_id.".".$imageExtension;
                    if(move_uploaded_file($imageTmpName, $targetFilePath)){
                        $ta=2;
                        $cdoc_defaultimg="../event-documents/photos.png";
                        if($imageExtension=='png' || $imageExtension=='jpg' || $imageExtension=='jpeg' || $imageExtension=='webp'){
                            $cdoc_defaultimg="../event-documents/photos.png";
                        }else if($imageExtension=='zip' || $imageExtension=='rar'){
                            $cdoc_defaultimg="../event-documents/zip.png";
                        }
                        $targetFilePath = $fileNameWithoutExtension."_MYSP-".date('Y-m')."-".$ca_id.".".$imageExtension;
                        $q="UPDATE campaign_details SET camp_img='$targetFilePath' WHERE camp_id='$ca_id'" ;
                        
                        if ($con->query($q) === TRUE) {
                            
                            header("location:campaign-details.php?camp_id=$ca_id&fmsg=Uploaded Successfully!#third");
                        }else {
                            header("location:campaign-details.php?camp_id=$ca_id&ferror=File upload failed!#third1");
                        }
                        
                    }else{
                        header("location:campaign-details.php?camp_id=$ca_id&ferror=File upload failed!#third$targetFilePath");
                        
                    }
               
                
                
            } else{
                header("location:campaign-details.php?camp_id=$ca_id&ferror=File Extensions not allowed!#third5");
                
                
            }
            
            
        }   } else{
            header("location:campaign-details.php?camp_id=$ca_id&ferror=Files Not Fill!#third");
            
            
        } }
        if(isset($_POST['addeventvideo'])){
            $e_id=$_POST['e_id'];  $video=$_POST['video'];
            $u_id=$_POST['u_id'];
            
            $q="INSERT INTO event_videos(e_id,u_id,eimg_url)
 Values('$e_id','$u_id','$video')";
            
            if ($con->query($q) === TRUE) {
                
                $con->close();
                
                header("location:event_details.php?e_id=$e_id&msg=Added Successfully!");
            }else {
                
                echo "ERROR: Update Faild !!!!!!".$con->error; $con->close();
            }
        }
        
        if(isset($_POST["updateeventimagesev"]) ){
            $e_id=$_POST['e_id']; $u_id=$_POST['u_id'];
            if (isset($_FILES['images'])) {
                $imageCount = count($_FILES['images']['name']);
                for ($i = 0; $i < $imageCount; $i++) {
                    $imageName = $_FILES['images']['name'][$i];
                    $imageTmpName = $_FILES['images']['tmp_name'][$i];
                    $imageSize = $_FILES['images']['size'][$i];
                    
                    $statusMsg = '';
                    $backlink=null;
                    
                    $allowedExtensions = ['png', 'jpg', 'jpeg','webp'];
                    $imageExtension = strtolower(pathinfo($imageName, PATHINFO_EXTENSION));
                    $fileNameWithoutExtension = pathinfo($imageName, PATHINFO_FILENAME);
                    
                    
                    if (in_array($imageExtension, $allowedExtensions) && $imageSize <= 1 * 1024 * 1024) {
                        $targetDir = '../event-documents/';
                        
                        $qu="INSERT INTO event_images(e_id) VALUES ('$e_id')";
                        if ($conn->query($qu) === TRUE) {
                            $cdoc_id=$conn->insert_id;
                            $targetFilePath = $targetDir.$fileNameWithoutExtension."_".$cdoc_id."_MYSP-".date('Y-m')."-".$eca_id.".".$imageExtension;
                            if(move_uploaded_file($imageTmpName, $targetFilePath)){
                                $ta=2;
                                $cdoc_defaultimg="../event-documents/photos.png";
                                if($imageExtension=='png' || $imageExtension=='jpg' || $imageExtension=='jpeg' || $imageExtension=='webp'){
                                    $cdoc_defaultimg="../event-documents/photos.png";
                                }else if($imageExtension=='zip' || $imageExtension=='rar'){
                                    $cdoc_defaultimg="../event-documents/zip.png";
                                }
                                $targetFilePath = $fileNameWithoutExtension."_".$cdoc_id."_MYSP-".date('Y-m')."-".$eca_id.".".$imageExtension;
                                $q="UPDATE event_images SET eimg_url='$targetFilePath',u_id='$u_id',eimg_type='$ta',eimg_defaultimg='$cdoc_defaultimg' WHERE eimg_id='$cdoc_id'" ;
                                
                                if ($con->query($q) === TRUE) {
                                    
                                    header("location:event_details.php?e_id=$e_id&fmsg=Uploaded Successfully!#third");
                                }else {
                                    header("location:event_details.php?e_id=$e_id&ferror=File upload failed!#third1");
                                }
                                
                            }else{
                                header("location:event_details.php?e_id=$e_id&ferror=File upload failed!#third$targetFilePath");
                                
                            }
                        }else{
                            header("location:event_details.php?e_id=$e_id&ferror=File upload failed!#third3");
                            
                        }
                        
                        
                    } else{
                        header("location:event_details.php?e_id=$e_id&ferror=File Extensions not allowed!#third5");
                        
                        
                    }
                    
                    
                }   } else{
                    header("location:event_details.php?e_id=$e_id&ferror=Files Not Fill!#third");
                    
                    
                } }
        

if(isset($_POST["updateeventimages"]) ){
    $ca_id=$_POST['w_id']; $u_id=$_POST['u_id'];
    if (isset($_FILES['images'])) {
        $imageCount = count($_FILES['images']['name']);
        for ($i = 0; $i < $imageCount; $i++) {
            $imageName = $_FILES['images']['name'][$i];
            $imageTmpName = $_FILES['images']['tmp_name'][$i];
            $imageSize = $_FILES['images']['size'][$i];
            
            $statusMsg = '';
            $backlink=null;          
            
            $allowedExtensions = ['png', 'jpg', 'jpeg','zip','webp'];
            $imageExtension = strtolower(pathinfo($imageName, PATHINFO_EXTENSION));
            $fileNameWithoutExtension = pathinfo($imageName, PATHINFO_FILENAME);
            
            
            if (in_array($imageExtension, $allowedExtensions) && $imageSize <= 1 * 1024 * 1024) {
                $targetDir = '../event-documents/'; 
                               
                $qu="INSERT INTO work_images(w_id) VALUES ('$ca_id')";                
                if ($conn->query($qu) === TRUE) {
                    $cdoc_id=$conn->insert_id;
                     $targetFilePath = $targetDir.$fileNameWithoutExtension."_".$cdoc_id."_MYSP-".date('Y-m')."-".$ca_id.".".$imageExtension;
                    if(move_uploaded_file($imageTmpName, $targetFilePath)){
                        $ta=2;
                        $cdoc_defaultimg="../event-documents/photos.png";
                        if($imageExtension=='png' || $imageExtension=='jpg' || $imageExtension=='jpeg' || $imageExtension=='webp'){
                            $cdoc_defaultimg="../event-documents/photos.png";
                  }else if($imageExtension=='zip' || $imageExtension=='rar'){
                            $cdoc_defaultimg="../event-documents/zip.png";
                        }                        
                         $targetFilePath = $fileNameWithoutExtension."_".$cdoc_id."_MYSP-".date('Y-m')."-".$ca_id.".".$imageExtension;
                        $q="UPDATE work_images SET wimg_url='$targetFilePath',u_id='$u_id',wimg_type='$ta',wimg_defaultimg='$cdoc_defaultimg' WHERE wimg_id='$cdoc_id'" ;
                        
                        if ($con->query($q) === TRUE) {
                            
                            header("location:workdons-details.php?w_id=$ca_id&fmsg=Uploaded Successfully!#third");
                        }else {
                            header("location:workdons-details.php?w_id=$ca_id&ferror=File upload failed!#third1");
                        }
                        
                    }else{
                        header("location:workdons-details.php?w_id=$ca_id&ferror=File upload failed!#third$targetFilePath");
                        
                    }
                }else{
                    header("location:workdons-details.php?w_id=$ca_id&ferror=File upload failed!#third3");
                    
                }
                
                
            } else{
                header("location:workdons-details.php?w_id=$ca_id&ferror=File Extensions not allowed!#third5");
               
                
            }
            
            
        }   } else{
            header("location:workdons-details.php?w_id=$ca_id&ferror=Files Not Fill!#third");
            
            
        } }
        
        
        if(isset($_POST["updateeventimagescomp"]) ){
            $ca_id=$_POST['w_id']; $u_id=$_POST['u_id'];
            if (isset($_FILES['images'])) {
                $imageCount = count($_FILES['images']['name']);
                for ($i = 0; $i < $imageCount; $i++) {
                    $imageName = $_FILES['images']['name'][$i];
                    $imageTmpName = $_FILES['images']['tmp_name'][$i];
                    $imageSize = $_FILES['images']['size'][$i];
                    
                    $statusMsg = '';
                    $backlink=null;
                    
                    $allowedExtensions = ['png', 'jpg', 'jpeg','zip','webp'];
                    $imageExtension = strtolower(pathinfo($imageName, PATHINFO_EXTENSION));
                    $fileNameWithoutExtension = pathinfo($imageName, PATHINFO_FILENAME);
                    
                    
                    if (in_array($imageExtension, $allowedExtensions) && $imageSize <= 1 * 1024 * 1024) {
                        $targetDir = '../event-documents/';
                        
                        $qu="INSERT INTO campaign_images(camp_id) VALUES ('$ca_id')";
                        if ($conn->query($qu) === TRUE) {
                            $cdoc_id=$conn->insert_id;
                            $targetFilePath = $targetDir.$fileNameWithoutExtension."_".$cdoc_id."_MYSP-".date('Y-m')."-".$ca_id.".".$imageExtension;
                            if(move_uploaded_file($imageTmpName, $targetFilePath)){
                                $ta=2;
                                $cdoc_defaultimg="../event-documents/photos.png";
                                if($imageExtension=='png' || $imageExtension=='jpg' || $imageExtension=='jpeg' || $imageExtension=='webp'){
                                    $cdoc_defaultimg="../event-documents/photos.png";
                                }else if($imageExtension=='zip' || $imageExtension=='rar'){
                                    $cdoc_defaultimg="../event-documents/zip.png";
                                }
  $targetFilePath = $fileNameWithoutExtension."_".$cdoc_id."_MYSP-".date('Y-m')."-".$ca_id.".".$imageExtension;
$q="UPDATE campaign_images SET wimg_url='$targetFilePath',u_id='$u_id',wimg_type='$ta',wimg_defaultimg='$cdoc_defaultimg' WHERE caimg_id='$cdoc_id'" ;
                                
                                if ($con->query($q) === TRUE) {
                                    
                                    header("location:campaign-details.php?camp_id=$ca_id&fmsg=Uploaded Successfully!#third");
                                }else {
                                    header("location:campaign-details.php?camp_id=$ca_id&ferror=File upload failed!#third1");
                                }
                                
                            }else{
                                header("location:campaign-details.php?camp_id=$ca_id&ferror=File upload failed!#third$targetFilePath");
                                
                            }
                        }else{
                            header("location:campaign-details.php?camp_id=$ca_id&ferror=File upload failed!#third3");
                            
                        }
                        
                        
                    } else{
                        header("location:campaign-details.php?camp_id=$ca_id&ferror=File Extensions not allowed!#third5");
                        
                        
                    }
                    
                    
                }   } else{
                    header("location:campaign-details.php?camp_id=$ca_id&ferror=Files Not Fill!#third");
                    
                    
                } }
        
        
        if(isset($_POST["addexcelbyexecutive"]) ){
            $ca_id=$_POST['ca_id']; $u_id=$_POST['u_id'];
            if (isset($_FILES['images'])) {
                $imageCount = count($_FILES['images']['name']);
                for ($i = 0; $i < $imageCount; $i++) {
                    $imageName = $_FILES['images']['name'][$i];
                    $imageTmpName = $_FILES['images']['tmp_name'][$i];
                    $imageSize = $_FILES['images']['size'][$i];                    
                    $statusMsg = '';
                    $backlink=null;
                    
                    $allowedExtensions = ['xlsx','xls'];
                    $imageExtension = strtolower(pathinfo($imageName, PATHINFO_EXTENSION));
                    $fileNameWithoutExtension = pathinfo($imageName, PATHINFO_FILENAME);
                    
                    
                    if (in_array($imageExtension, $allowedExtensions) && $imageSize <= 4 * 1024 * 1024) {
                        $targetDir = 'event-documents/';
                        
                        $qu="INSERT INTO case_documents(ca_id) VALUES ('$ca_id')";
                        if ($conn->query($qu) === TRUE) {
                            $cdoc_id=$conn->insert_id;
                             $targetFilePath = $targetDir.$fileNameWithoutExtension."_".$cdoc_id."_MYSP-".date('Y-m')."-".$ca_id.".".$imageExtension;
                            if(move_uploaded_file($imageTmpName, $targetFilePath)){
                                $ta=3;
                                $cdoc_defaultimg="event-documents/xls.png";
                                
                                 $targetFilePath = $fileNameWithoutExtension."_".$cdoc_id."_MYSP-".date('Y-m')."-".$ca_id.".".$imageExtension;
                                $q="UPDATE case_documents SET cdoc_imageUrl='$targetFilePath',u_id='$u_id',cdoc_type='$ta',cdoc_defaultimg='$cdoc_defaultimg' WHERE cdoc_id='$cdoc_id'" ;
                                
                                if ($con->query($q) === TRUE) {
                                    
                                    header("location:executive-case-list.php?msg=Uploaded Successfully!");
                                }else {
                                    header("location:executive-case-list.php?error=File upload failed!");
                                }
                            }else{
                                header("location:executive-case-list.php?error=File upload failed!");
                           }
                        }else{
                            header("location:executive-case-list.php?error=File upload failed!");
                       }
                     } else{
                        header("location:executive-case-list.php?error=File Extensions not allowed!");
                   }
                }   } else{
                    header("location:executive-case-list.php?error=Files Not Fill!");
               } }
                
               if(isset($_POST["addpdfbyexecutive"]) ){
                   $ca_id=$_POST['ca_id']; $u_id=$_POST['u_id'];
                   if (isset($_FILES['images'])) {
                       $imageCount = count($_FILES['images']['name']);
                       for ($i = 0; $i < $imageCount; $i++) {
                           $imageName = $_FILES['images']['name'][$i];
                           $imageTmpName = $_FILES['images']['tmp_name'][$i];
                           $imageSize = $_FILES['images']['size'][$i];                           
                           $statusMsg = '';
                           $backlink=null;
                           
                           $allowedExtensions = ['pdf'];
                           $imageExtension = strtolower(pathinfo($imageName, PATHINFO_EXTENSION));
                           $fileNameWithoutExtension = pathinfo($imageName, PATHINFO_FILENAME);
                           
                           
                           if (in_array($imageExtension, $allowedExtensions) && $imageSize <= 4 * 1024 * 1024) {
                               $targetDir = 'event-documents/';
                               
                               $qu="INSERT INTO case_documents(ca_id) VALUES ('$ca_id')";
                               if ($conn->query($qu) === TRUE) {
                                   $cdoc_id=$conn->insert_id;
                                    $targetFilePath = $targetDir.$fileNameWithoutExtension."_".$cdoc_id."_MYSP-".date('Y-m')."-".$ca_id.".".$imageExtension;
                                   if(move_uploaded_file($imageTmpName, $targetFilePath)){
                                       $ta=4;
                                       $cdoc_defaultimg="event-documents/pdf.png";
                                       
                                        $targetFilePath = $fileNameWithoutExtension."_".$cdoc_id."_MYSP-".date('Y-m')."-".$ca_id.".".$imageExtension;
                                       $q="UPDATE case_documents SET cdoc_imageUrl='$targetFilePath',u_id='$u_id',cdoc_type='$ta',cdoc_defaultimg='$cdoc_defaultimg' WHERE cdoc_id='$cdoc_id'" ;
                                       
                                       if ($con->query($q) === TRUE) {
                                           
                                           header("location:executive-case-list.php?msg=Uploaded Successfully!");
                                       }else {
                                           header("location:executive-case-list.php?error=File upload failed!");
                                       }
                                   }else{
                                       header("location:executive-case-list.php?error=File upload failed!");
                                   }
                               }else{
                                   header("location:executive-case-list.php?error=File upload failed!");
                               }
                           } else{
                               header("location:executive-case-list.php?error=File Extensions not allowed!");
                           }
                       }   } else{
                           header("location:executive-case-list.php?error=Files Not Fill!");
                       } }
                       
                       if(isset($_POST["addpdfbymanager"]) ){
                           $ca_id=$_POST['ca_id']; $u_id=$_POST['u_id'];
                           if (isset($_FILES['images'])) {
                               $imageCount = count($_FILES['images']['name']);
                               for ($i = 0; $i < $imageCount; $i++) {
                                   $imageName = $_FILES['images']['name'][$i];
                                   $imageTmpName = $_FILES['images']['tmp_name'][$i];
                                   $imageSize = $_FILES['images']['size'][$i];
                                   $statusMsg = '';
                                   $backlink=null;                                   
                                   $allowedExtensions = ['pdf'];
                                   
                                   $imageExtension = strtolower(pathinfo($imageName, PATHINFO_EXTENSION));
                                   $fileNameWithoutExtension = pathinfo($imageName, PATHINFO_FILENAME);
                                   
                                   
                                   if (in_array($imageExtension, $allowedExtensions) && $imageSize <= 4 * 1024 * 1024) {
                                       $targetDir = 'event-documents/';
                                       
                                       $qu="INSERT INTO case_documents(ca_id) VALUES ('$ca_id')";
                                       if ($conn->query($qu) === TRUE) {
                                           $cdoc_id=$conn->insert_id;
                                            $targetFilePath = $targetDir.$fileNameWithoutExtension."_".$cdoc_id."_MYSP-".date('Y-m')."-".$ca_id.".".$imageExtension;
                                           if(move_uploaded_file($imageTmpName, $targetFilePath)){
                                               $ta=5;
                                               $cdoc_defaultimg="event-documents/pdf.png";
                                               
                                                $targetFilePath = $fileNameWithoutExtension."_".$cdoc_id."_MYSP-".date('Y-m')."-".$ca_id.".".$imageExtension;
                                               $q="UPDATE case_documents SET cdoc_imageUrl='$targetFilePath',u_id='$u_id',cdoc_type='$ta',cdoc_defaultimg='$cdoc_defaultimg' WHERE cdoc_id='$cdoc_id'" ;
                                               
                                               if ($con->query($q) === TRUE) {
                                                   
                                                   header("location:case-list.php?msg=Uploaded Successfully!");
                                               }else {
                                                   header("location:case-list.php?error=File upload failed!");
                                               }
                                           }else{
                                               header("location:case-list.php?error=File upload failed!");
                                           }
                                       }else{
                                           header("location:case-list.php?error=File upload failed!");
                                       }
                                   } else{
                                       header("location:case-list.php?error=File Extensions not allowed!");
                                   }
                               }   } else{
                                   header("location:case-list.php?error=Files Not Fill!");
                               } }
                               
        
        if(isset($_POST["updatecasedocuments"]) ){
            $ca_id=$_POST['ca_id'];  $u_id=$_POST['u_id'];
            if (isset($_FILES['images'])) {
                $imageCount = count($_FILES['images']['name']);
                for ($i = 0; $i < $imageCount; $i++) {
                    $imageName = $_FILES['images']['name'][$i];
                    $imageTmpName = $_FILES['images']['tmp_name'][$i];
                    $imageSize = $_FILES['images']['size'][$i];
                    
                    $statusMsg = '';
                    $backlink=null;
                    
                    
                    $allowedExtensions = ['pdf', 'docx', 'xlsx','xls','zip','rar'];
                    $imageExtension = strtolower(pathinfo($imageName, PATHINFO_EXTENSION));
                    $fileNameWithoutExtension = pathinfo($imageName, PATHINFO_FILENAME);
                    
                    if (in_array($imageExtension, $allowedExtensions) && $imageSize <= 4 * 1024 * 1024) {
                        $targetDir = 'event-documents/';
                      
                        $qu="INSERT INTO case_documents(ca_id) VALUES ('$ca_id')";
                        
                        if ($conn->query($qu) === TRUE) {
                            $cdoc_id=$conn->insert_id;
                             $targetFilePath = $targetDir.$fileNameWithoutExtension."_".$cdoc_id."_MYSP-".date('Y-m')."-".$ca_id.".".$imageExtension;
                            if(move_uploaded_file($imageTmpName, $targetFilePath)){
                                $ta=1;
                                $cdoc_defaultimg="event-documents/docx.png";      
                                if($imageExtension=='docx'){
                                    $cdoc_defaultimg="event-documents/docx.png";                                    
                                }else if($imageExtension=='pdf'){
                                    $cdoc_defaultimg="event-documents/pdf.png";
                                }else if($imageExtension=='xlsx' || $imageExtension=='xls'){
                                    $cdoc_defaultimg="event-documents/xls.png";
                                }else if($imageExtension=='zip' || $imageExtension=='rar'){
                                    $cdoc_defaultimg="event-documents/zip.png";
                                }
                                
                                $targetFilePath = $fileNameWithoutExtension."_".$cdoc_id."_MYSP-".date('Y-m')."-".$ca_id.".".$imageExtension;
                                $q="UPDATE case_documents SET cdoc_imageUrl='$targetFilePath',u_id='$u_id',cdoc_type='$ta',cdoc_defaultimg='$cdoc_defaultimg' WHERE cdoc_id='$cdoc_id'" ;
                                
                                if ($con->query($q) === TRUE) {
                                    
                                    header("location:add_new_case.php?ca_id=$ca_id&fmsg2=Uploaded Successfully!#four");
                                }else {
                                    header("location:add_new_case.php?ca_id=$ca_id&ferror2=File upload failed!#four");
                                }
                                
                            }else{
                                header("location:add_new_case.php?ca_id=$ca_id&ferror2=File upload failed!#four");
                                
                            }
                        }else{
                            header("location:add_new_case.php?ca_id=$ca_id&ferror2=File upload failed!#four");
                            
                        }
                        
                        
                    } else{
                        header("location:add_new_case.php?ca_id=$ca_id&ferror2=File Extensions not allowed!#four");
                        
                        
                    }
                    
                    
                }   } else{
                    header("location:add_new_case.php?ca_id=$ca_id&ferror2=Files Not Fill!#four");
                    
                    
                } }
                
                
                
                
                
                
                
                if(isset($_POST['addcaseinvoice'])){ $amt=4425; $t=1;
                    $ca_date=$_POST['ca_inv_date'];  $ass_u_id=$_POST['u_id']; $ca_id=$_POST['ca_id'];
                    $q="INSERT INTO case_invoice(ca_inv_date,ca_inv_u_id,ca_id,ca_invpro_qty,ca_invpro_amount,ca_inv_datetime)
 Values('$ca_date','$ass_u_id','$ca_id','$t','$amt','$timestamp')" ;                    
                    if ($con->query($q) === TRUE) {
                        $ca_inv_id=$con->insert_id;                        
                        $con->close();                        
                        header("location:case_payments.php?ca_id=$ca_id&ca_inv_id=$ca_inv_id&msg=Added Successfully!");
                    }else {
                        
                        echo "ERROR: Update Faild !!!!!!".$con->error; $con->close();
                    }
                }
      
                
                if(isset($_POST['updatecaseinvoice'])){
                    $ca_id=$_POST['ca_id'];
                    $ca_inv_id=$_POST['ca_inv_id'];            $ca_gstno=$_POST['ca_gstno'];
                    $ca_invpro_desc=$_POST['ca_invpro_desc'];$ca_invpro_qty=$_POST['ca_invpro_qty'];$ca_invpro_amount=$_POST['ca_invpro_amount']; 
                    $ca_date=$_POST['ca_inv_date'];
                    
$q="UPDATE case_invoice SET ca_gstno='$ca_gstno',ca_invpro_qty='$ca_invpro_qty',ca_invpro_desc='$ca_invpro_desc',ca_invpro_amount='$ca_invpro_amount',
ca_inv_date='$ca_date' WHERE ca_inv_id='$ca_inv_id'" ;
                    
                    if ($con->query($q) === TRUE) {                        
                        $con->close();                        
                        header("location:case_payments.php?ca_id=$ca_id&msg=Updated Successfully!");
                    }else {
                        
                        echo "ERROR: Update Faild !!!!!!".$con->error; $con->close();
                    }
                }
                
                
                if(isset($_POST['addcasepayment'])){
                    $ca_id=$_POST['ca_id'];
                    $ca_inv_id=$_POST['ca_inv_id'];
                    $ca_invpro_desc=$_POST['ca_payremark'];
                    $olca_payremark=$_POST['olca_payremark'];
                   $ca_invpro_amount=$_POST['ca_payamount'];
                    $ca_date=$_POST['ca_date'];
                    $u_name=$_POST['u_name'];
                    
                    $ca_invpro_desc=$olca_payremark." ".$ca_date.": Rs.".$ca_invpro_amount." by ".$u_name." - ".$ca_invpro_desc."<br>";
                    
                    
                    $q="UPDATE case_invoice SET ca_payamount=ca_payamount+'$ca_invpro_amount',ca_payremark='$ca_invpro_desc',
ca_paytimestamp='$timestamp' WHERE ca_inv_id='$ca_inv_id'";
                    
                    if ($con->query($q) === TRUE) {
                        
                        $con->close();
                        
                        header("location:case_payments.php?ca_id=$ca_id&msg=Added Successfully!");
                    }else {
                        
                        echo "ERROR: Update Faild !!!!!!".$con->error; $con->close();
                    }
                }
    
                
                if(isset($_POST['addevencate'])){
                    $ec_name=$_POST['ec_name'];
                    
                    $q="INSERT INTO events_categories(eca_title) Values('$ec_name')";
                    
                    if ($con->query($q) === TRUE) {
                        
                        
                        $con->close();
                        
                        header("location:event-categories.php?msg=Added Successfully!");
                    }else {
                        
                        echo "ERROR: Update Faild !!!!!!".$con->error; $con->close();
                    }
                }
                
                if(isset($_POST['updateevencate'])){
                    $ec_id=$_POST['ec_id']; $ec_name=$_POST['ec_name'];
                    
                    $q="UPDATE events_categories SET eca_title='$ec_name' WHERE eca_id='$ec_id'";
                    
                    if ($con->query($q) === TRUE) {
                        $con->close();
                        
                        header("location:event-categories.php?msg=Updated Successfully!");
                    }else {
                        
                        echo "ERROR: Update Faild !!!!!!".$con->error;
                        $con->close();
                    }
                }
                
                
                if(isset($_POST['addevenorg'])){
                    $ec_name=$_POST['ec_name'];
                    
                    $q="INSERT INTO ordanizers(org_name) Values('$ec_name')";
                    
                    if ($con->query($q) === TRUE) {
                        
                        
                        $con->close();
                        
                        header("location:organizers.php?msg=Added Successfully!");
                    }else {
                        
                        echo "ERROR: Update Faild !!!!!!".$con->error; $con->close();
                    }
                }
                
                if(isset($_POST['updateeveorg'])){
                    $ec_id=$_POST['org_id']; $ec_name=$_POST['ec_name'];
                    $org_contactno=$_POST['org_contactno']; $org_contactperson=$_POST['org_contactperson'];
                    $org_website=$_POST['org_website']; $org_email=$_POST['org_email'];
                     $org_address=$_POST['org_address'];
                     
                     $ec_name=str_replace("'", "&#39;",$ec_name);
                     $org_contactno=str_replace("'", "&#39;",$org_contactno);
                     $org_contactperson=str_replace("'", "&#39;",$org_contactperson);
                     $org_email=str_replace("'", "&#39;",$org_email);
                     $org_website=str_replace("'", "&#39;",$org_website);
                     $org_address=str_replace("'", "&#39;",$org_address);
                     
                     if(!empty($_FILES["org_logopath"]["name"])){
                         
                         $statusMsg = '';
                         $backlink=null;
                         $targetDir = "../event-documents/";
                         $fileName = basename($_FILES["org_logopath"]["name"]);
                         $targetFilePath = $targetDir.$fileName;
                         $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
                         
                         $allowTypes = array('jpg','png','jpeg');
                         if(in_array($fileType, $allowTypes)){                             
                             $targetFilePath = $targetDir.$ec_id.".".$fileType;
                             if(move_uploaded_file($_FILES["org_logopath"]["tmp_name"], $targetFilePath)){
                                 
                                 $targetDir = "event-documents/";
                                 $targetFilePath = $targetDir.$ec_id.".".$fileType;
                                 $qv="UPDATE ordanizers SET org_logopath='$targetFilePath' WHERE org_id='$ec_id'" ;
                                 $conn->query($qv);
                             } } }
                     
                    
                    $q="UPDATE ordanizers SET org_name='$ec_name',org_contactperson='$org_contactperson',org_contactno='$org_contactno',org_email='$org_email',
org_website='$org_website',org_address='$org_address' WHERE org_id='$ec_id'";
                    
                    if ($con->query($q) === TRUE) {
                        $con->close();
                        
                        header("location:organizers.php?msg=Updated Successfully!");
                    }else {
                        
                        echo "ERROR: Update Faild !!!!!!".$con->error;
                        $con->close();
                    }
                }
                
                if(isset($_GET['verifyvol'])){
                    $ec_id=$_GET['v_id']; $verifyvol=$_GET['verifyvol'];
                    
                    $q="UPDATE volunteer_details SET v_status='$verifyvol' WHERE v_id='$ec_id'";
                    
                    if ($con->query($q) === TRUE) {
                        $con->close();
                        
                        header("location:volunteers-list.php?msg=Updated Successfully!");
                    }else {
                        
                        echo "ERROR: Update Faild !!!!!!".$con->error;
                        $con->close();
                    }
                }
                if(isset($_GET['deletevol'])){
                    $ec_id=$_GET['v_id']; $verifyvol=$_GET['deletevol'];
                    
                    $q="DELETE FROM volunteer_details WHERE v_id='$ec_id'";
                    
                    if ($con->query($q) === TRUE) {
                        $con->close();
                        
                        header("location:volunteers-list.php?msg=Deleted Successfully!");
                    }else {
                        
                        echo "ERROR: Update Faild !!!!!!".$con->error;
                        $con->close();
                    }
                }
                
                if(isset($_GET['verifycon'])){
                    $ec_id=$_GET['v_id']; $verifyvol=$_GET['verifycon'];
                    
                    $q="UPDATE conatct_details SET con_status='$verifyvol' WHERE con_id='$ec_id'";
                    
                    if ($con->query($q) === TRUE) {
                        $con->close();
                        
                        header("location:contactus-list.php?msg=Updated Successfully!");
                    }else {
                        
                        echo "ERROR: Update Faild !!!!!!".$con->error;
                        $con->close();
                    }
                }
                if(isset($_GET['deletecon'])){
                    $ec_id=$_GET['v_id']; $verifyvol=$_GET['deletevol'];
                    
                    $q="DELETE FROM conatct_details WHERE con_id='$ec_id'";
                    
                    if ($con->query($q) === TRUE) {
                        $con->close();
                        
                        header("location:contactus-list.php?msg=Deleted Successfully!");
                    }else {
                        
                        echo "ERROR: Update Faild !!!!!!".$con->error;
                        $con->close();
                    }
                }
                
?>