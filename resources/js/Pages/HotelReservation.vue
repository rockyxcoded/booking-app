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
                                <h2>Hotel Reservation</h2>
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
                                <h2>Hotel Reservation</h2>
                                <br />
                            </div>
                            <div class="package-features-image">
                                <img
                                    src="/images/pageheaders/hotel-reservation.jpg"
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
                                    We partner with major global hotel chains
                                    and brands. We have over 2,000,000 of hotels
                                    and different categories of business and
                                    leisure based accommodation around the world
                                    ranging from the simple BnB (Bed and
                                    Breakfast) budget accommodation to the 2-5
                                    star as well as the superlative resorts,
                                    apartments and villa in our hotel and
                                    accommodation inventories from which you can
                                    pick the one that suits your accommodation
                                    needs.
                                </p>
                                <!-- -->
                                <p>
                                    Zenith Travels and Tours Ltd can arrange
                                    hotel accommodation for you at ideal
                                    locations nationwide. We offer the most
                                    preferred distinguished hotels for
                                    travellers, where you will enjoy classic,
                                    comfortable accommodations and other
                                    facilities for relaxation. We will help you
                                    arrange an ideal lodging that will give you
                                    value for your money a cool environment
                                    where you can find inspiration without the
                                    usual distractions.
                                </p>
                                <p>
                                    We provide you with a wide choice of hotel
                                    reservations to fit your budget. We give you
                                    information on hotels that has major
                                    international standards. We will recommend
                                    the best restaurants that provide a variety
                                    of local dishes. We know all the safe cool
                                    joints where you can really have a good time
                                    - nightclubs, beaches, cinemas, music shows
                                    et al.
                                </p>
                                <p>
                                    We can convert your cash to a local smart
                                    card accepted in most shops in major cities
                                    in Nigeria so that you wouldn't need to
                                    carry cash around. We also have information
                                    on the local markets where you can buy local
                                    crafts at good prices as there are shops
                                    specialized in top quality crafts from all
                                    over Africa. And if your travelled primarily
                                    for business, we can arrange temporary
                                    office accommodation with secretarial staff
                                    and Internet access to assist you do your
                                    business in comfort and style.
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
