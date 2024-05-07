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
                                <h2>School Leadership Tours</h2>
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
                                <h2>School Leadership Tours</h2>
                                <br />
                            </div>
                            <div class="package-features-image">
                                <img
                                    src="/images/pageheaders/school-leadership-tours.jpg"
                                    alt="School Leadership Tours"
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
                                    We also have School Leadership Tours as
                                    follows:
                                </p>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <ul class="packaging-contents">
                                            <li>
                                                <p>
                                                    <i
                                                        class="fa fa-angle-double-right"
                                                    ></i>
                                                    School Directors Retreat
                                                    Tours
                                                </p>
                                            </li>
                                            <li>
                                                <p>
                                                    <i
                                                        class="fa fa-angle-double-right"
                                                    ></i>
                                                    School Management Retreat
                                                    Tours
                                                </p>
                                            </li>
                                            <li>
                                                <p>
                                                    <i
                                                        class="fa fa-angle-double-right"
                                                    ></i>
                                                    Educators-Management Retreat
                                                    Tours
                                                </p>
                                            </li>
                                            <li>
                                                <p>
                                                    <i
                                                        class="fa fa-angle-double-right"
                                                    ></i>
                                                    School Leadership Seminars
                                                </p>
                                            </li>
                                            <li>
                                                <p>
                                                    <i
                                                        class="fa fa-angle-double-right"
                                                    ></i>
                                                    Educators Continuous
                                                    Professional Development CPD
                                                    Retreat Tours
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div>
                                    <a
                                        href="contact-us"
                                        class="read-more hvr-fade"
                                        >Contact Us</a
                                    >
                                </div>
                                <p><br /></p>
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
