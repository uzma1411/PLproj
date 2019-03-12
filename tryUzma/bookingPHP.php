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
        <section id="Single" class="tabcontent">
            <form>
                <p>Choose your service:&nbsp;&nbsp;
                    <select id="service" name="service">
                        <option>Make Up</option>
                        <option>Hair Do</option>
                        <option>Facial</option>
                    </select>
                    <sub id="err1" style="color:red;font-family:'Lucida Sans , sans-serif';font-size: 20px;"></sub></p>
                <p>Choose your stylist:&nbsp;&nbsp;
                    <select id="stylist" name="service">
                        <option>Professional Stylist</option>
                        <option>Celebrity Stylist</option>
                        <option>Experienced Stylist</option>
                    </select>
                    <span id="err2" style="color:red;font-family:'Lucida Sans , sans-serif';font-size: 20px;"></span></p>
                <p>Date: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="date" min="2019-02-15">
                    <span id="err3" style="color:red;font-family:'Lucida Sans , sans-serif';font-size: 20px;"></span></p>

                <input id="logbtn" type="submit" name="submit" value="Book">
            </form>

        </section>
        <section id="Multiple" class="tabcontent">
            <form id="f2">
                <p>Select any one of the makeup options:&nbsp;&nbsp;<br>
                    <input type="radio" name="makeup">Bridal Makeup<br>
                    <input type="radio" name="makeup">Eye Makeup<br>
                    <input type="radio" name="makeup">Party Makeup<br>
                    <input type="radio" name="makeup">Airbrush Makeup
                    <sub id="err1" style="color:red;font-family:'Lucida Sans , sans-serif';font-size: 20px;"></sub></p>
                <p>Select any one of the options&nbsp;&nbsp;<br>
                    <input type="radio" name="hairStyling">Classic Hair Sp<br>
                    <input type="radio" name="hairStyling">Hair Cut and Styling<br>
                    <input type="radio" name="hairStyling">Hair Colouring - Streaks<br>
                    <input type="radio" name="hairStyling">Hair Styling - Volume Blowdry Look
                    <span id="err2" style="color:red;font-family:'Lucida Sans , sans-serif';font-size: 20px;"></span></p>
                <p>Select any one of the options&nbsp;&nbsp;<br>
                    <input type="radio" name="facialR">Facial - Clean Up<br>
                    <input type="radio" name="facialR">Natural Facial<br>
                    <input type="radio" name="facialR">Brightening Boost<br>
                    <input type="radio" name="facialR">Collagen Revitalize
                    <span id="err3" style="color:red;font-family:'Lucida Sans , sans-serif';font-size: 20px;"></span></p>
                <p>Select any one of the options&nbsp;&nbsp;<br>
                    <input type="radio" name="Wax">Mani &amp; Pedi<br>
                    <input type="radio" name="Wax">Mani &amp; Pedi - Ice Cream Treat<br>
                    <input type="radio" name="Wax">Threading<br>
                    <input type="radio" name="Wax">Waxing
                    <span id="err3" style="color:red;font-family:'Lucida Sans , sans-serif';font-size: 20px;"></span></p>

                <input id="logbtn" type="submit" name="submit" value="Book">
            </form>

        </section>
        <section id="Package" class="tabcontent">
            <form>
               <p>Choose your stylist:&nbsp;&nbsp;
                    <select id="stylist" name="service">
                        <option>Professional Stylist</option>
                        <option>Celebrity Stylist</option>
                        <option>Experienced Stylist</option>
                    </select>
                    <span id="err2" style="color:red;font-family:'Lucida Sans , sans-serif';font-size: 20px;"></span></p>
                
                    <p>Choose your Package:&nbsp;&nbsp;
                            <select id="service" name="service">
                                <option>Combo 1 - Hair cut and stylilng</option>
                                <option>Combo 2 - Waxing and Facial</option>
                                <option>Combo 2 - Bridal Makeup and Mehendi</option>
                            </select>
                            <sub id="err1" style="color:red;font-family:'Lucida Sans , sans-serif';font-size: 20px;"></sub></p>
                        
                    <p>Date: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="date" min="2019-02-15">
                    <span id="err3" style="color:red;font-family:'Lucida Sans , sans-serif';font-size: 20px;"></span></p>

                <input id="logbtn" type="submit" name="submit" value="Book">
            </form>

        </section>
    </section>

    <script>
        function openCity(evt, cityName) {
            // Declare all variables
            var i, tabcontent, tablinks;

            // Get all elements with class="tabcontent" and hide them
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            document.getElementById(cityName).style.display = "block";
        }
    </script>
</body>

</html>