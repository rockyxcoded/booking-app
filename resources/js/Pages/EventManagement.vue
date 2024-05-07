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
                                <h2>Event Management</h2>
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
                                <h2>Event Management</h2>
                                <br />
                            </div>
                            <div class="package-features-image">
                                <img
                                    src="/images/pageheaders/event-management.jpg"
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
                                    With our professional events planners, we
                                    are adequately equipped to craft to your
                                    taste no matter any size of event our
                                    clients may have in mind. Be it small or
                                    large event – we have the capacity and
                                    capability to deliver a One-in-Town event
                                    for any discerning client.
                                </p>
                                <p>
                                    From wedding, conferences, launching of
                                    products/projects, fund raising, annual
                                    general meetings, sport events, ceremonies,
                                    concerts, festivals and many more. We give
                                    attention to details.
                                </p>
                                <!-- -->
                                <p>
                                    Zenith Travels and Tours Ltd is a company
                                    focused on the delivery of quality services
                                    and provision of exceptional solutions for
                                    the realization of each client's unique
                                    event needs, ultimately adding value to your
                                    business.
                                </p>
                                <p>
                                    We specialize in corporate events planning
                                    and conferences, galas, fashion and trade
                                    shows, fund raising coordination, team
                                    building activities, board retreats,
                                    conventions, seminars, product launches,
                                    theme parties and grand opening
                                    celebrations.
                                </p>
                                <p>
                                    Our experience and key relationships in the
                                    industry enable us to source and invite
                                    clients to your events solely based on our
                                    recommendations and the strong relationships
                                    we have fostered. We have successfully built
                                    core competencies in initiating, planning
                                    and executing major events with celebrants,
                                    host companies etc.
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
