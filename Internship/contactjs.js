
function show() {
    document.getElementById("mysidenavservice").style.width = "100%";
}
function closeNav() {
    document.getElementById("mysidenavservice").style.width = "0";
}

function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

window.onscroll = function () { scrollFunction() };

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("navbarservice").style.top = "0";
        document.getElementById("navbarservice1").style.display = "none";
        document.getElementById("scrollBtn").style.display = "block";
    } else {
        document.getElementById("navbarservice").style.top = "-100px";
        document.getElementById("navbarservice1").style.display = "block";
        document.getElementById("scrollBtn").style.display = "none";
    }
}