console.log('Ok Ajax skill');

$(document).ready(function() {

    const submitButton3 = $('#js_skill');


    $('#skill').on('submit', function (e) {
        // ajax
        e.preventDefault();

        const skill = $('js_search_skill').val();

        console.log('Clicked');
        $.ajax({
            url: ajaxUrl,
            type: 'POST',
            data: {
                action: 'ajax_skill',
                skill: skill,



            },
            beforeSend: function () {
                console.log('ajax start : skills');
                $('.error').html('')
            },
            success: function (res) {
                console.log(res);

                if (res.success2) {
                    //retirer la possibilitÃ© de soumettre une deuxieme fois le formulaire
                    submitButton3.prop("disabled", true)
                } else {
                    //if success envoie form
                    // if (res.errors.skill != null){
                    //     errorPredate.html(res.errors.predate)
                    // }

                }
            }
        })
    })
})