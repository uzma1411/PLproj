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
    if(document.body.scrollTop > 400 || document.documentElement.scrollTop > 400)
    {
        document.getElementById("con1").classList.add("anilft");
        document.getElementById("con2").classList.add("aniryt");
    }

}
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}