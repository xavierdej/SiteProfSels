/*!
 * Script for card reveal
 */
$(function(){

   $('.btn-show').on('click', function () {
$('div.card-reveal[data-rel=' + $(this).data('rel') + ']').slideToggle('slow');
});

$('.card-reveal .close').on('click', function() {
$('div.card-reveal[data-rel=' + $(this).data('rel') + ']').slideToggle('slow');
});
});

/*!
* Script for navbar
*/
$(function(){
  $("#includedContent").load("navbar.html"); 
});

/*!
*Script for enabling scrollspy @research
*/
// Add scrollspy to <body>
$('body').scrollspy({target: "#myScrollspy", offset: 50}); 

// Add smooth scrolling to all links inside a navbar
$("#myScrollspy	 a").on('click', function(event){

  // Prevent default anchor click behavior
  event.preventDefault();

  // Store hash (#)
  var hash = this.hash;

  // Using jQuery's animate() method to add smooth page scroll
  // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area (the speed of the animation)
  $('html, body').animate({
    scrollTop: $(hash).offset().top
  }, 800, function(){

    // Add hash (#) to URL when done scrolling (default click behavior)
    window.location.hash = hash;
  });
});