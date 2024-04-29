<script setup>
import HeaderMenu from "@/Components/HeaderMenu.vue";
import SearchWidget from "@/Components/SearchWidget.vue";
import { onMounted } from "vue";
import { Link, router, usePage } from "@inertiajs/vue3";

const page = usePage();

onMounted(() => {
    router.on("finish", () => {
        const flashObject = page.props.flash;
        const flashKey = Object.keys(flashObject).filter(
            (key) => flashObject[key] != undefined
        )[0];

        if (flashKey == undefined) return;

        Swal.fire({
            title: flashKey,
            text: flashObject[flashKey],
            icon: flashKey,
            // toast: true,
            // position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            },
        });
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
    background-color: #f0f2f5;
}
.card {
    border-color: rgba(0, 0, 0, 0.12);
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
.tabbased-search-area .container {
    width: 100% !important;
}
.flights-form {
    width: 100%;
}
.flights-form .tour-input-7-5 {
    width: 105px !important;
}
.header-bottom-area {
    background: rgba(34, 67, 74, 0.7);
}
.header-top-area {
    padding: 1rem;
}
</style>

<template>
    <header>
        <!-- header top start -->
        <div class="header-top-area">
            <div>
                <div class="d-flex justify-content-between">
                    <div class="header-top-left">
                        <div class="col-md-12 col-sm-12">
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
                        <div class="col-md-12 col-sm-12">
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

        <HeaderMenu />

        <!-- header-bottom area end here -->
        <SearchWidget />
    </header>
    <div>
        <slot />
    </div>
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <!-- footer left -->
                <div class="col-md-3 col-sm-6">
                    <div class="single-footer">
                        <div class="footer-title">
                            <a href="/"
                                ><img src="/images/logo.png" alt="" />
                            </a>
                        </div>
                        <div class="footer-left">
                            <div class="footer-logo">
                                <p>
                                    Zenith Travels and Tours Ltd is a leading
                                    travel company in Lagos, Nigeria since 1998.
                                </p>
                            </div>
                            <ul class="footer-contact">
                                <li>
                                    <img
                                        class="map"
                                        src="/images/icon/map.png"
                                        alt=""
                                    />4 Shobo House, 5 Simpson Street, Lagos -
                                    Nigeria.
                                </li>
                                <li>
                                    <img
                                        class="map"
                                        src="/images/icon/phone.png"
                                        alt=""
                                    />+234 802 2235 119
                                </li>
                                <li>
                                    <img
                                        class="map"
                                        src="/images/icon/phone.png"
                                        alt=""
                                    />+234 805 5469 754
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- footer left -->

                <!-- footer latest news -->
                <div class="col-md-3 col-sm-6">
                    <div class="single-footer">
                        <div class="single-recent-post">
                            <div class="footer-title">
                                <h3>Holiday Destinations</h3>
                            </div>
                            <ul class="recent-post">
                                <li>
                                    <a href="parents-bonding-retreats">
                                        <div class="post-thum">
                                            <img
                                                src="/images/footer/pic1.png"
                                                alt=""
                                                class="img-rounded"
                                            />
                                        </div>
                                        <div class="post-content">
                                            <p>Parents Bonding Retreats</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="free-city-student-tours">
                                        <div class="post-thum">
                                            <img
                                                src="/images/footer/pic3.png"
                                                alt=""
                                                class="img-rounded"
                                            />
                                        </div>
                                        <div class="post-content">
                                            <p>Free City Student<br />Tours</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="adventure-and-expedition-tours">
                                        <div class="post-thum">
                                            <img
                                                src="/images/footer/pic4.png"
                                                alt=""
                                                class="img-rounded"
                                            />
                                        </div>
                                        <div class="post-content">
                                            <p>
                                                Adventure and Expedition Tours
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="educational-tours-and-school-holiday-trips"
                                    >
                                        <div class="post-thum">
                                            <img
                                                src="/images/footer/pic5.png"
                                                alt=""
                                                class="img-rounded"
                                            />
                                        </div>
                                        <div class="post-content">
                                            <p>
                                                Summer Educational and Family
                                                Tours
                                            </p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- footer latest news -->

                <!-- footer destination -->
                <div class="col-md-3 col-sm-6">
                    <div class="single-footer">
                        <div class="footer-title">
                            <h3>Popular Tours</h3>
                        </div>
                        <ul class="footer-gallery">
                            <li>
                                <a href="festival-tours">
                                    <div class="image-overlay">
                                        <img
                                            src="/images/footer/footerpic1.png"
                                            alt=""
                                        />
                                        <div class="overly-city">
                                            <span>ZET Festive Tours</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="sports-tours">
                                    <div class="image-overlay">
                                        <img
                                            src="/images/footer/footerpic2.png"
                                            alt=""
                                        />
                                        <div class="overly-city">
                                            <span>Sport Academy Tours</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="festival-tours">
                                    <div class="image-overlay">
                                        <img
                                            src="/images/footer/footerpic2.png"
                                            alt=""
                                        />
                                        <div class="overly-city">
                                            <span>ZET Festive Tours</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="sports-tours">
                                    <div class="image-overlay">
                                        <img
                                            src="/images/footer/footerpic1.png"
                                            alt=""
                                        />
                                        <div class="overly-city">
                                            <span>Sport Academy Tours</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- footer destination -->

                <!-- footer contact -->
                <div class="col-md-3 col-sm-6">
                    <div class="single-footer">
                        <div class="footer-title">
                            <h3>Quick Contact</h3>
                        </div>
                        <div class="footer-contact-form">
                            <form action="contactus" method="post">
                                <ul class="footer-form-element">
                                    <li>
                                        <input
                                            type="text"
                                            name="email"
                                            id="email"
                                            placeholder=""
                                            value="Email Address"
                                            onblur="if(this.value==''){this.value='Email Address'}"
                                            onfocus="if(this.value=='Email Address'){this.value=''}"
                                        />
                                    </li>
                                    <li>
                                        <textarea
                                            name="message"
                                            id="message"
                                            cols="30"
                                            rows="10"
                                            placeholder="Message"
                                        ></textarea>
                                    </li>
                                    <li>
                                        <button>Send</button>
                                    </li>
                                </ul>
                            </form>
                        </div>
                        <div class="footer-social-media">
                            <div class="social-footer-title">
                                <h3>Follow Us</h3>
                            </div>
                            <ul class="footer-social-link">
                                <li>
                                    <a
                                        href="https://www.facebook.com/zenithtravelgroup/"
                                        ><i class="fa fa-facebook"></i
                                    ></a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/zenithtravels1"
                                        ><i class="fa fa-twitter"></i
                                    ></a>
                                </li>
                                <li>
                                    <a
                                        href="https://www.linkedin.com/mwlite/company/zenith-travel-group"
                                        ><i class="fa fa-linkedin"></i
                                    ></a>
                                </li>
                                <li>
                                    <a
                                        href="https://instagram.com/zenithtravels"
                                        ><i class="fa fa-instagram"></i
                                    ></a>
                                </li>
                                <li>
                                    <a
                                        href="https://youtube.com/channel/UCjSkjfLXujEwUdfRAmXV4CA"
                                        ><i class="fa fa-youtube-play"></i
                                    ></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- footer contact -->
            </div>

            <div class="footer-bottom">
                <div class="col-md-4">
                    <div class="copyright">
                        <p>
                            &copy; {{ new Date().getUTCFullYear() }} Zenith
                            Travels and Tours Ltd.<br /><b
                                style="
                                    font-weight: normal !important;
                                    font-size: smaller !important;
                                    color: #ccc !important;
                                "
                                >Managed by
                            </b>
                            <a href="#"
                                ><span
                                    style="
                                        font-weight: normal !important;
                                        font-size: smaller !important;
                                    "
                                    >Saxum Analytics</span
                                ></a
                            >
                        </p>
                    </div>
                </div>
                <div class="col-md-4 copyright">
                    <div align="center">
                        <p>
                            <Link :href="route('welcome')"
                                ><span>Home</span></Link
                            >
                            |
                            <a href="photo-gallery"><span>Photos</span></a> |
                            <a href="tour-videos"><span>Videos</span></a> |
                            <a href="aboutus"><span>About</span></a> |
                            <a href="contactus"><span>Contacts</span></a>
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <ul class="payicon pull-right">
                        <li>We Accept</li>
                        <li><img src="/images/payicon02.png" alt="" /></li>
                        <li><img src="/images/payicon03.png" alt="" /></li>
                        <li><img src="/images/payicon05.png" alt="" /></li>
                        <li><img src="/images/payicon06.png" alt="" /></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <div class="to-top pos-rtive">
        <a href="#"><i class="fa fa-angle-up"></i></a>
    </div>
</template>
