$(document).ready(function() {
 
	'use strict';

	// SMOOTH SCROLL SETTINGS
	smoothScroll.init({
		speed: 900, // How fast to complete the scroll in milliseconds
		easing: 'easeInOutCubic', // Easing pattern to use
		updateURL: false, // Boolean. Whether or not to update the URL with the anchor hash on scroll
	});
	
	// MAIN SLIDER OWL CAROUSEL
		var owl_slider = $("#owl-slider");

		owl_slider.owlCarousel({
			pagination : true, // Show paggination dots
			navigation : false, // Show next and prev buttons
			slideSpeed : 1000,
			rewindSpeed : 1000,
			singleItem: true,
			autoPlay: 5000,
			dots: true,
			stopOnHover: true,
			transitionStyle : "fadeUp"
		});

		// Custom Navigation Events
		$(".next").click(function(){ owl_slider.trigger('owl.next'); });
		$(".prev").click(function(){ owl_slider.trigger('owl.prev'); });

	// TOURS OWL CAROUSEL
		var owl_tours = $("#owl-tours");
		owl_tours.owlCarousel({
			pagination : true, // Show paggination dots
			navigation : false, // Show next and prev buttons
			slideSpeed : 1000,
			rewindSpeed : 1000,
			items : 4, //10 items above 1000px browser width
			itemsDesktop : [1000,4], //5 items between 1000px and 901px
			itemsDesktopSmall : [900,3], // betweem 900px and 601px
			itemsTablet: [600,2], //2 items between 600 and 0
			itemsMobile : [480,1] // itemsMobile disabled - inherit from itemsTablet option
		});
		
	// DESTINATIONS OWL CAROUSEL
		$("#owl-destinations").owlCarousel({
			pagination : true, // Show paggination dots
			navigation : false, // Show next and prev buttons
			slideSpeed : 1000,
			rewindSpeed : 1000,
			items : 4, //10 items above 1000px browser width
			itemsDesktop : [1000,4], //5 items between 1000px and 901px
			itemsDesktopSmall : [900,4], // betweem 900px and 601px
			itemsTablet: [600,2], //2 items between 600 and 0
			itemsMobile : [480,1] // itemsMobile disabled - inherit from itemsTablet option
		});
		
	// DEALS OWL CAROUSEL
		$("#owl-deals").owlCarousel({
			pagination : true, // Show paggination dots
			navigation : false, // Show next and prev buttons
			slideSpeed : 1000,
			rewindSpeed : 1000,
			items : 4, //10 items above 1000px browser width
			itemsDesktop : [1000,4], //5 items between 1000px and 901px
			itemsDesktopSmall : [900,3], // betweem 900px and 601px
			itemsTablet: [600,2], //2 items between 600 and 0
			itemsMobile : [480,1] // itemsMobile disabled - inherit from itemsTablet option
		});
		
	// CRUISE OWL CAROUSEL
		$("#owl-cruise").owlCarousel({
			pagination : true, // Show paggination dots
			navigation : false, // Show next and prev buttons
			slideSpeed : 1000,
			rewindSpeed : 1000,
			items : 4, //10 items above 1000px browser width
			itemsDesktop : [1000,4], //5 items between 1000px and 901px
			itemsDesktopSmall : [900,4], // betweem 900px and 601px
			itemsTablet: [600,1], //2 items between 600 and 0
			itemsMobile : [480,1] // itemsMobile disabled - inherit from itemsTablet option
		});
		
	// Flights & Hotels Tabs Settings
	$(".tabs a").click(function(){
		$(this).css("outline", "none");
		$(".tabs li").removeClass("active");
		$(this).parent().addClass("active");
		var target = $(this).attr("class");
		$(".tabs-content .content").css("display", "none");
		$("#"+target).css("display", "block").nanoScroller({ alwaysVisible: true });
	});
	
	// nanoScroller Settings
	$(".nano").nanoScroller({ alwaysVisible: true });
	
	// Read more link actions for small screen
	$(".read-about").click(function(){
		$(".read-about").hide();
		$(".about-more").removeClass("hidden-sm").removeClass("hidden-xs");
	});
	
	// Tour details actions
	$(".tours .item button").click(function(){
	
		var data_page = $(this).attr("data-page");
		
		$(".tours .tour-detail").html("");
		$(".tours .tour-detail").append('<div class="loading">Loading...</div>');
		
		$("#owl-tours").addClass("hidden");
		$(".tours .tour-detail").removeClass("hidden");
		
		setTimeout(function(){
		
			// perform ajax request
			$.ajax({
				url: "ajax_tours/"+data_page,
				type: 'GET',
				dataType: 'HTML'
			}).done( function (result) {
				
				$(".tours .tour-detail .loading").remove();
				$(".tours .tour-detail").append(result);
				
				// Tour details close icon actions
				$(".tours .tour-detail .close").click(function(){
					$("#owl-tours").removeClass("hidden");
					$(".tours .tour-detail").addClass("hidden");
				});
				
			}).fail(function() { $(".tours .tour-detail .loading").html("File not loading : ajax_tours/"+data_page); });
		
		}, 1000);

	});
	
});

//HEADER ANIMATION
$(window).scroll(function(){

	'use strict';
	
	if ( $(window).scrollTop() > 49 ) {
		$(".topnav .navbar").removeClass("navbar-static-top").addClass("navbar-fixed-top").addClass("top-nav-collapse");
	} else {
		$(".topnav .navbar").removeClass("navbar-fixed-top").removeClass("top-nav-collapse").addClass("navbar-static-top");
	}
	
});

//WINDOW LOAD FUNCTIONS
$(window).load(function(){

	'use strict';
	
	//PARALLAX BACKGROUND
	$(window).stellar({
		horizontalScrolling: false,
	});
	
});

// WOW Settings
var wow = new WOW({
	boxClass:     'wow',      // animated element css class (default is wow)
	animateClass: 'animated', // animation css class (default is animated)
	offset:       0,          // distance to the element when triggering the animation (default is 0)
	mobile:       false       // trigger animations on mobile devices (true is default)
});

wow.init();


// CONTACT FORM FUNCTION
var contact_send = function(){
	
	var name 	= $("#name").val();
	var email	= $("#email").val();
	var phone	= $("#phone").val();
	var message = $("#message").val();
	
	if ( name=="" ){ alert("Your name is empty!"); $("#name").focus(); }
	else if ( email=="" ){ alert("Your email address is empty!"); $("#email").focus(); }
	else if ( phone=="" ){ alert("Your phone number is empty!"); $("#phone").focus(); }
	else if ( message=="" ){ alert("Your message is empty!"); $("#message").focus(); }
	else {
		$.post("contact.send.php", { name:name, email:email, phone:phone, message:message }, function( result ){
			if ( result=="SUCCESS" ){
				alert("Your contact form is sent.");
				setTimeout(function(){
					$("#name").val("");
					$("#email").val("");
					$("#phone").val("");
					$("#message").val("");
				}, 3000);
			} else if ( result=="EMAIL-ERROR" ){
				alert("Your contact form isn't sent. Please check your email address and try again.");
			} else {
				alert("Your contact form isn't sent. Please check fields and try again.");
			}
		});
	}

};