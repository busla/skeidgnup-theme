

( function($) {
$(document).ready(function () {
    
$('[data-toggle=collapse]').click(function(){
	
  	// toggle icon
  	$(this).find("span").toggleClass("glyphicon-chevron-right glyphicon-chevron-down");
  
});

$('.collapse').on('show', function (e) {
  
  	// hide open menus
  	$('.collapse').each(function(){
      if ($(this).hasClass('in')) {
          $(this).collapse('toggle');
      }
    });
  
})

});

})( jQuery );