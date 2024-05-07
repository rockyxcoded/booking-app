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
                                <h2>STEAM TOURS</h2>
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
                                    Science, Technology, Engineering, Art and
                                    Mathematics Tours
                                </h2>
                                <br />
                            </div>
                            <div class="package-features-image">
                                <img
                                    src="/images/pageheaders/steam-tours.jpg"
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
                                    Science, Technology, Engineering, Art and
                                    Mathematics Tours
                                </p>
                                <p>Multi Activity Tours</p>
                                <p>Sightseeing Tours</p>
                                <p>Adventure Tours</p>
                                <p>Art & Craft Tours</p>
                                <p>Art & Dye Tours</p>
                                <p>Subject-Based Tours:</p>

                                <h2>&nbsp;</h2>
                                <p>Geographical Tours</p>
                                <p>Historical Tours</p>
                                <p>Drama Tours</p>
                                <p>Literature Tours</p>
                                <p>Engineering Tours</p>
                                <p>Software Tours</p>
                                <p>Home Science Tours</p>
                                <p>Mathematical Tours</p>
                                <p>Cooking Tours</p>

                                <h2>&nbsp;</h2>
                                <p>Leadership In Training Tours</p>
                                <p>Learning Skill Tours</p>
                                <p>Life Skill Tours</p>
                                <p>Day Break Tours</p>
                                <p>Experiential Tours</p>
                                <p>Performing Arts Tours</p>
                                <p>Cultural Tours</p>
                                <p>Extra-Curriculum Tours</p>
                                <p>City Break Tours</p>
                                <p>
                                    Uniformed Group Tours – Boys’ Scout, Girls’
                                    Brigade, Boys’ Brigade, Girls’ Guide
                                </p>
                                <p>Valedictory Tours</p>
                                <p>Gap Year Tours</p>
                                <p>Grad Tours</p>

                                <h2>&nbsp;</h2>
                                <p>School Language Tours:</p>
                                <p>French Language Tour</p>
                                <p>English Language</p>
                                <p>Spanish Language Tour</p>
                                <p>Mandarin Language Tour</p>
                                <p>Portuguese Language Tour</p>
                                <p>German Deutsche Language Tour</p>
                                <p>Swahili Language Tour</p>
                                <p>Yoruba Language</p>
                                <p>Hausa Language</p>
                                <p>Igbo Language</p>
                                <p>Italian Language Tour</p>
                                <p>Portuguese Language Tour</p>
                                <p>Gap Year Tours</p>
                                <p>Internship Tours</p>
                                <p>Theme Park Tours</p>
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
