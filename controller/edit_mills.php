 	<?php

require 'config_sql.php';

$name = $_POST['name'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$id = $_POST['id'];
$commodity = $_POST['commodity'];

$sql = mysql_query("UPDATE Mills SET Name = '$name', Address = '$address', Contact = '$contact', Commodities_Supplied = '$commodity' WHERE Id = '$id'");

if($sql == false){
	echo "<script type='text/javascript'>alert('Error in updating'); </script>";
}
else {
	echo "<script type='text/javascript'>alert('Successfully Updated'); location.href = '../view/view_mills.php';</script>";
}

?>