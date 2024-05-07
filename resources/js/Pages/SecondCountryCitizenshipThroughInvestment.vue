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
                                <h2>
                                    Second Country Citizenship Through
                                    Investment
                                </h2>
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
                                    Second Country Citizenship Through
                                    Investment
                                </h2>
                                <br />
                            </div>
                            <div class="package-features-image">
                                <img
                                    src="/images/pageheaders/second-country-citizenship-through-investment.jpg"
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
                                    The second country citizenship is the
                                    acquisition of citizenship of another
                                    country aside your country of birth majorly
                                    through investment in the economy of a
                                    country by establishing a business, purchase
                                    and acquisition of property or donating to
                                    programmes instituted by the government of
                                    the country awarding such citizenship.
                                </p>
                                <p>
                                    There is specific amount of funds as
                                    stipulated by the laws of the awarding
                                    country that qualifies you for the
                                    investment that suits your second
                                    citizenship status which will be explained
                                    to you when you apply. A major advantage of
                                    Second Citizenship Status is that the fact
                                    that once your application is approved, the
                                    citizenship status is also conferred on all
                                    the members of your immediate family, your
                                    spouse and children.
                                </p>
                                <p>
                                    The moment you are awarded the Second
                                    citizenship status you automatically become
                                    a citizen of the country and you are
                                    eligible to use the international passport
                                    of the country and you are entitled to all
                                    the benefits and rights accruing to the
                                    original citizens of the country. Through
                                    our operational network, we have access to
                                    major countries of the world offering Second
                                    Citizenship Status.
                                </p>
                                <p>
                                    If you desire to have a dual citizenship
                                    status for yourself and family, please
                                    contact us without any delay. We shall
                                    assist you to acquire the citizenship of any
                                    country of your choice.
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
