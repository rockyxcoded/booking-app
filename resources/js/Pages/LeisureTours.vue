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
                                <h2>Leisure Tours</h2>
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
                                <h2>Leisure Tours</h2>
                                <br />
                            </div>
                            <div class="package-features-image">
                                <img
                                    src="/images/pageheaders/leisure-tours.jpg"
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
                                    Various categories of bespoke leisure tours
                                    as you may want and prefer are available:
                                </p>
                                <p>
                                    <b>Corporate Booking Tool CBT:-</b> This is
                                    a product for Corporate to own their own
                                    in-house travel agencies and attend to their
                                    own travel needs without going through any
                                    intermediary agents, service providers or
                                    any airline. With the Corporate Booking Tool
                                    a corporate can easily and seamlessly book
                                    and pay for flight tickets, hotel
                                    accommodation, airport taxi pick up and drop
                                    off, train tickets, sports, shows and events
                                    and many other travel elements from the
                                    comfort of your office or home or anywhere
                                    there is internet service and from any
                                    internet connected devices. The overall
                                    benefit of this tool include among others,
                                    it is cheaper to install, it reduces your
                                    overheads and expenses on travel costs
                                    because you would have removed and saved the
                                    margin that goes to an agent or intermediary
                                    service provider and it will enable your
                                    company to control the budget expense on
                                    travels as well as control the amount your
                                    staff can spend for any trip be it personal
                                    or official. It is as simple as that. Call
                                    or invite us to demonstrate how CBT will
                                    work for your organisation.
                                </p>
                                <p>
                                    <b>Church Group Tours:-</b> This is a
                                    spiritual retreat package meant for
                                    different groups within a church to go on
                                    spiritual adventures and tours to
                                    evangelise, win souls for Christ, provide
                                    for the less privilege through charity,
                                    humanitarian and volunteering works, seek
                                    the face of God concerning their ministries,
                                    brethrens and families, learn about
                                    themselves, collectively and individually
                                    dig deep into their callings, and for
                                    bonding and friendships.
                                </p>
                                <p>
                                    <b>Baby Shower Experiential:-</b> Though
                                    Baby Shower originates from America and it
                                    is an American tradition. This tradition and
                                    experience is spreading rapidly across the
                                    world. The fact is that the experience is
                                    being assimilated and imbibed by peoples
                                    around the world where a couple will want to
                                    organize a social event to host families and
                                    friends to officially declare the gender of
                                    an upcoming child whose pregnancy the mother
                                    is carrying.
                                </p>
                                <p>
                                    Entertainment Packages:- We package and
                                    organise series of social and entertaining
                                    events and shows during various yuletide and
                                    celebration time.
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
