console.log('cc skill');
let dataSkillsContentArray = [];


$(document).ready(function () {

    const submitButton3 = $('#js_skill');
    const errorSkill = $('#error_search_skill');


    $('#skill').on('submit', function (e) {
        // ajax
        e.preventDefault();

        console.log('Clicked');
        $.ajax({
            url: ajaxUrl,
            type: 'POST',
            // Bien écrire les name dans " data "
            data: {
                action: 'ajax_skill',
                // searchskill: dataSkillsContentArray
            },
            beforeSend: function () {
                console.log('ajax start : skills');
                $('.error').html('')
            },
            success: function (res) {
                $('#step[data-id="3"]').removeClass('active');
                $('#step[data-id="3"]').addClass('success');
                $('#step_three').removeClass('wrap1');
                $('#step_three').addClass('displaynone');

                $('#step[data-id="4"]').toggleClass('active');
                $('#step_four').removeClass('displaynone');
                $('#step_four').addClass('wrap1');
                console.log(dataSkillsContentArray);

                console.log(res);
                dataFinal.push(dataSkillsContentArray);
                if (res.success3) {
                    //retirer la possibilitÃ© de soumettre une deuxieme fois le formulaire
                    submitButton3.prop("disabled", true)
                } else {
                    //if success envoie form
                    if (res.errors.searchskill != null) {
                        errorSkill.html(res.errors.searchskill)
                    }

                }
            }
        })
    })
})
