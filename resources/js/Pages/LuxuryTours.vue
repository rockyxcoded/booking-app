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
                                <h2>Luxury Tours</h2>
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
                                <h2>Luxury Tours</h2>
                                <br />
                            </div>
                            <div class="package-features-image">
                                <img
                                    src="/images/pageheaders/luxury-tours.jpg"
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
                                    With our Luxury Vacation packages, we
                                    provide you the best of the best top notch
                                    vacation packages across board to different
                                    destinations and give maximum and adequate
                                    attentions to every detail and component of
                                    your trip.
                                </p>
                                <p>
                                    What makes our Luxury Holiday package unique
                                    from other travel companies is the fact that
                                    our Specialist Luxury Travel Advisors have
                                    being to all the hotels, resorts and other
                                    accommodations as well as inspect most
                                    elements of the activities that we recommend
                                    at different destinations around the world
                                    to ensure quality services are on ground and
                                    to ensure you experience maximum
                                    satisfactions.
                                </p>
                                <p>
                                    In addition, we provide an exclusive
                                    personalised and customized vacation
                                    packages to meet your personal needs. We
                                    provide super premium packages to the best
                                    exotic scenic destinations around the world
                                    for your enjoyment.
                                </p>
                                <p>
                                    Choose your destination of choice and we
                                    will build your itineraries superbly. In
                                    case you do not have a destination in mind,
                                    we have a vast and arrays of destinations in
                                    our product kitty that we shall recommend
                                    and will surely meet your satisfaction. In
                                    addition to the signature tours to be
                                    crafted, we will include hands-on and
                                    engaging activities like cooking clothe
                                    weaving, photography, cheese making and more
                                    that will make your experience full of fun
                                    throughout your vacation tenure.
                                </p>
                                <p>
                                    Our Luxury Tour destinations cut across all
                                    the six continents of the world. Just ask
                                    for it and we give it to you. As we say in
                                    our company, we shall exceed your
                                    expectations.
                                </p>
                                <a href="contactus" class="read-more hvr-fade"
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
