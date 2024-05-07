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
                                <h2>Travel and Health Insurance</h2>
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
                                <h2>Travel and Health Insurance</h2>
                                <br />
                            </div>
                            <div class="package-features-image">
                                <img
                                    src="/images/pageheaders/travel-insurance.jpg"
                                    alt=""
                                    class="img-responsove border-raduis-3"
                                />
                            </div>
                        </div>
                        <!-- tab menu strat -->

                        <!-- tab content start -->
                        <div class="row">
                            <br />
                            <div class="tab-content">
                                <div class="tour-description">
                                    <p>
                                        Zenith Travels and Tours Ltd finds a
                                        great deal on your travel insurance. It
                                        will only take a few minutes and all you
                                        need to do is just answer a few simple
                                        questions. When you are done, you can
                                        compare insurance quotes from elsewhere
                                        and discover for yourself that we are
                                        indeed the most affordable with the best
                                        features. We will help you find the
                                        travel insurance that will give you
                                        peace of mind so that you can enjoy your
                                        holiday knowing that if something goes
                                        wrong, you've got cover.
                                    </p>
                                    <p>
                                        A travel insurance policy can protect
                                        you from a variety of unexpected
                                        circumstances while you're traveling.
                                        Whether you are looking for trip
                                        cancellation coverage to pay for the
                                        costs of hotel reservations and other
                                        associated fees after a missed flight or
                                        if you need medical expense coverage to
                                        protect you from the extensive costs of
                                        overseas treatment and hospitalization,
                                        a travel insurance policy can
                                        drastically decrease your risks.
                                    </p>
                                    <p>
                                        Travel insurance is particularly popular
                                        with businesses, families, college
                                        students and other travellers who need a
                                        quick way to protect themselves from
                                        potentially heavy costs. In the last few
                                        years, travel insurance has become one
                                        of the most popular insurance products
                                        available, as it is extremely
                                        cost-effective. It's practically
                                        indispensable on international trips,
                                        and for travellers of all ages and
                                        occupations, it's a great way to take
                                        control over the potential costs of a
                                        trip.
                                    </p>
                                    <p>
                                        Whether you're planning on going solo or
                                        with a group of friends or family, we
                                        can help you find an appropriate
                                        domestic or international travel
                                        insurance policy that meets your needs.
                                        You can take all of the guesswork out of
                                        your next trip to keep yourself
                                        protected.
                                    </p>
                                    <p>
                                        When you get a comprehensive travel
                                        insurance policy, you'll experience
                                        peace of mind while traveling. You will
                                        know where to turn when something goes
                                        wrong, and you will be able to be
                                        covered when you need it the most.
                                    </p>
                                    <p>
                                        Unfortunately, it can be tough to know
                                        where to start when looking for a travel
                                        insurance policy. An ideal policy offers
                                        sufficient coverage at a reasonable
                                        price, but finding one isn't always a
                                        breeze. There are many different
                                        variables involved in the quote process
                                        and the insurance carriers offer a
                                        variety of plans and coverage levels to
                                        choose from. No one should go through
                                        this process uninformed and without an
                                        easy way of navigating the world of trip
                                        insurance.
                                    </p>
                                    <p>
                                        But with Zenith Travels and Tours Ltd,
                                        the process is much easier. We will help
                                        you compare different types of coverage
                                        from the world's leading travel
                                        insurance providers. We will help you
                                        easily decipher plans and consider
                                        different travel insurance add-ons to
                                        pick a policy that works for you. You
                                        can then see an overview of potential
                                        policies from multiple companies before
                                        purchasing the right policy. Picking out
                                        an affordable policy only takes a few
                                        minutes, and you'll be able to travel
                                        with the knowledge that you're protected
                                        from the significant costs of unexpected
                                        circumstances like health problems, trip
                                        cancellations, delays and more.
                                    </p>
                                    <!-- -->
                                    <p>
                                        Zenith Travels and Tours Ltd delivers
                                        great deals on travel insurance. We have
                                        been in the business of helping
                                        Nigerians secure on of the best deals in
                                        Travel Insurance for over a decade, and
                                        many have come to trust our expertise in
                                        comparing travel insurance policies of
                                        various insurance companies before
                                        settling for the right policy.
                                    </p>
                                    <p>
                                        Time is of essence to us as we know that
                                        several of our Clients on business trips
                                        don't have much time to spare while
                                        hoping to get the best issurance deal.
                                        This is one of the reasons we considered
                                        the best among others. With Zenith
                                        Travels and Tours Ltd, you can have your
                                        Travel Insurance within a very short
                                        period of time and be to get on the
                                        plane having the assurance that you are
                                        fully covered.
                                    </p>
                                    <a
                                        href="contactus"
                                        class="read-more hvr-fade"
                                        >Contact Us</a
                                    >
                                </div>
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
