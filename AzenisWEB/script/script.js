function setInfo() {
	var setNick = document.getElementById("tNick").value;
	var sNick = document.getElementById("nick").innerHTML;
	
	document.getElementById("nick").innerHTML = setNick;
}
function giveBan() {
	var checkNick = document.getElementById("nick").innerHTML;
	alert ("Ban zostal przyznany dla konta: " + checkNick + ".");
}
function giveKick() {
	var checkNick = document.getElementById("nick").innerHTML;
	alert ("Gracz o nicku: " + checkNick + " został wyrzucony z serwera.");
}
