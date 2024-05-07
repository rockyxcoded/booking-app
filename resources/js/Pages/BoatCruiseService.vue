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
        <section class="section-paddings single-package-area">
            <div class="container">
                <div class="row">
                    <!-- single package tab with details -->
                    <div class="col-md-8 col-sm-12">
                        <div class="single-package-details">
                            <div class="single-package-title">
                                <h2>Boat Cruise Service</h2>
                                <br />
                            </div>
                            <div class="package-features-image">
                                <img
                                    src="/images/pageheaders/bcruise.jpg"
                                    alt="Superior Car-Rental Service"
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
                                        Safety is of utmost importance to us at
                                        Zenith Travels and Tours Ltd. Therefore
                                        apart from our own private security
                                        outfits, we also engage the services of
                                        The Nigeria Police escorts to protect
                                        our boats, and passengers at all times.
                                        We adhere to the requirements of the
                                        Health Safety and Environment.
                                    </p>
                                    <p>
                                        We provide reliable and efficient ferry
                                        services to all our passengers. In
                                        achieving this, we employ the best
                                        practices and engage modern method of
                                        operation. We are a 24hours Company and
                                        one of our objectives is to transport
                                        passengers by ferries/ boats all around
                                        Lagos state and throughout the
                                        Federation. We are known for ferrying
                                        both locals and non-locals for both
                                        business and pleasure purposes.
                                    </p>
                                    <p>
                                        We provide a safe, comfortable and
                                        affordable ferry services for commuters
                                        in the country. We constantly adhere to
                                        our core values, which include customer
                                        focus, promptness to service calls,
                                        teamwork, safety and professionalism. In
                                        fact, we consider our reputation to be
                                        our greatest asset.
                                    </p>
                                    <p>
                                        Our boats cruise from Osbourne Jetty to
                                        Snake Island/Tin Can Island. We also
                                        ferry from Osbourne Jetty to Ishahayi
                                        Beach as well as from Osbourne Jetty to
                                        Tarkwa Bay including other interested
                                        places of choice.
                                    </p>
                                    <p>
                                        We also render special boat services for
                                        company executives such as "Executive
                                        Boat Hiring for Transportation" as well
                                        as "Work Boat Hiring for
                                        Transportation".
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
