console.log('Ok Ajax school');

allSchool = [];
let vide2 = true;

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

                allSchool.push(res);
                console.log(allSchool)
                if (res.success) {
                    vide2 = false;
                    console.log('success')
                    underStepSuccess('parcours');
                    $('#js_school_start').val('');
                    $('#js_school_end').val('');
                    $('#js_school_formation').val('');
                    $('#js_school_name').val('');
                    $('#js_school_place').val('');
                    $('#js_school_description').val('');
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


    $('#school_cv').on('submit', function (e) {
        e.preventDefault();
        if (vide2 === false) {
            stepSuccess();
            recapInfo();
            submitButton.prop("disabled", true);
            dataFinal.push(allSchool);
            console.log(dataFinal)
            $('#step[data-id="5"]').removeClass('active');
            $('#step[data-id="5"]').addClass('success');
            $('#step_five').removeClass('wrap1');
            $('#step_five').addClass('displaynone');

            $('#step[data-id="6"]').toggleClass('active');
            $('#step_six').removeClass('displaynone');
            $('#step_six').addClass('wrap');

            const generateGlobalInfo = $('.generateGlobalInfo');
            const generateExpCv = $('.generateExp');
            const generateSkillsCv = $('.generateSkillsCv');
            const generateHobbiesCv = $('.generateHobbiesCv');
            const generateSchoolCv = $('.generateSchoolCv');

            const generateGlobalInfoHtml = `
                <h2 class="post_search">${dataFinal[0].post_search}</h2>
                <div class="container">
                    <div class="left">
                        <p>Nom : <span>${dataFinal[0].surname}</span></p>
                        <p>Prenom : <span>${dataFinal[0].name}</span></p>
                        <p>Date de naissance : <span>${dataFinal[0].birtday}</span></p>
                        <p>Telephone : <span>${dataFinal[0].phone}</span></p>
                    </div>
                    <div class="right">
                        <p>Adresse : <span>${dataFinal[0].adress}</span></p>
                        <p>Ville : <span>${dataFinal[0].city}</span></p>
                        <p>Postal : <span>${dataFinal[0].postal}</span></p>
                        <p>Email : <span>${dataFinal[0].email}</span></p>   
                    </div>
                </div>
        `

            generateGlobalInfo.append(generateGlobalInfoHtml);

            let totalExp = 0;
            let totalSkill = 0;
            let totalLoisir = 0;
            let totalSchool = 0;

            $.each(dataFinal[1], function (count) {

                const startExp = Object.values(dataFinal[1][count])[0].predate;
                const endExp = Object.values(dataFinal[1][count])[0].lastdate;
                const postName = Object.values(dataFinal[1][count])[0].postname;
                const entrepriseName = Object.values(dataFinal[1][count])[0].entreprisename;
                const postPlace = Object.values(dataFinal[1][count])[0].postplace;
                const postDescription = Object.values(dataFinal[1][count])[0].postdescription;
                const generateExpHtml = ` 
                                <div class="bloc">
                                    <div class="container">
                                        <div class="left">
                                            <span class="title">${postName}</span>
                                            <span class="under_title">${entrepriseName}</span>
                                        </div>
                                        <div class="right">
                                            <span class="title">${startExp} - ${endExp}</span>
                                            <span class="under_title">${postPlace}</span>
                                        </div>
                                    </div>
                                    <p>${postDescription}</p>
                                </div>
                                    `
                totalExp += 1;
                generateExpCv.append(generateExpHtml);
            });

            $.each(dataFinal[2], function (count) {

                const skillsName = dataFinal[2][count];
                const generateSkills = `
                <span class="bloc">${skillsName}</span>
            `
                totalSkill += 1;
                generateSkillsCv.append(generateSkills);
            });

            $.each(dataFinal[3], function (count) {

                const hobbiesName = dataFinal[3][count];

                const generateHobbies = `
                <span class="bloc">${hobbiesName}</span>
            `

                totalLoisir += 1;
                generateHobbiesCv.append(generateHobbies);
            });

            $.each(dataFinal[4], function (count) {

                const schoolDescription = Object.values(dataFinal[4][count])[0].schoolDescription;
                const schoolEnd = Object.values(dataFinal[4][count])[0].schoolEnd;
                const schoolFormation = Object.values(dataFinal[4][count])[0].schoolFormation;
                const schoolName = Object.values(dataFinal[4][count])[0].schoolName;
                const schoolPlace = Object.values(dataFinal[4][count])[0].schoolPlace;
                const schoolStart = Object.values(dataFinal[4][count])[0].schoolStart;

                const generateSchoolHtml = `

                <div class="bloc">
                    <div class="container">
                        <div class="left">
                            <span class="title">${schoolFormation}</span>
                            <span class="under_title">${schoolName}</span>
                        </div>
                        <div class="right">
                            <span class="title">${schoolStart} - ${schoolEnd}</span>
                            <span class="under_title">${schoolPlace}</span>
                        </div>
                    </div>
                    <p>${schoolDescription}</p>
                </div>
            `
                totalSchool += 1;

                generateSchoolCv.append(generateSchoolHtml);
            });
            $('#exp_count').append(`<span class="nb">${totalExp}</span><span class="text">Expérience(s) renseignée(s)</span>`);
            $('#skill_count').append(`<span class="nb">${totalSkill}</span><span class="text">Compétence(s) renseignée(s)</span>`);
            $('#loisir_count').append(`<span class="nb">${totalLoisir}</span><span class="text">Loisir(s) renseigné(s)</span>`);
            $('#school_count').append(`<span class="nb">${totalSchool}</span><span class="text">Parcours renseigné(s)</span>`);

        } else {
            stepError();
        }
    })
})
