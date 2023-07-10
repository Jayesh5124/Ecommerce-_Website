<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

     <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php
    session_start();
    $count=0;
    if(isset($_SESSION['cart']))
    {
        $count=count($_SESSION['cart']);

    }
    ?>

<nav class="navbar bg-body-tertiary">
  <div class="container-fluid font-monospace">
    <a class="navbar-brand pb-2"><img src="logo.png" height='70px' width='130px'></a>
    
    <div class="d-flex">
    <a href="index.php" class="text-warning text-decoration-none pe-2"><i class="fa-solid fa-house-chimney"></i> Home |</a>
    <a href="viewCart.php" class="text-warning text-decoration-none pe-2"><i class="fa-solid fa-cart-arrow-down"></i> Cart (<?php echo $count?>) |</a>

    <span class="text-warning pe-2">
    <i class="fa-solid fa-user"></i> Hello, 
    <?php
     if(isset($_SESSION['user']))
     {
     echo $_SESSION['user'];
     echo"
     |  <a href='form/logout.php' class='text-warning text-decoration-none pe-2'><i class='fa-solid fa-right-to-bracket'></i> Logout |</a>
     ";
     }
     else{
        echo"
     |  <a href='form/login.php' class='text-warning text-decoration-none pe-2'><i class='fa-solid fa-right-to-bracket'></i> Login |</a>
     ";
     }
   
    ?>
    
    
    <a href="../admin/mystore.php" class="text-warning text-decoration-none pe-2">Admin</a>
    </span>
    
  
</nav>
</div>

<div class="bg-danger sticky-top font-monospace ">
    <ul class="list-unstyled d-flex justify-content-center">
        <li><a href="laptop.php" class="text-decoration-none text-white fw-bold fs-4 px-5">LAPTOPS</a></li>
        <li><a href="mobile.php" class="text-decoration-none text-white fw-bold fs-4 px-5">MOBILES</a></li>
        <li><a href="bag.php" class="text-decoration-none text-white  fw-bold fs-4 px-5">BAGS</a></li>
    </ul>
</div>
</body>
</html>