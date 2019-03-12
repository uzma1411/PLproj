<?php
    $conn = mysqli_connect("localhost","root","mysql","PL525");
    $sID=$_GET['xx3'];
    $categy = $_GET['xx1'];
    $amountt=$_GET['xx'];
   
if(!$conn)
{
    die('Could not connect: '.mysqli_error());
}
else{
    $rs=mysqli_query($conn,"UPDATE Stylist set scate='$categy', samount='$amountt' WHERE SID='$sID'");
    $message = "Stylist details updated successfully";
    echo "<script type='text/javascript'>alert('$message');
    window.location.replace('adminUpdateStylist.php')</script>";
    
       } 

?>