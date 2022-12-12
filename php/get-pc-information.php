<?php 
include('db/db.php');
$sql_information = "SELECT * FROM pc_information";
$result_info = mysqli_query($conn, $sql_information);
if (mysqli_num_rows($result_info) > 0) {
	foreach ($result_info as $row) {
		$address_pc = $row['address'];
		$email_pc_id = $row['email'];
		$contact_no_pc = $row['contact'];
		$alternative_contact_pc = $row['alternative_contact'];
	}
}
?>