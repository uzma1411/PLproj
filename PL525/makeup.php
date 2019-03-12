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
            margin-top: 15px;
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
            position: relative;
            top: 10px;
            font-family: 'myFont5';
            font-size: 20px;
            color: rgba(0, 0, 0, 0.931);
            word-spacing: 5px;
            text-align: center;
            padding: 10px;
           /* background-color: rgba(17, 17, 17, 0.788);
       */ }

        .caption {
            position: relative;
            top: 15px;
            bottom: 5px;
            left: 10;
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
        #imgcenter img{
            display: inline-block;
  margin-left: auto;
  margin-right: auto;
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
                <span class="border">!!! Make Up !!!</span>
            </p>
            <p id="imgcenter"> <span>
                <img src="images/q1.jpg" height="40%">
            <img src="images/q2.jpg" height="40%">
            <img src="images/q3.jpg" height="40%">
            <img src="images/q4.jpg" height="40%" >
            <img src="images/q5.jpg" height="40%" >
            <img src="images/q6.jpg" height="40%" >
            </span>
            
        </p>

            <article>
                <p id="txtt"> Belle Bridal Services focuses on different ways of enhancing your inner
                    beauty outwards. With its specialised skin and beauty treatments and a
                    range of
                    bridal packages , you'll look fabulous in your wedding ensemble.&nbsp; Our services
                    will give you a radiant look which will make u look beautiful in your wedding
                    photographs.&nbsp; Wedding makeup ,
                    will depend on many factors - where the wedding is held and time of the ceremony. Morning wedding
                    makeup should be more natural as too much makeup would appear very jarring. Light colors go well
                    for
                    the mornings. If you are planning an evening wedding, your bridal makeup can extend to formal and
                    darker colors. Our bridal makeup style is more timeless and classic which makes your makeup look
                    healthy and natural not artificially overdone . In addition, our professionals have extensive
                    experience in airbush makeup setting which is th best option to opt for your special day.
                </p>
            </article>
            <div class="caption"><br>
                <a href="bookingPHP.php"><img src="images/BknowBT.jpg" height="100px"></a>
            </div>

        </article>
    </section>
</body>

</html>