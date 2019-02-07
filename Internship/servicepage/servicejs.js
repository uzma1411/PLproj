
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
    } else {
        document.getElementById("navbar").style.top = "-100px";
        document.getElementById("navbar1").style.display = "block";
    }

}

function fn1() {
    document.getElementById("1").style.display = "block";
    document.getElementById("2").style.display = "none";
    document.getElementById("3").style.display = "none";
    document.getElementById("4").style.display = "none";
    document.getElementById("5").style.display = "none";
}
function fn2() {
    document.getElementById("2").style.display = "block";
    document.getElementById("1").style.display = "none";
    document.getElementById("3").style.display = "none";
    document.getElementById("4").style.display = "none";
    document.getElementById("5").style.display = "none";
}
function fn3() {
    document.getElementById("3").style.display = "block";
    document.getElementById("2").style.display = "none";
    document.getElementById("1").style.display = "none";
    document.getElementById("4").style.display = "none";
    document.getElementById("5").style.display = "none";
}
function fn4() {
    document.getElementById("4").style.display = "block";
    document.getElementById("2").style.display = "none";
    document.getElementById("3").style.display = "none";
    document.getElementById("1").style.display = "none";
    document.getElementById("5").style.display = "none";
}
function fn5() {
    document.getElementById("5").style.display = "block";
    document.getElementById("2").style.display = "none";
    document.getElementById("3").style.display = "none";
    document.getElementById("4").style.display = "none";
    document.getElementById("1").style.display = "none";
}
