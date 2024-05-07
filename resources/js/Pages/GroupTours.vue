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
                                <h2>Group Tours</h2>
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
                                <h2>Group Tours</h2>
                                <br />
                            </div>
                            <div class="package-features-image">
                                <img
                                    src="/images/pageheaders/group-tours.jpg"
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
                                    We organise several group tours to different
                                    fascinating, exotic and beautiful
                                    destinations across the world. We have a
                                    highly resourceful and self motivated team
                                    in our Group Tours Department with high
                                    capacity, capabilities, experience and vast
                                    knowledge in the travel and tourism field
                                    who are adequately equipped to design and
                                    deliver an affordably low budget, carefully
                                    planned and top notch group tour package
                                    that will meet any group’s specific travel
                                    needs. In our Group Tour product profile, we
                                    have both Closed Group Tours and Regular
                                    Group Tours.
                                </p>
                                <p>
                                    Closed Group Tours are tours specially and
                                    specifically designed for a particular group
                                    from the same organization with specific
                                    needs while the Regular Group Tours are the
                                    advertised destinations that any customers
                                    can key in. 90% of our Group Tours are
                                    Escorted Group Tours. This means a Tour
                                    Executive from our office will travel and be
                                    with your group throughout the length and
                                    duration of your trip purposely to attend to
                                    every of your group’s needs and to see and
                                    attend to the welfare and wellbeing of every
                                    individual member in your group.
                                </p>
                                <p>
                                    The elements of our Group Tours include
                                    designing of your itinerary at no cost, visa
                                    processing where necessary, flight ticket,
                                    accommodation, meals, group activities, team
                                    building modules, transportation, games,
                                    tours and many more activities as may be
                                    specifically needed by your group.
                                </p>
                                <p>
                                    Handover your Group’s travel package or join
                                    any of our regular group package tours and
                                    enjoy a well crafted group tour experience
                                    ever! Call or send a mail to our group tours
                                    department or fill our online registration
                                    form to enquire for more details.
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
