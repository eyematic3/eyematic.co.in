<?php include('aconnection.php');


if(isset($_GET['cdoc_id'])){
    $cdoc_id=$_GET['cdoc_id'];  $ca_id=$_GET['w_id'];
    $qt="DELETE FROM work_images WHERE wimg_id='$cdoc_id'";
    if($conn->query($qt) === TRUE) {
        $conn -> close();
        header("location:workdons-details.php?w_id=$ca_id&ferror=Deleted Successfully!#third");
    }else {$con -> close();
    header("location:workdons-details.php?w_id=$ca_id&ferror=Can't Delete it!#third");
    }
    
}

if(isset($_GET['cdoc_id2'])){
    $cdoc_id=$_GET['cdoc_id2'];  $ca_id=$_GET['ca_id'];
    $qt="DELETE FROM case_documents WHERE cdoc_id='$cdoc_id'";
    if($conn->query($qt) === TRUE) {
        $conn -> close();
        header("location:add_new_case.php?ca_id=$ca_id&ferror2=Deleted Successfully!#four");
    }else {$con -> close();
    header("location:add_new_case.php?ca_id=$ca_id&ferror2=Can't Delete it!#four");
    }
    
}


if(isset($_GET['caimg_id'])){
    $cdoc_id=$_GET['caimg_id'];  $ca_id=$_GET['camp_id'];
    $qt="DELETE FROM campaign_images WHERE caimg_id='$cdoc_id'";
    if($conn->query($qt) === TRUE) {
        $conn -> close();
        header("location:campaign-details.php?camp_id=$ca_id&ferror2=Deleted Successfully!#four");
    }else {$con -> close();
    header("location:campaign-details.php?camp_id=$ca_id&ferror2=Can't Delete it!#four");
    }
    
}

if(isset($_GET['cavid_id'])){
    $cdoc_id=$_GET['cavid_id'];  $ca_id=$_GET['camp_id'];
    $qt="DELETE FROM campaign_videos WHERE cavid_id='$cdoc_id'";
    if($conn->query($qt) === TRUE) {
        $conn -> close();
        header("location:campaign-details.php?camp_id=$ca_id&ferror2=Deleted Successfully!#four");
    }else {$con -> close();
    header("location:campaign-details.php?camp_id=$ca_id&ferror2=Can't Delete it!#four");
    }
    
}




if(isset($_GET['camp_id'])){
    $cdoc_id=$_GET['camp_id'];   $org_id=$_GET['org_id'];
    $qt="DELETE FROM campaign_details WHERE camp_id='$cdoc_id'";
    if($conn->query($qt) === TRUE) {
      
        $conn -> close();  
        header("location:campaigns-list.php?Error=Deleted Successfully!");
    }else { $conn -> close();
    header("location:campaigns-list.php?Error=Can't Delete it!");
    }
    
}

if(isset($_GET['eimg_id'])){
    $eimg_id=$_GET['eimg_id'];  $e_id=$_GET['e_id'];
    $qt="DELETE FROM event_images WHERE eimg_id='$eimg_id'";
    if($conn->query($qt) === TRUE) {
        $conn -> close();
        header("location:event_details.php?e_id=$e_id&ferror=Deleted Successfully!#third");
    }else {$con -> close();
    header("location:event_details.php?e_id=$e_id&ferror=Can't Delete it!#third");
    }
    
}

if(isset($_GET['evid_id'])){
    $evid_id=$_GET['evid_id'];  $e_id=$_GET['e_id'];
    $qt="DELETE FROM event_videos WHERE evid_id='$evid_id'";
    if($conn->query($qt) === TRUE) {
        $conn -> close();
        header("location:event_details.php?e_id=$e_id&ferror2=Deleted Successfully!#four");
    }else {$con -> close();
    header("location:event_details.php?e_id=$e_id&ferror2=Can't Delete it!#four");
    }
    
}







?>