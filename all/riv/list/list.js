var friends =['omit','pranti','jebin','lubna','naima','ripa','probash'];
var html ='<ul>';
for ( var k=0; k<friends.length; k++){
	html = html +'<li>'+ friends[k]+'</li>'
}
html = html +'</ul>';
var dear= document.getElementById ('dear');
dear.innerHTML=html;