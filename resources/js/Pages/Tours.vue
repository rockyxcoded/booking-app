<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import { Head } from "@inertiajs/vue3";
import { onMounted, ref } from "vue";
import BookService from "../Components/Partials/BookService.vue";
import FeaturedTours from "../Components/Partials/FeaturedTours.vue";

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
                style="background-image: url('images/bgimage/bg1.jpg')"
            >
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="bredcrums-content">
                                <h2>Tours</h2>
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
        <!-- blog breadcrumb version one end here -->

        <!-- realted tour start here -->
        <section class="related-tour popular-packages">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12"></div>
                </div>
                <div class="row">
                    <h2><br /><br /></h2>
                    <div class="col-md-4 col-sm-4">
                        <div class="single-package">
                            <div class="package-image">
                                <a
                                    href="educational-tours-and-school-holiday-trips"
                                    ><img
                                        src="/images/thumbnails/tours/educational-tours-and-school-holiday-trips.jpg"
                                        alt="Educational Tours and School Holiday Trips"
                                        title="Educational Tours and School Holiday Trips"
                                    />
                                </a>
                            </div>
                            <div class="package-content" align="center">
                                <h3>
                                    <a
                                        href="educational-tours-and-school-holiday-trips"
                                        >Educational Tours and School Holiday
                                        Trips</a
                                    >
                                </h3>
                            </div>
                            <div class="package-calto-action" align="center">
                                <ul class="ct-action">
                                    <a
                                        href="educational-tours-and-school-holiday-trips"
                                        class="travel-booking-btn hvr-shutter-out-horizontal"
                                        >Learn More</a
                                    >
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End single package -->

                    <div class="col-md-4 col-sm-4">
                        <div class="single-package">
                            <div class="package-image">
                                <a href="individual-personal-tours"
                                    ><img
                                        src="/images/thumbnails/tours/individual-personal-tours.jpg"
                                        alt="Individual Personal Tours"
                                        title="Individual Personal Tours"
                                    />
                                </a>
                            </div>
                            <div class="package-content" align="center">
                                <h3>
                                    <a href="individual-personal-tours"
                                        >Individual Personal Tours</a
                                    >
                                </h3>
                            </div>
                            <div class="package-calto-action" align="center">
                                <ul class="ct-action">
                                    <a
                                        href="individual-personal-tours"
                                        class="travel-booking-btn hvr-shutter-out-horizontal"
                                        >Learn More</a
                                    >
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End single package -->

                    <div class="col-md-4 col-sm-4">
                        <div class="single-package">
                            <div class="package-image">
                                <a href="family-and-holiday-tours"
                                    ><img
                                        src="/images/thumbnails/tours/family-and-holiday-tours.jpg"
                                        alt="Family Tours"
                                        title="Family Tours"
                                    />
                                </a>
                            </div>
                            <div class="package-content" align="center">
                                <h3>
                                    <a href="family-and-holiday-tours"
                                        >Family Tours</a
                                    >
                                </h3>
                            </div>
                            <div class="package-calto-action" align="center">
                                <ul class="ct-action">
                                    <a
                                        href="family-and-holiday-tours"
                                        class="travel-booking-btn hvr-shutter-out-horizontal"
                                        >Learn More</a
                                    >
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End single package -->
                </div>
            </div>
        </section>

        <!-- realted tour start here -->
        <section class="related-tour popular-packages">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12"></div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="single-package">
                            <div class="package-image">
                                <a href="honeymoon-tours"
                                    ><img
                                        src="/images/thumbnails/tours/honeymoon-tours.jpg"
                                        alt="Honeymoon Tours"
                                        title="Honeymoon Tours"
                                    />
                                </a>
                            </div>
                            <div class="package-content" align="center">
                                <h3>
                                    <a href="honeymoon-tours"
                                        >Honeymoon Tours</a
                                    >
                                </h3>
                            </div>
                            <div class="package-calto-action" align="center">
                                <ul class="ct-action">
                                    <a
                                        href="honeymoon-tours"
                                        class="travel-booking-btn hvr-shutter-out-horizontal"
                                        >Learn More</a
                                    >
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End single package -->

                    <div class="col-md-4 col-sm-4">
                        <div class="single-package">
                            <div class="package-image">
                                <a href="free-city-student-tours"
                                    ><img
                                        src="/images/thumbnails/tours/free-city-student-tours.jpg"
                                        alt="Free City Student Tours"
                                        title="Free City Student Tours"
                                    />
                                </a>
                            </div>
                            <div class="package-content" align="center">
                                <h3>
                                    <a href="free-city-student-tours"
                                        >Free City Student Tours</a
                                    >
                                </h3>
                            </div>
                            <div class="package-calto-action" align="center">
                                <ul class="ct-action">
                                    <a
                                        href="free-city-student-tours"
                                        class="travel-booking-btn hvr-shutter-out-horizontal"
                                        >Learn More</a
                                    >
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End single package -->

                    <div class="col-md-4 col-sm-4">
                        <div class="single-package">
                            <div class="package-image">
                                <a href="school-leadership-tours"
                                    ><img
                                        src="/images/thumbnails/tours/school-leadership-tours.jpg"
                                        alt="School Leadership Tours"
                                        title="School Leadership Tours"
                                    />
                                </a>
                            </div>
                            <div class="package-content" align="center">
                                <h3>
                                    <a href="school-leadership-tours"
                                        >School Leadership Tours</a
                                    >
                                </h3>
                            </div>
                            <div class="package-calto-action" align="center">
                                <ul class="ct-action">
                                    <a
                                        href="school-leadership-tours"
                                        class="travel-booking-btn hvr-shutter-out-horizontal"
                                        >Learn More</a
                                    >
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End single package -->
                </div>
            </div>
        </section>

        <!-- realted tour start here -->
        <section class="related-tour popular-packages">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12"></div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="single-package">
                            <div class="package-image">
                                <a href="incentive-tours"
                                    ><img
                                        src="/images/thumbnails/tours/incentive-tours.jpg"
                                        alt="Incentive Tours"
                                        title="Incentive Tours"
                                    />
                                </a>
                            </div>
                            <div class="package-content" align="center">
                                <h3>
                                    <a href="incentive-tours"
                                        >Incentive Tours</a
                                    >
                                </h3>
                            </div>
                            <div class="package-calto-action" align="center">
                                <ul class="ct-action">
                                    <a
                                        href="incentive-tours"
                                        class="travel-booking-btn hvr-shutter-out-horizontal"
                                        >Learn More</a
                                    >
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End single package -->

                    <div class="col-md-4 col-sm-4">
                        <div class="single-package">
                            <div class="package-image">
                                <a href="group-tours"
                                    ><img
                                        src="/images/thumbnails/tours/group-tours.jpg"
                                        alt="Group Tours"
                                        title="Group Tours"
                                    />
                                </a>
                            </div>
                            <div class="package-content" align="center">
                                <h3><a href="group-tours">Group Tours</a></h3>
                            </div>
                            <div class="package-calto-action" align="center">
                                <ul class="ct-action">
                                    <a
                                        href="group-tours"
                                        class="travel-booking-btn hvr-shutter-out-horizontal"
                                        >Learn More</a
                                    >
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End single package -->

                    <div class="col-md-4 col-sm-4">
                        <div class="single-package">
                            <div class="package-image">
                                <a href="language-tours"
                                    ><img
                                        src="/images/thumbnails/tours/language-tours.jpg"
                                        alt="Language Tours"
                                        title="Language Tours"
                                    />
                                </a>
                            </div>
                            <div class="package-content" align="center">
                                <h3>
                                    <a href="language-tours">Language Tours</a>
                                </h3>
                            </div>
                            <div class="package-calto-action" align="center">
                                <ul class="ct-action">
                                    <a
                                        href="language-tours"
                                        class="travel-booking-btn hvr-shutter-out-horizontal"
                                        >Learn More</a
                                    >
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End single package -->
                </div>
            </div>
        </section>

        <!-- realted tour start here -->
        <section class="related-tour popular-packages">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12"></div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="single-package">
                            <div class="package-image">
                                <a href="parents-bonding-retreats"
                                    ><img
                                        src="/images/thumbnails/tours/parents-bonding-retreats.jpg"
                                        alt="Parents Bonding Retreats"
                                        title="Parents Bonding Retreats"
                                    />
                                </a>
                            </div>
                            <div class="package-content" align="center">
                                <h3>
                                    <a href="parents-bonding-retreats"
                                        >Parents Bonding Retreats</a
                                    >
                                </h3>
                            </div>
                            <div class="package-calto-action" align="center">
                                <ul class="ct-action">
                                    <a
                                        href="parents-bonding-retreats"
                                        class="travel-booking-btn hvr-shutter-out-horizontal"
                                        >Learn More</a
                                    >
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End single package -->

                    <div class="col-md-4 col-sm-4">
                        <div class="single-package">
                            <div class="package-image">
                                <a href="adventure-and-expedition-tours"
                                    ><img
                                        src="/images/thumbnails/tours/adventure-and-expedition-tours.jpg"
                                        alt="Adventure and Expedition Tours"
                                        title="Adventure and Expedition Tours"
                                    />
                                </a>
                            </div>
                            <div class="package-content" align="center">
                                <h3>
                                    <a href="adventure-and-expedition-tours"
                                        >Adventure and Expedition Tours</a
                                    >
                                </h3>
                            </div>
                            <div class="package-calto-action" align="center">
                                <ul class="ct-action">
                                    <a
                                        href="adventure-and-expedition-tours"
                                        class="travel-booking-btn hvr-shutter-out-horizontal"
                                        >Learn More</a
                                    >
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End single package -->

                    <div class="col-md-4 col-sm-4">
                        <div class="single-package">
                            <div class="package-image">
                                <a href="pilgrimage-and-religious-tours"
                                    ><img
                                        src="/images/thumbnails/tours/pilgrimage-and-religious-tours.jpg"
                                        alt="Pilgrimage and Religious Tours"
                                        title="Pilgrimage and Religious Tours"
                                    />
                                </a>
                            </div>
                            <div class="package-content" align="center">
                                <h3>
                                    <a href="pilgrimage-and-religious-tours"
                                        >Pilgrimage and Religious Tours</a
                                    >
                                </h3>
                            </div>
                            <div class="package-calto-action" align="center">
                                <ul class="ct-action">
                                    <a
                                        href="pilgrimage-and-religious-tours"
                                        class="travel-booking-btn hvr-shutter-out-horizontal"
                                        >Learn More</a
                                    >
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End single package -->
                </div>
            </div>
        </section>

        <!-- realted tour start here -->
        <section class="related-tour popular-packages">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12"></div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="single-package">
                            <div class="package-image">
                                <a href="christian-group-retreat"
                                    ><img
                                        src="/images/thumbnails/tours/christian-group-retreat.jpg"
                                        alt="Christian Group Retreat"
                                        title="Christian Group Retreat"
                                    />
                                </a>
                            </div>
                            <div class="package-content" align="center">
                                <h3>
                                    <a href="christian-group-retreat"
                                        >Christian Group Retreat</a
                                    >
                                </h3>
                            </div>
                            <div class="package-calto-action" align="center">
                                <ul class="ct-action">
                                    <a
                                        href="christian-group-retreat"
                                        class="travel-booking-btn hvr-shutter-out-horizontal"
                                        >Learn More</a
                                    >
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End single package -->

                    <div class="col-md-4 col-sm-4">
                        <div class="single-package">
                            <div class="package-image">
                                <a href="boat-cruise-tours"
                                    ><img
                                        src="/images/thumbnails/tours/boat-cruise-tours.jpg"
                                        alt="Boat Cruise Tours"
                                        title="Boat Cruise Tours"
                                    />
                                </a>
                            </div>
                            <div class="package-content" align="center">
                                <h3>
                                    <a href="boat-cruise-tours"
                                        >Boat Cruise Tours</a
                                    >
                                </h3>
                            </div>
                            <div class="package-calto-action" align="center">
                                <ul class="ct-action">
                                    <a
                                        href="boat-cruise-tours"
                                        class="travel-booking-btn hvr-shutter-out-horizontal"
                                        >Learn More</a
                                    >
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End single package -->
                    <div class="col-md-4 col-sm-4">
                        <div class="single-package">
                            <div class="package-image">
                                <a href="cultural-tours"
                                    ><img
                                        src="/images/thumbnails/tours/cultural-tours.jpg"
                                        alt="Cultural Tours"
                                        title="Cultural Tours"
                                    />
                                </a>
                            </div>
                            <div class="package-content" align="center">
                                <h3>
                                    <a href="cultural-tours">Cultural Tours</a>
                                </h3>
                            </div>
                            <div class="package-calto-action" align="center">
                                <ul class="ct-action">
                                    <a
                                        href="cultural-tours"
                                        class="travel-booking-btn hvr-shutter-out-horizontal"
                                        >Learn More</a
                                    >
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End single package -->
                </div>
            </div>
        </section>

        <!-- realted tour start here -->
        <section class="related-tour popular-packages">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12"></div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="single-package">
                            <div class="package-image">
                                <a href="festival-tours"
                                    ><img
                                        src="/images/thumbnails/tours/festival-tours.jpg"
                                        alt="Festival Tours"
                                        title="Festival Tours"
                                    />
                                </a>
                            </div>
                            <div class="package-content" align="center">
                                <h3>
                                    <a href="festival-tours">Festival Tours</a>
                                </h3>
                            </div>
                            <div class="package-calto-action" align="center">
                                <ul class="ct-action">
                                    <a
                                        href="festival-tours"
                                        class="travel-booking-btn hvr-shutter-out-horizontal"
                                        >Learn More</a
                                    >
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End single package -->

                    <div class="col-md-4 col-sm-4">
                        <div class="single-package">
                            <div class="package-image">
                                <a href="carnival-tours"
                                    ><img
                                        src="/images/thumbnails/tours/carnival-tours.jpg"
                                        alt="Carnival Tours"
                                        title="Carnival Tours"
                                    />
                                </a>
                            </div>
                            <div class="package-content" align="center">
                                <h3>
                                    <a href="carnival-tours">Carnival Tours</a>
                                </h3>
                            </div>
                            <div class="package-calto-action" align="center">
                                <ul class="ct-action">
                                    <a
                                        href="carnival-tours"
                                        class="travel-booking-btn hvr-shutter-out-horizontal"
                                        >Learn More</a
                                    >
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End single package -->

                    <div class="col-md-4 col-sm-4">
                        <div class="single-package">
                            <div class="package-image">
                                <a href="singles-tours"
                                    ><img
                                        src="/images/thumbnails/tours/singles-tours.jpg"
                                        alt="Singles Tours"
                                        title="Singles Tours"
                                    />
                                </a>
                            </div>
                            <div class="package-content" align="center">
                                <h3>
                                    <a href="singles-tours">Singles Tours</a>
                                </h3>
                            </div>
                            <div class="package-calto-action" align="center">
                                <ul class="ct-action">
                                    <a
                                        href="singles-tours"
                                        class="travel-booking-btn hvr-shutter-out-horizontal"
                                        >Learn More</a
                                    >
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End single package -->
                </div>
            </div>
        </section>

        <!-- realted tour start here -->
        <section class="related-tour popular-packages">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12"></div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="single-package">
                            <div class="package-image">
                                <a href="beach-holiday-tours"
                                    ><img
                                        src="/images/thumbnails/tours/beach-holiday-tours.jpg"
                                        alt="Beach Holiday Tours"
                                        title="Beach Holiday Tours"
                                    />
                                </a>
                            </div>
                            <div class="package-content" align="center">
                                <h3>
                                    <a href="beach-holiday-tours"
                                        >Beach Holiday Tours</a
                                    >
                                </h3>
                            </div>
                            <div class="package-calto-action" align="center">
                                <ul class="ct-action">
                                    <a
                                        href="beach-holiday-tours"
                                        class="travel-booking-btn hvr-shutter-out-horizontal"
                                        >Learn More</a
                                    >
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End single package -->

                    <div class="col-md-4 col-sm-4">
                        <div class="single-package">
                            <div class="package-image">
                                <a href="winter-vacation"
                                    ><img
                                        src="/images/thumbnails/tours/winter-vacation.jpg"
                                        alt="Winter Vacation"
                                        title="Winter Vacation"
                                    />
                                </a>
                            </div>
                            <div class="package-content" align="center">
                                <h3>
                                    <a href="winter-vacation"
                                        >Winter Vacation</a
                                    >
                                </h3>
                            </div>
                            <div class="package-calto-action" align="center">
                                <ul class="ct-action">
                                    <a
                                        href="winter-vacation"
                                        class="travel-booking-btn hvr-shutter-out-horizontal"
                                        >Learn More</a
                                    >
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End single package -->

                    <div class="col-md-4 col-sm-4">
                        <div class="single-package">
                            <div class="package-image">
                                <a href="summer-tour"
                                    ><img
                                        src="/images/thumbnails/tours/summer-tour.jpg"
                                        alt="Summer Tour"
                                        title="Summer Tour"
                                    />
                                </a>
                            </div>
                            <div class="package-content" align="center">
                                <h3><a href="summer-tour">Summer Tour</a></h3>
                            </div>
                            <div class="package-calto-action" align="center">
                                <ul class="ct-action">
                                    <a
                                        href="summer-tour"
                                        class="travel-booking-btn hvr-shutter-out-horizontal"
                                        >Learn More</a
                                    >
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End single package -->
                </div>
            </div>
        </section>

        <!-- realted tour start here -->
        <section class="related-tour popular-packages">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12"></div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="single-package">
                            <div class="package-image">
                                <a href="weekend-vacations"
                                    ><img
                                        src="/images/thumbnails/tours/weekend-vacations.jpg"
                                        alt="Weekend Vacations"
                                        title="Weekend Vacations"
                                    />
                                </a>
                            </div>
                            <div class="package-content" align="center">
                                <h3>
                                    <a href="weekend-vacations"
                                        >Weekend Vacations</a
                                    >
                                </h3>
                            </div>
                            <div class="package-calto-action" align="center">
                                <ul class="ct-action">
                                    <a
                                        href="weekend-vacations"
                                        class="travel-booking-btn hvr-shutter-out-horizontal"
                                        >Learn More</a
                                    >
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End single package -->

                    <div class="col-md-4 col-sm-4">
                        <div class="single-package">
                            <div class="package-image">
                                <a href="jubilee-tours"
                                    ><img
                                        src="/images/thumbnails/tours/jubilee-tours.jpg"
                                        alt="Jubilee Tours"
                                        title="Jubilee Tours"
                                    />
                                </a>
                            </div>
                            <div class="package-content" align="center">
                                <h3>
                                    <a href="jubilee-tours">Jubilee Tours</a>
                                </h3>
                            </div>
                            <div class="package-calto-action" align="center">
                                <ul class="ct-action">
                                    <a
                                        href="jubilee-tours"
                                        class="travel-booking-btn hvr-shutter-out-horizontal"
                                        >Learn More</a
                                    >
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End single package -->

                    <div class="col-md-4 col-sm-4">
                        <div class="single-package">
                            <div class="package-image">
                                <a href="seniors-tours"
                                    ><img
                                        src="/images/thumbnails/tours/seniors-tours.jpg"
                                        alt="Seniors Tours"
                                        title="Seniors Tours"
                                    />
                                </a>
                            </div>
                            <div class="package-content" align="center">
                                <h3>
                                    <a href="seniors-tours">Seniors Tours</a>
                                </h3>
                            </div>
                            <div class="package-calto-action" align="center">
                                <ul class="ct-action">
                                    <a
                                        href="seniors-tours"
                                        class="travel-booking-btn hvr-shutter-out-horizontal"
                                        >Learn More</a
                                    >
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End single package -->
                </div>
            </div>
        </section>

        <!-- realted tour start here -->
        <section class="related-tour popular-packages">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12"></div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="single-package">
                            <div class="package-image">
                                <a href="sports-tours"
                                    ><img
                                        src="/images/thumbnails/tours/sports-tours.jpg"
                                        alt="Sports Tours"
                                        title="Sports Tours"
                                    />
                                </a>
                            </div>
                            <div class="package-content" align="center">
                                <h3><a href="sports-tours">Sports Tours</a></h3>
                            </div>
                            <div class="package-calto-action" align="center">
                                <ul class="ct-action">
                                    <a
                                        href="sports-tours"
                                        class="travel-booking-btn hvr-shutter-out-horizontal"
                                        >Learn More</a
                                    >
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End single package -->

                    <div class="col-md-4 col-sm-4">
                        <div class="single-package">
                            <div class="package-image">
                                <a href="nature-tours"
                                    ><img
                                        src="/images/thumbnails/tours/nature-tours.jpg"
                                        alt="Nature Tours"
                                        title="Nature Tours"
                                    />
                                </a>
                            </div>
                            <div class="package-content" align="center">
                                <h3><a href="nature-tours">Nature Tours</a></h3>
                            </div>
                            <div class="package-calto-action" align="center">
                                <ul class="ct-action">
                                    <a
                                        href="nature-tours"
                                        class="travel-booking-btn hvr-shutter-out-horizontal"
                                        >Learn More</a
                                    >
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End single package -->

                    <div class="col-md-4 col-sm-4">
                        <div class="single-package">
                            <div class="package-image">
                                <a href="cruise-tours"
                                    ><img
                                        src="/images/thumbnails/tours/cruise-tours.jpg"
                                        alt="Cruise Tours"
                                        title="Cruise Tours"
                                    />
                                </a>
                            </div>
                            <div class="package-content" align="center">
                                <h3><a href="cruise-tours">Cruise Tours</a></h3>
                            </div>
                            <div class="package-calto-action" align="center">
                                <ul class="ct-action">
                                    <a
                                        href="cruise-tours"
                                        class="travel-booking-btn hvr-shutter-out-horizontal"
                                        >Learn More</a
                                    >
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End single package -->
                </div>
            </div>
        </section>

        <!-- realted tour start here -->
        <section class="related-tour popular-packages">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12"></div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="single-package">
                            <div class="package-image">
                                <a href="safari-tours"
                                    ><img
                                        src="/images/thumbnails/tours/safari-tours.jpg"
                                        alt="Safari Tours"
                                        title="Safari Tours"
                                /></a>
                            </div>
                            <div class="package-content" align="center">
                                <h3><a href="safari-tours">Safari Tours</a></h3>
                            </div>
                            <div class="package-calto-action" align="center">
                                <ul class="ct-action">
                                    <a
                                        href="safari-tours"
                                        class="travel-booking-btn hvr-shutter-out-horizontal"
                                        >Learn More</a
                                    >
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End single package -->

                    <div class="col-md-4 col-sm-4">
                        <div class="single-package">
                            <div class="package-image">
                                <a href="historical-ancient-tours"
                                    ><img
                                        src="/images/thumbnails/tours/historical-ancient-tours.jpg"
                                        alt="Historical and Ancient Tours"
                                        title="Historical and Ancient Tours"
                                    />
                                </a>
                            </div>
                            <div class="package-content" align="center">
                                <h3>
                                    <a href="historical-ancient-tours"
                                        >Historical and Ancient Tours</a
                                    >
                                </h3>
                            </div>
                            <div class="package-calto-action" align="center">
                                <ul class="ct-action">
                                    <a
                                        href="historical-ancient-tours"
                                        class="travel-booking-btn hvr-shutter-out-horizontal"
                                        >Learn More</a
                                    >
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End single package -->

                    <div class="col-md-4 col-sm-4">
                        <div class="single-package">
                            <div class="package-image">
                                <a href="reunion-tours"
                                    ><img
                                        src="/images/thumbnails/tours/reunion-tours.jpg"
                                        alt="Reunion Tours"
                                    />
                                </a>
                            </div>
                            <div class="package-content" align="center">
                                <h3>
                                    <a href="reunion-tours">Reunion Tours</a>
                                </h3>
                            </div>
                            <div class="package-calto-action" align="center">
                                <ul class="ct-action">
                                    <a
                                        href="reunion-tours"
                                        class="travel-booking-btn hvr-shutter-out-horizontal"
                                        >Learn More</a
                                    >
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End single package -->
                </div>
            </div>
        </section>

        <!-- realted tour start here -->
        <section class="related-tour popular-packages">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12"></div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="single-package">
                            <div class="package-image">
                                <a href="civilization-and-archeological-tours"
                                    ><img
                                        src="/images/thumbnails/tours/civilization-and-archeological-tours.jpg"
                                        alt="Civilization and Archeological Tours"
                                        title="Civilization and Archeological Tours"
                                    />
                                </a>
                            </div>
                            <div class="package-content" align="center">
                                <h3>
                                    <a
                                        href="civilization-and-archeological-tours"
                                        >Civilization and Archeological Tours</a
                                    >
                                </h3>
                            </div>
                            <div class="package-calto-action" align="center">
                                <ul class="ct-action">
                                    <a
                                        href="civilization-and-archeological-tours"
                                        class="travel-booking-btn hvr-shutter-out-horizontal"
                                        >Learn More</a
                                    >
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End single package -->

                    <div class="col-md-4 col-sm-4">
                        <div class="single-package">
                            <div class="package-image">
                                <a href="heritage-tours"
                                    ><img
                                        src="/images/thumbnails/tours/heritage-tours.jpg"
                                        alt="Heritage Tours"
                                        title="Heritage Tours"
                                    />
                                </a>
                            </div>
                            <div class="package-content" align="center">
                                <h3>
                                    <a href="heritage-tours">Heritage Tours</a>
                                </h3>
                            </div>
                            <div class="package-calto-action" align="center">
                                <ul class="ct-action">
                                    <a
                                        href="heritage-tours"
                                        class="travel-booking-btn hvr-shutter-out-horizontal"
                                        >Learn More</a
                                    >
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End single package -->

                    <div class="col-md-4 col-sm-4">
                        <div class="single-package">
                            <div class="package-image">
                                <a href="city-break-tours"
                                    ><img
                                        src="/images/thumbnails/tours/city-break-tours.jpg"
                                        alt="City Break Tours"
                                        title="City Break Tours"
                                    />
                                </a>
                            </div>
                            <div class="package-content" align="center">
                                <h3>
                                    <a href="city-break-tours"
                                        >City Break Tours</a
                                    >
                                </h3>
                            </div>
                            <div class="package-calto-action" align="center">
                                <ul class="ct-action">
                                    <a
                                        href="city-break-tours"
                                        class="travel-booking-btn hvr-shutter-out-horizontal"
                                        >Learn More</a
                                    >
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End single package -->
                </div>
            </div>
        </section>

        <!-- realted tour start here -->
        <section class="related-tour popular-packages">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12"></div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="single-package">
                            <div class="package-image">
                                <a href="luxury-tours"
                                    ><img
                                        src="/images/thumbnails/tours/luxury-tours.jpg"
                                        alt="Luxury Tours"
                                        title="Luxury Tours"
                                    />
                                </a>
                            </div>
                            <div class="package-content" align="center">
                                <h3><a href="luxury-tours">Luxury Tours</a></h3>
                            </div>
                            <div class="package-calto-action" align="center">
                                <ul class="ct-action">
                                    <a
                                        href="luxury-tours"
                                        class="travel-booking-btn hvr-shutter-out-horizontal"
                                        >Learn More</a
                                    >
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End single package -->

                    <div class="col-md-4 col-sm-4">
                        <div class="single-package">
                            <div class="package-image">
                                <a href="leisure-tours"
                                    ><img
                                        src="/images/thumbnails/tours/leisure-tours.jpg"
                                        alt="Leisure Tours"
                                        title="Leisure Tours"
                                    />
                                </a>
                            </div>
                            <div class="package-content" align="center">
                                <h3>
                                    <a href="leisure-tours">Leisure Tours</a>
                                </h3>
                            </div>
                            <div class="package-calto-action" align="center">
                                <ul class="ct-action">
                                    <a
                                        href="leisure-tours"
                                        class="travel-booking-btn hvr-shutter-out-horizontal"
                                        >Learn More</a
                                    >
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End single package -->

                    <div class="col-md-4 col-sm-4">
                        <div class="single-package">
                            <div class="package-image">
                                <a href="multi-country-tours"
                                    ><img
                                        src="/images/thumbnails/tours/multi-country-tours.jpg"
                                        alt="Multi Country Tours"
                                        title="Multi Country Tours"
                                    />
                                </a>
                            </div>
                            <div class="package-content" align="center">
                                <h3>
                                    <a href="multi-country-tours"
                                        >Multi Country Tours</a
                                    >
                                </h3>
                            </div>
                            <div class="package-calto-action" align="center">
                                <ul class="ct-action">
                                    <a
                                        href="multi-country-tours"
                                        class="travel-booking-btn hvr-shutter-out-horizontal"
                                        >Learn More</a
                                    >
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End single package -->
                </div>
            </div>
        </section>

        <!-- realted tour start here -->
        <section class="related-tour popular-packages">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12"></div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="single-package">
                            <div class="package-image">
                                <a href="boat-cruise-tours"
                                    ><img
                                        src="/images/thumbnails/tours/boat-cruise-tours.jpg"
                                        alt="Boat Cruise Tours"
                                        title="Boat Cruise Tours"
                                    />
                                </a>
                            </div>
                            <div class="package-content" align="center">
                                <h3>
                                    <a href="boat-cruise-tours"
                                        >Boat Cruise Tours</a
                                    >
                                </h3>
                            </div>
                            <div class="package-calto-action" align="center">
                                <ul class="ct-action">
                                    <a
                                        href="boat-cruise-tours"
                                        class="travel-booking-btn hvr-shutter-out-horizontal"
                                        >Learn More</a
                                    >
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End single package -->

                    <div class="col-md-4 col-sm-4">
                        <div class="single-package">
                            <div class="package-image">
                                <a href="wellness-spa-lifestyle-tours"
                                    ><img
                                        src="/images/thumbnails/tours/wellness-spa-lifestyle-tours.jpg"
                                        alt="Wellness Spa Lifestyle Tours"
                                        title="Wellness Spa Lifestyle Tours"
                                    />
                                </a>
                            </div>
                            <div class="package-content" align="center">
                                <h3>
                                    <a href="wellness-spa-lifestyle-tours"
                                        >Wellness Spa Lifestyle Tours</a
                                    >
                                </h3>
                            </div>
                            <div class="package-calto-action" align="center">
                                <ul class="ct-action">
                                    <a
                                        href="wellness-spa-lifestyle-tours"
                                        class="travel-booking-btn hvr-shutter-out-horizontal"
                                        >Learn More</a
                                    >
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End single package -->

                    <div class="col-md-4 col-sm-4">
                        <div class="single-package">
                            <div class="package-image">
                                <a href="travelability-tours"
                                    ><img
                                        src="/images/thumbnails/tours/travelability-tours.jpg"
                                        alt="Travelability Tours"
                                        title="Travelability Tours"
                                    />
                                </a>
                            </div>
                            <div class="package-content" align="center">
                                <h3>
                                    <a href="travelability-tours"
                                        >Travelability Tours</a
                                    >
                                </h3>
                            </div>
                            <div class="package-calto-action" align="center">
                                <ul class="ct-action">
                                    <a
                                        href="travelability-tours"
                                        class="travel-booking-btn hvr-shutter-out-horizontal"
                                        >Learn More</a
                                    >
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End single package -->
                </div>
            </div>
        </section>
    </GuestLayout>
</template>
