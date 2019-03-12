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
            text-align: center;
            font-size: 20px;
            padding: 20px;
        
        }
        #logbtn{
            background-color: black;
            border: none;   
            border-radius: 5px;
            width:10%;
            height: 50px;
            color: aliceblue;
            text-align: center;
            font-family: 'myFont';
            font-size: 27px;
            margin: 10px;
            margin-left: auto;
            margin-right: auto;
        }
        
    </style>
</head>

<body>
    <header>
        <img src="../images/bbs11.png" height="200">
    </header>
    <nav class="animate-bottom ">
        <a href="../HOME.php" style="right:20px;">Home</a>
        <a href="../aboutUs.php" style="right:20px;">Look Book</a>
        <a href="../services.php" style="left:50px;">Services</a>
        <a href="../cc.php" style="left:50px">Contact Us</a>
    </nav>
    <section id="sec1About">
        <img src="adminlogin.jpg" height="150px" width="300px">
        <form novalidate>Password:
            <input type="password" name="pswd" id="pswd" required ><span id="err1" style="color:red;"></span>
            <span id="err2" style="color:red;"></span>
            <br>
            
            <input type="submit" name="Login" id="logbtn">
        </form>
            
    </section>
    <script>

var btn = document.getElementById('logbtn');
        btn.onclick = function (e) {
           var bool= check_validation();
           if(!bool){ e.preventDefault();}
        }
        function check_validation() {

            var passwordd = document.getElementById('pswd');
          
            var pss = "awz";
            if(passwordd.value != pss )
                {
                document.getElementById("err1").innerHTML = "Enter valid details";
                }
                if(passwordd.value.length == 0)
                {
                    document.getElementById("err1").innerHTML = "*";
              
                }
              if(passwordd.value == pss )
                {
                    alert("Welcome admin");
                    window.location.replace('adminLogin.php');
                }
        }
        
    </script>
</body>

</html>
<!--
    var btn = document.getElementById('logbtn');
        btn.onclick = function (e) {
            check_validation();
        }
        function check_validation() {

            var passwordd = document.getElementById('pswd');
            var pass1 = document.forms["f1"]["pswd"].value;
            var chck = "awz";
            
            if (passwordd.checkValidity) {
                document.getElementById("err1").innerHTML = passwordd.validationMessage;

            }

        }


                
        var btn = document.getElementById('logbtn');
        btn.onclick = function (e) {
           var bool= check_validation();
           if(!bool){ e.preventDefault();}
        }
        function check_validation() {

            var passwordd = document.getElementById('pswd');
          
            if (passwordd.checkValidity) {
               document.getElementById("err1").innerHTML = "*";
                //alert(passwordd.validationMessage);
            }
            var pss = "awz";
            if(passwordd.value != pss )
                {
                document.getElementById("err1").innerHTML = "Enter valid details";
                }
              if(passwordd.value == pss )
                {
                    alert("Welcome admin");
                    window.location.replace('adminLogin.php');
                }
        }

-->