console.log('Ok Ajax hobbie');
let dataHobbiesContentArray = [];

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
                // hobbie: dataHobbiesContentArray,
            },
            beforeSend: function () {
                console.log('ajax start : hobbie');
                $('.error').html('')
            },
            success: function (res) {
                $('#step[data-id="4"]').removeClass('active');
                $('#step[data-id="4"]').addClass('success');
                $('#step_four').removeClass('wrap1');
                $('#step_four').addClass('displaynone');

                $('#step[data-id="5"]').toggleClass('active');
                $('#step_five').removeClass('displaynone');
                $('#step_five').addClass('wrap1');
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
