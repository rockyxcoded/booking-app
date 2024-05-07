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
                                <h2>Work! Study!! & Live Abroad</h2>
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
                                <h2>Work! Study!! & Live Abroad</h2>
                                <br />
                            </div>
                            <div class="package-features-image">
                                <img
                                    src="/images/pageheaders/work-study-live-abroad.jpg"
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
                                    We represent different and major
                                    institutions from primary schools to
                                    universities around the world that offer and
                                    deliver world standard education to students
                                    which provide an excellent opportunity to
                                    experience a new culture, make international
                                    connections and prepare for the global
                                    employment market.
                                </p>
                                <p>
                                    Our Study & Work Abroad especially for the
                                    higher institutions is designed as a Dual
                                    Package for a student to study and work
                                    simultaneously. The income earns from such
                                    employment is used by the student as living
                                    expenses.
                                </p>
                                <p>
                                    In some situations, it is the employer that
                                    pays the tuition fees of the student and the
                                    employer will still pay monthly or weekly
                                    salaries or stipends to the student. This
                                    means that the student will pay no tuition
                                    fee throughout the entire duration or tenure
                                    of the programme and still earns living
                                    incomes. This is more of a FREE EDUCATION
                                    OPPORTUNITY! Click or call us to learn more
                                    on this study and work abroad opportunity.
                                    In addition, we have some of our school
                                    partners that offer different categories of
                                    regular and periodic scholarships.
                                </p>
                                <p>
                                    <!-- To access this service, click on <a href="https://www.internshipworldwide.com.ng">www.internshipworldwide.com.ng</a> to start exploring the internship opportunities of your choice in any destination of your choice anywhere in the world. -->
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
