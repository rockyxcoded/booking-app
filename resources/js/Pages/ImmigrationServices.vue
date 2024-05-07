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
                                <h2>Immigration Services</h2>
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
                                <h2>Immigration Services</h2>
                                <br />
                            </div>
                            <div class="package-features-image">
                                <img
                                    src="/images/pageheaders/immigration-services.jpg"
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
                                    The entire world has become a global village
                                    where everyone can migrate from one point to
                                    the other if it is for a genuine and
                                    authentic purpose like seeking for better
                                    and quality living, seeking for good future
                                    for your children, seeking for good
                                    employment, to start a new business, family
                                    reunion, marriage and or joining a new
                                    spouse.
                                </p>
                                <p>
                                    Most popular Immigrant visa destinations or
                                    countries are Canada, The United Kingdom,
                                    New Zealand, Australia, The Nordic Countries
                                    of Norway, Denmark, Sweden and the 27
                                    Schengen countries of Germany, Italy,
                                    Switzerland, Austria, and many other
                                    countries of the world. We have in house
                                    Immigration Consultant who will guide you
                                    from the time you express interest through
                                    to the time your immigrant visa is approved
                                    and up to the time you will arrive at your
                                    new home country, get a befitting job and
                                    settle down to enjoy a new life in your new
                                    home country.
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
