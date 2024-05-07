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
                                <h2>Visa Counseling</h2>
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
                                <h2>Visa Counseling Support Service</h2>
                                <br />
                            </div>
                            <div class="package-features-image">
                                <img
                                    src="/images/pageheaders/visa-counseling.jpg"
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
                                    Visa processing is beyond the ordinary. It
                                    requires meticulous analysis and
                                    professional profiling to avoid visa
                                    application refusal by the embassy or the
                                    consulate or high commission. To avoid such
                                    visa refusal and the complications that
                                    comes with it, you need a professional visa
                                    consultancy company and expertise that give
                                    attentions to details.
                                </p>
                                <p>
                                    This is where the in-house seasoned
                                    professional visa application profiling
                                    experts at Zenith Travels & Tours come in to
                                    assess, advice and guide you from the
                                    filling of your visa application form, check
                                    and screen your documents to ensure they
                                    comply and meet the embassy’s specific
                                    requirements and standards that will ensure
                                    the success and approval of your visa
                                    application.
                                </p>
                                <p>
                                    However, it should be noted that visa
                                    approval is at the sole discretion of the
                                    visa officer and visa department of any
                                    embassy. Zenith Travels & Tours does not
                                    have visa approval and issuance authority
                                    status.
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
