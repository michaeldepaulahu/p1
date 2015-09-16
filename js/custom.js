/*!
 * P1 Home - Project
 * Michael Depaula
 * Custom js
 */
 
 //	toogle Q&A
 	function toggle(sel){
		// selectors
		var p = sel + " p:eq(1)";
		var ul = sel + " ul";
		var span = sel + " span:eq(0)";
		var fig = sel + " figure";
		var thb = sel + " .thumbnail";		
		
		// hover function
		$(sel).hover(function(){
			$(p).fadeIn(500);
			$(ul).fadeIn(500);
			$(fig).css('opacity', 0.9); 
			$(thb).css('background-color', '#e2edf0');
			$(span).animate({'margin-top': '10px'}).clearQueue().finish();
		}, function(){ 
			$(p).fadeOut(500); 
			$(ul).fadeOut(500); 
			$(fig).css('opacity', 1);
			$(thb).css('background-color', '#ffffff');
			$(span).animate({'margin-top': '10px'}).clearQueue().finish();
		});
	}
	
 // load custom
	$(document).ready(function(){
		// load custom
		toggle(".q1");
		toggle(".q2");
		toggle(".q3");
		toggle(".q4");
	});