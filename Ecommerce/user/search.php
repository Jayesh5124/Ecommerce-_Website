<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product-page</title>

    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <?php 
include 'header.php';
?>
</head>
<body>  
  <div class="container-fluid">
  <div class="col-md-12">
    <div class="row">
    
<?php
$con=mysqli_connect("localhost:3307","root","","ecommerce");
$searchText=$_POST['searchtext'];

$record =mysqli_query($con,"SELECT * FROM `tblproduct` WHERE PKey Like '%$searchText%'");
$row1= mysqli_num_rows($record);



        if($row1>0)
        {
        while($row=mysqli_fetch_array($record))
        {
          

          
      /*break point for image for small screen or mid screen and total width of screen in css is 12 col (in first div-<div class='col-md-6 col-lg-4'>)*/    
   echo"    
  
   <div class='col-md-6 col-lg-4 m-auto mb-3'>
   <form action='Insertcart.php' method='POST'>
<div class='card m-auto' style='width: 18rem;'>
  <img src='../admin/product/$row[Pimage]' class='card-img-top m-auto'  style='width:170px; height:300px;' >
  <div class='card-body text-center'>
    <h5 class='card-title text-danger fs-4 fw-bold'>$row[PName]</h5>
    <p class='card-text text-danger fs-4 fw-bold'>";?>RS: <?php echo number_format($row['PPrice'],2);?> <?php echo " </p>
    <input type='hidden' name='PName' value='$row[PName]'>
    <input type='hidden' name='PPrice' value='$row[PPrice]'>
    <input type='number' name='PQuantity' value='min='1' max='20''  placeholder='Quantity'><br><br>
    <input type='submit' name='addCart' class='btn btn-warning text-white w-100' value='Add To Cart' >
    
  </div>
</div>
</form>
</div>
";

}
        }
      
      else{
        echo" <h5 class='card-title text-danger fs-4 fw-bold'>Not Available</h5>";
      }



?>
</div>
    </div>
  </div>
  <?php
  include 'footer.php';  
  ?>
</body>
</html>