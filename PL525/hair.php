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

        #sec1About {
            background-image: url('images/29.PNG'),url('images/5.png'),url('images/1.PNG');
            
            /*background-attachment: fixed;
            opacity: 0.8;
            */
           background-size:inherit;
            background-position:left, center,right;
         background-repeat:no-repeat, no-repeat,no-repeat;
            height: 595px;
            width: auto;
            box-sizing: border-box;
            align-content: center;
        }


        @font-face {
            font-family: myfont5;
            src: url(gabriola.ttf);
        }

        #txtt {
           
            position: relative;
            margin-top: 50px;
            font-family: 'myFont5';
            font-size: 20px;
            color: rgba(0, 0, 0, 0.931);
            word-spacing: 5px;
            text-align: center;
            padding: 10px;
            background-color: rgba(240, 248, 255, 0.911);
            box-shadow: 0px 0px 20px black;
            margin-left: auto;
  margin-right: auto;
  width: 65%;
           /* background-color: rgba(17, 17, 17, 0.788);
       */ }

        .caption {
            position: relative;
            top: 25px;
            bottom: 5px;
           
           
            width: 100%;
            text-align: left;
            color: #000;
            left: 10%;
        }
        .caption1{
            margin-left: 20%;
        }
        .caption span.border {
            background-color: #111;
            color: #fff;
            padding: 10px;
            font-size: 20px;
            letter-spacing: 10px;
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
    </style>
</head>

<body>
    <header>
        <img src="images/bbs11.png" height="200">
    </header>
    <nav class="animate-bottom ">
        <a href="HOME.php" style="right:20px;">Home</a>
        <a href="aboutUs.php" style="right:20px;">Look Book</a>
        <a href="services.php" style="left:50px;color: rgb(28, 20, 138);">Services</a>
        <a href="cc.php" style="left:50px">Contact Us</a>
    </nav>
    <section id="sec1About">
        <article>
            <p class="caption txtani">
                <span class="border">!!! Hair Styling and Treatment !!!</span>
            </p>
            

            <article>
                <p id="txtt"> In order to avoid split ends, regular trimming is important. Deep conditioning 
                        treatments also help to ensure healthy tresses. If your hair is coarse, dry, 
                        frizzy and so unmanageable that you are never happy with it then hair 
                        smoothening or straightening are the options worth considering. While both the 
                        treatments use similar products , the difference lies in the technique. These 
                        treatments give you permanent smooth hair with no use or abuse of flat iron or a 
                        dryer. Such a treatment should be done at least a month before the wedding.
                        The Belle Bridal Services offers styling services provided by a team of 
                        professional stylists, all in a clean air environment. As a clean air salon,we 
                        offer ammonia - free colour services with little to no scent properties or 
                        chemical emanation. This healthier alternative to traditional colouring 
                        practices is also safe for expecting mothers and individuals with allergies or 
                        scent sensitivites.</p>
            </article>
            <div class="caption1"><br>
                <a href="bookingPHP.php"><img src="images/BknowBT.jpg" height="100px"></a>
            </div>

        </article>
    </section>
</body>

</html>