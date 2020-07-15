/* Add your custom JavaScript code */

$( document ).ready(function() {
	var aspectRatio = Math.round(($('.container-fullscreen').outerWidth())*0.40714285714286);
    $('.container-fullscreen').css({'height' : aspectRatio});

    //console.log( aspectRatio );
});

// $( window ).resize(function() {
// 	var aspectRatio = Math.round(($('.container-fullscreen').outerWidth())*0.40714285714286);
//     $('.container-fullscreen').css({'height' : aspectRatio});

//     console.log( aspectRatio );
// });


$(window).resize(function() {
  //console.log('resize');
  setTimeout(function() {
    var aspectRatio = Math.round(($('.container-fullscreen').outerWidth())*0.40714285714286);
    $('.container-fullscreen').css({'height' : aspectRatio});
  }, 250);
});