     var i = 0;
        var txt = 'We assist in processing of : -';
        var speed = 100;

        function typeWriter() {
            if (i < txt.length) {
                document.getElementById("demo").innerHTML += txt.charAt(i);
                i++;
                setTimeout(typeWriter, speed);
            }
        }
        function show() {
            document.getElementById("mySidenav").style.width = "100%";
        }
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
        window.onscroll = function () { scrollFunction() };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("navbar").style.top = "0";
                document.getElementById("navbar1").style.display = "none";
                document.getElementById("scrollBtn").style.display = "block";
            } else {
                document.getElementById("navbar").style.top = "-100px";
                document.getElementById("navbar1").style.display = "block";
                document.getElementById("scrollBtn").style.display = "none";
            }
            if(document.body.scrollTop > 100 || document.documentElement.scrollTop > 100)
            {
                document.getElementById("1").classList.add("serryt");
            }
            if(document.body.scrollTop > 600 || document.documentElement.scrollTop > 600)
            {
                document.getElementById("con1").classList.add("serlft");
                document.getElementById("con2").classList.add("serryt");
            }
        }
        function topFunction() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }
    
        function fn1() {
            document.getElementById("a1").style.color="teal";
            document.getElementById("a2").style.color="black";
            document.getElementById("a3").style.color="black";
            document.getElementById("a4").style.color="black";
            document.getElementById("a5").style.color="black";
            document.getElementById("1").style.display = "block";
            document.getElementById("1").classList.add("serryt");
            document.getElementById("2").style.display = "none";
            document.getElementById("3").style.display = "none";
            document.getElementById("4").style.display = "none";
            document.getElementById("5").style.display = "none";
        }
        function fn2() {
            document.getElementById("a2").style.color="teal";
            document.getElementById("a1").style.color="black";
            document.getElementById("a3").style.color="black";
            document.getElementById("a4").style.color="black";
            document.getElementById("a5").style.color="black";
            document.getElementById("2").style.display = "block";
            document.getElementById("2").classList.add("serryt");
            document.getElementById("1").style.display = "none";
            document.getElementById("3").style.display = "none";
            document.getElementById("4").style.display = "none";
            document.getElementById("5").style.display = "none";
        }
        function fn3() {
            document.getElementById("a3").style.color="teal";
            document.getElementById("a2").style.color="black";
            document.getElementById("a1").style.color="black";
            document.getElementById("a4").style.color="black";
            document.getElementById("a5").style.color="black";
            document.getElementById("3").style.display = "block";
            document.getElementById("3").classList.add("serryt");
            document.getElementById("2").style.display = "none";
            document.getElementById("1").style.display = "none";
            document.getElementById("4").style.display = "none";
            document.getElementById("5").style.display = "none";
        }
        function fn4() {
            document.getElementById("a4").style.color="teal";
            document.getElementById("a2").style.color="black";
            document.getElementById("a3").style.color="black";
            document.getElementById("a1").style.color="black";
            document.getElementById("a5").style.color="black";
            document.getElementById("4").style.display = "block";
            document.getElementById("4").classList.add("serryt");
            document.getElementById("2").style.display = "none";
            document.getElementById("3").style.display = "none";
            document.getElementById("1").style.display = "none";
            document.getElementById("5").style.display = "none";
        }
        function fn5() {
            document.getElementById("a5").style.color="teal";
            document.getElementById("a2").style.color="black";
            document.getElementById("a3").style.color="black";
            document.getElementById("a4").style.color="black";
            document.getElementById("a1").style.color="black";
            document.getElementById("5").style.display = "block";
            document.getElementById("5").classList.add("serryt");
            document.getElementById("2").style.display = "none";
            document.getElementById("3").style.display = "none";
            document.getElementById("4").style.display = "none";
            document.getElementById("1").style.display = "none";
        }
    