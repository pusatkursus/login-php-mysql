<?php 
$db = new mysqli('localhhost','root','','latihan');
if ($db) {
	# code...
}else{
	echo "Connection Failed";
}
?>