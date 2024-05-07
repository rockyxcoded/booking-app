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
                                <h2>Free City Student Tours</h2>
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
                                <h2>Free City Student Tours</h2>
                                <br />
                            </div>
                            <div class="package-features-image">
                                <img
                                    src="/images/pageheaders/free-city-student-tours.jpg"
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
                                    Free City Student Tours is our flagship
                                    Learning Outside the Classroom Educational
                                    Tour packages we offer free of charge to
                                    schools across the world. Choose the city
                                    you want your students to explore so far you
                                    are able to transport your student group of
                                    not more than 20 students to our meeting
                                    point at the destination, we will surely
                                    deliver an awesome educational package that
                                    will expose your students to various
                                    curriculum elements that abound in such city
                                    which will enhance their classroom work and
                                    academic performance. Fill our
                                    <a href="contact-us">Contact Form</a> to
                                    register your school students for our Free
                                    City Student Tour.
                                </p>
                                <p><br /></p>
                                <div>
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
