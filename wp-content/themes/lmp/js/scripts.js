$(function () {




// grab the initial top offset of the navigation
    var wh = window.innerHeight;
    var sticky_navigation_offset_top = $('body').offset().top + ( wh - 100) / 2;
    var xScroll = 0;
    var scroll_top

// our function that decides weather the navigation bar should have "fixed" css position or not.
    var sticky_navigation = function () {
        // our current vertical position from the top


// if we've scrolled more than the navigation, change its position to fixed to stick to top, otherwise change it back to relative

        if (xScroll < sticky_navigation_offset_top) {
            $('.navbar').addClass('transparent-bg');
        }
        else
        {
            $('.navbar').removeClass('transparent-bg');
        }

        if (xScroll > $(window).scrollTop()) {
            $('.navbar').addClass('sticky-nav');


        } else {
            $('.navbar').removeClass('sticky-nav')
        }
        console.log(scroll_top + "scroll top")
        xScroll = scroll_top
        console.log(xScroll + "xScroll")
        scroll_top = $(window).scrollTop();
    };

// run our function on load
    sticky_navigation();

// and run it again every time you scroll
    $(window).scroll(function () {
        sticky_navigation();
        console.log('scrolling')
    });

});



