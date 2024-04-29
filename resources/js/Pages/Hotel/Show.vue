<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import HotelBooking from "@/Components/HotelBooking.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";
import { onMounted, toRaw, ref, computed } from "vue";

const props = defineProps({
    hotel: {
        type: Object,
    },
});

const container = ref("container");
const hotel = ref(props.hotel);

onMounted(() => {
    container.value.scrollIntoView();
    console.log(props.hotel);
});
</script>

<template>
    <GuestLayout>
        <Head title="Hotel Details" />

        <div class="container" ref="container">
            <div class="my-3 d-flex justify-content-between">
                <nav aria-label="breadcrumb ">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Hotel Reservation
                        </li>
                    </ol>
                </nav>
                <div></div>
            </div>
            <div class="card mb-4">
                <h6 class="card-header p-3">Reserve a room</h6>
                <div class="card-body p-4">
                    <div
                        class="row row-cols-1 row-cols-md-4 g-2 flex-nowrap"
                        style="overflow: scroll"
                    >
                        <div
                            class="col"
                            v-for="photo_data in Object.values(
                                hotel.photo_data
                            )"
                        >
                            <div class="card">
                                <img
                                    :src="photo_data"
                                    class="card-img-top"
                                    style="height: 300px !important"
                                />
                            </div>
                        </div>
                    </div>
                    <div class="card-title text-muted fw-bold my-4">
                        <i
                            class="fa fa-map-marker text-danger"
                            aria-hidden="true"
                        ></i>
                        {{ hotel.address.address_line_one }},
                        {{ hotel.address.city_name }},
                        {{ hotel.address.country_name }}
                    </div>
                    <div class="card-text">
                        {{ hotel.hotel_description }}
                    </div>
                    <hr />
                    <div
                        class="text-muted d-flex justify-content-between"
                        v-for="amenity in hotel?.amenity_data"
                    >
                        <span>{{ amenity.name }}</span>
                        <i
                            class="fa fa-check-circle text-success"
                            aria-hidden="true"
                        ></i>
                    </div>
                </div>
                <div class="card-footer p-3">
                    <div
                        class="d-flex justify-content-between gap-2 align-items-center"
                    >
                        <div class="fw-bold">
                            {{ hotel?.static_low_rate?.display_currency }}
                            {{ hotel?.static_low_rate?.display_price }}
                        </div>

                        <HotelBooking :hotel />
                    </div>
                </div>
            </div>
        </div>
    </GuestLayout>
</template>
