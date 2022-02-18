console.log('Ok Ajax hobbie');
let dataHobbiesContentArray = [];

$(document).ready(function () {
    const submitButton = $('#js_hobbie_button');
    const errorHobbie = $('#error_hobbie');

    $('#hobbie_cv').on('submit', function (e) {
        // ajax
        e.preventDefault();
        const hobbie = $('#js_search_hobbie').val();

        console.log('Click ok');
        $.ajax({
            url: ajaxUrl,
            type: 'POST',
            data: {
                action: 'ajax_hobbie',
                hobbie: dataHobbiesContentArray,
            },
            beforeSend: function () {
                console.log('ajax start : hobbie');
                $('.error').html('')
            },
            success: function (res) {
                console.log(res);
                console.log(dataHobbiesContentArray);
                dataFinal.push(dataHobbiesContentArray);
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
