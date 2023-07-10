<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin home-page</title>

     <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<?php
session_start();
if(!$_SESSION['admin'])
{
  header("location:form/login.php");
}
?>
<body>
<nav class="navbar navbar-light bg-dark">
  <div class="container-fluid text-white">

    <a class="navbar-brand text-white"><h1>MyStore</h1></a>
    <span>
    <i class="fa-regular fa-circle-user"></i>
    Hello,<?php echo $_SESSION['admin']?>
    <i class="fa-solid fa-right-from-bracket"></i>
    <a href="form/logout.php" class="text-decoration-none text-white">Logout</a>|
    <a href="../user/index.php" class="text-decoration-none text-white">Userpanel</a>

     </span>
  </div>
</nav> 
<div>
  <h2 class="text-center">Dashboard</h2>
</div>

<div class="col-md-6 bg-danger text-center m-auto">
  <a href="product/index.php" class="text-white text-decoration-none fs-4 fw-bold px-5">Add Post</a>
  <a href="user.php" class="text-white text-decoration-none fs-4 fw-bold px-5">Users</a>
</div>
</body>
</html>