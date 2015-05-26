/*!
 * Shows and hides elements (if the file isn't running through PrinceXML)
 */

if (typeof Prince  === "undefined") {
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
}