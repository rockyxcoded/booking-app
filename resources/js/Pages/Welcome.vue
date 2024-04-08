<script setup>
import { Head, Link } from "@inertiajs/vue3";
import SearchWidget from "@/Components/SearchWidget.vue";
import { onMounted } from "vue";

defineProps({
    flights: Object,
});
onMounted(() => {
    //Revolution Slider
    jQuery("#rev_slider_1")
        .show()
        .revolution({
            /* Options are 'auto', 'fullwidth' or 'fullscreen' */
            sliderLayout: "auto",
            // gridwidth: 1140,
            gridheight: 1000,
            /* Navigation arrows and bullets */
            navigation: {
                arrows: {
                    enable: true,
                    style: "gyges",
                    tmp: "",
                    rtl: false,
                    hide_onleave: false,
                    hide_onmobile: true,
                    hide_under: 0,
                    hide_over: 9999,
                    hide_delay: 200,
                    hide_delay_mobile: 1200,

                    left: {
                        container: "slider",
                        h_align: "right",
                        v_align: "center",
                        h_offset: 80,
                        v_offset: 80,
                    },

                    right: {
                        container: "slider",
                        h_align: "right",
                        v_align: "center",
                        h_offset: 80,
                        v_offset: 0,
                    },
                },
            },
        });

    /*revolation slider two*/

    //Revolution Slider
    jQuery("#rev_slider_2")
        .show()
        .revolution({
            /* Options are 'auto', 'fullwidth' or 'fullscreen' */
            sliderLayout: "auto",
            // gridwidth: 1140,
            gridheight: 800,
            /* Navigation arrows and bullets */
            navigation: {
                arrows: {
                    enable: true,
                    style: "",
                    tmp: "",
                    rtl: false,
                    hide_onleave: false,
                    hide_onmobile: true,
                    hide_under: 0,
                    hide_over: 9999,
                    hide_delay: 200,
                    hide_delay_mobile: 1200,

                    // left: {
                    //     container: 'slider',
                    //     h_align: 'right',
                    //     v_align: 'center',
                    //     h_offset: 50,
                    //     v_offset: 50
                    // },

                    // right: {
                    //     container: 'slider',
                    //     h_align: 'right',
                    //     v_align: 'center',
                    //     h_offset: 50,
                    //     v_offset: 0
                    // }
                },
            },
        });

    //Revolution Slider home 5
    jQuery("#rev_slider_5").show().revolution({
        sliderLayout: "auto",
        gridheight: 1000,
    });

    (function ($) {
        "use strict";

        $("#status").fadeOut();
        $("#preloader").delay(350).fadeOut("fast");
        // $(window).stellar({});

        /*====== countdown ========*/
        $("[data-countdown]").each(function () {
            var $this = $(this),
                finalDate = $(this).data("countdown");
            $this.countdown(finalDate, function (event) {
                $this.html(
                    event.strftime(
                        '<ul><li><span class="cdown days"><span class="time-count">%-D</span><p class="day-css">Days</p></span></li><li><span class="cdown hour"><span class="time-count">%-H</span> <p class="day-css">Hour</p></span><l/i><li><span class="cdown minutes"><span class="time-count">%M</span> <p class="day-css">Min</p></span></li><li> <span class="cdown second"><span class="time-count">%S</span> <p class="day-css">Sec</p></span></li></ul>'
                    )
                );
            });
        });

        /*====== Map Pointer ========*/
        $(".mapp").addClass("scrolloff");

        $("#overlay").on("mouseup", function () {
            $(".mapp").addClass("scrolloff");
        });
        $("#overlay").on("mousedown", function () {
            $(".mapp").removeClass("scrolloff");
        });
        $(".map").mouseleave(function () {
            $(".mapp").addClass("scrolloff");
        });

        /*====== jQuery MeanMenu ========*/
        jQuery("nav").meanmenu();

        /*====== wow js ========*/
        new WOW().init();

        /*====== counter ========*/
        $(".counter").counterUp({
            delay: 10,
            time: 1000,
        });

        /*====== carasol destination ========*/
        $(".destination-slider-active").owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            autoplay: false,
            autoplayTimeout: 1000,
            animateOut: true,
            animateIn: true,
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 3,
                },
                1000: {
                    items: 5,
                },
            },
        });

        /*====== Testimonial Carousel Slick ========*/
        $(".slider-for").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: ".slider-nav",
            dots: false,
        });

        $(".slider-nav").slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: ".slider-for",
            dots: false,
            centerMode: true,
            centerPadding: "0px",
            focusOnSelect: true,
            variableWidth: false,
            arrows: false,
            autoplay: false,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: "0px",
                        slidesToShow: 3,
                    },
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: "0px",
                        slidesToShow: 3,
                    },
                },
            ],
        });

        /*====== partner slider ========*/
        $(".partner-slider-active").owlCarousel({
            loop: true,
            margin: 20,
            nav: false,
            autoplay: false,
            autoplayTimeout: 1000,
            animateOut: true,
            animateIn: true,
            responsive: {
                0: {
                    items: 2,
                },
                600: {
                    items: 3,
                },
                1000: {
                    items: 5,
                },
            },
        });

        /*====== tab js ========*/
        $(function () {
            var b = "fadeInLeft";
            var c;
            var a;
            d($("#myTab1 a"), $("#tab-content1"));
            function d(e, f, g) {
                e.click(function (i) {
                    i.preventDefault();
                    $(this).tab("show");
                    var h = $(this).data("easein");
                    if (c) {
                        c.removeClass(a);
                    }
                    if (h) {
                        f.find("div.active").addClass("animated " + h);
                        a = h;
                    } else {
                        if (g) {
                            f.find("div.active").addClass("animated " + g);
                            a = g;
                        } else {
                            f.find("div.active").addClass("animated " + b);
                            a = b;
                        }
                    }
                    c = f.find("div.active");
                });
            }
            $("a[rel=popover]")
                .popover()
                .click(function (f) {
                    f.preventDefault();
                    if ($(this).data("easein") != undefined) {
                        $(this)
                            .next()
                            .removeClass($(this).data("easein"))
                            .addClass("animated " + $(this).data("easein"));
                    } else {
                        $(this)
                            .next()
                            .addClass("animated " + b);
                    }
                });
        });
        $(function () {
            var b = "fadeInLeft";
            var c;
            var a;
            d($("#myTab2 a"), $("#tab-content2"));
            function d(e, f, g) {
                e.click(function (i) {
                    i.preventDefault();
                    $(this).tab("show");
                    var h = $(this).data("easein");
                    if (c) {
                        c.removeClass(a);
                    }
                    if (h) {
                        f.find("div.active").addClass("animated " + h);
                        a = h;
                    } else {
                        if (g) {
                            f.find("div.active").addClass("animated " + g);
                            a = g;
                        } else {
                            f.find("div.active").addClass("animated " + b);
                            a = b;
                        }
                    }
                    c = f.find("div.active");
                });
            }
            $("a[rel=popover]")
                .popover()
                .click(function (f) {
                    f.preventDefault();
                    if ($(this).data("easein") != undefined) {
                        $(this)
                            .next()
                            .removeClass($(this).data("easein"))
                            .addClass("animated " + $(this).data("easein"));
                    } else {
                        $(this)
                            .next()
                            .addClass("animated " + b);
                    }
                });
        });

        /*====== date picker ========*/
        $("#datepicker").datepicker();
        $("#datepicker1").datepicker();
        $("#datepicker2").datepicker();
        $("#datepicker3").datepicker();
        $("#datepicker4").datepicker();
        $("#pickupdate").datepicker();
        $("#shippickupdate").datepicker();
        $("#daperture_date").datepicker();
        $("#return_date").datepicker();
        $("#booking-date").datepicker();

        /*====== select option ========*/
        $("#standard1").customselect();
        $("#standard2").customselect();
        $("#standard3").customselect();
        $("#standard4").customselect();
        $("#nosearch").customselect({ search: false });
        $("#nosearch1").customselect({ search: false });
        $("#nosearch2").customselect({ search: false });

        /*====== Scroll to top ========*/
        jQuery(".to-top").on("click", function (event) {
            jQuery("html,body").animate(
                {
                    scrollTop: 0,
                },
                1000
            );
        });

        jQuery(window).scroll(function () {
            if (jQuery(window).scrollTop() > 100) {
                jQuery(".to-top").fadeIn(1000);
            } else {
                jQuery(".to-top").fadeOut(1000);
            }
        });

        /*====== contact form ========*/
        $("#contactform").submit(function () {
            var action = $(this).attr("action");
            $("#message").slideUp(750, function () {
                $("#message").hide();
                $("#submit").after("").attr("disabled", "disabled");
                $.post(
                    action,
                    {
                        name: $("#name").val(),
                        email: $("#email").val(),
                        subject: $("#subject").val(),
                        comments: $("#comments").val(),
                    },
                    function (data) {
                        document.getElementById("message").innerHTML = data;
                        $("#message").slideDown("slow");
                        $("#contactform img.loader").fadeOut(
                            "slow",
                            function () {
                                $(this).remove();
                            }
                        );
                        $("#submit").removeAttr("disabled");
                        if (data.match("success") != null)
                            $("#contactform").slideUp("slow");
                    }
                );
            });
            return false;
        });

        /*====== home version 5 slider ========*/
        $(".slider-bg-acive").owlCarousel({
            loop: true,
            nav: false,
            autoplay: true,
            autoplayTimeout: 11000,
            mergeFit: true,
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 1,
                },
                1000: {
                    items: 1,
                },
            },
        });

        /*====== home 5 testimonoial  ========*/
        $(".testimonial-5-active").owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            dots: true,
            autoplay: true,
            autoplayTimeout: 11000,
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 1,
                },
                1000: {
                    items: 1,
                },
            },
        });

        /*====== package slider ========*/
        $(".popular-packages-carasoul").owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
            autoplay: false,
            autoplayTimeout: 1000,
            navText: [
                '<i class="fa fa-angle-left"></i>',
                '<i class="fa fa-angle-right"></i>',
            ],
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 2,
                },
                1000: {
                    items: 3,
                },
            },
        });

        /*====== Magnific Popup for video ========*/
        $(".video_iframe").magnificPopup({
            type: "iframe",
            iframe: {
                markup:
                    '<div class="mfp-iframe-scaler">' +
                    '<div class="mfp-close"></div>' +
                    '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
                    "</div>",
                patterns: {
                    youtube: {
                        index: "youtube.com/",
                        id: "v=",
                        src: "http://www.youtube.com/embed/%id%?autoplay=1",
                    },
                    vimeo: {
                        index: "vimeo.com/",
                        id: "/",
                        src: "//player.vimeo.com/video/%id%?autoplay=1",
                    },
                    gmaps: {
                        index: "//maps.google.",
                        src: "%id%&output=embed",
                    },
                },
                srcAction: "iframe_src",
            },
        });

        /*====== slick partner slider ========*/
        $(".partner-slider-2").slick({
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 5,
            autoplay: true,
            dots: false,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 5000,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: false,
                    },
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                    },
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
            ],
        });

        /*====== masonary gallery ========*/
        var $grid1 = $(".grid-3").imagesLoaded(function () {
            $grid1.isotope({
                itemSelector: ".grid-item",
                percentPosition: true,
                masonry: {
                    columnWidth: 1,
                },
            });
        });

        $(".grid-3").each(function () {
            $(this).magnificPopup({
                delegate: "a",
                type: "image",
                gallery: {
                    enabled: true,
                },
                removalDelay: 300,
                mainClass: "mfp-fade",
            });
        });

        /*====== select 2 ========*/
        $(".location-results").select2({
            minimumResultsForSearch: Infinity,
        });

        $(".location-search").select2({
            maximumSelectionLength: 3,
        });

        //Testimonial Carousel (Slick2)
        $(".slider-for-two").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: ".slider-nav-two",
        });

        $(".slider-nav-two").slick({
            slidesToShow: 7,
            slidesToScroll: 1,
            asNavFor: ".slider-for-two",
            dots: false,
            centerMode: true,
            centerPadding: "0px",
            focusOnSelect: true,
            variableWidth: false,
            arrows: false,
            focusOnSelect: true,
            responsive: [
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 5,
                        slidesToScroll: 2,
                    },
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                    },
                },
            ],
        });

        $(".ImageBackground").each(function () {
            var $this = $(this),
                $imgHolder = $this.children(".ImageBackground__holder"),
                thisIMG = $imgHolder.children().attr("src"),
                thisURL = "url(" + thisIMG + ")";
            $imgHolder.css("background-image", thisURL);

            if ($this.hasClass("js-Parallax") && windowWidth > 768) {
                $imgHolder.regentParallax();
            }
        });
    })(jQuery);
});
</script>

