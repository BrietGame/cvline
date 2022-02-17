console.log('Ok Ajax FINAAAAL');

$(document).ready(function () {

    const submitFinal = $('#final_submit');

    submitFinal.on('click', function (e) {
        // ajax
        e.preventDefault();

        console.log('Clicked : OK');
        $.ajax({
            url: ajaxUrl,
            type: 'POST',
            data: {
                action: 'ajax_final',
            },
            beforeSend: function () {
                console.log('ajax start : salut');
                $('.error').html('')
            },
            success: function (res) {
                // Insertion en DB
                console.log(dataFinal)
                $.post("../create_cv/", { dataFinal })
            }
        })
    })
})