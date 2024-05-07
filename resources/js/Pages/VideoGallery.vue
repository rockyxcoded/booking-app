<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import { Head } from "@inertiajs/vue3";
import { onMounted, ref } from "vue";
import FeaturedTours from "../Components/Partials/FeaturedTours.vue";

const props = defineProps({
    videos: {
        type: Object,
        default: [],
    },
});

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
                                <h2>Video Gallery</h2>
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
                <div class="row" v-if="videos?.length">
                    <div class="col-md-4 col-sm-6" v-for="video in videos">
                        <div class="single-package">
                            <div class="package-image">
                                <a :href="`video/${video.video_url}`"
                                    ><img
                                        :src="`images/videos/${video.photo_url}`"
                                        :alt="video.caption"
                                /></a>
                            </div>
                            <div align="center" class="package-content">
                                <h3>{{ video.caption }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    align="center"
                    style="font-weight: bold; color: #f00"
                    v-else
                >
                    No Record Found!
                </div>
            </div>
        </section>
        <FeaturedTours />
    </GuestLayout>
</template>
