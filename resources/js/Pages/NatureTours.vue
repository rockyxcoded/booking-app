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
                                <h2>Nature Tours</h2>
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
                                <h2>Nature Tours</h2>
                                <br />
                            </div>
                            <div class="package-features-image">
                                <img
                                    src="/images/pageheaders/nature-tours.jpg"
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
                                    Why don’t you want to tour the world through
                                    our Cruise Tour Vacation packages? Our
                                    Cruise Tour Vacation packages include
                                    excursions to world’s most scenic, cultural
                                    and thematic holiday destinations.
                                </p>
                                <p>
                                    These packages include accommodation, all
                                    meals, drinks, arrays of activities and
                                    entertainment onboard for families, children
                                    and everyone. Honestly, you need to have
                                    this experience of being at Sea at least
                                    once in your lifetime.
                                </p>
                                <p>
                                    The experience will really worth whatever
                                    the amount you spent for the trip. Just tell
                                    us your loved destination and we will design
                                    and send the package to you immediately.
                                </p>
                                <p>
                                    And if you do not have any destination in
                                    mind, our team of cruise tour advisor will
                                    recommend and design a never-to-be-forgotten
                                    cruise vacation package for you and your
                                    loved ones.
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
