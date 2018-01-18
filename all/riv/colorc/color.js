var button=document.querySelector('button');
var colors=['red','green','blue','yellow','teal'];
function colorChange() {
 document.body.style.backgroundColor=colors[parseInt(Math.random()*colors.length)];
}
button.addEventListener('click',colorChange);
button.addEventListener('mouseout',colorChange);
button.addEventListener('mouseover',colorChange);