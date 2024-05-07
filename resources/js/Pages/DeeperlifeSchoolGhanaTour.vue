<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import { Head } from "@inertiajs/vue3";
import { onMounted, ref } from "vue";
import BookService from "../Components/Partials/BookService.vue";

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
                                <h2>Deeperlife School Ghana Tour</h2>
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
                                <h2>Deeperlife School Ghana Tour</h2>
                                <br />
                            </div>
                            <div class="package-features-image pb-70">
                                <img
                                    src="/images/gallery/deeperlife_school_ghana_tour/photo6.jpg"
                                    alt=""
                                    class="img-responsove border-raduis-3"
                                />
                            </div>
                            <div class="package-features-image pb-70">
                                <img
                                    src="/images/gallery/deeperlife_school_ghana_tour/photo1.jpg"
                                    alt=""
                                    class="img-responsove border-raduis-3"
                                />
                            </div>
                            <div class="package-features-image pb-70">
                                <img
                                    src="/images/gallery/deeperlife_school_ghana_tour/photo2.jpg"
                                    alt=""
                                    class="img-responsove border-raduis-3"
                                />
                            </div>
                            <div class="package-features-image pb-70">
                                <img
                                    src="/images/gallery/deeperlife_school_ghana_tour/photo3.jpg"
                                    alt=""
                                    class="img-responsove border-raduis-3"
                                />
                            </div>
                            <div class="package-features-image pb-70">
                                <img
                                    src="/images/gallery/deeperlife_school_ghana_tour/photo4.jpg"
                                    alt=""
                                    class="img-responsove border-raduis-3"
                                />
                            </div>
                            <div class="package-features-image pb-70">
                                <img
                                    src="/images/gallery/deeperlife_school_ghana_tour/photo5.jpg"
                                    alt=""
                                    class="img-responsove border-raduis-3"
                                />
                            </div>
                            <div class="package-features-image pb-70">
                                <img
                                    src="/images/gallery/deeperlife_school_ghana_tour/photo7.jpg"
                                    alt=""
                                    class="img-responsove border-raduis-3"
                                />
                            </div>
                            <div class="package-features-image pb-70">
                                <img
                                    src="/images/gallery/deeperlife_school_ghana_tour/photo8.jpg"
                                    alt=""
                                    class="img-responsove border-raduis-3"
                                />
                            </div>
                            <div class="package-features-image pb-70">
                                <img
                                    src="/images/gallery/deeperlife_school_ghana_tour/photo9.jpg"
                                    alt=""
                                    class="img-responsove border-raduis-3"
                                />
                            </div>
                            <div class="package-features-image pb-70">
                                <img
                                    src="/images/gallery/deeperlife_school_ghana_tour/photo10.jpg"
                                    alt=""
                                    class="img-responsove border-raduis-3"
                                />
                            </div>
                            <div class="package-features-image pb-70">
                                <img
                                    src="/images/gallery/deeperlife_school_ghana_tour/photo11.jpg"
                                    alt=""
                                    class="img-responsove border-raduis-3"
                                />
                            </div>
                            <div class="package-features-image pb-70">
                                <img
                                    src="/images/gallery/deeperlife_school_ghana_tour/photo12.jpg"
                                    alt=""
                                    class="img-responsove border-raduis-3"
                                />
                            </div>
                            <div class="package-features-image pb-70">
                                <img
                                    src="/images/gallery/deeperlife_school_ghana_tour/photo13.jpg"
                                    alt=""
                                    class="img-responsove border-raduis-3"
                                />
                            </div>
                            <div class="package-features-image pb-70">
                                <img
                                    src="/images/gallery/deeperlife_school_ghana_tour/photo14.jpg"
                                    alt=""
                                    class="img-responsove border-raduis-3"
                                />
                            </div>
                            <div class="package-features-image pb-70">
                                <img
                                    src="/images/gallery/deeperlife_school_ghana_tour/photo15.jpg"
                                    alt=""
                                    class="img-responsove border-raduis-3"
                                />
                            </div>
                            <div class="package-features-image pb-70">
                                <img
                                    src="/images/gallery/deeperlife_school_ghana_tour/photo16.jpg"
                                    alt=""
                                    class="img-responsove border-raduis-3"
                                />
                            </div>
                            <div class="package-features-image pb-70">
                                <img
                                    src="/images/gallery/deeperlife_school_ghana_tour/photo17.jpg"
                                    alt=""
                                    class="img-responsove border-raduis-3"
                                />
                            </div>
                            <div class="package-features-image pb-70">
                                <img
                                    src="/images/gallery/deeperlife_school_ghana_tour/photo18.jpg"
                                    alt=""
                                    class="img-responsove border-raduis-3"
                                />
                            </div>
                            <div class="package-features-image pb-70">
                                <img
                                    src="/images/gallery/deeperlife_school_ghana_tour/photo19.jpg"
                                    alt=""
                                    class="img-responsove border-raduis-3"
                                />
                            </div>
                            <div class="package-features-image pb-70">
                                <img
                                    src="/images/gallery/deeperlife_school_ghana_tour/photo20.jpg"
                                    alt=""
                                    class="img-responsove border-raduis-3"
                                />
                            </div>
                            <div class="package-features-image pb-70">
                                <img
                                    src="/images/gallery/deeperlife_school_ghana_tour/photo21.jpg"
                                    alt=""
                                    class="img-responsove border-raduis-3"
                                />
                            </div>
                            <div class="package-features-image pb-70">
                                <img
                                    src="/images/gallery/deeperlife_school_ghana_tour/photo22.jpg"
                                    alt=""
                                    class="img-responsove border-raduis-3"
                                />
                            </div>
                            <div class="package-features-image pb-70">
                                <img
                                    src="/images/gallery/deeperlife_school_ghana_tour/photo23.jpg"
                                    alt=""
                                    class="img-responsove border-raduis-3"
                                />
                            </div>
                            <div class="package-features-image pb-70">
                                <img
                                    src="/images/gallery/deeperlife_school_ghana_tour/photo24.jpg"
                                    alt=""
                                    class="img-responsove border-raduis-3"
                                />
                            </div>
                            <div class="package-features-image pb-70">
                                <img
                                    src="/images/gallery/deeperlife_school_ghana_tour/photo25.jpg"
                                    alt=""
                                    class="img-responsove border-raduis-3"
                                />
                            </div>
                            <div class="package-features-image pb-70">
                                <img
                                    src="/images/gallery/deeperlife_school_ghana_tour/photo26.jpg"
                                    alt=""
                                    class="img-responsove border-raduis-3"
                                />
                            </div>
                            <div class="package-features-image pb-70">
                                <img
                                    src="/images/gallery/deeperlife_school_ghana_tour/photo27.jpg"
                                    alt=""
                                    class="img-responsove border-raduis-3"
                                />
                            </div>
                            <div class="package-features-image pb-70">
                                <img
                                    src="/images/gallery/deeperlife_school_ghana_tour/photo28.jpg"
                                    alt=""
                                    class="img-responsove border-raduis-3"
                                />
                            </div>
                            <div class="package-features-image pb-70">
                                <img
                                    src="/images/gallery/deeperlife_school_ghana_tour/photo29.jpg"
                                    alt=""
                                    class="img-responsove border-raduis-3"
                                />
                            </div>
                            <div class="package-features-image pb-70">
                                <img
                                    src="/images/gallery/deeperlife_school_ghana_tour/photo30.jpg"
                                    alt=""
                                    class="img-responsove border-raduis-3"
                                />
                            </div>
                            <div class="package-features-image pb-70">
                                <img
                                    src="/images/gallery/deeperlife_school_ghana_tour/photo31.jpg"
                                    alt=""
                                    class="img-responsove border-raduis-3"
                                />
                            </div>
                        </div>
                        <!-- tab menu strat -->
                        <div class="row">
                            <div class="col-md-2 col-sm-1"></div>
                            <div class="col-md-7 col-sm-8">
                                <div>
                                    <h3 align="center">
                                        You need to join us on our<br />next
                                        tour to Amazing Destinations:
                                    </h3>
                                </div>
                                <aside>
                                    <div class="booking-form">
                                        <form action="contact-us" method="post">
                                            <div class="form-group">
                                                <button
                                                    type="submit"
                                                    class="booking-confirm hvr-shutter-out-horizontal"
                                                >
                                                    Contact Us Now
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div>
                    <!-- single package tab with details -->
                    <br /><br />
                    <BookService />
                </div>
            </div>
        </section>
    </GuestLayout>
</template>
