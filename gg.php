<?php

$dir    = "./Storage/".$_GET['email'];
if (!file_exists($dir."/")) {
    mkdir($dir."/", 0777, true);
}
$files1 = scandir($dir);
$size1=sizeof($files1);
//$files2 = scandir($dir, 1);

for ($i=0; $i < $size1 ; $i++) 
{ 
	echo "<a href="."\"".$files1[$i]."\"".">".$files1[$i]." </a></br>";
	
	# code...
}

//print_r($files2);
?>
