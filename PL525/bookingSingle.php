<?php
session_start();
if(isset($_SESSION['id']))
{
    $user = $_SESSION['username'];
    $userID = $_SESSION['id'];
   $userEmail = $_SESSION['email'];
   $userPhno= $_SESSION['phno'];
}
else
{
    $message = "Please login first to book";
    echo "<script type='text/javascript'>alert('$message');
window.location.replace('login1.php')</script>";
 //header("Location:bookingPHP.php");
}
       
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
            src: url(gabriola.ttf);
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
            background-image: url('images/bgabout.jpg');
            margin-top: 15px;
            /*background-attachment: fixed;
            opacity: 0.8;
            */
            background-repeat: repeat;

            height:100%;
            
            width: auto;
            box-sizing: border-box;
            align-content: center;

        }

        .btnn {
            font-family: 'myfont5';
            font-size: 37px;
            color: #000000;
            background-color: #FFFFFF;
            border: medium solid #000000;
            padding: 10px;
            margin-top: 10px;
            text-align: center;
        }

        .btnn:hover {
            color: #1948af;
        }

        @font-face {
            font-family: myfont5;
            src: url(polobm.ttf);
        }

        .caption {
            position: relative;
            top: 5px;
            left: 10;
            width: 100%;
            text-align: center;
            color: #000;
        }

        .caption span.border {
            background-color: #111;
            color: #fff;
            padding: 10px;
            font-size: 15px;
            letter-spacing: 5px;
        }

        .txtani {
            animation-name: teamani;
            animation-duration: 3s;
            animation-iteration-count: 2;
        }

        @keyframes teamani {
            0% {
                transform: rotateX(20deg);
            }

            50% {
                transform: rotateX(140deg);
            }

            100% {
                transform: rotateX(0deg);
            }
        }
        .tab {
  overflow: hidden;
        }
        .tab button {transition: 0.3s;
}
.tabcontent {
  
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
select{
    padding: 10px;
    width: 50%;
    border-radius: 5px;
    font-family: 'Times New Roman';
    color: darkgreen;
}
#f2 p{
    text-align: justify;
   display:inline-table;
}
#logbtn{
    display: block;
            background-color: black;
            border: none;   
            border-radius: 5px;
        
            height: 50px;
            color: aliceblue;
            text-align: center;
            font-family: 'myFont';
            font-size: 27px;
           margin-left: auto;
           margin-right: auto;
           width: 50%;
        }

    </style>
</head>

<body>
    <header>
        <img src="images/bbs11.png" height="200">
    </header>
    <nav class="animate-bottom ">
        <a href="hh.php">Home</a>
        <a href="aboutUs.php">Look Book</a>
        <a href="services.php" style="left:80px;color: rgb(28, 20, 138);">Services</a>
        <a href="cc.php" style="left:100px">Contact Us</a>
        <a href="login1.php" style="float:right;">Log Out</a>
    </nav>
    <section id="sec1About">
        <article>

<p>Welcome <?php echo $user ?><br>
Your ID is <?php echo $userID ?></p>
    </article>
        <article>
            <div class="caption tab"><br><br>
            <a href="bookingSingle.php"><button class="btnn tablinks">Single Service</button></a>
                <button class="btnn tablinks">Multiple Services</button>
                <button class="btnn tablinks">Package services</button>
                 </div>

            <!--
            <div class="caption"><br>
                <a><img src="images/BknowBT.jpg" height="100px" ></a>
            </div>
        -->

        </article>
        <?php
//Include the database configuration file
include 'dbConfig.php';

//Fetch all the country data
$query = $db->query("SELECT * FROM Service");

//Count total number of rows
$rowCount = $query->num_rows;
?>
        <section id="Single" class="tabcontent">
            <form method="GET" novalidate>

            <p>Choose your service:&nbsp;&nbsp;
            <select name="service" id="service" onchange='updateMyText()' >
            <option value="">---- Select the service -----</option>
    <?php
    if($rowCount > 0){
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['ID'].'">'.$row['servicename'].' (Rs:) '.$row['serviceamount'].'</option>';
        }
    }else{
        echo '<option value="">Services option not available</option>';
    }
    ?>
    </select>
<span id="err1" style="color:red;"></span><input type="text" name="serv" id="serv" style="display:none" required>
            <br>
            </p>
            <p>
            Choose your preferred stylist category:&nbsp;&nbsp;
                    <select id="stycat" name="stycat" onchange='updateMyText1()'>
                    <option value="8000">Professional Stylist - Rs: 8000</option>
                        <option value="12000">Celebrity Stylist - Rs: 12000</option>
                        <option value="15000">Experienced Stylist - Rs: 15000</option>
            </select><span id="err1" style="color:red;"></span><input type="text" name="serv" id="serv" style="display:none" required>

            </p>
            <p>Choose your preferred stylist:
            <select name="x" id="x" onchange='updateMyText1()' >
                <option value="">---- Select the stylist -----</option>
                    <?php
                         $conn = new mysqli('localhost', 'root', 'mysql', 'PL525') 
                         or die ('Cannot connect to db');
                         $result1 = $conn->query("select sid,stylistname,scate,samount FROM Stylist");
                         while ($row1 = $result1->fetch_assoc())
                        {
                            unset($id, $name);
                            $id = $row1['sid'];
                            $name = $row1['stylistname']; 
                            $categ = $row1['scate'];
                            $amounttt = $row1['samount'];
                            echo '<option value="'.$id.'">'.$name.' (Category -' .$amounttt. ')</option>';
                        }
                    ?> 
</select><span id="err1" style="color:red;"></span>

            </p>
                <p>Date: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="date" min="2019-02-15">
                    <span id="err3" style="color:red;font-family:'Lucida Sans , sans-serif';font-size: 20px;"></span></p>

                <input id="logbtn" type="submit" name="submit" value="Book">
            </form>

        </section>
       
       
    </section>

    <script>
        var btn1 = document.getElementById('subBtn');
      btn1.onclick = function (e) {
           var checkes=checking();   
            if(checkes==false) 
                e.preventDefault();
        };


function updateMyText()
{
var dd = document.getElementById("service");
var ddtext = dd.options[dd.selectedIndex].value;
document.getElementsByName('serv')[0].value=ddtext;
}

        function checking()
       {
           var checkes=1;
           var names=document.getElementById('servname');
           if(names.checkValidity)
	        {
                //alert(names.validationMessage);
	            document.getElementById("err1").innerHTML=names.validationMessage;
                if(names.validationMessage.toString().length!=0)
                    checkes=0;
	        }
           var amountt=document.getElementById('servamt');
            if(amountt.checkValidity)
	        {
	            document.getElementById("err2").innerHTML=amountt.validationMessage;
                if(amountt.validationMessage.toString().length!=0)
                    checkes=0;
            }
           
	        if(checkes==0)
            {
                return false;
            }
            else{
               return true;
            }
           
       };
      
    </script>
</body>

</html>