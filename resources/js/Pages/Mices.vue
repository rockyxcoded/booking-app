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
                                <h2>MICES</h2>
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
                                <h2>
                                    Meeting Incentive Conference Exhibition
                                    Seminar
                                </h2>
                                <br />
                            </div>
                            <div class="package-features-image">
                                <img
                                    src="/images/pageheaders/mices.jpg"
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
                                    Our Meeting Incentive Conference Exhibition
                                    Seminar: It is so obvious that organizing a
                                    befitting MICE package is quite a herculean
                                    task. This where Zenith Travels & Tours
                                    comes in and interface with you our
                                    inestimable client and remove the
                                    bottlenecks, huge burdens and stress of
                                    event planning and organization from the
                                    shoulders of clients.
                                </p>
                                <p>
                                    Our professional MICE team is professionally
                                    equipped to design a cost saving tailor made
                                    in-person and virtual MICE events for our
                                    clients. We are with you from the
                                    conception, planning, creating of an event
                                    theme to final execution and delivery of
                                    your event.
                                </p>
                                <p>
                                    Depending on the request of our client, we
                                    seek for speakers, faculty members, resource
                                    persons, securing and thematic decoration of
                                    the venue , local and ground transportation,
                                    airport transfers, visa processing,
                                    obtaining legal approval and appropriate
                                    permissions from the government and
                                    profession authorities of the hosting
                                    destination, event brochures, customized
                                    souvenirs, flight tickets, tour & leisure
                                    components, team building activities,
                                    evening social activities, performing
                                    artists, cultural activities, accommodation,
                                    gala night, concerts, award ceremony, all
                                    meals, festivals and the media coverage of
                                    the entire events and many more.
                                </p>
                                <p>
                                    On behalf of our clients, we handle series
                                    of events which include conference, annual
                                    general meetings, end of the year corporate
                                    parties, institutional lectures, book
                                    presentations, exhibitions, crusades,
                                    congresses, rallies, fairs, conventions,
                                    networking events, staff and sales channels
                                    incentive programmes, brand promotions,
                                    product activations, competitions, critical
                                    and creative thinking programmes, Reunion
                                    programmes and many more.
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
