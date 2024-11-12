<?php 
	include "konekdb.php";

	if (isset($_POST['enter'])){
		$insertsql = mysqli_query($conf, "INSERT INTO user (Name, Timee) VALUES ('$_POST[name]', '$_POST[datetime]' )");

		// if ($insertsql) {
		// 	redirect('Logic.php');
		// }
	}

?>