<style>
html {
    font-size: 1rem !important;
}
body {
    font-size: 1rem !important;
}
.d-flex {
    display: flex !important;
}
.flex-column {
    flex-direction: column !important;
}
.align-items-center {
    align-items: center !important;
}

.justify-content-center {
    justify-content: center !important;
}
.justify-content-between {
    justify-content: space-between !important;
}
.flex-row {
    flex-direction: row !important;
}
.p-4 {
    padding: 2.5rem !important;
}
.rounded {
    border-radius: 0.375rem !important;
}
.p-3 {
    padding: 1rem !important;
}
.mb-3 {
    margin-bottom: 1rem !important;
}
</style>

<template>
    <Head title="Welcome" />

    <header>
        <!-- header top start -->
        <div class="header-top-area">
            <div class="container">
                <div class="row">
                    <div class="header-top-left">
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <ul class="header-top-contact">
                                <li>
                                    <i
                                        class="fa fa-map-marker"
                                        aria-hidden="true"
                                    ></i
                                    >4th Floor, Shobo House, 5 Simpson Street,
                                    Lagos Island.
                                </li>
                                <li>
                                    <i
                                        class="fa fa-phone"
                                        aria-hidden="true"
                                    ></i
                                    >+234 802 2235 119
                                </li>
                                <li>
                                    <i
                                        class="fa fa-envelope-o"
                                        aria-hidden="true"
                                    ></i
                                    >info@zenithtravelgroup.com
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="header-top-right">
                        <div class="col-md-3 col-xs-12">
                            <div class="book-btn">
                                <a href="contactus">Contact Us Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header top end -->

        <!-- header-bottom area start here -->
        <div class="header-bottom-area" id="stick-header">
            <div class="container">
                <div class="row">
                    <!-- logo area start here -->
                    <div class="col-md-2">
                        <div class="logo-area">
                            <a href="index.html"
                                ><img src="/images/logo.png" alt="" />
                            </a>
                        </div>
                    </div>
                    <!-- logo area end here -->
                    <!-- <?php include("includes/menu.php"); ?> -->
                </div>
            </div>
        </div>
        <!-- header-bottom area end here -->
    </header>
    <!-- header area end here -->
    <!-- slider area start here -->
    <section class="slider-area">
        <div class="rev_slider_wrapper">
            <div id="rev_slider_1" class="rev_slider" style="display: none">
                <ul>
                    <li
                        data-index="rs-3010"
                        data-transition="fade"
                        data-slotamount="7"
                        data-hideafterloop="0"
                        data-hideslideonmobile="off"
                        data-easein="default"
                        data-easeout="default"
                        data-masterspeed="1000"
                        data-thumb="images/slider/slider-back-01.jpg"
                        data-rotate="0"
                        data-fstransition="fade"
                        data-fsmasterspeed="1000"
                        data-fsslotamount="7"
                        data-saveperformance="off"
                        data-title="Intro"
                        data-param1=""
                        data-param2=""
                        data-param3=""
                        data-param4=""
                        data-param5=""
                        data-param6=""
                        data-param7=""
                        data-param8=""
                        data-param9=""
                        data-param10=""
                        data-description=""
                    >
                        <div class="slider-overlay"></div>
                        <!-- MAIN IMAGE -->
                        <img
                            src="/images/slider/bkg1.jpg"
                            alt="Sky"
                            class="rev-slidebg"
                        />
                        <!-- BEGIN BASIC TEXT LAYER -->
                        <!-- LAYER NR. 1 -->
                        <div
                            class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4 title-line-1"
                            data-x="['center', 'center', 'center', 'center']"
                            data-hoffset="0"
                            data-y="center"
                            data-voffset="-150"
                            data-frames='[{"delay":0,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            style="
                                z-index: 6;
                                font-size: 40px;
                                color: #fff;
                                text-transform: capitalize;
                                font-family: 'Poppins', sans-serif;
                                white-space: nowrap;
                                font-weight: 400;
                            "
                        >
                            Experience Best Tour Ever
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div
                            class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4 title-line-2"
                            data-x="center"
                            data-hoffset="0"
                            data-y="center"
                            data-voffset="-80"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":750,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                            style="
                                z-index: 6;
                                color: #fff;
                                text-transform: capitalize;
                                font-family: 'Poppins', sans-serif;
                                white-space: nowrap;
                            "
                        >
                            <h1 style="font-weight: 00; font-size: 60px">
                                Great Destinations You'd Love
                            </h1>
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div
                            class="tp-caption font-lora sfb tp-resizeme letter-space-5 header-p1"
                            data-x="center"
                            data-hoffset="0"
                            data-y="center"
                            data-voffset="-5"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":750,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                            style="
                                z-index: 7;
                                font-size: 16px;
                                color: #fff;
                                font-family: 'Poppins', sans-serif;
                                white-space: nowrap;
                                font-weight: 400;
                            "
                        >
                            Let us take you to the Best Destinations in the
                            world at the cheapest rate
                        </div>
                        <!-- LAYER NR. 4 -->
                        <div
                            class="tp-caption font-lora sfb tp-resizeme letter-space-5 header-p2"
                            data-x="center"
                            data-hoffset="0"
                            data-y="center"
                            data-voffset="20"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":750,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                            style="
                                z-index: 7;
                                font-size: 16px;
                                color: #fff;
                                font-family: 'Poppins', sans-serif;
                                white-space: nowrap;
                                font-weight: 400;
                            "
                        >
                            You can rely on our professional guide for the best
                            tour ever.
                        </div>

                        <!-- LAYER NR. 5 -->
                        <div
                            class="tp-caption lfb tp-resizeme header-btn"
                            data-x="center"
                            data-hoffset="0"
                            data-y="center"
                            data-voffset="120"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":750,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                            style="z-index: 8"
                        >
                            <a
                                href="contactus"
                                class="travel-primary-btn hvr-fade"
                                >Contact Us</a
                            >
                        </div>
                    </li>
                    <!-- first slider end -->

                    <li
                        data-index="rs-3047"
                        data-transition="zoomin"
                        data-slotamount="7"
                        data-hideafterloop="0"
                        data-hideslideonmobile="off"
                        data-easein="Power4.easeInOut"
                        data-easeout="Power4.easeInOut"
                        data-masterspeed="2000"
                        data-thumb="images/slider/slider-back-04.jpg"
                        data-rotate="0"
                        data-saveperformance="off"
                        data-title="Ken Burns"
                        data-param1=""
                        data-param2=""
                        data-param3=""
                        data-param4=""
                        data-param5=""
                        data-param6=""
                        data-param7=""
                        data-param8=""
                        data-param9=""
                        data-param10=""
                        data-description=""
                    >
                        <div class="slider-overlay"></div>
                        <!-- SLIDE'S MAIN BACKGROUND IMAGE -->
                        <img
                            src="/images/slider/bkg2.jpg"
                            alt=""
                            data-bgposition="center center"
                            data-kenburns="on"
                            data-duration="0"
                            data-ease="Linear.easeNone"
                            data-scalestart="100"
                            data-scaleend="120"
                            data-rotatestart="0"
                            data-rotateend="0"
                            data-offsetstart="0 0"
                            data-offsetend="0 0"
                            data-bgparallax="10"
                            class="rev-slidebg"
                            data-no-retina
                        />
                        <!-- BEGIN BASIC TEXT LAYER -->
                        <!-- LAYER NR. 1 -->
                        <div
                            class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4 title-line-1"
                            data-x="['center', 'center', 'center', 'center']"
                            data-hoffset="0"
                            data-y="center"
                            data-voffset="-150"
                            data-frames='[{"delay":0,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            style="
                                z-index: 6;
                                font-size: 40px;
                                color: #fff;
                                text-transform: capitalize;
                                font-family: 'Poppins', sans-serif;
                                white-space: nowrap;
                                font-weight: 400;
                            "
                        >
                            Your Kids deserve
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div
                            class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4 title-line-2"
                            data-x="center"
                            data-hoffset="0"
                            data-y="center"
                            data-voffset="-80"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":750,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                            style="
                                z-index: 6;
                                color: #fff;
                                text-transform: capitalize;
                                font-family: 'Poppins', sans-serif;
                                white-space: nowrap;
                            "
                        >
                            <h1 style="font-weight: 600; font-size: 60px">
                                Student Educational Tour
                            </h1>
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div
                            class="tp-caption font-lora sfb tp-resizeme letter-space-5 header-p1"
                            data-x="center"
                            data-hoffset="0"
                            data-y="center"
                            data-voffset="-5"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":750,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                            style="
                                z-index: 7;
                                font-size: 16px;
                                color: #fff;
                                font-family: 'Poppins', sans-serif;
                                white-space: nowrap;
                                font-weight: 400;
                            "
                        >
                            Let your kids join several other children for the
                            best Student Educational Tour within and outside
                            Nigeria.
                        </div>
                        <!-- LAYER NR. 4 -->
                        <div
                            class="tp-caption font-lora sfb tp-resizeme letter-space-5 header-p2"
                            data-x="center"
                            data-hoffset="0"
                            data-y="center"
                            data-voffset="20"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":750,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                            style="
                                z-index: 7;
                                font-size: 16px;
                                color: #fff;
                                font-family: 'Poppins', sans-serif;
                                white-space: nowrap;
                                font-weight: 400;
                            "
                        >
                            Your kids will enjoy unforgetable experiences of
                            extra-curriculum learning, relaxation, and great
                            fun.
                        </div>

                        <!-- LAYER NR. 5 -->
                        <div
                            class="tp-caption lfb tp-resizeme header-btn"
                            data-x="center"
                            data-hoffset="0"
                            data-y="center"
                            data-voffset="120"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":750,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                            style="z-index: 8"
                        >
                            <a
                                href="contactus"
                                class="travel-primary-btn hvr-fade"
                                >Contact Us</a
                            >
                        </div>
                    </li>
                    <!-- first slider end -->
                </ul>
            </div>
            <!-- end slider container -->
        </div>
        <!-- END end slider container wrapper -->
    </section>
    <SearchWidget />
    <!-- slider area end here -->
    <section class="popular-packages pb-70 pt-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title text-center">
                        <h2>Our Professional Services</h2>
                        <p>
                            Based on our wide network of professional partners
                            across the world, vast experience, highly trained
                            staff with deep knowledge and high level of
                            expertise in educational tourism, we organize
                            interesting tour package for different global
                            destinations in all the six continents.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="single-package">
                        <div class="package-image">
                            <a href="#"
                                ><img src="/images/homeads/hols1.jpg" alt="" />
                            </a>
                        </div>
                        <div class="package-content">
                            <h3>Holiday Packages</h3>
                            <p>
                                <span
                                    >Highly interactive and fun-filled
                                    Tours</span
                                >
                            </p>
                        </div>
                        <div class="package-calto-action">
                            <ul class="ct-action">
                                <li>
                                    <a
                                        href="#"
                                        class="travel-booking-btn hvr-shutter-out-horizontal"
                                        >Learn More</a
                                    >
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- single package end -->

                <div class="col-md-4 col-sm-6">
                    <div class="single-package">
                        <div class="package-image">
                            <a href="#"
                                ><img
                                    src="/images/homeads/ticketing.jpg"
                                    alt=""
                                />
                            </a>
                        </div>
                        <div class="package-content">
                            <h3>Ticketing and Reservation</h3>
                            <p>
                                <span
                                    >Tickets for Local and International
                                    Flights</span
                                >
                            </p>
                        </div>
                        <div class="package-calto-action">
                            <ul class="ct-action">
                                <li>
                                    <a
                                        href="#"
                                        class="travel-booking-btn hvr-shutter-out-horizontal"
                                        >Learn More</a
                                    >
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- single package end -->

                <div class="col-md-4 col-sm-6">
                    <div class="single-package">
                        <div class="package-image">
                            <a href="#"
                                ><img
                                    src="/images/homeads/travelins.jpg"
                                    alt=""
                                />
                            </a>
                        </div>
                        <div class="package-content">
                            <h3>Travel Insurance</h3>
                            <p>
                                <span
                                    >Insurance policy for effective
                                    protection</span
                                >
                            </p>
                        </div>
                        <div class="package-calto-action">
                            <ul class="ct-action">
                                <li>
                                    <a
                                        href="#"
                                        class="travel-booking-btn hvr-shutter-out-horizontal"
                                        >Learn More</a
                                    >
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- single package end -->
                <div class="col-md-4 col-sm-6">
                    <div class="single-package">
                        <div class="package-image">
                            <a href="#"
                                ><img
                                    src="/images/homeads/vcounseling.jpg"
                                    alt=""
                                />
                            </a>
                        </div>
                        <div class="package-content">
                            <h3>Visa Counseling</h3>
                            <p>
                                <span
                                    >Providing adequate professional guide</span
                                >
                            </p>
                        </div>
                        <div class="package-calto-action">
                            <ul class="ct-action">
                                <li>
                                    <a
                                        href="#"
                                        class="travel-booking-btn hvr-shutter-out-horizontal"
                                        >Learn More</a
                                    >
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- single package end -->
                <div class="col-md-4 col-sm-6">
                    <div class="single-package">
                        <div class="package-image">
                            <a href="#"
                                ><img src="/images/homeads/hotelr.jpg" alt="" />
                            </a>
                        </div>
                        <div class="package-content">
                            <h3>Hotel Reservation</h3>
                            <p>
                                <span>Hotel reservations that fits budget</span>
                            </p>
                        </div>
                        <div class="package-calto-action">
                            <ul class="ct-action">
                                <li>
                                    <a
                                        href="#"
                                        class="travel-booking-btn hvr-shutter-out-horizontal"
                                        >Learn More</a
                                    >
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- single package end -->
                <div class="col-md-4 col-sm-6">
                    <div class="single-package">
                        <div class="package-image">
                            <a href="#"
                                ><img src="/images/homeads/confe.jpg" alt="" />
                            </a>
                        </div>
                        <div class="package-content">
                            <h3>Conference &amp; Fairs</h3>
                            <p>
                                <span>Branded and inspirational packaging</span>
                            </p>
                        </div>
                        <div class="package-calto-action">
                            <ul class="ct-action">
                                <li>
                                    <a
                                        href="#"
                                        class="travel-booking-btn hvr-shutter-out-horizontal"
                                        >Learn More</a
                                    >
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- single package end -->
            </div>
        </div>
    </section>
    <!--end  popular packajge -->

    <section class="countdown count-down-bg image-bg-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12-col-xs-12">
                    <div class="count-down-titile">
                        <h3>
                            Join our Special Tour this Month<br />Enjoy Amazing
                            Discounts
                        </h3>
                    </div>
                    <div class="count-timer text-center">
                        <div class="time-wrapper">
                            <p>It's limited seating! Hurry up</p>
                            <div class="timer">
                                <div data-countdown="2020/03/30"></div>
                            </div>
                        </div>
                    </div>
                    <div class="buy-now text-center">
                        <a href="#" class="travel-primary-btn hvr-fade"
                            >Buy Now</a
                        >
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end  countdown -->

    <!-- end popular destination-->
    <!-- end popular destination-->

    <section class="trabble-bg image-bg-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title-white text-center">
                        <h2>Why Choose Zenith Travels</h2>
                        <p>
                            There are numerous reasons several schools and other
                            corporate bodies chose Zenith Travels and Tours and
                            have never regretted their decision:
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- single travel start -->
                <div class="col-md-4 col-sm-6">
                    <div class="single-travel">
                        <div class="media">
                            <div class="media-left media-middle travel-number">
                                <span>01.</span>
                            </div>
                            <div class="media-body travel-content">
                                <h4>International Partnership</h4>
                                <p>
                                    Zenith Travels and Tours Ltd is the Official
                                    Country Office and Exclusive Authorized
                                    Agent in Nigeria for Kingswood Education
                                    &amp; Learning Group and Camp Beaumont and
                                    more.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single travel end -->

                <div class="col-md-4 col-sm-6">
                    <div class="single-travel">
                        <div class="media">
                            <div class="media-left media-middle travel-number">
                                <span>02.</span>
                            </div>
                            <div class="media-body travel-content">
                                <h4>Global Tour Packages</h4>
                                <p>
                                    Our products are curriculum-based vis-a-vis
                                    other tour organizers. Our products and
                                    packaging goes beyond mere sight-seeing and
                                    we ensure all our student educational tour
                                    products are global brands.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single travel end -->

                <div class="col-md-4 col-sm-6">
                    <div class="single-travel">
                        <div class="media">
                            <div class="media-left media-middle travel-number">
                                <span>03.</span>
                            </div>
                            <div class="media-body travel-content">
                                <h4>Learning Outside the Classroom</h4>
                                <p>
                                    Zenith Travels and Tours Ltd is the first
                                    and the only company in the sub Sahara
                                    Africa applying the principle of Learning
                                    Outside the Classroom to its student.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single travel end -->
            </div>
        </div>
    </section>
    <!-- choose trabble end here -->

    <!-- guide and Expert Advice strat -->
    <section class="section-paddings">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title text-center">
                        <h2>Our Tour Packages</h2>
                        <p>
                            For decades, Zenith Travels and Tours Ltd has been
                            welcoming groups of every size. We organize the
                            perfect tours for meetings, incentive programs,
                            executive retreats, family reunions and destination
                            weddings.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- single travel blog-->
                <div class="col-md-4 col-sm-6 phone-layout-s">
                    <div class="single-travel-blog">
                        <div class="blog-image">
                            <a href="#"
                                ><img
                                    src="/images/homeads/country-tours.png"
                                    alt=""
                                />
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-post-content">
                                <h4>Country Tours for families</h4>
                                <p>
                                    Our Country Tour includes United State Tour
                                    Package, France Tour Package, Canada Tour
                                    Package, Ghana Tour Package and lots more.
                                </p>
                                <a href="country-tours"
                                    >Read More <i class="fa fa-angle-right"></i
                                ></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end single travel guide & security-->

                <div class="col-md-4 col-sm-6 phone-layout-s">
                    <div class="single-travel-blog">
                        <div class="blog-image">
                            <a href="#"
                                ><img
                                    src="/images/homeads/holiday-tours.png"
                                    alt=""
                                />
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-post-content">
                                <h4>Holiday Tours for Groups</h4>
                                <p>
                                    We ensure groups indulge in the best,
                                    enjoying impressive services and amenities
                                    available at five-star luxury resorts.
                                </p>
                                <a href="#"
                                    >Read More <i class="fa fa-angle-right"></i
                                ></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end single travel guide & security-->

                <div class="col-md-4 col-sm-6 phone-layout-s">
                    <div class="single-travel-blog">
                        <div class="blog-image">
                            <a href="#"
                                ><img
                                    src="/images/homeads/other-inspiring-tours.png"
                                    alt=""
                                />
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-post-content">
                                <h4>Educational Tours for Children</h4>
                                <p>
                                    Our tour comprise of milti-package of
                                    experiential, multi-activities, adventures,
                                    camping and curriculum linked excursions.
                                </p>
                                <a href="#"
                                    >Read More <i class="fa fa-angle-right"></i
                                ></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single travel guide & security end-->
            </div>
        </div>
    </section>
    <!--End guide and Expert Advice strat -->

    <!-- testimonial area start here -->
    <section class="testimonial-area image-bg-padding-100">
        <div class="testimonial-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-title-white text-center mbt-100">
                            <h2>What travellers Say About Us</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="custom-width text-center">
                        <!-- start top media -->
                        <div class="top-testimonial-image row slick-pagination">
                            <div class="carousel-images slider-nav">
                                <div>
                                    <img
                                        src="/images/gallery/france_summer_2010_tour/photo3.jpg"
                                        alt="1"
                                        class="img-circle"
                                    />
                                </div>
                                <div>
                                    <img
                                        src="/images/gallery/france_summer_2010_tour/photo17.jpg"
                                        alt="2"
                                        class="img-circle"
                                    />
                                </div>
                                <div>
                                    <img
                                        src="/images/gallery/france_summer_2010_tour/photo18.jpg"
                                        alt="3"
                                        class="img-circle"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end top media images -->

                    <div class="block-text row">
                        <div
                            class="carousel-text slider-for col-sm-8 col-sm-offset-2"
                        >
                            <div class="testimonial-message">
                                <div class="message">
                                    <p>
                                        I am glad dad and mum allowed me to join
                                        the Tour to the United States of
                                        America. I met children from other
                                        schools and had great fun.
                                    </p>
                                </div>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="client-bio">
                                    <h4>Oladapo Awoyeni</h4>
                                    <span>Primary 3A, Faith Academy</span>
                                </div>
                            </div>
                            <!-- client testimonial end -->

                            <div class="testimonial-message">
                                <div class="message">
                                    <p>
                                        I would have cried if I wasn't allowed
                                        to join others for this interesting
                                        trip. I enjoyed myself and learnt a lot
                                        of things. Thank you mummy.
                                    </p>
                                </div>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="client-bio">
                                    <h4>Peter Okafor</h4>
                                    <span>Primary 2B, Corona Schools</span>
                                </div>
                            </div>
                            <!-- client testimonial end -->

                            <div class="testimonial-message">
                                <div class="message">
                                    <p>
                                        Daddy should please pay for another trip
                                        for me and my sister. I really like it.
                                        I learnt a lot of new things and really
                                        played a lot. Daddy, I love you so much.
                                    </p>
                                </div>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="client-bio">
                                    <h4>Bayo Onipade</h4>
                                    <span
                                        >Primary 3 Orange, Pens Int'l
                                        School</span
                                    >
                                </div>
                            </div>
                            <!-- client testimonial end -->
                        </div>
                        <!-- /.block-text -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial area end here -->

    <div class="section-paddings incredible-places">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title text-center">
                        <h2>Most Popular Destinations</h2>
                        <p>
                            Our popular destinations include United Kingdom,
                            France, Republic of Togo, Benin Republic, South
                            Africa, United States, Ghana, Kenya, Egypt,
                            Singapore, China, Dubai, Abu Dhabi, Australia,
                            Switzerland, Spain, Italy (and other Schengen
                            States), Brazil and Canada. We can also package
                            other destination of choice to meet your specific
                            needs.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="single-place">
                    <figure>
                        <a href="#"
                            ><img
                                src="/images/homeads/uk-best-places-london.jpg"
                                alt=""
                            />
                        </a>
                        <figcaption>
                            <h4>Place <span>London Bridge</span></h4>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <!-- end single place -->

            <div class="col-md-4 col-sm-6">
                <div class="single-place">
                    <figure>
                        <a href="#"
                            ><img src="/images/homeads/us-tour2.jpg" alt="" />
                        </a>
                        <figcaption>
                            <h4>Place <span>China Town</span></h4>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <!-- end single place -->

            <div class="col-md-4 col-sm-6">
                <div class="single-place">
                    <figure>
                        <a href="#"
                            ><img
                                src="/images/homeads/canada-art-gallery-of-alberta.jpg"
                                alt=""
                            />
                        </a>
                        <figcaption>
                            <h4>
                                Place <span>Canada Art Gallery of Alberta</span>
                            </h4>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <!-- end single place -->
        </div>
    </div>
    <!-- incredible place end here -->

    <section class="subscribe-area subscribe-bg image-bg-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title-white-2 text-center mbt-100">
                        <h2>Join Our Subscribe List</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- subscribe form start here -->
                <div class="col-md-6 col-md-offset-3">
                    <div class="subscribe-form">
                        <form action="#" method="post">
                            <div class="serach-form">
                                <input
                                    type="text"
                                    name="search"
                                    id="search"
                                    placeholder=""
                                    value="Enter Your Email To subscribe"
                                    onblur="if(this.value==''){this.value='Enter Your Email To subscribe'}"
                                    onfocus="if(this.value=='Enter Your Email To subscribe'){this.value=''}"
                                />
                            </div>
                            <div class="search-btn">
                                <button type="button">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- subscribe form end here -->
            </div>
        </div>
    </section>
    <!-- subscribe area end here -->

    <section class="section-paddings">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title text-center">
                        <h2>Our trusted partners</h2>
                        <p>
                            For over 10 years, we have been in good partnership
                            with other reputable travel brands across the globe
                            that we have continually teamed up with to provide
                            the best of travel services to our numberous
                            customers.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- partners images -->
                <div class="partner-slider-active owl-carousel">
                    <div class="single-pertner">
                        <div class="partner-image">
                            <a href="#"
                                ><img src="/images/partner/1.png" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="single-pertner">
                        <div class="partner-image">
                            <a href="#"
                                ><img src="/images/partner/2.png" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="single-pertner">
                        <div class="partner-image">
                            <a href="#"
                                ><img src="/images/partner/3.png" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="single-pertner">
                        <div class="partner-image">
                            <a href="#"
                                ><img src="/images/partner/4.png" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="single-pertner">
                        <div class="partner-image">
                            <a href="#"
                                ><img src="/images/partner/5.png" alt="" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- partners images -->
        </div>
    </section>
    <!--end partner section -->

    <!-- <?php include("includes/footer.php"); ?> -->

    <div class="to-top pos-rtive">
        <a href="#"><i class="fa fa-angle-up"></i></a>
    </div>
    <!-- Scroll to top-->
</template>
