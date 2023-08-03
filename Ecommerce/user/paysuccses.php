<?php
if(isset($_POST['pay']))
{
$Cardholdername=$_POST['cardholdername'];
$Cardnumber=$_POST['cardhnumber'];
$Cardexp=$_POST['cardexp'];
$Cardcvv=$_POST['cardcvv'];
if(empty($Cardholdername)||empty($Cardnumber)||empty($Cardexp)||empty($Cardcvv))
{
    echo"
    <script>
    alert('Fill Details');
    window.location.href='paydetail.php';
    </script>
    ";
}
else{
    header("location:paydone.php");
}
}

// for countinue shoping
if(isset($_POST['countshop']))
{
    header("location:index.php");
}
?>