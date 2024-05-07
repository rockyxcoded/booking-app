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
                                <h2>Ticketing and Reservation</h2>
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
                                <h2>Ticketing and Reservation</h2>
                                <br />
                            </div>
                            <div class="package-features-image">
                                <img
                                    src="/images/pageheaders/ticketing.jpg"
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
                                    As an IATA accredited Travel Agency, Zenith
                                    Travels & Tours is strategically positioned
                                    to offer affordable and cheap flight tickets
                                    to our clients. Our ticketing and
                                    reservation executives are trained and
                                    equipped to provide seamless flight routing
                                    and connections even at a very short notice
                                    to our clients that will make their
                                    traveling a worthwhile and stress-free
                                    experience.
                                </p>
                                <!-- -->
                                <p>
                                    Zenith Travels and Tours Ltd offers
                                    first-class ticketing services on both local
                                    and international flights. We provide the
                                    above stated service to both individuals and
                                    corporate bodies to enable them achieve
                                    their travel plans to any destination in the
                                    world. We ensure you get the best location
                                    most convenient for you and your family
                                    members amongst available seats.
                                </p>
                                <p>
                                    Whether you are booking first-class,
                                    business or economy class, you can count on
                                    us for the most affordable fees you can ever
                                    get among our contemporaries. We will guide
                                    you through the booking conditions of
                                    interested airlines so that nothing catches
                                    you unaware.
                                </p>
                                <p>
                                    Our Inventory Control System has a real time
                                    interface to major airlines - yield
                                    management system to support a permanent
                                    optimization of the offered booking classes
                                    in response to changes in demand or pricing
                                    strategies of a competitor. We therefore
                                    know the availability of airlines as well as
                                    the respective special offers of various
                                    airlines at real-time basis - this is why
                                    our clients enjoy the best price ever.
                                </p>
                                <p>
                                    Our clients know that we effectively curb
                                    problems such as; unavailability of seats,
                                    missing of flights, and other several
                                    hassles at the airport. In fact, we help our
                                    clients plan far ahead and this has always
                                    saved them time, money as well as future
                                    aggravation.
                                </p>
                                <p>
                                    We commence our ticketing service by
                                    understanding your corporate objectives.
                                    Working with your specific objectives, we
                                    then arrange and manage your travel by
                                    taking advantage of our extensive
                                    relationships with airlines, hotels,
                                    transport companies and regional
                                    authorities. In a nut shell, we match your
                                    desired goals with proper logistics.
                                </p>
                                <p>
                                    Allow us to handle all your travel
                                    logistics. We concur that the best travel
                                    happens when travel decisions are made by
                                    efficient travel companies like ours. Using
                                    efficient approach, we will make sure your
                                    tickets and travel reservations are made
                                    according to your desires.
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
