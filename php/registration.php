<?php 
include('../db/db.php');
date_default_timezone_set("Asia/Calcutta");
$full_name = $_POST['full_name'];
$email = $_POST['email_id'];
$mobile_no = $_POST['mobile_no'];
$course = $_POST['course'];
$date = date('Y-m-d H:i:s');

$sql_insert = "INSERT INTO `registration`(`full_name`, `email`, `mobile_no`, `course`, `or_date`, `status`) VALUES ('$full_name','$email','$mobile_no','$course','$date','1')";
if (mysqli_query($conn, $sql_insert)) {
	echo "1";
}
else{
	echo "0";
}

?>