<?php
$Id=$_GET['ID'];

$con=mysqli_connect("localhost:3307","root","","ecommerce");
mysqli_query($con,"DELETE FROM `tbluser` WHERE Id='$Id' ");
header("location:user.php");
?>