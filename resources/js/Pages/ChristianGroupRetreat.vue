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
                                <h2>Christian Group Retreat</h2>
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
                                <h2>Christian Group Retreat</h2>
                                <br />
                            </div>
                            <div class="package-features-image">
                                <img
                                    src="/images/pageheaders/christian-group-retreat.jpg"
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
                                    One of the fundamental aspects of the
                                    Ministry of Jesus Christ and other great
                                    Apostles of God is that on many occasions
                                    they go into seclusion to seek for the face
                                    of God by going on retreat remotely offsite
                                    of their domains and worship centres. As a
                                    Christian group, going on a retreat with
                                    your group can help forge relationship with
                                    God Almighty, forge friendships with other
                                    church/group members, and give everyone
                                    space to relax, unwind and spend time with
                                    God. Going on a spiritual retreat removes
                                    every earthly distraction when you commune
                                    with your God.
                                </p>
                                <p>
                                    We are expertly equipped to design, arrange
                                    and package both local and international
                                    retreat to any destination of your choice
                                    and we have loads of spiritually filled and
                                    inclined destinations all over the world
                                    that we can recommend to you for your
                                    religious group’s retreat.
                                </p>
                                <p>
                                    We have specific packages for Women
                                    Fellowship, Youths Camp, Children Camp,
                                    Couples’ Retreat, Prayer Warriors’ Retreat,
                                    The Greeters’ Retreat, Ushers’ Retreat,
                                    Technical Team Retreat, The Interpreters’
                                    Retreat, Evangelism Group Retreat, The
                                    Singles Fellowship, Men Fellowship,
                                    Choristers, Church Leadership and
                                    Administrator Retreat, Elders Retreat, The
                                    Pastorate Retreat and many more.
                                </p>
                                <p>
                                    The package components encompass small group
                                    discussions, worship time, personal
                                    reflection, Christian service, and more.
                                </p>
                                <p>
                                    In actualizing your Christian Group Retreat,
                                    we will assist your group with the planning;
                                    meals arrangement if necessary, where
                                    fasting is part of your retreat programme we
                                    will arrange all your meals for you as your
                                    group may prefer when it is time to break
                                    your fasting. In addition, we shall provide
                                    transportations, accommodations and other
                                    related logistics that will make the purpose
                                    of the retreat to be achieved and
                                    successful.
                                </p>
                                <p>
                                    We will advise you on the best places that
                                    will suit your specific group to hold your
                                    retreat because it is not all places that
                                    may meet a group’s membership and individual
                                    needs. This is our responsibility to cater
                                    for you in achieving a result and goal
                                    oriented programme. We will even go to the
                                    extent of guiding and helping you to prepare
                                    and arrange sacred (quiet/still) place(s)
                                    where your group can congregate and assemble
                                    for prayers when you arrive at your retreat
                                    destination. In addition, we can also
                                    suggest some spiritually inspired Christian
                                    programmes, activities and games that will
                                    make you feel fulfilled during your
                                    spiritual retreat.
                                </p>
                                <a href="contactus" class="read-more hvr-fade"
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
