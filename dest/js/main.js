(function($) { 
 	$(document).ready(function() {
	
// [ documentations ]
$('.doc-sidebar a').on('click', function(){
    var $this = $(this);
        _attr = $this.attr('href');
    $('.callout-demo').addClass('hidden');
    $(_attr).removeClass('hidden');
    $('.doc-sidebar a').removeClass('active');
    $this.addClass('active');
  return false;
});

// js-helper_jumper
$('[data-jumper]').on('click', function () {
    var $this = $(this), _target;
    if ((typeof $this.attr('href')) !== 'undefined') {
        _target = $this.attr('href');
    }  else { _target = $this.attr('data-jumper'); }

    $('html, body').animate({
        scrollTop: $(_target).offset().top
    }, 800);
    return false;
}); 	
	}); 
})(jQuery); 
