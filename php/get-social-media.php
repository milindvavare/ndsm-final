<?php 
include('db/db.php');
$sql_social_media = "SELECT * FROM social_media";
$result = mysqli_query($conn, $sql_social_media);
if (mysqli_num_rows($result) > 0) {
	foreach ($result as $row) {
		$facebook = $row['facebook'];
		$instagram = $row['instagram'];
		$twitter = $row['twitter'];
		$linkedin = $row['linkedin'];
	}
}

?>