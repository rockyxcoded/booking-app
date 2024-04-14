<script setup>
import { onMounted, ref } from "vue";
import { Head, Link, useForm, usePage } from "@inertiajs/vue3";
import CarBooking from "@/Components/CarBooking.vue";
import axios from "axios";
import { ModelListSelect } from "vue-search-select";
import debounce from "lodash.debounce";
import VueDatePicker from "@vuepic/vue-datepicker";

const allCars = ref({});
const stepper = ref(1);
const selectedCar = ref({});

const pickupLocations = ref([]);
const dropOffLocations = ref([]);

const form = useForm({
    pickup_datetime: "",
    dropoff_datetime: "",
    pickup_code: "",
    dropoff_code: "",
});

const getDropOffLocations = debounce(async (city) => {
    const response = await axios.post(route("cars.suggest"), { city });
    const result = Object.values(response.data.city_data).map((r) => ({
        code: r?.ppn_car_cityid,
        name:
            r.state_code !== null
                ? `${r.city}, ${r.state_code} (${r.country})`
                : `${r.city} (${r.country})`,
    }));

    dropOffLocations.value = result ?? [];
}, 500);

const getPickupLocations = debounce(async (city) => {
    const response = await axios.post(route("cars.suggest"), { city });
    const result = Object.values(response.data.city_data).map((r) => ({
        code: r?.ppn_car_cityid,
        name:
            r.state_code !== null
                ? `${r.city}, ${r.state_code} (${r.country})`
                : `${r.city} (${r.country})`,
    }));

    pickupLocations.value = result ?? [];
}, 500);

const submit = async (e) => {
    try {
        form.processing = true;
        const response = await axios.post(route("cars.search"), form);
        allCars.value = response.data;
        $("#carBackdrop").appendTo("body").modal("show");
    } catch (error) {
        console.log({ error });
        if (error.response.data.message) {
            Swal.fire({
                title: "Error!",
                text: error.response.data.message,
                icon: "error",
                confirmButtonText: "Ok",
            });
        }
    } finally {
        form.processing = false;
    }
};

const selectCar = (rate_data) => {
    selectedCar.value = rate_data;
    stepper.value++;
};

const closeModal = () => {
    $("#carBackdrop").modal("hide");
};
onMounted(() => {});

// defineExpose({ focus: () => input.value.focus() });
</script>

<style>
.ui.selection.dropdown {
    min-height: 53px;
    border-radius: unset;
    font-size: inherit;
}
.default.text {
    color: #555555 !important;
}
</style>

<template>
    <div class="hotels-form">
        <form @submit.prevent="submit($event)" method="POST">
            <div class="hotel-input-2 input-b">
                <ModelListSelect
                    :list="pickupLocations"
                    option-value="code"
                    option-text="name"
                    v-model="form.pickup_code"
                    placeholder="Pickup Location"
                    @searchchange="(e) => getPickupLocations(e)"
                    class="hotel-input-first"
                />
            </div>
            <div class="hotel-input-2 input-s">
                <VueDatePicker
                    v-model="form.pickup_datetime"
                    placeholder="Pickup Date & Time"
                    :enable-time-picker="true"
                    :hide-input-icon="true"
                    class="hotel-input-first"
                    required
                />
            </div>
            <div class="hotel-input-2 input-b">
                <ModelListSelect
                    :list="dropOffLocations"
                    option-value="code"
                    option-text="name"
                    v-model="form.dropoff_code"
                    placeholder="DropOff Location"
                    @searchchange="(e) => getDropOffLocations(e)"
                    class="hotel-input-first"
                />
            </div>
            <div class="hotel-input-2 input-s">
                <VueDatePicker
                    v-model="form.dropoff_datetime"
                    placeholder="DropOff Date & time"
                    :enable-time-picker="true"
                    :hide-input-icon="true"
                    class="hotel-input-first"
                    required
                />
            </div>
            <!-- <div class="hotel-input-1 input-s">
                <input
                    v-model="form.children"
                    type="number"
                    class="hotel-input-first"
                    placeholder="Children"
                />
            </div>
            <div class="hotel-input-1 input-s">
                <input
                    v-model="form.adults"
                    type="number"
                    class="hotel-input-first"
                    placeholder="Adults"
                />
            </div> -->
            <div class="searc-btn-7">
                <button type="submit" :disabled="form.processing">
                    <template v-if="form.processing"> Searching... </template>
                    <template v-else> Search </template>
                </button>
            </div>
        </form>
    </div>

    <div
        class="modal fade"
        id="carBackdrop"
        tabindex="-1"
        aria-labelledby="carBackdropLabel"
        aria-hidden="true"
    >
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div
                    class="modal-header"
                    style="display: flex; justify-content: space-between"
                >
                    <button
                        v-if="stepper == 2"
                        class="btn btn-primary me-3"
                        type="button"
                        @click="stepper--"
                    >
                        Go back
                    </button>
                    <h4 class="modal-title" v-if="stepper == 2">Book a Ride</h4>
                    <h4 class="modal-title" v-if="stepper == 1">
                        List of available cars
                    </h4>
                    <button
                        type="button"
                        class="btn btn-default"
                        data-dismiss="modal"
                    >
                        Close
                    </button>
                </div>

                <div class="modal-body p-4">
                    <template v-if="allCars.result_list">
                        <div
                            class="row"
                            v-for="(result_list, index) in allCars.result_list"
                            v-if="stepper == 1"
                        >
                            <div
                                style="border: 1px solid #dee2e6"
                                class="mb-3 p-3 rounded col-md-10"
                            >
                                <div
                                    class="d-flex flex-row align-items-center justify-content-between"
                                    v-if="result_list"
                                    style="gap: 1rem"
                                >
                                    <div class="d-flex flex-column">
                                        <img
                                            width="50"
                                            :src="result_list.car.imageurl"
                                            class="rounded"
                                        />
                                        <!-- <p>
                                            {{ result_list.car.type_name }}
                                        </p> -->
                                    </div>
                                    <div class="d-flex flex-column">
                                        <h4>Pick Up</h4>
                                        <h5>
                                            {{ result_list.car.example }}
                                        </h5>
                                        <div class="text-muted">
                                            {{ result_list.pickup.location }}
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
                                            {{ result_list.car.example }}
                                        </h6>
                                        <div class="text-muted">
                                            {{ result_list.dropoff.location }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                style="border: 1px solid #dee2e6; gap: 2rem"
                                class="mb-3 p-3 rounded col-md-2 d-flex flex-column justify-content-center"
                            >
                                <div class="fw-bold">
                                    {{
                                        result_list?.price_details
                                            ?.baseline_symbol
                                    }}
                                    {{ result_list?.price_details?.base_price }}
                                    /
                                    {{ result_list.price_details.base_type }}
                                </div>
                                <button
                                    type="button"
                                    class="btn btn-primary"
                                    @click="selectCar(result_list)"
                                >
                                    Select
                                    <i
                                        class="fa fa-arrow-right"
                                        aria-hidden="true"
                                    ></i>
                                </button>
                            </div>
                        </div>
                    </template>
                    <div class="alert alert-danger" role="alert" v-else>
                        <span
                            class="glyphicon glyphicon-exclamation-sign"
                            aria-hidden="true"
                        ></span>
                        <span class="sr-only">Error:</span>
                        No flights found
                    </div>
                    <CarBooking
                        @close-modal="closeModal"
                        v-if="stepper == 2"
                        :flight="selectedCar"
                        :form
                    />
                </div>
                <div class="modal-footer">
                    <button
                        type="button"
                        class="btn btn-secondary"
                        data-bs-dismiss="modal"
                    >
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>
