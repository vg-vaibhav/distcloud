<?php

include('connection.php');

if (isset($_GET['dow'])) {

	$path =$_GET['dow'];
	$sql = "SELECT * FROM `upload` WHERE path='$path'";
	$res = mysqli_query($con, $sql);
	header('content-type : application/octet-stream');
	header('content-disposition : attachment ; filename ="' .basename($path).'"');
	header('content-length : '. filesize($path));
	readfile($path);
}





?>