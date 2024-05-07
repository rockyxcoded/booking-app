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
                                <h2>Corporate and Management Retreats</h2>
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
                                <h2>Corporate and Management Retreats</h2>
                                <br />
                            </div>
                            <div class="package-features-image">
                                <img
                                    src="/images/pageheaders/corporate-and-management-retreats.jpg"
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
                                    Invite us to design a comprehensive offsite
                                    work retreat meeting at a superb and serene
                                    corporate friendly resort where we bring
                                    together in a unique way your management
                                    team to interface with other line staff for
                                    a refreshing experience and infuse your
                                    company’s corporate culture in your
                                    employees and management on how better
                                    service delivery and new innovations can be
                                    conceived and incorporated into the working
                                    system of your organization to meet with
                                    ever changing business climate and
                                    competition while at the same time
                                    re-emphasising the sustenance of the current
                                    sterling corporate culture of your
                                    organisation.
                                </p>
                                <p>
                                    In our corporate retreat package, we usually
                                    include series of teamwork and teambuilding
                                    activities that will provide framework that
                                    will assist in achieving your organisation’s
                                    corporate culture and corporate, goals,
                                    mission and vision and objectives.
                                </p>
                                <p>
                                    At the end of our Corporate Retreat package,
                                    we assure you that your staff will
                                    rediscover their passion for their work and
                                    responsibilities. When they return, their
                                    stress levels will be lower, meaning they
                                    will have renew and refreshing energy to
                                    work as hard as necessary without
                                    sacrificing quality and ready to actualize
                                    they learned and internalized during the
                                    Corporate Retreat Experience.
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
