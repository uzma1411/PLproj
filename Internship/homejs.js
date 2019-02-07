
function show() {
    document.getElementById("mySidenav").style.width = "100%";
}
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
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
    if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {

        document.getElementById("txt2").classList.add("txtani");

    }
    if (document.body.scrollTop > 1500 || document.documentElement.scrollTop > 1500) {

        document.getElementById("txt3").classList.add("txtani");

    }
    if (document.body.scrollTop > 2000 || document.documentElement.scrollTop > 2000) {
        document.getElementById("con1").classList.add("serlft");
        document.getElementById("con2").classList.add("serryt");
    }

}

