console.log('Ok Ajax auth');

$(document).ready(function () {

    const loginForm = $('#loginForm');

    const errorEmailRegister = $('#errorEmailRegister');
    const errorPseudoRegister = $('#errorPseudoRegister');
    const errorPasswordRegister = $('#errorPasswordRegister');

    loginForm.on('submit', function (e) {
        e.preventDefault();

        const registerEmail = $('#register_email').val();
        const registerPseudo = $('#register_pseudo').val();
        const registerPassword = $('#register_password').val();
        const registerConfirmPassword = $('#confirm_register_password').val();


        $.ajax({
            url: ajaxUrl,
            type: 'POST',
            data: {
                action: 'ajax_auth',
                email: registerEmail,
                pseudo: registerPseudo,
                register_password: registerPassword,
                confirm_register_password: registerConfirmPassword
            },
            beforeSend: function () {
                console.log('ajax start : salut');
                $('.error').html('')
            },
            success: function (res) {
                console.log(res)

                if (res.success2) {
                    console.log("success")
                } else {
                    //if success envoie form
                    if (res.errors.email != null) {
                        errorEmailRegister.html(res.errors.email)
                    }
                    if (res.errors.pseudo != null) {
                        errorPseudoRegister.html(res.errors.pseudo)
                    }
                    if (res.errors.registerPassword != null) {
                        errorPasswordRegister.html(res.errors.registerPassword)
                    }
                    if (res.errors.confirm_register_password != null) {
                        errorPasswordRegister.html(res.errors.confirm_register_password)
                    }
                }
            }
        })
    })
})


