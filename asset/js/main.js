$(document).ready(function () {
    function openRegisterMenu() {
        document.getElementById("myNav").className = "overlay slide-in-left ";
        document.getElementById("wraphome").className = "displaynone";
        document.getElementById("footer").className = "displaynone";
    }

    /* Close when someone clicks on the "x" symbol inside the overlay */
    function closeRegisterMenu() {
        document.getElementById("myNav").className = "overlay slide-out-left";
        setTimeout(function () {
            document.getElementById("myNav").className = "displaynone";
            document.getElementById("wraphome").className = "wrap1";
            document.getElementById("footer").className = "";
        }, 500)
    }

    $('#modalBtn').on('click', function (e) {
        e.preventDefault();
        openRegisterMenu();
    })
    $('#close').on('click', function (e) {
        e.preventDefault();
        closeRegisterMenu();
    })
});