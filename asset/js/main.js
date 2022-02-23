$(document).ready(function () {
    // HEADER
    function openMenu() {
        document.getElementById("menuprincipal").className = "popup_header slide-in-left ";
    }

    function closeMenu() {
        document.getElementById("menuprincipal").className = "popup_header slide-out-left";
        setTimeout(function () {
            document.getElementById("menuprincipal").className = "displaynone";
        }, 500)
    }
    function openRegisterMenu() {
        document.getElementById("auth_popup").className = "popup_sign_form slide-in-left ";
        document.getElementById("wraphome").className = "displaynone";
        document.getElementById("footer").className = "displaynone";
    }

    /* Close when someone clicks on the "x" symbol inside the overlay */
    function closeRegisterMenu() {
        document.getElementById("auth_popup").className = "popup_sign_form slide-out-left";
        setTimeout(function () {
            document.getElementById("auth_popup").className = "displaynone";
            document.getElementById("wraphome").className = "wrap1";
            document.getElementById("footer").className = "";
        }, 500)
    }

    function openForgetPwd() {
        document.getElementById("forgotpwd").className = "overlay slide-in-left ";
    }

    /* Close when someone clicks on the "x" symbol inside the overlay */
    function closeForgetPwd() {
        document.getElementById("forgotpwd").className = "overlay slide-out-left";
        setTimeout(function () {
            document.getElementById("forgotpwd").className = "displaynone";
        }, 500)
    }

    $('#openMenuPrincipal').on('click', function (e) {
        e.preventDefault();
        console.log('MENU');
        openMenu();
    })
    $('#closeMenuPrincipal').on('click', function (e) {
        e.preventDefault();
        console.log('MENU');
        closeMenu();
    })

    $('#modalBtn').on('click', function (e) {
        e.preventDefault();
        openRegisterMenu();
    })
    $('#modalBtn2').on('click', function (e) {
        e.preventDefault();
        openRegisterMenu();
    })
    $('#close').on('click', function (e) {
        e.preventDefault();
        closeRegisterMenu();
    })

    $('#btnForgetPwd').on('click', function (e) {
        e.preventDefault();
        openForgetPwd();
    })
    $("#closeForgetPwd").on('click', function (e) {
        e.preventDefault();
        closeForgetPwd();
    })
});

