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

 <div class="container">
    <div class="row">
        <div class="col-md-6 m-auto border border-primary mt-3">

        
        <form action="insert.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <p class="text-center fWw-bold fs-3 text-warning">Product Detail</p>
                
            </div>

            <div class="mb-3">
                <label class="form-label">Product Name</label>
                <input type="text" name="Pname" class="form-control"  placeholder="Enter Product Name">
            </div>

            <div class="mb-3">
                <label class="form-label">Add Product Price</label>
                <input type="text" name="Pprice" class="form-control"  placeholder="Enter Product Price">
            </div>

            <div class="mb-3">
                <label class="form-label">Product Image</label>
                <input type="file" name="Pimage"class="form-control" >
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
            <button name="submit" class="bg-danger fs-4 fw-bold my-3 form-control text-white">Upload</button>
        </form>
    </div>
    </div>
 </div>

 <!-- fetch data -->
 <div class="container">
    <div class="row">
        <div class="col-md-8 m-auto" >

      
 <table class="table border border-warning table-hover my-5">
  <thead class="bg-dark text-white fs-5 font-monospace text-center">
         <th class="bg-dark text-white">Id </th>
         <th class="bg-dark text-white">Name </th>
         <th class="bg-dark text-white">Price </th>
         <th class="bg-dark text-white">Image </th>
         <th class="bg-dark text-white">Category </th>
         <th class="bg-dark text-white">Delete</th>
         <th class="bg-dark text-white">Update</th>
         

  </thead>
  

  
  <tbody class="texr-center">
    <?php
    include 'Config.php';
    $Record =mysqli_query($con,"SELECT * FROM `tblproduct` ");


    // for fetch
    while($row=mysqli_fetch_array($Record))

    echo"
    <tr>
    <td>$row[id]</td>
    <td>$row[PName]</td>
    <td>$row[PPrice]</td>
    <td><img src='$row[Pimage]' height='90px' width='200px'></td>
    <td>$row[PCategory]</td>
    <td><a href='delete.php? ID=$row[id]' class='btn btn-danger'>Delete</a></td>
    <td><a href='update.php? ID=$row[id]' class='btn btn-warning'>Update</a></td>
    
    </tr>


    ";
    ?>
    
  </tbody>
</table>
</div>
    </div>
 </div>
</body>
</html>