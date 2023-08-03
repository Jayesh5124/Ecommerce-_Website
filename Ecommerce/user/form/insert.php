<?php
$Con=mysqli_connect('localhost:3307','root','','ecommerce');
if(isset($_POST['submit']))
{
    $Name=$_POST['name'];
    $Email=$_POST['email'];
    $Number=$_POST['number'];
    $Password=$_POST['password'];


    if(empty($Name)||empty($Email)||empty($Number)||empty($Password))
    {
    echo"
    <script>
    alert('Fill Details');
    window.location.href='register.php';
    </script>
    ";
    }
    else
    {
 

    $Dup_Email=mysqli_query($Con,"SELECT * FROM `tbluser` WHERE Email='$Email' ");
    $Dup_username=mysqli_query($Con,"SELECT * FROM `tbluser` WHERE UserName='$Name' ");

    if(mysqli_num_rows($Dup_Email))
    {
        echo"
        <script>
        alert('This Email is Already taken');
        window.location.href='register.php';
        </script>
        ";
    }
    
    if(mysqli_num_rows($Dup_username))
    {
        echo"
        <script>
        alert('This UserName is Already taken');
        window.location.href='register.php';
        </script>
        ";
    }
    else
    {
        mysqli_query($Con,"INSERT INTO `tbluser`(`UserName`, `Email`, `Number`, `Password`) VALUES ('$Name','$Email','$Number','$Password')");
        echo"
        <script>
        alert('Registration Successfully');
        window.location.href='login.php';
        </script>
        ";

    }
}

}
?>