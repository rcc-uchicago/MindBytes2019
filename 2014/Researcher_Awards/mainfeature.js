jQuery(function() {
	//Main Features
	var mainfeature_options = {
		preloader: false,
		hideFramesUntilPreloaded: false,
		fallback: {
			theme: "fade",
			speed: 500
		},
		nextButton: true,
		prevButton: true,
		pauseOnHover: true,
		animateStartingFrameIn: false,
		transitionThreshold: 250,
		reverseAnimationsWhenNavigatingBackwards: false,
		autoPlayDelay: 6000,
		swipeNavigation: true,
		swipeEvents: {left: 'next', right: 'prev', up: false, down: false}
	};

	var sequence = jQuery('#featurewrap.homepage #features').sequence(mainfeature_options).data('sequence');

	if (sequence) {
		sequence.afterLoaded = function() {
			jQuery('#featurewrap.homepage #features .feature1.preload').removeClass('preload');
			var feature_count = jQuery('#features > ul > li').length;
			if (feature_count > 1) {
				jQuery('#featurenav').fadeIn(100);
				jQuery('#featurenav li:nth-child('+(sequence.settings.startingFrameID)+') button').addClass('active');
				jQuery('#mainfeatures').addClass('gradient');
			} else {
				jQuery('p.prev, p.next').remove();
			}
		};

		sequence.beforeNextFrameAnimatesIn = function() {
			jQuery('#featurenav li:not(:nth-child('+(sequence.nextFrameID)+')) button').removeClass('active');
			jQuery('#featurenav li:nth-child('+(sequence.nextFrameID)+') button').addClass('active');
		};

		jQuery('#featurenav li').bind('click focusin',function(){
			if(!sequence.active){
				jQuery(this).children('button').removeClass('active').children('button').addClass('active');
				sequence.nextFrameID = jQuery(this).index()+1;
				sequence.goTo(sequence.nextFrameID);
			}
		});
	}

});
