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

        #sec1contact {
            background-image: url('images/bgabout.jpg');

            margin-top: 15px;
            /*background-attachment: fixed;
            opacity: 0.8;
            */
            background-repeat:repeat;

            height: 400px;
            width: auto;
            box-sizing: border-box;
            align-content: center;

        }

        #sec1 {

            height: 200px;
            float: left;
            width: 50%;

        }

        #sec2 {

            height: 200px;
            float: right;
            width: 50%;
        }

        address {
            position: relative;
            font-family: 'myFont1';
            font-size: 30px;
            color: whitesmoke;
            background-color: rgba(32, 29, 29, 0.514);
            padding: 15px;
            width: 400px;
            top: 50px;
            left: 100px;
        }

        @font-face {
            font-family: myFont1;
            src: url(FRSCRIPT.TTF);
        }

        #arcContact {
            position: relative;
          font-family: 'myFont';
            font-size: 25px;
            color: whitesmoke;
            background-color: rgba(32, 29, 29, 0.514);
            padding: 10px;
            width: 40%;
            top: 50px;
            left:30%;
            text-align: center;
        }

        address a {
            text-decoration: none;
            font-size: 30px;
        }

        .textcontact {
            position: relative;
            font-family: 'Berkshire Swash';
            font-weight: bolder;
            font-size: 25px;
            color: black;
            text-shadow: 4px 4px whitesmoke;
            top: 20px;
            left: 30%;
            animation: txtbounce 2s linear 1;
        }
        @keyframes txtbounce{
    0%{transform: translateY(-40px);}
    20%{transform: translateY(0px);}
    30%{transform: translateY(-30px);}
    40%{transform: translateY(0px);}
    50%{transform: translateY(-20px);}
    60%{transform: translateY(0px);}
    70%{transform: translateY(-10px);}
    100%{transform: translateY(0px);}
}
    </style>
</head>

<body>
    <header>
        <img src="images/bbs11.png" height="200">
    </header>
    <nav class="animate-bottom ">
        <a href="HOME.php" style="right:20px;">Home</a>
        <a href="aboutUs.php" style="right:20px;">Look Book</a>
        <a href="services.php" style="left:50px">Services</a>
        <a href="cc.php" style="left:50px;color: rgb(28, 20, 138);">Contact Us</a>
    </nav>
    <section id="sec1contact">
        <p class="textcontact"> Contact Us</p>
        
        <article id="arcContact">
                3rd Floor, B26 <br>
                14 Ave,Fedmonton, T38<br>
                (+91) 9940584817 <br>
                <a href="mailto:u_4sabeeha@yahoo.in">u_4sabeeha@yahoo.in</a><br>
            Hours :<br>
            Monday to Friday : 11am - 9pm<br>
           
            Saturday and Sunday : 10am - 10pm<br>
           
        </article>

    </section>

    <article id="sec1">
        <img src="images/tumHand.gif"  width="100%" height="100%">
        
    </article>
    <article id="sec2">
       
        <img src="images/tumKim.gif"  width= "100%" height="100%">
    </article>
</body>

</html>