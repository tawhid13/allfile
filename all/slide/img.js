var pic=[
'images/p1.jpg',
'images/p2.jpg',
'images/p3.jpg',
'images/p4.jpg',
'images/p5.jpg',
'images/p6.jpg',
'images/p7.jpg',
'images/p8.jpg',
'images/p9.jpg',
'images/p10.jpg',
'images/p11.jpg',
'images/p12.jpg',
'images/p13.jpg',
'images/p14.jpg',
'images/p15.jpg',
'images/p16.jpg',
'images/p17.jpg',
'images/p18.jpg',
'images/p19.jpg',
'images/p20.jpg',
'images/p21.jpg'
]
var index=0;
var img =document.getElementById('img');
function prev() {
	index=index===0? pic.length-1:index-1;
	img.setAttribute('src',pic[index])

}
function next() {
	index=index===0? pic.length-1:index-1;
	img.setAttribute('src',pic[index])

	
}
// setInterval(next,2000);