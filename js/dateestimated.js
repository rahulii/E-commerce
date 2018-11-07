var dateObj = new Date();
var day = dateObj.getUTCDate() + 5;
var monthnames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
var month= monthnames[dateObj.getUTCMonth()];
newdate = "Estimated Delivery Date within India: " + day + "th " + month;
window.onload = function date(){
	document.getElementById("edate").innerHTML = newdate;	
}
