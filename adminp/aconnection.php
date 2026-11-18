<?php $firmname="Eyematic";
//$db="eyematiccoin";  $dbpass=''; $dbuser='root';
$db="eyematic_front";  $dbpass='mdXME8%wbia1'; $dbuser='eyematic_front';

$con=mysqli_connect('localhost',$dbuser,$dbpass,$db);
if ($con->connect_error) {
  die("Connection failed:" . $con->connect_error);
}
$conn=mysqli_connect('localhost',$dbuser,$dbpass,$db);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
$connn=mysqli_connect('localhost',$dbuser,$dbpass,$db);
if ($connn->connect_error) {
  die("Connection failed: " . $connn->connect_error);
}
$connnn=mysqli_connect('localhost',$dbuser,$dbpass,$db);
if ($connnn->connect_error) {
  die("Connection failed: " . $connnn->connect_error);
}

$conff=mysqli_connect('localhost',$dbuser,$dbpass,$db);
if ($conff->connect_error) {
    die("Connection failed: " . $conff->connect_error);
}
$conf=mysqli_connect('localhost',$dbuser,$dbpass,$db);
if ($conf->connect_error) {
    die("Connection failed: " . $conf->connect_error);
}



?>


