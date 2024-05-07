<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import { Head } from "@inertiajs/vue3";
import { onMounted, ref } from "vue";
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
                                <h2>Contact Us</h2>
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
        <!-- google map end  -->
        <section class="section-paddings">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="contact-title">
                            <h2>Our Office</h2>
                        </div>
                        <div class="address">
                            <p>
                                <strong>Address</strong>
                                <br />
                                4th Floor, Shobo House, 5 Simpson Street, Lagos
                                Island, Nigeria.<br /><br />
                            </p>
                            <p>
                                <strong>Phone Numbers</strong>
                                <br />
                                +2348022235119, +23418880225, +2348055469754<br /><br />
                            </p>
                            <p>
                                <strong>Website</strong>
                                <br />
                                https://www.zenithtravelgroup.com<br /><br />
                            </p>
                            <p>
                                <strong>Email</strong>
                                <br />
                                info@zenithtravelgroup.com<br /><br />
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="contact-title">
                            <h2>Contact</h2>
                        </div>
                        <div class="contact-form">
                            <div id="contact">
                                <div id="message"></div>
                                <div style="height: 10px">&nbsp;</div>
                                <div
                                    id="remark"
                                    align="center"
                                    style="display: none"
                                ></div>
                                <!-- Contact Form -->
                                <form>
                                    <div class="form-group">
                                        <input
                                            type="text"
                                            placeholder="First Name"
                                            required
                                            pattern="^[A-Za-z]+$"
                                            id="first_name"
                                        />
                                    </div>
                                    <div class="form-group">
                                        <input
                                            type="text"
                                            placeholder="Last Name"
                                            required
                                            pattern="^[A-Za-z]+$"
                                            id="last_name"
                                        />
                                    </div>
                                    <div class="form-group">
                                        <input
                                            type="text"
                                            placeholder="Email"
                                            value=""
                                            required
                                            pattern="^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$"
                                            id="contact_email"
                                        />
                                    </div>
                                    <div class="form-group">
                                        <input
                                            type="text"
                                            placeholder="Phone"
                                            required
                                            pattern="\d{11,11}"
                                            maxlength="11"
                                            id="contact_phone"
                                        />
                                    </div>
                                    <div class="form-group">
                                        <input
                                            type="text"
                                            placeholder="Subject"
                                            id="contact_subject"
                                        />
                                    </div>
                                    <div class="form-group">
                                        <textarea
                                            name="message"
                                            placeholder="Message"
                                            required
                                            pattern="^[\S\s]*\S[\S\s]$"
                                            id="contact_message"
                                            >{{ "" }}</textarea
                                        >
                                    </div>
                                    <div class="form-group" id="loading_remark">
                                        <button
                                            id="contactusbtn"
                                            type="button"
                                            class="button primary"
                                        >
                                            <i class="fa fa-send"></i>Submit
                                        </button>
                                    </div>
                                </form>
                                <!--/ End Contact Form -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <FeaturedTours />
    </GuestLayout>
</template>
