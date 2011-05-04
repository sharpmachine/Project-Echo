// Place your application-specific JavaScript functions and classes here
// This file is automatically included by javascript_include_tag :defaults

$(function(){
	$('.clippy-tooltip').tipsy({gravity: 's'});
});

jQuery.fn.fadeToggle = function(speed, easing, callback) {
  return this.animate({opacity: 'toggle'}, speed, easing, callback);  
};
 
$(function() {
	$('#tellfriend').hide();
  	$(' a.email, #tellfriend a.close').click(function() {
    $("#tellfriend").fadeToggle('slow');
  });
  
}); 

// $(function(){
// 	
// 	$('.single-project').each(function(){
// 	
// 	var progress = $(".project-progress");
// 	var goal = progress.attr('goal'); //Grab the target goal amount
// 	var promised = progress.attr('promised'); //Grab the amount pledged so far
// 	var percentComplete = (Math.floor(promised/goal*100)); //Convert amount pledged so far into percentage
// 	
// 	//console.log(e);
// 	
// 		progress.width(percentComplete+"%"); //Apply percentage to width of .project-progress in % units, of course
// 		$(".progress-percentage").prepend(percentComplete+'%'); //Display the percent complete in the .progress-perce
// 	return false;
// 	});
// });

