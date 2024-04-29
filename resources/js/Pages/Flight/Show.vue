<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import FlightBooking from "@/Components/FlightBooking.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";
import { onMounted, toRaw, ref, computed } from "vue";

const props = defineProps({
    flight: {
        type: Object,
    },
});

const flight = ref(props.flight);

onMounted(() => {
    // if (!props.flight) {
    const decodedData = window.atob(localStorage.getItem("Itinerary-Data"));
    flight.value = JSON.parse(decodedData);
    // }
});
</script>

<template>
    <GuestLayout>
        <Head title="Flight Details" />

        <div class="container contain">
            <div class="my-3 d-flex justify-content-between">
                <nav aria-label="breadcrumb ">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Flight details
                        </li>
                    </ol>
                </nav>
                <div></div>
            </div>
            <div class="card mb-4">
                <h6 class="card-header p-3">REVIEW & CHECKOUT</h6>
                <div class="card-body p-5">
                    <div class="mb-3 card">
                        <div class="card-header">Departure</div>
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <div
                                        class="d-flex flex-row align-items-center justify-content-between"
                                    >
                                        <div class="d-flex flex-column">
                                            <img
                                                width="50"
                                                :src="
                                                    flight?.slice_data?.slice_0
                                                        .airline?.logo
                                                "
                                                class="rounded"
                                            />
                                            <p>
                                                {{
                                                    flight?.slice_data?.slice_0
                                                        .airline?.name
                                                }}
                                            </p>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h6>
                                                {{
                                                    flight?.slice_data?.slice_0
                                                        .departure.datetime
                                                        .time_12h
                                                }}
                                            </h6>
                                            <div class="text-muted">
                                                {{
                                                    flight?.slice_data?.slice_0
                                                        .departure.airport.code
                                                }}
                                            </div>
                                        </div>
                                        <div>
                                            <i
                                                class="fa fa-long-arrow-right"
                                                aria-hidden="true"
                                            ></i>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h6>
                                                {{
                                                    flight?.slice_data?.slice_0
                                                        .arrival.datetime
                                                        .time_12h
                                                }}
                                            </h6>
                                            <div class="text-muted">
                                                {{
                                                    flight?.slice_data?.slice_0
                                                        .arrival.airport.code
                                                }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 card">
                        <div class="card-header">Return</div>
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <div
                                        class="d-flex flex-row align-items-center justify-content-between"
                                    >
                                        <div class="d-flex flex-column">
                                            <img
                                                width="50"
                                                :src="
                                                    flight?.slice_data?.slice_1
                                                        .airline?.logo
                                                "
                                                class="rounded"
                                            />
                                            <p>
                                                {{
                                                    flight?.slice_data?.slice_1
                                                        .airline?.name
                                                }}
                                            </p>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h6>
                                                {{
                                                    flight?.slice_data?.slice_1
                                                        .arrival.datetime
                                                        .time_12h
                                                }}
                                            </h6>
                                            <div class="text-muted">
                                                {{
                                                    flight?.slice_data?.slice_1
                                                        .arrival.airport.code
                                                }}
                                            </div>
                                        </div>
                                        <div>
                                            <i
                                                class="fa fa-long-arrow-left"
                                                aria-hidden="true"
                                            ></i>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h6>
                                                {{
                                                    flight?.slice_data?.slice_1
                                                        .departure.datetime
                                                        .time_12h
                                                }}
                                            </h6>
                                            <div class="text-muted">
                                                {{
                                                    flight?.slice_data?.slice_1
                                                        .departure.airport.code
                                                }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer p-3">
                    <div
                        class="d-flex justify-content-between gap-2 align-items-center"
                    >
                        <div class="fw-bold">
                            {{ flight?.price_details?.display_symbol }}
                            {{ flight?.price_details?.display_total_fare }}
                        </div>

                        <FlightBooking :flight />
                    </div>
                </div>
            </div>
        </div>
    </GuestLayout>
</template>
