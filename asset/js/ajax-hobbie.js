console.log('Ok Ajax hobbie');

$(document).ready(function () {
    const submitButton = $('#js_hobbie_button');
    const errorHobbie = $('#error_hobbie');

    $('#hobbie_cv').on('submit', function (e) {
        // ajax
        e.preventDefault();

        const hobbie = $('#bdd_item_hobbie').val();

        console.log('Click ok');
        $.ajax({
            url: ajaxUrl,
            type: 'POST',
            data: {
                action: 'ajax_hobbie',
                hobbie: hobbie,
            },
            beforeSend: function () {
                console.log('ajax start : hobbie');
                $('.error').html('')
            },
            success: function (res) {
                console.log(res);
                dataFinal.push(res);
                if (res.success) {
                    submitButton.prop("disabled", true)
                } else {
                    if (res.errors.hobbie != null) {
                        errorHobbie.html(res.errors.hobbie)
                    }

                }
            }
        })
    })
})
