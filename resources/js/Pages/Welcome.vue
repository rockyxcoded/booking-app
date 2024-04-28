<script setup>
import { Head, Link } from "@inertiajs/vue3";
import SearchWidget from "@/Components/SearchWidget.vue";
import GuestLayout from "@/Layouts/GuestLayout.vue";
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
                        h_align: "left",
                        v_align: "center",
                        h_offset: 0,
                        v_offset: 0,
                    },

                    right: {
                        container: "slider",
                        h_align: "right",
                        v_align: "center",
                        h_offset: 0,
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
});
</script>

<template>
    <GuestLayout>
        <Head title="Welcome" />

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
                            data-thumb="/images/slider/slider-back-01.jpg"
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
                                You can rely on our professional guide for the
                                best tour ever.
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
                            data-thumb="/images/slider/slider-back-04.jpg"
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
                                Let your kids join several other children for
                                the best Student Educational Tour within and
                                outside Nigeria.
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
        <!-- <SearchWidget /> -->
        <!-- slider area end here -->
        <section class="popular-packages pb-70 pt-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-title text-center">
                            <h2>Our Professional Services</h2>
                            <p>
                                Based on our wide network of professional
                                partners across the world, vast experience,
                                highly trained staff with deep knowledge and
                                high level of expertise in educational tourism,
                                we organize interesting tour package for
                                different global destinations in all the six
                                continents.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="single-package">
                            <div class="package-image">
                                <a href="#"
                                    ><img
                                        src="/images/homeads/hols1.jpg"
                                        alt=""
                                    />
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
                                        >Providing adequate professional
                                        guide</span
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
                                        src="/images/homeads/hotelr.jpg"
                                        alt=""
                                    />
                                </a>
                            </div>
                            <div class="package-content">
                                <h3>Hotel Reservation</h3>
                                <p>
                                    <span
                                        >Hotel reservations that fits
                                        budget</span
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
                                        src="/images/homeads/confe.jpg"
                                        alt=""
                                    />
                                </a>
                            </div>
                            <div class="package-content">
                                <h3>Conference &amp; Fairs</h3>
                                <p>
                                    <span
                                        >Branded and inspirational
                                        packaging</span
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
                                Join our Special Tour this Month<br />Enjoy
                                Amazing Discounts
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
                                There are numerous reasons several schools and
                                other corporate bodies chose Zenith Travels and
                                Tours and have never regretted their decision:
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- single travel start -->
                    <div class="col-md-4 col-sm-6">
                        <div class="single-travel">
                            <div class="media">
                                <div
                                    class="media-left media-middle travel-number"
                                >
                                    <span>01.</span>
                                </div>
                                <div class="media-body travel-content">
                                    <h4>International Partnership</h4>
                                    <p>
                                        Zenith Travels and Tours Ltd is the
                                        Official Country Office and Exclusive
                                        Authorized Agent in Nigeria for
                                        Kingswood Education &amp; Learning Group
                                        and Camp Beaumont and more.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single travel end -->

                    <div class="col-md-4 col-sm-6">
                        <div class="single-travel">
                            <div class="media">
                                <div
                                    class="media-left media-middle travel-number"
                                >
                                    <span>02.</span>
                                </div>
                                <div class="media-body travel-content">
                                    <h4>Global Tour Packages</h4>
                                    <p>
                                        Our products are curriculum-based
                                        vis-a-vis other tour organizers. Our
                                        products and packaging goes beyond mere
                                        sight-seeing and we ensure all our
                                        student educational tour products are
                                        global brands.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single travel end -->

                    <div class="col-md-4 col-sm-6">
                        <div class="single-travel">
                            <div class="media">
                                <div
                                    class="media-left media-middle travel-number"
                                >
                                    <span>03.</span>
                                </div>
                                <div class="media-body travel-content">
                                    <h4>Learning Outside the Classroom</h4>
                                    <p>
                                        Zenith Travels and Tours Ltd is the
                                        first and the only company in the sub
                                        Sahara Africa applying the principle of
                                        Learning Outside the Classroom to its
                                        student.
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
                                For decades, Zenith Travels and Tours Ltd has
                                been welcoming groups of every size. We organize
                                the perfect tours for meetings, incentive
                                programs, executive retreats, family reunions
                                and destination weddings.
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
                                        Our Country Tour includes United State
                                        Tour Package, France Tour Package,
                                        Canada Tour Package, Ghana Tour Package
                                        and lots more.
                                    </p>
                                    <a href="country-tours"
                                        >Read More
                                        <i class="fa fa-angle-right"></i
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
                                        enjoying impressive services and
                                        amenities available at five-star luxury
                                        resorts.
                                    </p>
                                    <a href="#"
                                        >Read More
                                        <i class="fa fa-angle-right"></i
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
                                        experiential, multi-activities,
                                        adventures, camping and curriculum
                                        linked excursions.
                                    </p>
                                    <a href="#"
                                        >Read More
                                        <i class="fa fa-angle-right"></i
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
                            <div
                                class="section-title-white text-center mbt-100"
                            >
                                <h2>What travellers Say About Us</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="custom-width text-center">
                            <!-- start top media -->
                            <div
                                class="top-testimonial-image row slick-pagination"
                            >
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
                                            I am glad dad and mum allowed me to
                                            join the Tour to the United States
                                            of America. I met children from
                                            other schools and had great fun.
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
                                            I would have cried if I wasn't
                                            allowed to join others for this
                                            interesting trip. I enjoyed myself
                                            and learnt a lot of things. Thank
                                            you mummy.
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
                                            Daddy should please pay for another
                                            trip for me and my sister. I really
                                            like it. I learnt a lot of new
                                            things and really played a lot.
                                            Daddy, I love you so much.
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
                                other destination of choice to meet your
                                specific needs.
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
                                ><img
                                    src="/images/homeads/us-tour2.jpg"
                                    alt=""
                                />
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
                                    Place
                                    <span>Canada Art Gallery of Alberta</span>
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
                                For over 10 years, we have been in good
                                partnership with other reputable travel brands
                                across the globe that we have continually teamed
                                up with to provide the best of travel services
                                to our numberous customers.
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
    </GuestLayout>
</template>
