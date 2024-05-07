<template>
    <GuestLayout>
        <section class="breadcrumb-blog-version-one">
            <div
                class="single-bredcurms"
                style="background-image: url('images/bgimage/bg1.jpg')"
            >
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="bredcrums-content">
                                <h2>Air Ambulance Service</h2>
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
                                <h2>Air Ambulance Service</h2>
                                <br />
                            </div>
                            <div class="package-features-image">
                                <img
                                    src="/images/pageheaders/air-ambulance.jpg"
                                    alt=""
                                    class="img-responsove border-raduis-3"
                                />
                            </div>
                        </div>
                        <!-- tab menu strat -->

                        <!-- tab content start -->
                        <div class="row">
                            <br />
                            <div class="tour-description">
                                <p>
                                    This is specialized product and service that
                                    requires the dexterity of professionally
                                    trained and customer-centered personnel
                                    which we have as part of our health services
                                    operational team.
                                </p>
                                <p>
                                    We work with highly trained and highly
                                    skilled personnel to ensure quick response
                                    to any emergency requests of our clients
                                    that require the urgent use of Air Ambulance
                                    service for transfer to any health tourism
                                    destinations or facilities anywhere in the
                                    world.
                                </p>
                                <p>
                                    This is a 24/7 service that we offer at a
                                    very short notice and in a jiffy.
                                </p>
                                <p>
                                    <a
                                        href="contactus"
                                        class="read-more hvr-fade"
                                        >Contact Us</a
                                    >
                                </p>
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

<script setup>
import BookService from "../Components/Partials/BookService.vue";
import FeaturedTours from "../Components/Partials/FeaturedTours.vue";
import GuestLayout from "@/Layouts/GuestLayout.vue";
import { Head } from "@inertiajs/vue3";
</script>

<style lang="scss" scoped></style>
