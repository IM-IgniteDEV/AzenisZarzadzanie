function setInfo() {
	var sprawdzNick = document.getElementById("tNick").value;
	document.getElementById("nick").innerHTML = sprawdzNick;
}
function giveBan() {
	var checkNick = document.getElementById("nick").innerHTML;
	alert ("Ban zostal przyznany dla konta: " + checkNick + ".");
}
function giveKick() {
	var checkNick = document.getElementById("nick").innerHTML;
	alert ("Gracz o nicku: " + checkNick + " został wyrzucony z serwera.");
}
