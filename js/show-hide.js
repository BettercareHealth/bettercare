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

var sh = document.getElementById('help-show');
sh.addEventListener("click", function(){showHide("help")});

var hh = document.getElementById('help-hide');
hh.addEventListener("click", function(){showHide("help")});

var st = document.getElementById('live-test-show');
st.addEventListener("click", function(){showHide("live-test")});

var ht = document.getElementById('live-test-hide');
ht.addEventListener("click", function(){showHide("live-test")});
