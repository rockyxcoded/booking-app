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
                                <h2>Sports Tours</h2>
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

        <section class="section-paddings single-package-area">
            <div class="container">
                <div class="row">
                    <!-- single package tab with details -->
                    <div class="col-md-8 col-sm-12">
                        <div class="single-package-details">
                            <div class="single-package-title">
                                <h2>Sports Tours</h2>
                                <br />
                            </div>
                            <div class="package-features-image">
                                <img
                                    src="/images/pageheaders/sports-tours.jpg"
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
                                    Our Sports Tour Vacation Package enables us
                                    to include in your itinerary, a visit to
                                    attend one of your most favourite sporting
                                    events during your holiday or it could be
                                    designed purposely and solely for you to go
                                    and watch any international competition at
                                    any destination where the competition is
                                    taking place as part of the live audience
                                    and getting on the spot updates of the live
                                    competition at the venue.
                                </p>
                                <p>
                                    We partner with major sports events
                                    organizers and marketers to sell discounted
                                    entry tickets to watch major and mega global
                                    sporting competitions like the World Cups
                                    and Olympics. We also sell entry tickets of
                                    major competitions like football, Formula 1
                                    Grand Prix, Basketball, Rugby, Lawn Tennis,
                                    cricket.
                                </p>
                                <p>
                                    More and more tourists are interested in
                                    sport activities during their trips whether
                                    sports are the main objective of travel or
                                    not. Sport events of various kinds and sizes
                                    attract tourists as participants or
                                    spectators and destinations try to add local
                                    flavours to them to distinguish themselves
                                    and provide authentic local experiences.
                                </p>
                                <p>
                                    Mega sport events such as Olympics and World
                                    Cups can be a catalyst for tourism
                                    development if successfully leveraged in
                                    terms of destination branding,
                                    infrastructure development and other
                                    economic and social benefits.
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
