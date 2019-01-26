jQuery(function($){

	$.supersized({
		// Functionality
		slideshow               :   1,			// Slideshow on/off
		autoplay				:	1,			// Slideshow starts playing automatically
		start_slide             :   1,			// Start slide (0 is random)
		stop_loop				:	0,			// Pauses slideshow on last slide
		random					: 	0,			// Randomize slide order (Ignores start slide)
		slide_interval          :   7000,		// Length between transitions
		transition              :   1, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
		transition_speed		:	300,		// Speed of transition
		new_window				:	1,			// Image links open in new window/tab
		pause_hover             :   0,			// Pause slideshow on hover
		keyboard_nav            :   1,			// Keyboard navigation on/off
		performance				:	1,			// 0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality, 3-Optimizes transition speed // (Only works for Firefox/IE, not Webkit)
		image_protect			:	1,			// Disables image dragging and right click with Javascript
												   
		// Size & Position						   
		min_width		        :   0,			// Min width allowed (in pixels)
		min_height		        :   0,			// Min height allowed (in pixels)
		vertical_center         :   1,			// Vertically center background
		horizontal_center       :   1,			// Horizontally center background
		fit_always				:	0,			// Image will never exceed browser width or height (Ignores min. dimensions)
		fit_portrait         	:   1,			// Portrait images will not exceed browser height
		fit_landscape			:   0,			// Landscape images will not exceed browser width
												   
		// Components							
		slide_links				:	'blank',	// Individual links for each slide (Options: false, 'num', 'name', 'blank')
		thumb_links				:	0,			// Individual thumb links for each slide
		thumbnail_navigation    :   0,			// Thumbnail navigation
		slides 					:  	[			// Slideshow Images
											{image : 'http://placehold.it/1280x850', title : '<div class="slide-content"><h1 class="title uppercase light">Fully responsive</h1><h2 class="subtitle uppercase light">Aimed at crafting sites to provide an optimal viewing experience</h2>', thumb : '', url : ''},
											{image : 'http://placehold.it/1280x850', title : '<div class="slide-content"><h1 class="title uppercase light">Parallax background</h1><h2 class="subtitle uppercase light">Create your own unique and one of the kind animated background</h2></div>', thumb : '', url : ''},
											{image : 'http://placehold.it/1280x850', title : '<div class="slide-content"><h1 class="title uppercase dark">Font awesome icons</h1><h2 class="subtitle uppercase light">Scalable vector icons that can easily be customized</h2></div>', thumb : '', url : ''},
											{image : 'http://placehold.it/1280x850', title : '<div class="slide-content"><h1 class="title uppercase dark">Easy to use theme</h1><h2 class="subtitle uppercase dark">You can use for just about anything you can think of</h2></div>', thumb : '', url : ''}  
									],
									
		// Theme Options			   
		progress_bar			:	0,			// Timer for each slide							
		mouse_scrub				:	0
		
	});

});
