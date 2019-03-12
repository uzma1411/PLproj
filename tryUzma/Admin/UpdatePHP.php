<?php
    $conn = mysqli_connect("localhost","root","mysql","PL525");
    $serID=$_GET['xx'];
    $amountt=$_GET['serviceAmount'];
   
if(!$conn)
{
    die('Could not connect: '.mysqli_error());
}
else{
    $rs=mysqli_query($conn,"update Service set serviceamount='$amountt' where ID='$serID'");
    $message = "Service Amount updated successfully";
    echo "<script type='text/javascript'>alert('$message');
    window.location.replace('adminUPDateHtml.php')</script>";
    
       } 

?>