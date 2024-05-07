<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import { Head } from "@inertiajs/vue3";
import { onMounted, ref } from "vue";
import BookService from "../Components/Partials/BookService.vue";
import FeaturedTours from "../Components/Partials/FeaturedTours.vue";

const props = defineProps({
    photos: {
        type: Object,
        default: [],
    },
});

const container = ref("container");

onMounted(() => {
    container?.value?.scrollIntoView();
    console.log(props.photos);
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
                                <h2>Photo Gallery</h2>
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

        <section
            class="blog-contents-version-one pt-100 pb-70 popular-packages"
        >
            <div class="container">
                <div class="row">
                    <div class="row" v-if="photos?.length">
                        <div class="col-md-4 col-sm-6" v-for="photo in photos">
                            <div class="single-package">
                                <div class="package-image">
                                    <a :href="photo.target_url"
                                        ><img
                                            :src="`images/gallery/${photo.photo_url}`"
                                            :alt="photo.caption"
                                    /></a>
                                </div>
                                <div align="center" class="package-content">
                                    <h3>{{ photo.caption }}</h3>
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
            </div>
        </section>
        <FeaturedTours />
    </GuestLayout>
</template>
