function addme() {
	//at first select id name
	var name = document.getElementById ('name').value;
	//select email name
	var email = document.getElementById ('email').value;
	//id ar bitor kicu likha. so create textnode
	
	var nameNode = document.createTextNode (name) ;
	//id ar bitor kicu likha. so create textnode
	var emailNode = document.createTextNode (email);
	// notun akta t
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