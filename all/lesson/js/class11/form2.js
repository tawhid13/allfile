function output () {
	var name = document.getElementById('name').value;
	var output = document.getElementById('output');
	output.innerHTML = name;
	document.getElementById('name') .value="";
}