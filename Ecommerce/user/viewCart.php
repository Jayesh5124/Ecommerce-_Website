<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>viewCart</title>

   
</head>
<body>
    <?php
    include 'header.php';
    ?>
 
     <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center bg-light mb-5 rounded ">
                <h1 class="text-warning">My Cart</h1>
            </div>
        </div>
     </div>

     <div class="container-fluid">
        <div class="row justify-content-around">
            <div class="col-sm-12 col-md-6 col-lg-9">
                <table class="table table-bordered text-center">
                    <thead class=" text-bold fs-5">
                        <th>Serial no.</th>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Product Quantity</th>
                        <th>Total Price</th>
                        <th>Update</th>
                        <th>Delete</th>
                        
                    </thead>
                    <tbody>
                        <?php
                        

                        $ptotal=0;
                        $total=0;
                        $i=0;

                        if(isset($_SESSION['cart']))
                        {
                            foreach($_SESSION['cart'] as $key=>$value)
                            {
                                
                                $ptotal= $value['productPrice'] * $value['productQuantity'];
                                $total += $value['productPrice'] * $value['productQuantity'];
                                $i=$key+1;
                                echo"
                                <form action='Insertcart.php' method='POST'>
                                <tr>
                                    <td>$i</td>
                                    <td><input type='hidden' name='PName' value='$value[productName]'>$value[productName]</td>
                                    <td><input type='hidden' name='PPrice' value='$value[productPrice]'>$value[productPrice]</td>
                                    <td><input type='text' name='PQuantity' value='$value[productQuantity]'></td>
                                    <td>$ptotal</td>
                                    <td><button name='update' class='bg-warning'>Update</button></td>
                                    <td><button name='remove' class='bg-danger'>Delete</button></td>
                                    <td><input type='hidden' name='item' value='$value[productName]'></td>

                                </tr>
                                </form>
                                ";
                            

                            }
                        }
                        ?>
                    </tbody>
                </table>

            </div>
            

            <div class="col-lg-3 text-center">
                <h3>TOTAL</h3>
                
                <h1 class="bg-danger text-white"><?php echo number_format($total,2)?></h1>
                
                
               <?php
               
               $_SESSION['total'] = $total;
                if($total>0)
                {
                echo"
                <a href='paydetail.php? ID=$total'><button type='button' name='pay' class='btn btn-danger col-lg-6'>BUY</button></a>
                ";
                }
                ?>
                    
            </div>
            
        </div>
     </div>
</body>
</html>