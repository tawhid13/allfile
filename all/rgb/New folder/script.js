
// var button=document.querySelector('button');

// $('button').on('click',function(){
// var random1 = parseInt(Math.random()*255)
// var random2 = parseInt(Math.random()*255)
// var random3 = parseInt(Math.random()*255)
//  $('body').css('background-color','rgb(${random1},${random2},${random3})');
// });
// var button=document.querySelector('button');
// button.addEventListener('click', function(){
// 	var randomNumber1 = parseInt(Math.random()*255)
// 	var randomNumber2 = parseInt(Math.random()*255)
// 	var randomNumber3 = parseInt(Math.random()*255)
// 	document.body.style.background ='rgb('+randomNumber1+','+randomNumber2+','+randomNumber3+')';
// });
var button=document.querySelector('button');
var colors=['red','green','blue','yellow','teal'];
function colorChange() {
 document.body.style.backgroundColor=colors[parseInt(Math.random()*colors.length)];
}
//button.addEventListener('click',colorChange);
button.addEventListener('mouseout',colorChange);
button.addEventListener('mouseover',colorChange);