$(".btn-group, .dropdown").hover(
    function() {
        $('>.dropdown-menu', this).stop(true, true).fadeIn("fast");
        $(this).addClass('open');
    },
    function() {
        $('>.dropdown-menu', this).stop(true, true).fadeOut("fast");
        $(this).removeClass('open');
    });


$('.owl1').owlCarousel({
    autoplay: false,
    loop: true,
    nav: true,
    dots: false,

    // animateOut: 'fadeOut',
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
})



$('.owl2').owlCarousel({
    autoplay: true,
    loop: true,
    nav: false,
    dots: true,
    margin: 10,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
})

$('.owl4').owlCarousel({
    autoplay: true,
    loop: true,
    nav: true,
    dots: true,
    margin: 10,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000: {
            items: 4
        }
    }
})

$('.owl3').owlCarousel({
    autoplay: true,
    loop: true,

    dots: true,
    margin: 10,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000: {
            items: 4
        }
    }
})
$('.owl5').owlCarousel({
    autoplay: false,
    loop: true,

    dots: true,
    margin: 10,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
})


new WOW().init();

window.onscroll = function() {
    // console.log(window.pageYOffset);
    var nav = document.getElementById('menu-header');
    if (window.pageYOffset > 10) {
        nav.classList.add("scrolled");
    } else {
        nav.classList.remove("scrolled");
    }
}

// ===== Scroll to Top ==== 
$(window).scroll(function() {
    if ($(this).scrollTop() >= 100) { // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(1000); // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(500); // Else fade out the arrow
    }
});
$('#return-to-top').click(function() { // When arrow is clicked
    $('body,html').animate({
        scrollTop: 0 // Scroll to top of body
    }, 500);
});

// $(document).ready(function() {
//     $(".fancybox").fancybox({
//         openEffect: "block",
//         closeEffect: "block"
//     });
// });




// $('.product-thumbs-track > .pt').on('click', function() {
//     $('.product-thumbs-track .pt').removeClass('active');
//     $(this).addClass('active');
//     var imgurl = $(this).data('imgbigurl');
//     var bigImg = $('.product-big-img').attr('src');
//     if (imgurl != bigImg) {
//         $('.product-big-img').attr({ src: imgurl });
//         $('.zoomImg').attr({ src: imgurl });
//     }
// });
var accordion_item = $(".click");
accordion_item.click(function() {
    $(".click").not($(this)).each(function() {
        $(this).removeClass("active");
    });
    $(this).toggleClass("active");
});