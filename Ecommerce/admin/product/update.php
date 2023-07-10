<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product-page</title>

    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <?php
        $id=$_GET['ID'];
        include 'Config.php';
        $Record=mysqli_query($con,"SELECT * FROM `tblproduct` WHERE  id='$id' ");
        // fetch record data
        $data=mysqli_fetch_array($Record);
        echo $id=$_GET['ID'];
        

    ?> 



 <div class="container">
    <div class="row">
        <div class="col-md-6 m-auto border border-primary mt-3">

        
        <form action="update.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <p class="text-center fWw-bold fs-3 text-warning">Product Update</p>
                
            </div>

            <div class="mb-3">
                <label class="form-label">Product Name</label>
                <input type="text" value="<?php echo $data['PName']?>" name="Pname" class="form-control"  placeholder="Enter Product Name">
            </div>

            <div class="mb-3">
                <label class="form-label">Add Product Price</label>
                <input type="text" value="<?php echo $data['PPrice']?>" name="Pprice" class="form-control"  placeholder="Enter Product Price">
            </div>

            <div class="mb-3">
                <label class="form-label">Product Image</label>
                <input type="file" name="Pimage"class="form-control" ><br>
                <img src="<?php echo $data['Pimage']?>" alt="" style="height:100px;">
            </div>

            <div class="mb-3">
                <label class="form-label">Select Page Category</label>
                <select class="form-select" name="Pages">
                    <option value="Home">Home</option>
                    <option value="Laptop">Laptop</option>
                    <option value="Bag">Bag</option>
                    <option value="Mobile">Mobile</option>
               </select>
            </div>
            <input type="hidden" name="id" value="<?php echo $data['id']?>">
            <button name="update" class="bg-danger fs-4 fw-bold my-3 form-control text-white">Update</button>
        </form>
    </div>
    </div>

</body>
</html>

<!-- php update code -->

<?php
if(isset($_POST['update']))
{

    $id=$_POST['id'];
    $product_name=$_POST['Pname'];
    $product_price=$_POST['Pprice'];
    $product_image=$_FILES['Pimage'];
    //print_r($product_image);

   $image_loc=$_FILES['Pimage']['tmp_name'];
   $image_name=$_FILES['Pimage']['name'];
   $image_des="Uploadimage/".$image_name;

   move_uploaded_file($image_loc,"Uploadimage/".$image_name);

   $product_category=$_POST['Pages'];

   include 'Config.php';
   mysqli_query($con,"UPDATE `tblproduct` SET `PName`='$product_name',`PPrice`='$product_price',`Pimage`='$image_des',`PCategory`='$product_category' WHERE  id=$id");
   header("location:index.php");
}
?>


