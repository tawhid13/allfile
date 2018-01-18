function lower() {
	var name= document.getElementById('name').value;
	var ascii = name.charCodeAt(0)+32;
	var capital = String.fromCharCode(ascii);
	var output = document.getElementById("output");
	output.innerHTML = capital;
	document.getElementById('name') .value="";}