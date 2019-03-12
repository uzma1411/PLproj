<?php
session_start();
    $conn = mysqli_connect("localhost","root","mysql","PL525");
    $name=$_GET['uname'];
    $pswdd=$_GET['pswd'];
    $mail=$_GET['mail1'];
    $pno=$_GET['mob'];
   
if(!$conn)
{
    die('Could not connect: '.mysqli_error());
}
$rs=mysqli_query($conn,"select * from Customer where username='$name' or email='$mail'");
if (mysqli_num_rows($rs)>0)
{
    $message = "User Name / Email already exists";
    echo "<script type='text/javascript'>alert('$message');
    window.location.replace('signup.html')</script>";
   // header("Location: signup.html?");
}
   else
   {
    $query ="INSERT INTO Customer ( username ,  passwrd , email, phno) VALUES ('$name','$pswdd','$mail',$pno)";
    if(mysqli_query($conn,$query))
    {
       // echo "Successfully added";
        //header("Location: login.html?");
        $message = "Successfully registered";
        $_SESSION["username"] = $name;
        $_SESSION["pswdd"]=$pswdd;
        echo "<script type='text/javascript'>alert('$message');
        window.location.replace('login1.php')</script>";
    }
    else
    {
        echo ("Error ". mysqli_error($conn));
        header("Location: signup.html?");
    }

   } 
    
   

?>