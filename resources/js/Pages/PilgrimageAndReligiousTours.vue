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
                                <h2>Pilgrimage and Religious Tours</h2>
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
                                <h2>Pilgrimage and Religious Tours</h2>
                                <br />
                            </div>
                            <div class="package-features-image">
                                <img
                                    src="/images/pageheaders/pilgrimage-and-religious-tours.jpg"
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
                                    With our series of religious tours to
                                    different and many holy land destinations
                                    across the world, we make you and your group
                                    to rejuvenate your spirit and reconnect with
                                    God the creator of heaven and the earth.
                                    During such holy pilgrimage tours, we
                                    organize prayer sessions that encompass
                                    individual spiritual and corporate as well
                                    as national needs.
                                </p>
                                <p>
                                    By the time you return from such spiritual
                                    travel experience, your spiritualism level
                                    would have been elevated, remarkable
                                    miracles as well as divine interventions in
                                    the areas of spiritual and physical needs
                                    would have been achieved tremendously
                                    through your unshakable faith in God’s
                                    awesome powers. You will never remain the
                                    same again because the God Almighty would
                                    have intervened in your own peculiar case,
                                    challenges and problems.
                                </p>
                                <p>
                                    Please call and invite our Pilgrimage Tour
                                    Advisor immediately to design and package
                                    never to forget spiritually loaded
                                    pilgrimage tour for your group. Amongst the
                                    places we organize pilgrimage tours for
                                    robust spiritual encounters are Israel,
                                    Ethiopia, Lourdes in France, Turkey,
                                    Portugal, Mexico, Nigeria, Jordan, Iran,
                                    Saudi Arabia, Iran, Iraq and many more.
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
