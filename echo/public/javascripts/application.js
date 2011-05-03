// Place your application-specific JavaScript functions and classes here
// This file is automatically included by javascript_include_tag :defaults

$(function(){
	$('.clippy-tooltip').tipsy({gravity: 's'});
});

jQuery.fn.fadeToggle = function(speed, easing, callback) {
  return this.animate({opacity: 'toggle'}, speed, easing, callback);  
};
 
$(document).ready(function() {
	$('#tellfriend').hide();
  	$(' a.email, #tellfriend a.close').click(function() {
    $("#tellfriend").fadeToggle('slow');
  });
  
}); 

$(function(){
	
	var x = $('.project-progress').attr('id');
	var y = (Math.floor(x/2133*100));
	
	$('.project-progress').each(function(){
	
		$(".project-progress").width(y+"%");
		$(".progress-percentage").prepend(y+'%');
	return false;
	});
});