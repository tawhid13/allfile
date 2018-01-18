function addme() {
	var name = document.getElementById ('name').value;

	var email = document.getElementById ('email').value;

	console.log(name, email)

	var nameNode = document.createTextNode (name) ;

	var emailNode = document.createTextNode (email);

	var tdname = document.createElement ("td");

	tdname.appendChild(nameNode);

	var tdemail = document.createElement("td");

	tdemail.appendChild(emailNode);

	var tr = document.createElement("tr");

	tr.appendChild(tdname);

	tr.appendChild(tdemail);

	var table = document.getElementById("table");

	table.appendChild(tr);

	document.getElementById('name').value="";

	document.getElementById('email').value="";
	
	}