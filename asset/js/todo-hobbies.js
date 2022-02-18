function searchHobbie() {
    // Declare variables
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById('js_search_hobbie');
    filter = input.value.toUpperCase();
    ul = document.getElementById("result_search_hobbie");
    li = ul.getElementsByTagName('li');

    // Loop through all list items, and hide those who don't match the search query
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        let err = document.getElementById('error_hobbie');
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            err.innerText = '';
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}

$(document).ready(function () {
    let aItemHobbie = $('#bdd_item_hobbie');
    let inputSearchHobbie = $('#js_search_hobbie');
    aItemHobbie.on('click', function (e) {
        e.preventDefault();
        let aItemHobbieValue = aItemHobbie[0].dataset.content;
        inputSearchHobbie.val(aItemHobbieValue);
    })
})

// Create a "close" button and append it to each list item

// Click on a close button to hide the current list item
var close = document.getElementsByClassName("close");
var i;
for (i = 0; i < close.length; i++) {
    close[i].onclick = function () {
        var div = this.parentElement;
        div.style.display = "none";
    }
}

// Add a "checked" symbol when clicking on a list item
var list = document.querySelector('ul');
list.addEventListener('click', function (ev) {
    if (ev.target.tagName === 'LI') {
        ev.target.classList.toggle('checked');
    }
}, false);

// Create a new list item when clicking on the "Add" button
function newHobbie() {
    var li = document.createElement("li");
    var inputValue = document.getElementById("js_search_hobbie").value;
    var t = document.createTextNode(inputValue);
    li.appendChild(t);
    if (inputValue === '') {
        alert("Vous n'avez rien renseigné !");
    } else {
        document.getElementById("result_hobbies").appendChild(li);
        let data_content = li.dataset.content = inputValue; // Récupère la valeur dans un data-content
        console.log(data_content);
        dataHobbiesContentArray.push(data_content);
    }
    document.getElementById("js_search_hobbie").value = "";

    var span = document.createElement("SPAN");
    var txt = document.createTextNode("\u00D7");
    span.className = "close";
    span.appendChild(txt);
    li.appendChild(span);

    for (i = 0; i < close.length; i++) {
        close[i].onclick = function () {
            var div = this.parentElement;
            div.style.display = "none";
        }
    }
}