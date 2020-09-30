<?php
include "Connection.php";
if (isset($_POST['position'])) {
	$id=$_POST['id'];
	$position=$_POST['position'];
$sql="UPDATE wordpositions SET position=".$position." WHERE id=".$id."";
mysqli_query($conn,$sql);
echo 'Your list has been succesful saved.';
}
?>
