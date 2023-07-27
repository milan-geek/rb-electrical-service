jQuery(document).ready(function ($) {

    var window_size = $(window).width();

    // For wow animation
    new WOW().init();

    var currentRequest = null;
    $(".gallery-tab li").on("click", function () {
        var slug = $(this).attr('data-id');
        $(".gallery-tab li").removeClass('active-gallery-tab');
        $(this).addClass('active-gallery-tab');
        $(".gallery-loader").css("display", "flex");

        currentRequest = $.ajax({
            type: 'POST',
            url: custom_call.ajaxurl,
            data: {
                'action': 'gallery_tabbing',
                'id': slug,
            },
            dataType: 'text',
            success: function (data) {
                console.log(data);
                $(".main-slider").slick('unslick');
                $(".gallery-box").html(data);
                $(".gallery-loader").css("display", "none");
                gallery_slider();
            }
        });
    });


    /* FAQ Page accordion */
    $('.accordion .faq-content').hide();
    $('.accordion > div:eq(0) h3').addClass('active-faq');
    $('.accordion > div:eq(0) .faq-content').slideDown();

    $('.accordion h3').click(function (j) {
        var dropDown = $(this).closest('div').find('.faq-content');
        $(this).closest('.accordion').find('.faq-content').not(dropDown).slideUp();
        if ($(this).hasClass('active-faq')) {
            $(this).removeClass('active-faq');
        } else {
            $(this).closest('.accordion').find('h3.active-faq').removeClass('active-faq');
            $(this).addClass('active-faq');
        }
        dropDown.stop(false, true).slideToggle();
        j.preventDefault();
    });


    // For Reviews Slider
    $('.reviews-testimonial-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
        arrows: true,
        autoplay: false,
        autoplaySpeed: 2000,
        prevArrow: '<button class="slide-arrow prev-arrow"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
        nextArrow: '<button class="slide-arrow next-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
        responsive: [{
            breakpoint: 1500,
            settings: {
                // arrows: false,
            }
        }]
    });


    // For Category Slider
    $('.category-slider').slick({
        slidesToShow: 9,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [{
            breakpoint: 1500,
            settings: {
                slidesToShow: 7,
            }
        },{
            breakpoint: 992,
            settings: {
                slidesToShow: 5,
            }
        },{
            breakpoint: 768,
            settings: {
                slidesToShow: 4,
            }
        },{
            breakpoint: 576,
            settings: {
                slidesToShow: 3,
            }
        }]
    });


    // For Gallery Slider
    $('.gallery-slider').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        infinite: true,
        rows: 2,
        dots: false,
        arrows: false,
        autoplay: false,
        autoplaySpeed: 2000,
        responsive: [{
            breakpoint: 1200,
            settings: {
                slidesToShow: 4,
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 3,
            }
        },
        {
            breakpoint: 576,
            settings: {
                slidesToShow: 3,
            }
        },
        {
            breakpoint: 426,
            settings: {
                slidesToShow: 2,
            }
        }
        ]
    });


    /* Scroll To Top JS */
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('#scrollToTop').fadeIn();
        } else {
            $('#scrollToTop').fadeOut();
        }
    });
    $('#scrollToTop').click(function () {
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });


    /* Sticky Header JS */
    $(window).scroll(function () { // this will work when your window scrolled.
        var height = $(window).scrollTop(); //getting the scrolling height of window
        if (height > 0) {
            $(".site-header").addClass("sticky_head");
        } else {
            $(".site-header").removeClass("sticky_head");
        }
    });


    /* Mobile Menu JS */
    $("#main-menu .menu-item a").click(function () {
        $("#site-navigation").removeClass("toggled");
    });

    /*Quote Modal open JS */
    $("#request_a_quote").on('show.bs.modal', function () {
        $(window).scroll(function () { // this will work when your window scrolled.
            $(".site-header").addClass("sticky_head");
        });
        var scrolly = window.scrollY;
        $("body").css("top", "-" + scrolly + "px");
        $(this).attr("data-top", scrolly);
    });

    /*Quote Modal close JS */
    $('#request_a_quote').on('hidden.bs.modal', function () {
        $(window).scroll(function () { // this will work when your window scrolled.
            var height = $(window).scrollTop(); //getting the scrolling height of window
            if (height < 100) {
                $(".site-header").removeClass("sticky_head");
            }
        });
        var scrolly = $(this).attr("data-top");
        $("body").css("top", "0px");
        window.scrollTo(0, scrolly);
    });

    /* SEO Page Read More JS */
    $('#read-more').click(function () {
        $('.excerpt-content').css({ 'max-height': 'unset' });
        $(this).hide();
    });

    /*SEO Menu JS */
    $('#view_all_services').click(function () {
        $('.all-services').slideToggle(500);
        $('.all-services').css('display', 'block');
    });

    /* CTA Button mobile js*/
    $(window).scroll(function () {
        var window_size_scroll = $(window).width();
        if (window_size_scroll <= 991) {
            if ($(this).scrollTop() > 100) {
                $(".cta-btn").fadeIn();
            } else {
                $(".cta-btn").fadeOut();
            }
        }
    });

    if (window_size <= 991) {

        /* dropDown mobile menu */
        $(".menu-item-has-children a").first().attr('href', 'javascript:void(0);');

        /* dropDown mobile menu show and hide */
        $('body').on('click', '#MainMenu .menu-item-has-children', function () {
            if (($(this).hasClass('active-sub-menu'))) {
                $(this).removeClass('active-sub-menu');
                $(this).find('.sub-menu').css('display', 'none');
            } else {
                $(".menu-item-has-children").removeClass('active-sub-menu');
                $(".sub-menu").css('display', 'none');
                $(this).addClass('active-sub-menu');
                $(this).find('.sub-menu').css('display', 'block');
            }
        });

        $('.say-about-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            dots: false,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 4000,
            prevArrow: '<button class="slide-arrow prev-arrow"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
            nextArrow: '<button class="slide-arrow next-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
            responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false,
                    arrows: true,
                }
            }]
        });

    }

    
/* after load JS */
$(window).on('load', function () {
    // smooth scroll - change navigation link  JS
    $("ul.menu li.menu-item").each(function () {
        var href = $(this).find("a").attr("href");
        if (href.includes("#")) {
            if (href.substr(0, 1) == '#') {
                if ($(href).length > 0) {
                    $(this).find("a").first().attr("href", window.location.href.replace('#', '') + href);
                } else {
                    $(this).find("a").first().attr("href", custom_call.homeurl + href);
                }
            }
        }
    });

    // fancy box stop slider JS
    $().fancybox({
        selector: '[data-fancybox]',
        "afterShow": function () {
            $('.slick-initialized').slick('slickPause');
        },

        "afterClose": function () {
            setTimeout(() => {
                $('.slick-initialized').slick('slickPlay');
                $("body").trigger("click");
            }, 1000);

        }
    });
});

/* Gallery Slider */
function gallery_slider() {
    $('.main-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
        arrows: false,
        draggable: false,
        prevArrow: '<button class="slide-arrow prev-arrow"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
        nextArrow: '<button class="slide-arrow next-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        }]
    });
}
});