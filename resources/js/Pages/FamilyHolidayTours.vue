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
                                <h2>Family Holiday Tours</h2>
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
                                <h2>Family Holiday Tours</h2>
                                <br />
                            </div>
                            <div class="package-features-image">
                                <img
                                    src="/images/pageheaders/family-and-holiday-tours.jpg"
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
                                    Family Tour is one of the unique ways the
                                    entire family can come together to bond and
                                    have a long lasting memorable family
                                    experience together. Zenith Travels & Tours
                                    has highly low budget group family tour
                                    packages to different destinations all over
                                    the world. More interesting is when a family
                                    joins other families in our Standard family
                                    group tours where they make more friends and
                                    network.
                                </p>
                                <p>
                                    Be it a customized family tour package or
                                    group family tour package where different
                                    families mix and come together to enjoy a
                                    lovely holiday and adventure experience
                                    trip, Zenith Travels & Tours Family Tours
                                    designers will craft a package that will
                                    include cultural immersion, family
                                    well-being, tours to attractions,
                                    teambuilding activities, health and
                                    lifestyle programmes, family bonding
                                    activities, fun, resting and relaxation
                                    modules.
                                </p>
                                <p>
                                    Our family vacation can turn out to be a
                                    reunion experience that will bring two
                                    generations to four generations of a family
                                    together once again from great-great
                                    grandparents, grandparents, parents and the
                                    children as well as cousins, nephews, nieces
                                    and in-laws. What a way to meet again and
                                    enjoy a family fun like never before-this is
                                    what Zenith Travels & Tours is wired to
                                    deliver to your beautiful family.
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
