<?php 
include('../db/db.php');
date_default_timezone_set("Asia/Calcutta");
$name = $_POST['your_name'];
$email = $_POST['email_address'];
$subject = $_POST['subject_text'];
$message = $_POST['message_text'];
$date = date('Y-m-d H:i:s');


$sql = "INSERT INTO `contact_us`(`name`, `email`, `subject`, `message`, `co_date`, `status`) VALUES ('$name','$email','$subject','$message','$date','1')";
if (mysqli_query($conn, $sql)) {
	echo "1";
}
else{
	echo "0";
}


?>