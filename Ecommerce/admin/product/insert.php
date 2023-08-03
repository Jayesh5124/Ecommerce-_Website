<?php

if(isset($_POST['submit']))
{

    include 'Config.php';
    $product_name=$_POST['Pname'];
    $product_price=$_POST['Pprice'];
    $product_Key=$_POST['Pkey'];
    $product_image=$_FILES['Pimage'];
     print_r($product_image);

   $image_loc=$_FILES['Pimage']['tmp_name'];
   $image_name=$_FILES['Pimage']['name'];
   $image_des="Uploadimage/".$image_name;

   move_uploaded_file($image_loc,"Uploadimage/".$image_name);

   $product_category=$_POST['Pages'];

   //insert product
   $q = "select * from tblproduct where pName='$product_name'";
   $result = mysqli_query($con , $q);
   $row= mysqli_num_rows($result);
  //for unique element
    if($row>0)
   {
     echo 
     "
     <script>
     alert('this product alreday exist');
     </script>
     ";
   }
   else{

    mysqli_query($con,"INSERT INTO `tblproduct`( `PName`, `PPrice`, `PKey`, `Pimage`, `PCategory`) VALUES ('$product_name','$product_price','$product_Key','$image_des','$product_category')");
   }

}

header("location:index.php");
?>

<!-- Fetch data -->
