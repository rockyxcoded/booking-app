<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import { Head, Link, useForm, router } from "@inertiajs/vue3";
import { onMounted, toRaw, ref, computed } from "vue";
import { useCarStore } from "@/stores/CarStore";

const store = useCarStore();

const props = defineProps({
    cars: {
        type: Array,
        default: [],
    },
    queryParams: {
        type: Object,
    },
});

const searchQ = ref("");

const cars = computed(() => {
    const q = searchQ.value.toLowerCase();
    if (q == "") {
        return props.cars;
    }

    return props.cars.filter((car) =>
        car.slice_data.slice_0.airline.name.toLowerCase().includes(q)
    );
});

const selectCar = (car) => {
    const encoded = window.btoa(JSON.stringify(car));
    const randomStr = btoa(Math.random().toString()).substring(10, 15);
    localStorage.setItem("selected-car", encoded);
    router.get(
        route("cars.show", { id: randomStr }),
        {},
        {
            preserveState: true,
        }
    );
};

onMounted(() => {
    console.log(props.cars);
});
</script>

<template>
    <GuestLayout>
        <Head title="Search Cars" />

        <div class="container">
            <div class="my-3 d-flex justify-content-between">
                <nav aria-label="breadcrumb ">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Cars search result
                        </li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <input
                        v-model="searchQ"
                        type="text"
                        placeholder="Search"
                        class="form-control"
                        aria-describedby="passwordHelpInline"
                    />
                </div>
                <div class="col-md-10">
                    <template v-if="cars">
                        <div class="row" v-for="(car, index) in cars">
                            <div class="mb-2">
                                <div class="card">
                                    <div class="card-body">
                                        <div
                                            class="d-flex flex-row align-items-center justify-content-between"
                                        >
                                            <div class="d-flex flex-column">
                                                <img
                                                    width="50"
                                                    :src="car.car.imageurl"
                                                    class="rounded"
                                                />
                                                <!-- <p>
                                            {{ car.car.type_name }}
                                        </p> -->
                                            </div>
                                            <div class="d-flex flex-column">
                                                <h4>Pick Up</h4>
                                                <h5>
                                                    {{ car.car.example }}
                                                </h5>
                                                <div class="text-muted">
                                                    {{ car.pickup.location }}
                                                </div>
                                            </div>
                                            <div>
                                                <i
                                                    class="fa fa-long-arrow-right"
                                                    aria-hidden="true"
                                                ></i>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <h4>Drop off</h4>
                                                <h6>
                                                    {{ car.car.example }}
                                                </h6>
                                                <div class="text-muted">
                                                    {{ car.dropoff.location }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div
                                            class="d-flex justify-content-between"
                                        >
                                            <div class="fw-bold">
                                                {{
                                                    car?.price_details
                                                        ?.baseline_symbol
                                                }}
                                                {{
                                                    car?.price_details
                                                        ?.base_price
                                                }}
                                                /
                                                {{
                                                    car.price_details.base_type
                                                }}
                                            </div>
                                            <button
                                                type="button"
                                                class="btn btn-success"
                                                @click="selectCar(car)"
                                            >
                                                <span class="me-2">Select</span>
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
                        No cars found
                    </div>
                </div>
            </div>
        </div>
    </GuestLayout>
</template>
