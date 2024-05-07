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
                                <h2>Travel Tour Service</h2>
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
                                <h2>Travel Tour Service</h2>
                                <br />
                            </div>
                            <div class="package-features-image">
                                <img
                                    src="/images/pageheaders/vc.jpg"
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
                                    For decades, Zenith Travels and Tours Ltd
                                    has been welcoming groups of every size. We
                                    organize the perfect tours for meetings,
                                    incentive programs, executive retreats,
                                    family reunions and destination weddings. As
                                    a matter of fact, some of life's greatest
                                    moments are spent with friends, colleagues,
                                    and family, so we ensure your group indulges
                                    in the best - enjoying the impressive
                                    services and amenities you find at five-star
                                    luxury resorts.
                                </p>
                                <p>
                                    Travelling on a small group holiday is more
                                    flexible and allows us to be less
                                    conspicuous: we travel and eat with the
                                    local people, stay in smaller, family-run
                                    hotels and visit places inaccessible to
                                    larger groups. In a small group it's much
                                    easier to get off the beaten track, meet the
                                    people and experience authentic local life.
                                    Not only does this minimise our impact on
                                    the environment, it also makes for a better,
                                    more inspiring experience for you.
                                </p>
                                <p>
                                    Unlike conventional group holidays, where
                                    you'll see large groups and flag waving
                                    guides, our small group adventures are
                                    informal and flexible, allowing you lots of
                                    time to explore on your own. As a matter of
                                    fact, on every tour there's a balance
                                    between group activities and personal time
                                    for you to explore independently or relax as
                                    you like.
                                </p>
                                <p>
                                    We've been told time and again that the
                                    small group aspect of our holidays is what
                                    makes them special. Exploring close-to-home
                                    or far flung corners of the world with other
                                    like-minded travellers adds an extra
                                    dimension to your holiday. The groups are
                                    made up of mixed ages, mixed interests and
                                    mixed nationalities, but everyone's
                                    guaranteed to have shared love of travel and
                                    adventure. Moreover, our travel groups work
                                    so well such that it's not unusual for
                                    lifelong friendships to be formed on our
                                    tours.
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
