<?php
session_start();
    $conn = mysqli_connect("localhost","root","mysql","PL525");
    $name=$_GET['uname'];
    $pswdd=$_GET['pswd'];
    
   
if(!$conn)
{
    die('Could not connect: '.mysqli_error());
}
$rs=mysqli_query($conn,"select * from Customer where username='$name' and passwrd='$pswdd'");
if (mysqli_num_rows($rs)<1)
{
    $message = "Invalid Details try again";
    echo "<script type='text/javascript'>alert('$message');
    window.location.replace('login1.php')</script>";
   // header("Location: signup.html?");
}
else{
    $message = "Login Successful";
    $row  = mysqli_fetch_array($rs);
    if(is_array($row)) {
$_SESSION["id"] = $row[ID];
$_SESSION["username"]=$row[username];
$_SESSION["email"]=$row[email];
$_SESSION["phno"]=$row[phno];

} 
echo $_SESSION['id'];
echo $_SESSION['username'];
echo $_SESSION['email'];
echo $_SESSION['phno'];
// echo "<script type='text/javascript'>alert('$message');
// window.location.replace('bookingPHP.php')</script>";
 header("Location:bookingPHP.php");
}
    ?>


