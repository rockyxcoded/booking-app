<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import { Head } from "@inertiajs/vue3";
import { onMounted, ref } from "vue";

const container = ref("container");

onMounted(() => {
    container?.value?.scrollIntoView();
});
</script>

<template>
    <GuestLayout>
        <Head title="Page" />
        <section class="breadcrumb-blog-version-one">
            <div
                class="single-bredcurms"
                style="background-image: url('/images/bgimage/bg1.jpg')"
            >
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="bredcrums-content">
                                <h2>About Us</h2>
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li class="active">
                                        <a href="tours">Tours</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-paddings welcome-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="single-welcome-area">
                            <div class="single-imag">
                                <img
                                    src="/images/gallery/walt_disney_xmas_2013-tour/photo5.jpg"
                                    alt=""
                                    class="img-thumbnail img-responsive"
                                />
                            </div>
                            <div class="overlay-image">
                                <img
                                    src="/images/bgimage/about-zenith.jpg"
                                    alt=""
                                    class="img-thumbnail img-responsive"
                                />
                            </div>
                        </div>
                    </div>
                    <!-- welcome area left side end -->

                    <div class="col-md-6">
                        <div class="single-welcome-text">
                            <div class="media-body travel-content">
                                <h2>About Zenith Travels...</h2>
                                <p>
                                    Zenith Travels and Tours Ltd is the best
                                    travel tour company in Nigeria. We remain a
                                    leading travels company in sub-Saharan
                                    Africa, established and located in the heart
                                    of Lagos, Nigeria since 1998.
                                </p>
                                <p>
                                    Powered by the expertise of highly skilled,
                                    resourceful and innovative staff, the
                                    company is breaking new grounds in regular
                                    and progressive proportion in its corporate
                                    business of curriculum based Education Study
                                    tours.
                                </p>
                                <p>
                                    Zenith Travels and Tours Ltd is one of the
                                    most successful and foremost travel company
                                    in Nigeria, delivering customer-focused
                                    travel products. We remain the leading
                                    travel company in Nigeria that specializes
                                    on curriculum-focused educational tour for
                                    students within the range of 6 to 17 years.
                                </p>
                                <p>
                                    We will appreciate your invitation to
                                    discuss your specific tour request with you
                                    by calling any of our hotlines 08022235119,
                                    234 805 546 9754 or 234 1 7942316.
                                </p>
                                <a href="contactus" class="read-more hvr-fade"
                                    >Contact Us</a
                                >
                            </div>
                        </div>
                    </div>
                    <!-- welcome area right side end -->
                </div>
            </div>
        </section>
        <!-- welcome area start end here -->

        <!-- Choose trabble version two start  -->
        <section class="choose-trabble-version-2">
            <div class="ImageBlock ImageBlock--switch">
                <div class="container-fluid">
                    <div class="row pt-100 pb-65">
                        <div class="col-md-6 col-sm-6 ImageBlock--switch-tab">
                            <div class="section-title-3">
                                <h2>Why Choose Zenith Travels...</h2>
                                <p>
                                    There are numerous reasons several customers
                                    and other corporate bodies chose Zenith
                                    Travels and Tours and have never regretted
                                    their decision:
                                </p>
                            </div>
                            <!-- single -traverls -->
                            <div class="row travel-lp">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="single-travel">
                                        <div class="media">
                                            <div
                                                class="media-left media-middle travel-number"
                                            >
                                                <span>01.</span>
                                            </div>
                                            <div
                                                class="media-body travel-content"
                                            >
                                                <h4>
                                                    International Partnership
                                                </h4>
                                                <p>
                                                    Zenith Travels and Tours Ltd
                                                    is the Official Country
                                                    Office and Exclusive
                                                    Authorized Agent in Nigeria
                                                    for Kingswood Education &
                                                    Learning Group and Camp
                                                    Beaumont, Norwich-England,
                                                    United Kingdom and several
                                                    others.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="single-travel">
                                        <div class="media">
                                            <div
                                                class="media-left media-middle travel-number"
                                            >
                                                <span>02.</span>
                                            </div>
                                            <div
                                                class="media-body travel-content"
                                            >
                                                <h4>Global Tour Packages</h4>
                                                <p>
                                                    Our products are
                                                    curriculum-based vis-a-vis
                                                    other tour organizers. Our
                                                    products and packaging goes
                                                    beyond mere sight-seeing and
                                                    we ensure all our student
                                                    educational tour products
                                                    are global brands.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row travel-lp">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="single-travel">
                                        <div class="media">
                                            <div
                                                class="media-left media-middle travel-number"
                                            >
                                                <span>03.</span>
                                            </div>
                                            <div
                                                class="media-body travel-content"
                                            >
                                                <h4>
                                                    Learning Outside the
                                                    Classroom
                                                </h4>
                                                <p>
                                                    Zenith Travels and Tours Ltd
                                                    is the first and the only
                                                    company in the sub Sahara
                                                    Africa applying the
                                                    principle of Learning
                                                    Outside the Classroom to its
                                                    student educational tour
                                                    packages which are linked to
                                                    the curriculum of the
                                                    schools.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="single-travel">
                                        <div class="media">
                                            <div
                                                class="media-left media-middle travel-number"
                                            >
                                                <span>04.</span>
                                            </div>
                                            <div
                                                class="media-body travel-content"
                                            >
                                                <h4>
                                                    Professional Instructors
                                                </h4>
                                                <p>
                                                    We have eminent educators
                                                    and professionals both
                                                    locally and internationally
                                                    as Board of Advisers. And we
                                                    hold meetings with them on a
                                                    regularly basis so as to
                                                    ensure we deliver the best
                                                    services to our numerous
                                                    clients.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single -traverls -->
                        </div>
                    </div>
                </div>

                <div
                    class="ImageBlock__image col-md-6 col-sm-6 ImageBlock--switch-img"
                >
                    <div class="ImageBackground">
                        <div class="ImageBackground__holder">
                            <img
                                src="/images/holiday-tours.jpg"
                                alt="About Zenith Travels"
                            />
                        </div>
                    </div>
                </div>
                <!-- right side image -->
            </div>
        </section>
        <!-- Choose trabble version two end -->

        <!-- discount & deals section start here -->
        <section class="section-paddings">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="section-title text-center">
                            <h2>
                                Special discounted flight ticket and tour
                                packages to different destinations across the
                                world
                            </h2>
                            <p>
                                Enjoy Special Discounts on all our Travel
                                Products. These Tours are curriculum-based,
                                which goes beyond mere sight-seeing. Get your
                                kids ready for a life-changing tour with other
                                children that bring the needed spark for their
                                lives.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- single dicount -->
                    <div class="col-sm-6 col-md-4 single-item">
                        <div class="single-discount-deal">
                            <figure>
                                <img
                                    src="/images/gallery/walt_disney_xmas_2013-tour/photo1.jpg"
                                    alt="United State Tour"
                                />
                                <figcaption>
                                    <div class="offer-content">
                                        <div class="circle-offer">
                                            <p>12% <br />Off</p>
                                        </div>
                                        <div class="offer-details-2">
                                            <h3>United State Tour</h3>
                                            <p>
                                                4Days, 5Nights
                                                <del>N550,000</del>
                                                <span>N455,000</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="travel-book-btn">
                                        <a
                                            href="#"
                                            class="travel-booking-btn hvr-fade"
                                            >Book Now</a
                                        >
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <!--end single dicount -->

                    <div class="col-sm-6 col-md-4 single-item">
                        <div class="single-discount-deal">
                            <figure>
                                <img
                                    src="/images/gallery/canada_2013_tour/photo16.jpg"
                                    alt="Canada Tour"
                                />
                                <figcaption>
                                    <div class="offer-content">
                                        <div class="circle-offer">
                                            <p>8% <br />Off</p>
                                        </div>
                                        <div class="offer-details-2">
                                            <h3>Canada Tour</h3>
                                            <p>
                                                7Days, 8Nights
                                                <del>N750,000</del>
                                                <span>N730,000</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="travel-book-btn">
                                        <a
                                            href="#"
                                            class="travel-booking-btn hvr-fade"
                                            >Book Now</a
                                        >
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <!--end single dicount -->

                    <div class="col-sm-6 col-md-4 single-item">
                        <div class="single-discount-deal">
                            <figure>
                                <img
                                    src="/images/gallery/france_2012_tour/photo29.jpg"
                                    alt="France Tour"
                                />
                                <figcaption>
                                    <div class="offer-content">
                                        <div class="circle-offer">
                                            <p>40% <br />Off</p>
                                        </div>
                                        <div class="offer-details-2">
                                            <h3>United Kingdom Tours</h3>
                                            <p>
                                                4Days, 5Nights
                                                <del>N650,000</del>
                                                <span>N550,000</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="travel-book-btn">
                                        <a
                                            href="#"
                                            class="travel-booking-btn hvr-fade"
                                            >Book Now</a
                                        >
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <!--end single dicount -->
                </div>
            </div>
        </section>
        <!-- discount & deals section end here here -->

        <section class="video-play video-play-3">
            <div class="video-content">
                <div class="video-play-btn">
                    <a href="tour-videos"
                        ><span><i class="fa fa-play"></i></span>
                        <h6>Tour The World With Us</h6></a
                    >
                </div>
            </div>
        </section>
        <!-- video area end  here -->

        <!--div class="video-container">
  <iframe src="/https://www.youtube.com/embed/klZNNUz4wPQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div-->

        <!-- testimonial area start here -->
        <section class="section-paddings testimonial-two">
            <div class="testimonial-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title text-center">
                                <h2>What travellers Say About Us</h2>
                                <p>
                                    Hear what some of the children who joined
                                    our Tours in the past has to say about the
                                    quality and effectiveness each Tour in
                                    different countries of interest.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <!-- start top media -->
                            <div
                                class="top-testimonial-image row slick-pagination"
                            >
                                <div
                                    class="carousel-images slider-nav-two col-sm-8 col-sm-offset-2"
                                >
                                    <div>
                                        <span
                                            ><img
                                                src="/images/gallery/france_summer_2010_tour/photo3.jpg"
                                                alt="2"
                                                class="img-responsive img-circle"
                                        /></span>
                                    </div>
                                    <div>
                                        <span
                                            ><img
                                                src="/images/gallery/france_summer_2010_tour/photo17.jpg"
                                                alt="3"
                                                class="img-responsive img-circle"
                                        /></span>
                                    </div>
                                    <div>
                                        <span
                                            ><img
                                                src="/images/gallery/france_summer_2010_tour/photo18.jpg"
                                                alt="4"
                                                class="img-responsive img-circle"
                                        /></span>
                                    </div>
                                </div>
                            </div>
                            <!-- end top media images -->

                            <!-- bottom testimonial message -->
                            <div class="block-text row">
                                <div
                                    class="carousel-text slider-for-two col-sm-8 col-sm-offset-2"
                                >
                                    <div class="single-box">
                                        <p>
                                            I am glad dad and mum allowed me to
                                            join the Tour to the United States
                                            of America. I met children from
                                            other schools and had great fun.
                                        </p>
                                        <div class="client-bio">
                                            <h3>Oladapo Awoyeni</h3>
                                            <span>Student</span>
                                        </div>
                                    </div>
                                    <div class="single-box">
                                        <p>
                                            I would have cried if I wasn't
                                            allowed to join others for this
                                            interesting trip. I enjoyed myself
                                            and learnt a lot of things. Thank
                                            you mummy.
                                        </p>
                                        <div class="client-bio">
                                            <h3>Peter Okafor</h3>
                                            <span>Student</span>
                                        </div>
                                    </div>
                                    <div class="single-box">
                                        <p>
                                            Daddy should please pay for another
                                            trip for me and my sister. I really
                                            like it. I learnt a lot of new
                                            things and really played a lot.
                                            Daddy, I love you so much.
                                        </p>
                                        <div class="client-bio">
                                            <h3>Bayo Onipade</h3>
                                            <span>Student</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- bottom testimonial message -->
                        </div>
                        <!-- /.block-text -->
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial area end here -->

        <!-- subscribe area start here -->
        <section class="subscribe-area subscribe-bg image-bg-padding-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-title-white-2 text-center mbt-100">
                            <h2>Don't miss our Special Offers</h2>
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

        <!-- popular destination strat -->
        <section class="section-paddings"></section>
        <!-- single popular destination  end-->
    </GuestLayout>
</template>
