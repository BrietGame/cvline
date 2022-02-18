function searchSkill() {
  // Declare variables
  var input, filter, ul, li, a, i, txtValue;
  input = document.getElementById('js_search_skill');
  filter = input.value.toUpperCase();
  ul = document.getElementById("result_search_skill");
  li = ul.getElementsByTagName('li');

  // Loop through all list items, and hide those who don't match the search query
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    txtValue = a.textContent || a.innerText;
    let err = document.getElementById('error_search_skill');
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      err.innerText = '';
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}

$(document).ready(function () {
  let aItemSkill = $('#bdd_item_skill');
  let inputSearchSkill = $('#js_search_skill');
  aItemSkill.on('click', function (e) {
    e.preventDefault();
    let aItemSkillValue = aItemSkill[0].dataset.content;
    inputSearchSkill.val(aItemSkillValue);
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
function newSkill() {
  var li = document.createElement("li");
  var inputValue = document.getElementById("js_search_skill").value;
  var t = document.createTextNode(inputValue);
  li.appendChild(t);
  if (inputValue === '') {
    alert("Vous n'avez rien renseigné!");
  } else {
    document.getElementById("result_skills").appendChild(li);
    let data_content = li.dataset.content = inputValue; // Récupère la valeur dans un data-content
    console.log(data_content);
    dataSkillsContentArray.push(data_content);
  }
  document.getElementById("js_search_skill").value = "";

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