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
                                <h2>Services</h2>
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
                                <a href="ticketing-reservation"
                                    ><img
                                        src="/images/thumbnails/services/ticketing-reservation.jpg"
                                        alt="Ticketing and Reservation"
                                        title="Ticketing and Reservation"
                                    />
                                </a>
                            </div>
                            <div class="package-content" align="center">
                                <h3>
                                    <a href="ticketing-reservation"
                                        >Ticketing and Reservation</a
                                    >
                                </h3>
                            </div>
                            <div class="package-calto-action" align="center">
                                <ul class="ct-action">
                                    <a
                                        href="ticketing-reservation"
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
                                <a href="travel-tour-service"
                                    ><img
                                        src="/images/thumbnails/services/vc.jpg"
                                        alt="Travel Tour Service"
                                        title="Travel Tour Service"
                                    />
                                </a>
                            </div>
                            <div class="package-content" align="center">
                                <h3>
                                    <a href="travel-tour-service"
                                        >Travel Tour Service</a
                                    >
                                </h3>
                            </div>
                            <div class="package-calto-action" align="center">
                                <ul class="ct-action">
                                    <a
                                        href="travel-tour-service"
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
                                <a href="hotel-reservation"
                                    ><img
                                        src="/images/thumbnails/services/hotel-reservation.jpg"
                                        alt="Hotel Reservation"
                                        title="Hotel Reservation"
                                    />
                                </a>
                            </div>
                            <div class="package-content" align="center">
                                <h3>
                                    <a href="hotel-reservation"
                                        >Hotel Reservation</a
                                    >
                                </h3>
                            </div>
                            <div class="package-calto-action" align="center">
                                <ul class="ct-action">
                                    <a
                                        href="hotel-reservation"
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
                                <a href="airport-transfers"
                                    ><img
                                        src="/images/thumbnails/services/airport-transfers.jpg"
                                        alt="Airport Transfers"
                                        title="Airport Transfers"
                                    />
                                </a>
                            </div>
                            <div class="package-content" align="center">
                                <h3>
                                    <a href="airport-transfers"
                                        >Airport Transfers</a
                                    >
                                </h3>
                            </div>
                            <div class="package-calto-action" align="center">
                                <ul class="ct-action">
                                    <a
                                        href="airport-transfers"
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
                                <a href="travel-insurance"
                                    ><img
                                        src="/images/thumbnails/services/travel-insurance.jpg"
                                        alt="Travel and Health Insurance"
                                        title="Travel and Health Insurance"
                                    />
                                </a>
                            </div>
                            <div class="package-content" align="center">
                                <h3>
                                    <a href="travel-insurance"
                                        >Travel and Health Insurance</a
                                    >
                                </h3>
                            </div>
                            <div class="package-calto-action" align="center">
                                <ul class="ct-action">
                                    <a
                                        href="travel-insurance"
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
                                <a href="cargo-and-shipping-service"
                                    ><img
                                        src="/images/thumbnails/services/cargo-and-shipping-service.jpg"
                                        alt="Cargo and Shipping Service"
                                        title="Cargo and Shipping Service"
                                    />
                                </a>
                            </div>
                            <div class="package-content" align="center">
                                <h3>
                                    <a href="cargo-and-shipping-service"
                                        >Cargo and Shipping Service</a
                                    >
                                </h3>
                            </div>
                            <div class="package-calto-action" align="center">
                                <ul class="ct-action">
                                    <a
                                        href="cargo-and-shipping-service"
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
                                <a href="immigration-services"
                                    ><img
                                        src="/images/thumbnails/services/immigration-services.jpg"
                                        alt="Immigration Services"
                                        title="Immigration Services"
                                    />
                                </a>
                            </div>
                            <div class="package-content" align="center">
                                <h3>
                                    <a href="immigration-services"
                                        >Immigration Services</a
                                    >
                                </h3>
                            </div>
                            <div class="package-calto-action" align="center">
                                <ul class="ct-action">
                                    <a
                                        href="immigration-services"
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
                                <a href="visa-counseling"
                                    ><img
                                        src="/images/thumbnails/services/visa-counseling.jpg"
                                        alt="Visa Counseling"
                                    />
                                </a>
                            </div>
                            <div class="package-content" align="center">
                                <h3>
                                    <a href="visa-counseling"
                                        >Visa Counseling</a
                                    >
                                </h3>
                            </div>
                            <div class="package-calto-action" align="center">
                                <ul class="ct-action">
                                    <a
                                        href="visa-counseling"
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
                                <a href="charter-aircraft-services"
                                    ><img
                                        src="/images/thumbnails/services/charter-aircraft-services.jpg"
                                        alt="Charter Aircraft Services"
                                        title="Charter Aircraft Services"
                                    />
                                </a>
                            </div>
                            <div class="package-content" align="center">
                                <h3>
                                    <a href="charter-aircraft-services"
                                        >Charter Aircraft Services</a
                                    >
                                </h3>
                            </div>
                            <div class="package-calto-action" align="center">
                                <ul class="ct-action">
                                    <a
                                        href="charter-aircraft-services"
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
                                <a href="air-ambulance-service"
                                    ><img
                                        src="/images/thumbnails/services/air-ambulance-service.jpg"
                                        alt="Air Ambulance Service"
                                        title="Air Ambulance Service"
                                    />
                                </a>
                            </div>
                            <div class="package-content" align="center">
                                <h3>
                                    <a href="air-ambulance-service"
                                        >Air Ambulance Service</a
                                    >
                                </h3>
                            </div>
                            <div class="package-calto-action" align="center">
                                <ul class="ct-action">
                                    <a
                                        href="air-ambulance-service"
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
                                <a href="event-management"
                                    ><img
                                        src="/images/thumbnails/services/event-management.jpg"
                                        alt="Event Management"
                                        title="Event Management"
                                    />
                                </a>
                            </div>
                            <div class="package-content" align="center">
                                <h3>
                                    <a href="event-management"
                                        >Event Management</a
                                    >
                                </h3>
                            </div>
                            <div class="package-calto-action" align="center">
                                <ul class="ct-action">
                                    <a
                                        href="event-management"
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
                                <a href="entertainment-promotion"
                                    ><img
                                        src="/images/thumbnails/services/entertainment-promotion.jpg"
                                        alt="Entertainment Promotion"
                                        title="Entertainment Promotion"
                                    />
                                </a>
                            </div>
                            <div class="package-content" align="center">
                                <h3>
                                    <a href="entertainment-promotion"
                                        >Entertainment Promotion</a
                                    >
                                </h3>
                            </div>
                            <div class="package-calto-action" align="center">
                                <ul class="ct-action">
                                    <a
                                        href="entertainment-promotion"
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
                                <a href="conference-fairs"
                                    ><img
                                        src="/images/thumbnails/services/conference-fairs.jpg"
                                        alt="Conference &amp; Fairs"
                                        title="Conference &amp; Fairs"
                                    />
                                </a>
                            </div>
                            <div class="package-content" align="center">
                                <h3>
                                    <a href="conference-fairs"
                                        >Conference &amp; Fairs</a
                                    >
                                </h3>
                            </div>
                            <div class="package-calto-action" align="center">
                                <ul class="ct-action">
                                    <a
                                        href="conference-fairs"
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
                                <a href="management-retreat"
                                    ><img
                                        src="/images/thumbnails/services/management-retreat.jpg"
                                        alt="Management Retreat"
                                        title="Management Retreat"
                                    />
                                </a>
                            </div>
                            <div class="package-content" align="center">
                                <h3>
                                    <a href="management-retreat"
                                        >Management Retreat</a
                                    >
                                </h3>
                            </div>
                            <div class="package-calto-action" align="center">
                                <ul class="ct-action">
                                    <a
                                        href="management-retreat"
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
                                <a href="bus-hire-service"
                                    ><img
                                        src="/images/thumbnails/services/bus-hire-service.jpg"
                                        alt="Bus and Car Hire Service"
                                        title="Bus and Car Hire Service"
                                    />
                                </a>
                            </div>
                            <div class="package-content" align="center">
                                <h3>
                                    <a href="bus-hire-service"
                                        >Bus and Car Hire Service</a
                                    >
                                </h3>
                            </div>
                            <div class="package-calto-action" align="center">
                                <ul class="ct-action">
                                    <a
                                        href="bus-hire-service"
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
                                <a href="boat-cruise-service"
                                    ><img
                                        src="/images/thumbnails/services/boat-cruise-service.jpg"
                                        alt="Boat Cruise Service"
                                        title="Boat Cruise Service"
                                    />
                                </a>
                            </div>
                            <div class="package-content" align="center">
                                <h3>
                                    <a href="boat-cruise-service"
                                        >Boat Cruise Service</a
                                    >
                                </h3>
                            </div>
                            <div class="package-calto-action" align="center">
                                <ul class="ct-action">
                                    <a
                                        href="boat-cruise-service"
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
                                <a href="rent-a-car-service"
                                    ><img
                                        src="/images/thumbnails/services/rent-a-car-service.jpg"
                                        alt="Rent-a-Car Service"
                                        title="Rent-a-Car Service"
                                    />
                                </a>
                            </div>
                            <div class="package-content" align="center">
                                <h3>
                                    <a href="rent-a-car-service"
                                        >Rent-a-Car Service</a
                                    >
                                </h3>
                            </div>
                            <div class="package-calto-action" align="center">
                                <ul class="ct-action">
                                    <a
                                        href="rent-a-car-service"
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
                                <a href="medical-health-tourism"
                                    ><img
                                        src="/images/thumbnails/services/medical-health-tourism.jpg"
                                        alt="Medical-Health Tourism"
                                        title="Medical-Health Tourism"
                                    />
                                </a>
                            </div>
                            <div class="package-content" align="center">
                                <h3>
                                    <a href="medical-health-tourism"
                                        >Medical-Health Tourism</a
                                    >
                                </h3>
                            </div>
                            <div class="package-calto-action" align="center">
                                <ul class="ct-action">
                                    <a
                                        href="medical-health-tourism"
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
                                <a href="school-transportation-service"
                                    ><img
                                        src="/images/thumbnails/services/school-transportation-service.jpg"
                                        alt="School Transportation Service"
                                        title="School Transportation Service"
                                    />
                                </a>
                            </div>
                            <div class="package-content" align="center">
                                <h3>
                                    <a href="school-transportation-service"
                                        >School Transportation Service</a
                                    >
                                </h3>
                            </div>
                            <div class="package-calto-action" align="center">
                                <ul class="ct-action">
                                    <a
                                        href="school-transportation-service"
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
                                <a
                                    href="second-country-citizenship-through-investment"
                                    ><img
                                        src="/images/thumbnails/services/second-country-citizenship-through-investment.jpg"
                                        alt="Second Country Citizenship Through Investment"
                                        title="Second Country Citizenship Through Investment"
                                    />
                                </a>
                            </div>
                            <div class="package-content" align="center">
                                <h3>
                                    <a
                                        href="second-country-citizenship-through-investment"
                                        >Second Country Citizenship Through
                                        Investment</a
                                    >
                                </h3>
                            </div>
                            <div class="package-calto-action" align="center">
                                <ul class="ct-action">
                                    <a
                                        href="second-country-citizenship-through-investment"
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
