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
            background-image: url('images/facial1.jpg');
            background-size: cover;
            /*background-attachment: fixed;
            opacity: 0.8;
            */
        
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
           
           /* background-color: rgba(17, 17, 17, 0.788);
       */ 
       background-color: rgba(39, 39, 39, 0.794);
            box-shadow: 0px 0px 20px black;
            position: relative;
            margin-top: 50px;
            font-family: 'myFont5';
            font-size: 22px;
            color: rgba(218, 218, 218, 0.931);
            word-spacing: 7px;
            text-align: center;
            padding: 10px;
            
            margin-left: auto;
  margin-right: auto;
 width: 65%;
       }

        .caption {
            position: relative;
            top: 25px;
            bottom: 5px;
           
           
            width: 100%;
            text-align: center;
            color: #000;
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
       
       .caption1{
        top:70%;
          
          margin-left: auto;
 margin-right: auto;
text-align: center;
        
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
                <span class="border">!!! Facial !!!</span>
            </p>
            

            <article>
                <p id="txtt"> A regular facial goes a long way in improving 
                        overall texture and quality of your skin, ensures deep cleansing, removal of 
                        dead cells along with black heads and white heads , better blood circulation and 
                        simultaneously makes your skin bright , firm and soft. It also helps in delaying 
                        the ageing process. All our facials have been developed to leave you with 
                        nothing but evenly toned, supple, healthy and truly radiant skin. Just any 
                        facial may not suit your skin. We will provide you with the information about 
                        facial that is appropriate for your skin type. You can choose among 
                        gold,pearl,natural,diamond or clean-up facials which will give you an 
                        extraordinary bridal glow.There are options for doing bleach to your 
                        arms,legs,face and neck. Remember not to schedule a facial too close to the day 
                        just allow your skin to settle.</p>
            </article>
            <div class="caption1"><br>
                <a href="bookingPHP.php"><img src="images/BknowBT.jpg" height="100px"></a>
            </div>

        </article>
    </section>
</body>

</html>