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
