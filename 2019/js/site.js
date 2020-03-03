/*!
 * RCC Gateway Javascript
 */
(function (window, document, $, undefined) {

    $(document).ready(function() {        
        // Animations
        function getPosition() {
            return $(window).scrollTop();
        }

        function getViewportHeight() {
            return $(window).outerHeight();
        }

        function triggerPoint() {
            return getViewportHeight()/2.5;
        }

        // Clean this up so it doesn't fire 1000000 times
        function checkScroll(els) {

            var scrollPos = getPosition();
            var triggerDelay = triggerPoint();

            $.each(els, function(idx, el) {
                var $el = $(el);
                // if (idx === 1) {
                //     console.log(triggerDelay, scrollPos, $el.offset().top);
                // }

                // Trigger animation if top of element is equal to trigger point
                if ($el.offset().top - triggerDelay < scrollPos) {
                    $el.addClass('animate');
                } else {
                    $el.removeClass('animate');
                }
            });
        }

        $promise = $('.home-promise');

        $(window).on('scroll', function() {
            if ($promise.length) {
                checkScroll($promise);
            }
        });

    });

})(window, window.document, jQuery);