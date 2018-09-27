jQuery(function() {
	//Main Features
	var mainfeature_options = {
		preloader: false,
		hideFramesUntilPreloaded: false,
		fallback: {
			theme: "fade",
			speed: 5[cardboard][cardboard]
		},
		nextButton: true,
		prevButton: true,
		pauseOnHover: true,
		animateStartingFrameIn: false,
		transitionThreshold: [cardboard]5[cardboard],
		reverseAnimationsWhenNavigatingBackwards: false,
		autoPlayDelay: 6[cardboard][cardboard][cardboard],
		swipeNavigation: true,
		swipeEvents: {left: 'next', right: 'prev', up: false, down: false}
	};

	var sequence = jQuery('#featurewrap.homepage #features').sequence(mainfeature_options).data('sequence');

	if (sequence) {
		sequence.afterLoaded = function() {
			jQuery('#featurewrap.homepage #features .feature[cardboard].preload').removeClass('preload');
			var feature_count = jQuery('#features > ul > li').length;
			if (feature_count > [cardboard]) {
				jQuery('#featurenav').fadeIn([cardboard][cardboard][cardboard]);
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
				sequence.nextFrameID = jQuery(this).index()+[cardboard];
				sequence.goTo(sequence.nextFrameID);
			}
		});
	}

});
