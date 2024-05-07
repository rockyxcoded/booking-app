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
                                <h2>Shopping Tours</h2>
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
                                <h2>Shopping Tours</h2>
                                <br />
                            </div>
                            <div class="package-features-image">
                                <img
                                    src="/images/pageheaders/shopping-tours.jpg"
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
                                    If you are the shopping buff, do not look
                                    elsewhere for your awe-inspiring shopping
                                    experience but Zenith Travels & Tours to
                                    curate a shop ‘til you drop tour experience
                                    that will fit into your bag. We offer
                                    standard or personalized and luxury shopping
                                    experience at major destinations and cities
                                    of the world. We provide individual, group
                                    and tailor made shopping tour packages.
                                </p>
                                <p>
                                    We also provide you a shopping escort who is
                                    always a local who knows virtually all the
                                    shopping malls, designers’ outlets luxury
                                    and down the road shops at your destination
                                    and will take you to shops where you can get
                                    all your items with ease and to shops that
                                    offer huge discounts and sale promo
                                    packages.
                                </p>
                                <p>
                                    As a matter of fact, we believe that there
                                    is no holiday tour that is complete without
                                    incorporating a shopping experience in your
                                    itinerary at least to take some parts of the
                                    destination you visited back home which will
                                    always give you a good memory of your
                                    holiday.
                                </p>
                                <p>
                                    Just let us know the kind of shopping
                                    experience you want and if possible the type
                                    of items and products you want, trust us, we
                                    will craft the package to your taste. We
                                    turn your Shopping Tour Experience to be a
                                    therapy that invigorates your energy.
                                </p>
                                <p>
                                    Our shopping tours are available all over
                                    the world. Few of our shopping destinations
                                    include Dubai Shopping Festival, London
                                    Shopping Experience, Paris Shopping Tour,
                                    African Souvenir Shopping Experience,
                                    Melbourne Bargain Shopping Tours, New York
                                    Big Apple Shopping Tours and many more are
                                    available for your take.
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
