function tawhid () {
  var ra1  = parseInt(Math.random() * 255)
  var ra2  = parseInt(Math.random() * 255)
  var ra3  = parseInt(Math.random() * 255)
  document.body.style.background ='rgb('+ ra1 +','+ ra2 +','+ ra3 +')';

  // $('body').css('background', 'rgb(' + ra1 +','+ra2 + ',' + ra3 + ')');
   //$('ul').hide()
  document.querySelector('ul').style.display = 'none';
   document.querySelector('p').style.fontSize='20px';
  // $('p').css('fontSize','40px')
}

function tawhid2 () {
	$('ul').toggle();
	// $('p').css('fontSize','15px')
	 document.querySelector('p').style.fontSize='20px';
	document.body.style.background='white';
   // $('body').css('background', 'white');
  // document.querySelector('ul').style.display = 'block';
 // $('ul'). show()
  document.body.style.fontSize='20px';

  //$('body').css('font-style','italic')
   //document.body.style.font-style='italic';

 }


var button=document.querySelector('button');

button.addEventListener('mouseover',tawhid);

 //jQuery('button').on('mouseenter', tawhid);
// $('button').on('mouseenter', tawhid);
 // jQuery('button').on('mouseout', tawhid2);
// $('button').on('mouseout', tawhid2);
button.addEventListener('mouseout',tawhid2);



//jQuery('body').css('background', 'red');

// jQuery('a').css('color', 'white');

