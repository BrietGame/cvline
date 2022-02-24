$(document).ready(function () {
    // HEADER - Menu Principal
    function openMenu() {
        document.getElementById("menuprincipal").className = "popup_header slide-in-left ";
    }
    function closeMenu() {
        document.getElementById("menuprincipal").className = "popup_header slide-out-left";
        setTimeout(function () {
            document.getElementById("menuprincipal").className = "displaynone";
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

    // Popup Inscription
    function openRegisterMenu() {
        document.getElementById("auth_popup").className = "popup_sign_form slide-in-left ";
        document.getElementById("wraphome").className = "displaynone";
        document.getElementById("footer").className = "displaynone";
    }
    function closeRegisterMenu() {
        document.getElementById("auth_popup").className = "popup_sign_form slide-out-left";
        setTimeout(function () {
            document.getElementById("auth_popup").className = "displaynone";
            document.getElementById("wraphome").className = "wrap1";
            document.getElementById("footer").className = "";
        }, 500)
    }
    $('#modalBtn3').on('click', function (e) {

    })
    $('#modalBtn2').on('click', function (e) {
        e.preventDefault();
        openRegisterMenu();
    })
    $('#close').on('click', function (e) {
        e.preventDefault();
        closeRegisterMenu();
    })

    // Popup Mot de passe oublié
    function openForgetPwd() {
        document.getElementById("forgotpwd").className = "overlay slide-in-left ";
    }
    function closeForgetPwd() {
        document.getElementById("forgotpwd").className = "overlay slide-out-left";
        setTimeout(function () {
            document.getElementById("forgotpwd").className = "displaynone";
        }, 500)
    }
    $('#btnForgetPwd').on('click', function (e) {
        e.preventDefault();
        openForgetPwd();
    })
    $("#closeForgetPwd").on('click', function (e) {
        e.preventDefault();
        closeForgetPwd();
    })

    // Récupérer les paramètres d'une URL
    function getParamURL(tag, str) {
        var url = new URL(str);
        var name = url.searchParams.get(tag);
        return name;
    }
    if (getParamURL('error', document.location.href) == 'login') {
        notLogged();
    }
    if (getParamURL('red', document.location.href) == 'mon-espace' || getParamURL('red', document.location.href) == 'auth') {
        openRegisterMenu();
    }
    if (getParamURL('access', document.location.href) == 'denied') {
        console.log('DENIED');
        deniedAccess();
    }
});

