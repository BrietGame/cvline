console.log('Ok Ajax Login');

$(document).ready(function () {
    const loginFormulaire = $('#registerform');

    const errorLoginCo = $('#errors_login');
    const errorLoginPassword = $('#login_password');

    loginFormulaire.on('submit', function (e) {
        e.preventDefault();
        const login = $('#login').val();
        const loginPwd = $('#login_password').val();

        console.log('Click Login : ok');

        $.ajax({
            url: ajaxUrlLog,
            type: 'POST',
            data: {
                action: 'ajax_login',
                login: login,
                loginPwd: loginPwd,
            },
            beforeSend: function () {
                console.log('ajax login : before');
                $('.error').html('')
            },
            success: function (reslogin) {
                console.log(reslogin);
                // if (res.success4) {
                //     console.log('Connexion ...');
                // } else {
                //     if (res.errors.login != null) {
                //         errorLoginCo.html(res.errors.login)
                //     }
                //     if (res.errors.loginPwd != null) {
                //         errorLoginPassword.html(res.errors.loginPwd)
                //     }
                // }
            }
        })
    })
})