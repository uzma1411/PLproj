<?php
session_start();
?>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
        header {
            height: 100;
            width: auto;
            text-align: center;
        }

        header img {
            margin-top: -12px;
        }

        nav {
            background-attachment: fixed;
            background-color: rgba(255, 255, 255, 0.972);
            /*    background-image: linear-gradient(rgb(252, 209, 192), rgb(236, 231, 231));
            background-image:linear-gradient(green,darkgreen);
           */
            box-shadow: 0px 4px 10px black;
            height: 65px;
            width: auto;
            text-align: center;
        }

        nav a {
            position: relative;
            padding: 10px;
            text-decoration: none;
            font-family: 'myFont';
            font-size: 32px;
            font-weight: bold;
            top: 10px;
            color: rgb(165, 50, 50);
        }

        nav a:hover {
            text-decoration: none;
            color: rgb(28, 20, 138);
        }

        @font-face {
            font-family: myFont;
            src: url(../gabriola.ttf);
        }

        /* Add animation to "page content"  position: relative;*/
        .animate-bottom {

            -webkit-animation-name: animatebottom;
            -webkit-animation-duration: 1s;
            animation-name: animatebottom;
            animation-duration: 1s
        }

        @-webkit-keyframes animatebottom {
            from {
                bottom: -100px;
                opacity: 0;

            }

            to {
                bottom: 0px;
                opacity: 1;

            }
        }

        @keyframes animatebottom {
            from {
                bottom: -100px;
                opacity: 0;

            }

            to {
                bottom: 0;
                opacity: 1;

            }
        }

        #sec1About {
            background-image: url('../images/bgabout2.jpg');
            margin-top: 15px;
            /*background-attachment: fixed;
            opacity: 0.8;
            */
            background-repeat: repeat;

            height: 595px;
            width: auto;
            box-sizing: border-box;
            align-content: center;

        }

        .tab {
            overflow: hidden;
        }

        .tab button {
            background-color: transparent;
            border: none;
            transition: 0.3s;
        }
.tablinks{
    display:inline-block;
    background-color: transparent;
    color:navy;
    font-size: 25px;
    border: 1px solid black;
    padding: 10px;
    margin:10px;
  
    text-decoration: none;
}
        .tabcontent {
            display: none;
            padding: 20px;
            background-color: rgba(246, 245, 245, 0.931);
            box-shadow: 0px 0px 20px black;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            width: 70%;
            position: relative;
            top: 20px;
            color: rgb(0, 53, 102);
            font-family: 'myFont';
            font-size: 25px;
            border-top: none;
           
        }
    </style>
</head>

<body>
    <header>
        <img src="../images/bbs11.png" height="200">
    </header>
    <nav class="animate-bottom tab">
            <a href="adminLogin.php" style="right:10px;color: rgb(28, 20, 138);">Service</a>
            <a href="adminStylist.php" style="right:10px;">Stylist</a>
            <a style="left:90px">Booking</a>
            <a style="left:90px"> Mail</a>
            <a href="../HOME.php" style="float:right;">Log Out</a>
    </nav>
    <section id="sec1About">

        <section id="Service">
           
                <a href="adminADDservicehtml.php"><button class="btnn tablinks">Add</button></a>
                <a href="adminUPDateHtml.php"><button class="btnn tablinks">Update</button></a>
                <a href="adminDeleteHtml.php"><button class="btnn tablinks">Delete</button></a>
            
                   </section>

    </section>
    <script>
        
    </script>
</body>

</html>
<!--

                 $conn = mysqli_connect("localhost","root","mysql","PL525");
             if(!$conn)
             {
                 die('Could not connect: '.mysqli_error());
             }
             $rs=mysqli_query($conn,"select servicename,serviceamount from Service");
             if(mysql_num_rows($rs)){
                $select= '<select name="select">';
                while($row=mysql_fetch_array($rs)){
                      $select.='<option value="'.$row['serviceamount'].'">'.$row['servicename'].'</option>';
                  }
                }
                $select.='</select>';
               
                
    -->