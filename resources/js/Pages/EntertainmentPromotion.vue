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
                                <h2>Entertainment Promotion</h2>
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
                                <h2>Entertainment Promotion</h2>
                                <br />
                            </div>
                            <div class="package-features-image">
                                <img
                                    src="/images/pageheaders/entertainment-promotion.jpg"
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
                                    Zenith Travels and Tours Ltd provide
                                    services for the Nigerian music and
                                    entertainment industry. We package and
                                    organise series of social and entertaining
                                    events and shows during various yuletide and
                                    celebration time. This includes equipment
                                    hire, record label support services and
                                    artist management. We aided talented
                                    nigerian artistes through massive promotion.
                                    We also work with the best creative video
                                    directors to bring out the best. We believe
                                    that through extensive research, attentive
                                    listening and pure imagination we can enrich
                                    the experiences of our clients, colleagues
                                    and guests.
                                </p>
                                <p>
                                    We have a strong passion for burden talents
                                    who are yet to be tapped, with aim to
                                    harness them through the organization of
                                    talent hunts program across Nigeria. We are
                                    committed to encourage and reward superior
                                    performance and innovative entertainment
                                    ideas, and promote personal and professional
                                    music development through an atmosphere of
                                    respect, openness, integrity and teamwork.
                                    We constantly seek out fresh ideas,
                                    innovative music solutions and different
                                    perspectives.
                                </p>
                                <p>
                                    We are available to help you with your
                                    musical and entertainment needs. We work to
                                    generate the atmosphere of fun, creativity
                                    and elegance. We are committed to
                                    enterprising that generates growth,
                                    opportunity and well-being in Nigeria. We
                                    are conscientious and diligent in every
                                    element of event planning task we undertake.
                                    We believe in consistently high quality work
                                    that benefits every colleague and guest.
                                    Infact, we value and express warmth,
                                    kindness and friendliness because we believe
                                    in the power of a smile.
                                </p>
                                <a href="contact-us" class="read-more hvr-fade"
                                    >Contact Us</a
                                >
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
