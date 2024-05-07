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
                                <h2>Products</h2>
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

        <section class="section-paddings single-package-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <div class="col-md-6 col-sm-12">
                            <div class="single-package">
                                <div class="package-image">
                                    <a href="corporate-and-management-retreats"
                                        ><img
                                            src="/images/thumbnails/products/corporate-and-management-retreats.jpg"
                                            alt="Corporate and Management Retreats"
                                            title="Corporate and Management Retreats"
                                        />
                                    </a>
                                </div>
                                <div class="package-content" align="center">
                                    <h3>
                                        <a
                                            href="corporate-and-management-retreats"
                                            >Corporate and Management
                                            Retreats</a
                                        >
                                    </h3>
                                </div>
                                <div
                                    class="package-calto-action"
                                    align="center"
                                >
                                    <ul class="ct-action">
                                        <a
                                            href="corporate-and-management-retreats"
                                            class="travel-booking-btn hvr-shutter-out-horizontal"
                                            >Learn More</a
                                        >
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--End single package -->

                        <div class="col-md-6 col-sm-12">
                            <div class="single-package">
                                <div class="package-image">
                                    <a href="mices"
                                        ><img
                                            src="/images/thumbnails/products/mices.jpg"
                                            alt="Meeting Incentive Conference Exhibition Seminar"
                                            title="Meeting Incentive Conference Exhibition Seminar"
                                        />
                                    </a>
                                </div>
                                <div class="package-content" align="center">
                                    <h3>
                                        <a href="mices"
                                            >Meeting Incentive Conference
                                            Exhibition Seminar</a
                                        >
                                    </h3>
                                </div>
                                <div
                                    class="package-calto-action"
                                    align="center"
                                >
                                    <ul class="ct-action">
                                        <a
                                            href="mices"
                                            class="travel-booking-btn hvr-shutter-out-horizontal"
                                            >Learn More</a
                                        >
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--End single package -->

                        <div class="col-md-6 col-sm-12 pt-100">
                            <div class="single-package">
                                <div class="package-image">
                                    <a href="work-study-live-abroad"
                                        ><img
                                            src="/images/thumbnails/products/work-study-live-abroad.jpg"
                                            alt="Work Study and Live Abroad"
                                            title="Work Study and Live Abroad"
                                        />
                                    </a>
                                </div>
                                <div class="package-content" align="center">
                                    <h3>
                                        <a href="work-study-live-abroad"
                                            >Work Study and Live Abroad</a
                                        >
                                    </h3>
                                </div>
                                <div
                                    class="package-calto-action"
                                    align="center"
                                >
                                    <ul class="ct-action">
                                        <a
                                            href="work-study-live-abroad"
                                            class="travel-booking-btn hvr-shutter-out-horizontal"
                                            >Learn More</a
                                        >
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--End single package -->

                        <div class="col-md-6 col-sm-12 pt-100">
                            <div class="single-package">
                                <div class="package-image">
                                    <a href="internship-abroad"
                                        ><img
                                            src="/images/thumbnails/products/internship-abroad.jpg"
                                            alt="Internship Abroad"
                                            title="Internship Abroad"
                                        />
                                    </a>
                                </div>
                                <div class="package-content" align="center">
                                    <h3>
                                        <a href="internship-abroad"
                                            >Internship Abroad</a
                                        >
                                    </h3>
                                </div>
                                <div
                                    class="package-calto-action"
                                    align="center"
                                >
                                    <ul class="ct-action">
                                        <a
                                            href="internship-abroad"
                                            class="travel-booking-btn hvr-shutter-out-horizontal"
                                            >Learn More</a
                                        >
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--End single package -->
                    </div>
                    <BookService />
                </div>
            </div>
        </section>
        <FeaturedTours />
    </GuestLayout>
</template>
