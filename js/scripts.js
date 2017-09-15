
$(document).ready(function(){/* off-canvas sidebar toggle */

$('[data-toggle=offcanvas]').click(function() {
  	$(this).toggleClass('visible-xs text-center');
    $(this).find('i').toggleClass('glyphicon-chevron-right glyphicon-chevron-left');
    $('.row-offcanvas').toggleClass('active');
    $('#lg-menu').toggleClass('hidden-xs').toggleClass('visible-xs');
    $('#xs-menu').toggleClass('visible-xs').toggleClass('hidden-xs');
    $('#btnShow').toggle();
});
});

//fixing the position of categories after scroling
function myFunction() {
		
    var window_top = $('.column').scrollTop();
	
    var  div_top= $('#sticky-anchor').offset().top;
	
    if (window_top-200 > div_top) {
        $('#sticky').addClass('stick');
       // $('#sticky-anchor').height($('#sticky').outerHeight());
    } else {
        $('#sticky').removeClass('stick');
       // $('#sticky-anchor').height(0);
    }
}
    
