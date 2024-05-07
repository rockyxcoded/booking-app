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
                                <h2>Conference and Fairs</h2>
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
                                <h2>Conference and Fairs</h2>
                                <br />
                            </div>
                            <div class="package-features-image">
                                <img
                                    src="/images/pageheaders/conference-and-fairs.jpg"
                                    alt=""
                                    class="img-responsove border-raduis-3"
                                />
                            </div>
                        </div>
                        <!-- tab menu strat -->

                        <!-- tab content start -->
                        <div class="row">
                            <br />
                            <div class="tab-content">
                                <div class="tour-description">
                                    <p>
                                        We source, design, register and package
                                        conference, exhibitions and fair that
                                        will increase the bottom-line and
                                        upscale the overall performance of your
                                        organisation and its employees.
                                    </p>
                                    <p>
                                        Zenith Travels and Tours Ltd is the most
                                        preferred company when it comes to
                                        exclusive event for branded and
                                        inspirational packaging. In the world of
                                        packaging, we look for that idea,
                                        contact or concept that gives a light
                                        bulb moment.
                                    </p>
                                    <p>
                                        Immerse yourself into the world of the
                                        finest packaging as we help you come up
                                        with that next idea or innovation that
                                        will make the world of difference to
                                        your packaging and product marketing
                                        strategy.
                                    </p>
                                    <!-- -->
                                    <p>
                                        Zenith Travels and Tours Ltd is one of
                                        the most successful and foremost travel
                                        company in Nigeria, delivering
                                        customer-focused travel products. We
                                        remain the leading travel company in
                                        Nigeria that specializes on
                                        curriculum-focused educational tour for
                                        students within the range of 6 to 17
                                        years.
                                    </p>
                                    <p>
                                        Immerse yourself into the world of the
                                        finest packaging as we help you come up
                                        with that next idea or innovation that
                                        will make the world of difference to
                                        your packaging and product marketing
                                        strategy.
                                    </p>
                                    <a
                                        href="contactus"
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
