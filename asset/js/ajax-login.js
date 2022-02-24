console.log('Ok Ajax Login');

$(document).ready(function () {
    const loginFormulaire = $('#registerform');

    const errorLoginCo = $('#errors_login');
    const errorLoginPassword = $('#login_password');

    loginFormulaire.on('submit', function (e){
        e.preventDefault();
        const logId = $('#login').val();
        const logPassword = $('#login_password').val();

        console.log('Click Login : ok');

        $.ajax({
            url: ajaxUrlLog,
            type: 'POST',
            data: {
                action: 'ajax_login',
                logId: logId,
                logPassword: logPassword,
            },
            beforeSend: function () {
                console.log('ajax login : before');
                $('.error').html('')
            },
            success: function (res) {
                if (res.success) {
                    console.log('Connexion ...');
                } else {
                    if (res.errors.logId != null) {
                        errorLoginCo.html(res.errors.logId)
                    }
                    if (res.errors.logPassword != null) {
                        errorLoginPassword.html(res.errors.logPassword)
                    }
                }
            }
        })
    })
})