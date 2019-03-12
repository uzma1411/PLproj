<?php
    $conn = mysqli_connect("localhost","root","mysql","PL525");
    $name=$_GET['servname'];
    $amountt=$_GET['servamt'];
   
if(!$conn)
{
    die('Could not connect: '.mysqli_error());
}
else{
    $rs=mysqli_query($conn,"select * from Service where servicename='$name'");
    if (mysqli_num_rows($rs)>0)
    {
        $message = "Service Name already exists";
        echo "<script type='text/javascript'>alert('$message');
        window.location.replace('adminLogin.php')</script>";
     // header("Location: adminLogin.php");
    }
       else
       {
        $query ="INSERT INTO Service ( servicename ,  serviceamount) VALUES ('$name',$amountt)";
        if(mysqli_query($conn,$query))
        {
           // echo "Successfully added";
            $message = "Successful";
           // $_SESSION["username"] = $name;
            //$_SESSION["pswdd"]=$pswdd;
           
            echo "<script type='text/javascript'>alert('$message'); 
            window.location.replace('adminLogin.php')</script>";
           // header("Location: adminLogin.php");
            
        }
        else
        {
            echo ("Error ". mysqli_error($conn));
            $message = "Unsuccessful";
            echo "<script type='text/javascript'>alert('$message'); 
            window.location.replace('adminLogin.php')</script>";
          // header("Location: adminLogin.php");
            
          //  header("Location: signup.html?");
        }
    
       } 

}

    
   

?>