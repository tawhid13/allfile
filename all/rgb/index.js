var button=document.querySelector('button');
button.addEventListener('click', function (){
	 var random1 = parseInt(Math.random() *255)
	 var random2 = parseInt(Math.random() *255)
	 var random3 = parseInt(Math.random() *255)
	 document.body.style.background ='rgb('+ random1 +','+ random2 +','+ random3 +')';
 });
// button.addEventListener('mouseout',ta);
// button.addEventListener('mouseover',ta);
