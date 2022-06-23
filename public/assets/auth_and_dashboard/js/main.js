// SELECT
var x, i, j, selElmnt, a, b, c;
/* Look for any elements with the class "custom-select": */
x = document.getElementsByClassName("custom-select");
for (i = 0; i < x.length; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  /* For each element, create a new DIV that will act as the selected item: */
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /* For each element, create a new DIV that will contain the option list: */
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < selElmnt.length; j++) {
    /* For each option in the original select element,
    create a new DIV that will act as an option item: */
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /* When an item is clicked, update the original select box,
        and the selected item: */
        var y, i, k, s, h;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        h = this.parentNode.previousSibling;
        for (i = 0; i < s.length; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            for (k = 0; k < y.length; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
      });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
    /* When the select box is clicked, close any other select boxes,
    and open/close the current select box: */
    e.stopPropagation();
    closeAllSelect(this);
    this.nextSibling.classList.toggle("select-hide");
    this.classList.toggle("select-arrow-active");
  });
}

function closeAllSelect(elmnt) {
  /* A function that will close all select boxes in the document,
  except the current select box: */
  var x, y, i, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  for (i = 0; i < y.length; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < x.length; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}

// PROGRAMMA
var tabNavs = document.querySelectorAll(".programm-category a");
var tabPanes = document.querySelectorAll(".programm-item");

for (var i = 0; i < tabNavs.length; i++) {

  tabNavs[i].addEventListener("click", function(e){
    e.preventDefault();
    var activeTabAttr = e.target.getAttribute("data-tab");

    for (var j = 0; j < tabNavs.length; j++) {
      var contentAttr = tabPanes[j].getAttribute("data-tab-content");

      if (activeTabAttr === contentAttr) {
        tabNavs[j].classList.add("active");
        tabPanes[j].classList.add("active");
      } else {
        tabNavs[j].classList.remove("active");
        tabPanes[j].classList.remove("active");
      }
    }
  });
}

// BURGER
const menuIcon = document.querySelector('#menu__toggle');
function toggleMenuIcon() {
  menuIcon.classList.toggle('active');
  document.body.classList.toggle("noscroll");
}
menuIcon.addEventListener('click', toggleMenuIcon);

//LINK
function profilelink() {
  var copyText = document.getElementById("profile-link");
  copyText.select();
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}
function amolead() {
  var copyText = document.getElementById("amo-lead");
  copyText.select();
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}
function amocontact() {
  var copyText = document.getElementById("amo-contact");
  copyText.select();
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}
function chat2desk() {
  var copyText = document.getElementById("chat2desk");
  copyText.select();
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}

// BURGER
const secondmenuIcon = document.querySelector('#header-second-menu-toggle');
function togglesecondMenuIcon() {
  secondmenuIcon.classList.toggle('active');
}
secondmenuIcon.addEventListener('click', togglesecondMenuIcon);
