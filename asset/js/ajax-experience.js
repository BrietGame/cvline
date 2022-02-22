console.log('Ok Ajax experience');

const allExp = [];

$(document).ready(function () {

    const addMoreExp = $('#addMoreExp');
    const errorPredate = $('#error_predate');
    const errorLastdate = $('#error_lastdate');
    const errorPostname = $('#error_post_name');
    const errorEntreprisename = $('#error_entreprise_name');
    const errorPostplace = $('#error_post_place');
    const errorPostdescription = $('#error_post_description');

    addMoreExp.on('click', function (e) {
        e.preventDefault();

        const predate = $('#js_predate').val();
        const lastdate = $('#js_lastdate').val();
        const postname = $('#js_post_name').val();
        const entreprisename = $('#js_entreprise_name').val();
        const postplace = $('#js_post_place').val();
        const postdescription = $('#js_post_description').val();

        $.ajax({
            url: ajaxUrl,
            type: 'POST',
            data: {
                action: 'ajax_experience',
                predate: predate,
                lastdate: lastdate,
                postname: postname,
                entreprisename: entreprisename,
                postplace: postplace,
                postdescription: postdescription,
            },
            beforeSend: function () {
                console.log('ajax start : salut');
                $('.error').html('')
            },
            success: function (res) {
                allExp.push(res);
                console.log(allExp)

                if (res.success2) {
                    console.log("success")
                    $('#js_predate').val('');
                    $('#js_lastdate').val('');
                    $('#js_post_name').val('');
                    $('#js_entreprise_name').val('');
                    $('#js_post_place').val('');
                    $('#js_post_description').val('');
                } else {
                    //if success envoie form
                    if (res.errors.predate != null) {
                        errorPredate.html(res.errors.predate)
                    }
                    if (res.errors.lastdate != null) {
                        errorLastdate.html(res.errors.lastdate)
                    }
                    if (res.errors.postname != null) {
                        errorPostname.html(res.errors.postname)
                    }
                    if (res.errors.entreprisename != null) {
                        errorEntreprisename.html(res.errors.entreprisename)
                    }
                    if (res.errors.postplace != null) {
                        errorPostplace.html(res.errors.postplace)
                    }
                    if (res.errors.postdescription != null) {
                        errorPostdescription.html(res.errors.postdescription)
                    }
                }
            }
        })
    })

    $('#experience_cv').on('submit', function (e) {
        const submitButton = $('#js_submitted_experience');
        // ajax
        e.preventDefault();
        console.log('Clicked : OK');

        submitButton.prop("disabled", true)
        dataFinal.push(allExp);
        console.log(dataFinal)
        $('#step[data-id="2"]').removeClass('active');
        $('#step[data-id="2"]').addClass('success');
        $('#step_two').removeClass('wrap1');
        $('#step_two').addClass('displaynone');

        $('#step[data-id="3"]').toggleClass('active');
        $('#step_three').removeClass('displaynone');
        $('#step_three').addClass('wrap1');
    })
})


