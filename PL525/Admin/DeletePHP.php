<?php
    $conn = mysqli_connect("localhost","root","mysql","PL525");
    $serID=$_GET['xx'];
   
if(!$conn)
{
    die('Could not connect: '.mysqli_error());
}
else{
    $rs=mysqli_query($conn,"delete from Service where ID='$serID'");
    $message = "Service Information deleted successfully";
    echo "<script type='text/javascript'>alert('$message');
    window.location.replace('adminDeleteHtml.php')</script>";
    
       } 

?>