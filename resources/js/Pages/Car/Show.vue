<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import CarBooking from "@/Components/CarBooking.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";
import { onMounted, toRaw, ref, computed } from "vue";

const props = defineProps({});

const car = ref([]);

onMounted(() => {
    const decodedData = window.atob(localStorage.getItem("selected-car"));
    car.value = JSON.parse(decodedData);
    console.log(car.value);
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
                            Car details
                        </li>
                    </ol>
                </nav>
                <div></div>
            </div>
            <div class="card mb-4">
                <h6 class="card-header p-3">REVIEW & CHECKOUT</h6>
                <div class="card-body p-5">
                    <div class="row">
                        <div class="col-md-3">
                            <img :src="car?.car?.imageurl" class="rounded" />
                        </div>
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-md-12">
                                    <div>
                                        <h6 class="card-title">
                                            {{ car?.car?.example }}
                                        </h6>
                                        <div class="text-muted">
                                            {{ car?.car?.description }}
                                        </div>
                                        <div class="text-muted">
                                            <i
                                                class="fa fa-map-marker text-danger"
                                                aria-hidden="true"
                                            ></i>
                                            {{ car?.pickup?.location }}
                                        </div>
                                        <div class="text-muted">
                                            <i
                                                class="fa fa-map-marker text-success"
                                                aria-hidden="true"
                                            ></i>
                                            {{ car?.dropoff?.location }}
                                        </div>
                                    </div>
                                    <hr />
                                    <div
                                        class="text-muted d-flex justify-content-between"
                                        v-for="i in car?.car?.inclusions"
                                    >
                                        <span>{{ i }}</span>
                                        <i
                                            class="fa fa-check-circle text-success"
                                            aria-hidden="true"
                                        ></i>
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
                            {{ car?.price_details?.baseline_symbol }}
                            {{ car?.price_details?.base_price }}
                            /
                            {{ car?.price_details?.base_type }}
                        </div>

                        <CarBooking :car />
                    </div>
                </div>
            </div>
        </div>
    </GuestLayout>
</template>
