/*!
 * Shows and hides elements. Built from http://www.cssnewbie.com/showhide-content-css-javascript/
 */

function showHide(shID) {
  if (document.getElementById(shID)) {
    if (document.getElementById(shID+'-show').style.display != 'none') {
      document.getElementById(shID+'-show').style.display = 'none';
      document.getElementById(shID).style.display = 'block';
    }
    else {
      document.getElementById(shID+'-show').style.display = 'block';
      document.getElementById(shID).style.display = 'none';
    }
  }
}

var s = document.getElementById('help-show');
s.addEventListener("click", function(){showHide("help")});

var h = document.getElementById('help-hide');
h.addEventListener("click", function(){showHide("help")});
