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
    <?php
   
    $total=$_SESSION['total']  ;
  
    ?>
    
 <div class="container mt-5" style="height:60%">
    <div class="row">
        <div class="col-md-6 m-auto  ">
 <div class="card bg-danger text-white rounded-3">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                      <h5 class="mb-0">Card details</h5>
                      
                    </div>

                

                    <form action="paysuccses.php" method="POST" class="mt-4">
                      <div class="form-outline form-white mb-4">
                        <input type="text" name="cardholdername" id="typeName" class="form-control form-control-lg" siez="17"
                          placeholder="Cardholder's Name" />
                        <label class="form-label"  for="typeName">Cardholder's Name</label>
                      </div>

                      <div class="form-outline form-white mb-4">
                        <input type="text" name="cardhnumber" id="typeText" class="form-control form-control-lg" siez="17"
                          placeholder="1234 5678 9012 3457" minlength="19" maxlength="19" />
                        <label class="form-label" for="typeText">Card Number</label>
                      </div>

                      <div class="row mb-4">
                        <div class="col-md-6">
                          <div class="form-outline form-white">
                            <input type="text" name="cardexp" id="typeExp" class="form-control form-control-lg"
                              placeholder="MM/YYYY" size="7" id="exp" minlength="7" maxlength="7" />
                            <label class="form-label" for="typeExp">Expiration</label>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-outline form-white">
                            <input type="password" name="cardcvv" id="typeText" class="form-control form-control-lg"
                              placeholder="&#9679;&#9679;&#9679;" size="1" minlength="3" maxlength="3" />
                            <label class="form-label" for="typeText">Cvv</label>
                          </div>
                        </div>
                      </div>

                    

                    <hr class="my-4">

                    <div class="d-flex justify-content-between">
                      <p class="mb-2">Subtotal</p>
                      <?php
                     //session_start();
                    
                      $total=$_SESSION['total'] ;
                      $ship=40;
                      
                      ?>
                      

                      
                      <p class="mb-2">RS: <?php echo number_format($total,2)?></p>
                      
                      
                    </div>

                    <div class="d-flex justify-content-between">
                      <p class="mb-2">Shipping</p>
                      <p class="mb-2">Rs: <?php echo number_format($ship,2)?></p>
                    </div>
                    <?php  echo $_SESSION['total'] ;?>

                    <div class="d-flex justify-content-between mb-4">
                      <p class="mb-2">Total(Incl. taxes)</p>
                      <p class="mb-2">RS: <?php echo number_format($total+$ship,2)?></p>
                    </div>

                   
                    <button type="submit" name="pay" class="btn btn-info btn-block btn-lg">
                      <div class="d-flex justify-content-between">
                        <span>Rs: <?php echo number_format($total+$ship,2)?> </span>
                        <span> Checkout <i class="fas fa-long-arrow-alt-right ms-2"></i></span>
                      </div>
                    </button>
                    
                    </form>
                    
                    </div>
                    </div>
</div>

</body>
</html>
</body>
</html>