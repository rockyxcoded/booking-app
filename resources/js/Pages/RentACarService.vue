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
                style="background-image: url('/images/bgimage/bg1.jpg')"
            >
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="bredcrums-content">
                                <h2>Rent-a-Car Service</h2>
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li class="active">
                                        <a href="services">Services</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog breadcrumb version one end here -->

        <section class="section-paddings single-package-area">
            <div class="container">
                <div class="row">
                    <!-- single package tab with details -->
                    <div class="col-md-8 col-sm-12">
                        <div class="single-package-details">
                            <div class="single-package-title">
                                <h2>Rent-a-Car Service</h2>
                                <br />
                            </div>
                            <div class="package-features-image">
                                <img
                                    src="/images/pageheaders/rental-cars.jpg"
                                    alt="Superior Car-Rental Service"
                                    class="img-responsove border-raduis-3"
                                />
                            </div>
                        </div>
                        <!-- tab menu strat -->

                        <!-- tab content start -->
                        <div class="row">
                            <br />
                            <div class="tab-content">
                                <div class="tour-description">
                                    <!-- -->
                                    <p>
                                        Zenith Travels and Tours Ltd provide
                                        superior car-rental service for less. We
                                        deliver chauffeur-driven, comfortable,
                                        air-conditioned SUV car rental hire in
                                        Lagos, Nigeria at an affordable price.
                                        We beat competitors hands down with our
                                        superior service.
                                    </p>
                                    <p>
                                        We have flexible payment options
                                        including pay-on-arrival. You can as
                                        well be guaranteed of efficient
                                        background check on our Chauffeurs to
                                        ensure your safety. Our vehicles are
                                        equipped with full leather interiors,
                                        fully functioning air-conditioning,
                                        woofer sound, child car-seats
                                        (travellers with kids), and lots more.
                                    </p>
                                    <p>
                                        Zenith Travels and Tours Ltd guarantees
                                        that you will be chauffeured in a
                                        comfortable air-conditioned SUV/Jeep and
                                        Buses at affordable rates. Our standard
                                        daily rates do not include fuel but we
                                        can provide you with an all fuel
                                        inclusive rate for service while using
                                        our vehicles.
                                    </p>
                                    <p>
                                        When visiting Nigeria, safety is a major
                                        concern and obtaining safe and reliable
                                        transportation remains a challenge. We
                                        will provide you with safe and reliable
                                        transportation and a professional
                                        chauffeur with extensive knowledge of
                                        Lagos and other parts of Nigeria.
                                    </p>
                                    <p>
                                        We are determined to minimize your
                                        travel risk and headache by providing
                                        you with a trusted and safe car
                                        rental/car hire service that will afford
                                        you the opportunity to travel in and
                                        around Nigeria in a clean and
                                        comfortable air-conditioned chauffeur
                                        driven SUV/Jeep.
                                    </p>
                                    <a
                                        href="contact-us"
                                        class="read-more hvr-fade"
                                        >Contact Us</a
                                    >
                                </div>
                            </div>
                        </div>
                        <!-- tab content end -->
                    </div>
                    <!-- single package tab with details -->
                    <br /><br />
                    <BookService />
                </div>
            </div>
        </section>
        <FeaturedTours />
    </GuestLayout>
</template>
