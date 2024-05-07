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
                                <h2>Educational Tours</h2>
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
                                <h2>
                                    Educational Tours and School Holiday Trips
                                </h2>
                                <br />
                            </div>
                            <div class="package-features-image">
                                <img
                                    src="/images/pageheaders/educational-tours-and-school-holiday-trips.jpg"
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
                                    This is our niche. Educational and Holiday
                                    Tour is our specialty. We know all the
                                    intricacies of educational travel and
                                    student holiday tour packages like the back
                                    of our hands. With all modesty, we conceive,
                                    design, package and organize the largest
                                    curriculum linked education tours with over
                                    5,000 school students travelling through our
                                    travel network to different destinations
                                    across the world annually.
                                </p>
                                <p>
                                    We basically infuse curriculum modules
                                    spiced with high dose of unlimited
                                    interactive and engaging games and fun in
                                    all our school trips, educational tours and
                                    holiday tour packages for school students.
                                    During every of our school trip, we ensure
                                    we link your school’s curriculum to all the
                                    places your students will be visiting which
                                    makes learning come alive.
                                </p>
                                <p>
                                    In order to make the trip more engaging for
                                    your students, we create series of
                                    teambuilding and learning skills. We provide
                                    work-pack to each student to aid their
                                    learning skills during every tour. Hence, we
                                    say we Bring Learning to Life. We curate
                                    over 65 school holiday related and
                                    educational tour products which your school
                                    can choose from and will be customized
                                    specifically to suit your school’s tour
                                    requirements and travel goals. We are the
                                    only African company member of the Council
                                    for Learning Outside the Classroom (CLOtC)
                                    and we are a recipient of Quality Badge
                                    Award of the Council for Learning Outside
                                    the Classroom (CLOtC).
                                </p>
                                <p>
                                    We have different curriculum linked and
                                    holiday tour packages we organize for
                                    schools and students to different
                                    destinations across the world, amongst which
                                    are the following from which you can choose
                                    for your students and wards:
                                </p>
                                <p>Summer Holiday Camp Educational Tours</p>
                                <p>Easter Holiday Camp & Educational Tours</p>
                                <p>Curriculum linked Tours</p>
                                <p>Art & Design Tours</p>
                                <p>Mid Term Break Tours</p>
                                <p>Musical Tours</p>
                                <p>
                                    <a
                                        href="contact-us"
                                        class="read-more hvr-fade"
                                        >Contact Us</a
                                    >
                                </p>
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
