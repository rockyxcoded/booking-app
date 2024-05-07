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
                                <h2>Immigration and Protocol</h2>
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
                                <h2>Immigration and Protocol</h2>
                                <br />
                            </div>
                            <div class="package-features-image">
                                <img
                                    src="/images/pageheaders/immigration-protocol.jpg"
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
                                    Zenith Travels and Tours Ltd is also a
                                    logistics firm known globally and we offer
                                    diversified services which includes
                                    logistics, project management, projects
                                    design and implementation, aviation,
                                    business et al with a passion for creating
                                    solutions with the common goal of creating a
                                    Global brand.
                                </p>
                                <p>
                                    We provide opportunities for individuals and
                                    corporate bodies looking for prospective
                                    investment. We help companies who outsource
                                    their logistics needs to us by providing
                                    required support. Our protocol services are
                                    handled by highly trained protocol
                                    professionals.
                                </p>
                                <p>
                                    The same goes for our immigration support
                                    services which include Procurement of
                                    Expatriate Quota, Renewal of Expatriate
                                    Quota, Preparation and collation of STR
                                    package for STR visa (Subject to
                                    Regularization visa),
                                    Regularization/re-entry of STR visa, Renewal
                                    of STR visas, Processing of re-entry visa,
                                    Procurement of cablegram for Temporary Work
                                    Permit, Preparation of monthly quota
                                    returns, Extension of Business visas,
                                    Extension of Tourist visas, Deletion of
                                    Expatriate position from Quota and lots
                                    more.
                                </p>
                                <p>
                                    We are internationally recognized as a
                                    reliable Protocol and Logistics company and
                                    we represent our clients' preeminent in
                                    their respective interest. Our professional
                                    service delivery ensures valuable and
                                    measurable results with your most precious
                                    assets entrust to us.
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
