// Scripts is Site JS
$(document).ready(function() {
	"use strict";

	$(document).ready(function() {

        $('html, body').hide();

        if (window.location.hash) {

            setTimeout(function() {

                $('html, body').scrollTop(0).show();

                $('html, body').animate({

                    scrollTop: $(window.location.hash).offset().top - 108

                }, 1000)

            }, 0);

        } else {

            $('html, body').show();

        }

    });

	$(window).scroll(function() {
        if ($(this).scrollTop()) {
            $('#fixedNav').addClass('fixed-top');
        } else {
            $('#fixedNav').removeClass('fixed-top');
        }
    });

    $(document).ready(function() {
    	$('li.nav-item').on('click', function() {
    		if($('li.nav-item').click()) {
    			$('li.nav-item').addClass('active');
    		} else {
    			$('li.nav-item').removeClass('active');
    		}
    	});
    });

	$(document).ready(function () {
		$('*[data-toggle="tooltip"]').tooltip();
	});

});