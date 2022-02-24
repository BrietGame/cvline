function searchKeyWordsRecruteur() {
    // Declare variables
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById('input_recrut');
    filter = input.value.toUpperCase();
    div = document.getElementById("recrutcv");
    li = div.getElementsByClassName('decritpion_cv_info');

    // Loop through all list items, and hide those who don't match the search query
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}

function searchKeyWordsCandidat() {
    // Declare variables
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById('input_candidat');
    filter = input.value.toUpperCase();
    div = document.getElementById("candidatcv");
    li = div.getElementsByClassName('decritpion_cv_info');

    // Loop through all list items, and hide those who don't match the search query
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}