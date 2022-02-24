console.log('Ok Ajax auth');

$(document).ready(function () {

    const loginForm = $('#loginForm');

    const errorEmailRegister = $('#errorEmailRegister');
    const errorPseudoRegister = $('#errorPseudoRegister');
    const errorPasswordRegister = $('#errorPasswordRegister');

    loginForm.on('submit', function (e) {
        e.preventDefault();

        const email = $('#register_email').val();
        const pseudo = $('#register_pseudo').val();
        const registerPassword = $('#register_password').val();
        const registerConfirmPassword = $('#confirm_register_password').val();

        console.log('Click Auth');
        $.ajax({
            url: ajaxUrl,
            type: 'POST',
            data: {
                action: 'ajax_auth',
                register_email: email,
                register_pseudo: pseudo,
                register_password: registerPassword,
                confirm_register_password: registerConfirmPassword
            },
            beforeSend: function () {
                console.log('ajax auth : before');
                $('.error').html('')
            },
            success: function (res) {
                console.log(res.success3);
                if (res.success3 === undefined) {
                    console.log('Envoi en bdd ...');
                    window.document.href = "/success=register"
                } else {
                    //if success envoie form
                    if (res.errorregister.register_email != null) {
                        errorEmailRegister.html(res.errorregister.register_email)
                    }
                    if (res.errorregister.register_pseudo != null) {
                        errorPseudoRegister.html(res.errorregister.register_pseudo)
                    }
                    if (res.errorregister.register_password != null) {
                        errorPasswordRegister.html(res.errorregister.register_password)
                    }
                    if (res.errorregister.confirm_register_password != null) {
                        errorPasswordRegister.html(res.errorregister.confirm_register_password)
                    }
                }
            }
        })
    })
})


