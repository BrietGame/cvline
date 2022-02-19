console.log('Ok Ajax school');

allSchool = [];
$(document).ready(function () {

    const addMoreSchool = $('#addMoreSchool');
    const submitButton = $('#js_school_button');
    const errorSchoolStart = $('#error_school_start');
    const errorSchoolEnd = $('#error_school_end');
    const errorSchoolFormation = $('#error_school_formation');
    const errorSchoolName = $('#error_school_name');
    const errorSchoolPlace = $('#error_school_place');
    const errorSchoolDescription = $('#error_school_description');

    addMoreSchool.on('click', function (e) {
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
                console.log('success')
                if (res.success) {
                    dataFinal.push(res);
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


    $('#school_cv').on('submit', function (e){
        e.preventDefault();

        submitButton.prop("disabled", true);
        console.log(dataFinal)

        const generateGlobalInfo = $('.generateGlobalInfo');
        const generateExpCv = $('.generateExp');
        const generateSkillsCv = $('.generateSkillsCv');
        const generateHobbiesCv = $('.generateHobbiesCv');
        const generateSchoolCv = $('.generateSchoolCv');

        let generateGlobalInfoHtml = `
                <h2>Nom du poste </h2>
                <p>Nom : ${dataFinal[0].surname}</p>
                <p>Prenom : ${dataFinal[0].name}</p>
                <p>Date de naissance : ${dataFinal[0].birthday}</p>
                <p>Telephone : ${dataFinal[0].phone}</p>
                <p>Adresse : ${dataFinal[0].adress}</p>
                <p>Ville : ${dataFinal[0].city}</p>
                <p>Postal : ${dataFinal[0].postal}</p>
                <p>Email : ${dataFinal[0].email}</p>   
        `

        generateGlobalInfo.append(generateGlobalInfoHtml);


        $.each(dataFinal[1], function(count){

            const startExp = Object.values(dataFinal[1][count])[0].predate;
            const endExp = Object.values(dataFinal[1][count])[0].lastdate;
            const postName = Object.values(dataFinal[1][count])[0].postname;
            const entrepriseName = Object.values(dataFinal[1][count])[0].entreprisename;
            const postPlace = Object.values(dataFinal[1][count])[0].postplace;
            const postDescription = Object.values(dataFinal[1][count])[0].postdescription;
            const generateExpHtml = ` 
                              <div class="experiences">
                                  <p>${startExp}</p>
                                  <p>${endExp}</p>
                                  <p>${postName}</p>
                                  <p>${entrepriseName}</p>
                                  <p>${postPlace}</p>
                                  <p>${postDescription}</p>
                              </div>
                                    `
            generateExpCv.append(generateExpHtml);
        });

    })
})
