console.log('Ok Ajax school');

$(document).ready(function () {
    const submitButton = $('#js_school_button');
    const errorSchoolStart = $('#error_school_start');
    const errorSchoolEnd = $('#error_school_end');
    const errorSchoolFormation = $('#error_school_formation');
    const errorSchoolName = $('#error_school_name');
    const errorSchoolPlace = $('#error_school_place');
    const errorSchoolDescription = $('#error_school_description');

    $('#school_cv').on('submit', function (e) {
        // ajax
        e.preventDefault();

        const schoolStart = $('#js_school_start').val();
        const schoolEnd = $('#js_school_end').val();
        const schoolFormation = $('#js_school_formation').val();
        const schoolName = $('#js_school_name').val();
        const schoolPlace = $('#js_school_place').val();
        const schoolDescription = $('#js_school_description').val();

        console.log('Click ok');
        $.ajax({
            url: ajaxUrl,
            type: 'POST',
            data: {
                action: 'ajax_school',
                school_start: schoolStart,
                school_end: schoolEnd,
                school_formation: schoolFormation,
                school_name: schoolName,
                school_place: schoolPlace,
                school_description: schoolDescription,
            },
            beforeSend: function () {
                console.log('ajax start : school');
                $('.error').html('')
            },
            success: function (res) {
                console.log(res);

                if (res.success) {
                    submitButton.prop("disabled", true)
                } else {
                    if (res.errors.school_start != null) {
                        errorSchoolStart.html(res.errors.school_start)
                    }
                    if (res.errors.school_end != null) {
                        errorSchoolEnd.html(res.errors.school_end)
                    }
                    if (res.errors.school_formation != null) {
                        errorSchoolFormation.html(res.errors.school_formation)
                    }
                    if (res.errors.school_name != null) {
                        errorSchoolName.html(res.errors.school_name)
                    }
                    if (res.errors.school_place != null) {
                        errorSchoolPlace.html(res.errors.school_place)
                    }
                    if (res.errors.school_description != null) {
                        errorSchoolDescription.html(res.errors.school_description)
                    }
                }
            }
        })
    })
})
