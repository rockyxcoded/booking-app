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
                                <h2>Heritage Tours</h2>
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
                                <h2>Heritage Tours</h2>
                                <br />
                            </div>
                            <div class="package-features-image">
                                <img
                                    src="/images/pageheaders/heritage-tours.jpg"
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
                                    Our Heritage Tour products are specially
                                    designed to enable you rediscover your
                                    roots. Some families due to constant
                                    mobility and consistent migrations of their
                                    ancestors in the past centuries and till
                                    lately due to the ignoble slave trade
                                    adventures, ancient trading among the people
                                    of the past, economic survival and
                                    educational sour-journeying more from one
                                    location to another made the present
                                    generation lost their true origins,
                                    identities and roots. To rediscover their
                                    roots, we have several heritage vacation
                                    itineraries we tagged DISCOVER YOUR ROOTS -
                                    DYR that will link you to your source.
                                </p>
                                <p>
                                    We have packages for the Jews,
                                    African-Americans, Arabic descents, European
                                    Descents, African in Diaspora, South
                                    Americans and American Aborigines,
                                    Australian and New Zealand Aborigines,
                                    Indian-Americans to mention but a few of
                                    generations that have disconnected from
                                    their genealogical roots.
                                </p>
                                <p>
                                    During these tours, you will learn about the
                                    history and cultures of your people, you
                                    will identify your native homes and
                                    families. You will meet your own people and
                                    partake in their traditions, heritage and
                                    cultural activities. A strong bond would be
                                    reconnected to your roots at the end of
                                    these visits which will make you be visiting
                                    your ancestral homes from time to time and
                                    regularly.
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
