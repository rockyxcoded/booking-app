<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import { Head, Link, useForm, router } from "@inertiajs/vue3";
import { onMounted, toRaw, ref, computed } from "vue";
import { useHotelStore } from "@/stores/HotelStore";

const store = useHotelStore();

const props = defineProps({
    hotels: {
        type: Object,
        default: [],
    },
    queryParams: {
        type: Object,
    },
});
const container = ref("container");
const searchQ = ref("");

const hotels = computed(() => {
    const q = searchQ.value.toLowerCase();
    if (q == "") {
        return props.hotels;
    }

    return props.hotels.filter((hotel) => hotel.name.toLowerCase().includes(q));
});

const selectHotel = (hotel) => {
    router.get(
        route("hotels.show", { id: hotel.id }),
        {},
        {
            preserveState: true,
            preserveScroll: true,
        }
    );
};

onMounted(() => {
    container.value.scrollIntoView();
});
</script>

<template>
    <GuestLayout>
        <Head title="Search Flight" />

        <div class="container" ref="container">
            <div class="my-3 d-flex justify-content-between">
                <nav aria-label="breadcrumb ">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Hotels search result
                        </li>
                    </ol>
                </nav>
                <div>
                    <input
                        v-model="searchQ"
                        type="text"
                        placeholder="Search"
                        class="form-control"
                        aria-describedby="passwordHelpInline"
                    />
                </div>
            </div>
            <template v-if="hotels.length > 0">
                <div class="card mb-2" v-for="(hotel, index) in hotels">
                    <div class="row g-0">
                        <div class="col-md-3">
                            <img
                                :src="`https:${hotel.thumbnail_hq.three_hundred_square}`"
                                class="img-fluid rounded-start"
                                style="width: 100%; max-height: 200px"
                            />
                        </div>
                        <div class="col-md-9">
                            <div class="card-body">
                                <h4 class="card-title">
                                    {{ hotel?.name }} ({{
                                        hotel.address.country_name
                                    }})
                                </h4>
                                <div class="card-text mb-4">
                                    {{ hotel.hotel_description.slice(0, 200) }}
                                    ...
                                </div>

                                <div class="d-flex justify-content-end">
                                    <button
                                        type="button"
                                        class="btn btn-success"
                                        @click="selectHotel(hotel)"
                                    >
                                        <span class="me-5">Select</span>
                                        <i
                                            class="fa fa-angle-right"
                                            aria-hidden="true"
                                        ></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </template>
            <div class="alert alert-danger" role="alert" v-else>
                <span
                    class="glyphicon glyphicon-exclamation-sign"
                    aria-hidden="true"
                ></span>
                <span class="sr-only">Error:</span>
                No hotels found
            </div>
        </div>
    </GuestLayout>
</template>
