<?php
echo $Id=$_GET['ID'];
include 'Config.php';
mysqli_query($con,"DELETE FROM `tblproduct` WHERE id='$Id' ");
header("location:index.php");
?>