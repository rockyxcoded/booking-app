<script setup>
import { onMounted, ref } from "vue";
import { Head, Link, useForm, usePage } from "@inertiajs/vue3";
import FlightBooking from "@/Components/FlightBooking.vue";
import axios from "axios";
import VueDatePicker from "@vuepic/vue-datepicker";
import { ModelListSelect } from "vue-search-select";
import debounce from "lodash.debounce";
import { useFlightStore } from "@/stores/FlightStore";
// import "@vuepic/vue-datepicker/dist/main.css";

const store = useFlightStore();

const allFlights = ref({});
const stepper = ref(1);
const selectedFlight = ref({});
const locations1 = ref([]);
const locations2 = ref([]);

const form = useForm(store.form);

const getLocations1 = debounce(async (query, loading) => {
    console.log(query, loading);
    const response = await axios.post(route("flights.locations"), { query });
    locations1.value =
        response.data.map((l) => ({
            code: l.city.code,
            name: l.name,
        })) ?? [];
}, 500);

const getLocations2 = debounce(async (query) => {
    const response = await axios.post(route("flights.locations"), { query });
    locations2.value =
        response.data.map((l) => ({
            code: l.city.code,
            name: l.name,
        })) ?? [];
}, 500);

const onSubmit = () => {
    form.get(route("flights.index"), {
        preserveState: true,
        preserveScroll: true,
        replace: true,
    });
};

const submit = async (e) => {
    e.preventDefault();
    try {
        form.processing = true;
        const response = await axios.post(route("flights.search"), form);
        console.log({ response });
        allFlights.value = response.data?.result;
        $("#staticBackdrop").modal("show");
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

const selectFlight = (itinerary_data) => {
    selectedFlight.value = itinerary_data;
    stepper.value++;
};

const closeModal = () => {
    $("#staticBackdrop").modal("hide");
    console.log("I was triggered");
};
onMounted(() => {});

// defineExpose({ focus: () => input.value.focus() });
</script>

<template>
    <div class="flights-form">
        <form method="post" @submit.prevent="onSubmit">
            <div class="tour-input-20 input-b">
                <ModelListSelect
                    :list="locations1"
                    option-value="code"
                    option-text="name"
                    v-model="store.form.location"
                    placeholder="From"
                    @searchchange="(e) => getLocations1(e)"
                    class="hotel-input-first"
                />
            </div>
            <div class="tour-input-20 input-b">
                <ModelListSelect
                    :list="locations2"
                    option-value="code"
                    option-text="name"
                    v-model="store.form.destination"
                    placeholder="To"
                    @searchchange="(e) => getLocations2(e)"
                    class="hotel-input-first"
                />
            </div>
            <div class="tour-input-15 input-s">
                <VueDatePicker
                    v-model="store.form.departure_date"
                    placeholder="Departure date"
                    :enable-time-picker="false"
                    :hide-input-icon="true"
                />
            </div>
            <div class="tour-input-15 input-s">
                <VueDatePicker
                    v-model="store.form.return_date"
                    :enable-time-picker="false"
                    placeholder="Return Date"
                    :hide-input-icon="true"
                />
            </div>
            <div class="tour-input-15 input-b">
                <select
                    name="cabin_class"
                    class="custom-select"
                    v-model="store.form.cabin_class"
                >
                    <option value="">Cabin Class</option>
                    <option value="Economy">Economy</option>
                    <option value="Business">Business</option>
                </select>
            </div>
            <div class="tour-input-7-5 input-s input-xm">
                <input
                    type="number"
                    name="adult"
                    class="custom-select"
                    placeholder="Adults"
                    v-model="store.form.adults"
                />
            </div>
            <div class="tour-input-7-5 input-s input-xm">
                <input
                    name="kids"
                    class="custom-select"
                    v-model="store.form.children"
                    placeholder="Kids"
                />
            </div>
            <div class="searc-btn-7 flights-search-btn">
                <button type="submit" :disabled="form.processing">
                    <template v-if="form.processing"> Searching... </template>
                    <template v-else> Search </template>
                </button>
            </div>
        </form>
    </div>

    <div
        class="modal fade"
        id="staticBackdrop"
        tabindex="-1"
        aria-labelledby="staticBackdropLabel"
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
                    <h4 class="modal-title" v-if="stepper == 2">Book Flight</h4>
                    <h4 class="modal-title" v-if="stepper == 1">
                        List of available flights
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
                    <template v-if="allFlights.itinerary_data">
                        <div
                            class="row"
                            v-for="(
                                itinerary_data, index
                            ) in allFlights.itinerary_data"
                            v-if="stepper == 1"
                        >
                            <div
                                style="border: 1px solid #dee2e6"
                                class="mb-3 p-3 rounded col-md-8"
                            >
                                <div
                                    class="d-flex flex-row align-items-center justify-content-between"
                                    v-if="itinerary_data.slice_data?.slice_0"
                                >
                                    <div class="d-flex flex-column">
                                        <img
                                            width="50"
                                            :src="
                                                itinerary_data.slice_data
                                                    ?.slice_0.airline?.logo
                                            "
                                            class="rounded"
                                        />
                                        <p>
                                            {{
                                                itinerary_data.slice_data
                                                    ?.slice_0.airline?.name
                                            }}
                                        </p>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <h6>
                                            {{
                                                itinerary_data.slice_data
                                                    ?.slice_0.departure.datetime
                                                    .time_12h
                                            }}
                                        </h6>
                                        <div class="text-muted">
                                            {{
                                                itinerary_data.slice_data
                                                    ?.slice_0.departure.airport
                                                    .code
                                            }}
                                        </div>
                                    </div>
                                    <span>
                                        <i
                                            class="fa fa-arrow-right"
                                            aria-hidden="true"
                                        ></i>
                                        <i
                                            class="fa fa-arrow-right"
                                            aria-hidden="true"
                                        ></i>
                                    </span>
                                    <div class="d-flex flex-column">
                                        <h6>
                                            {{
                                                itinerary_data.slice_data
                                                    ?.slice_0.arrival.datetime
                                                    .time_12h
                                            }}
                                        </h6>
                                        <div class="text-muted">
                                            {{
                                                itinerary_data.slice_data
                                                    ?.slice_0.arrival.airport
                                                    .code
                                            }}
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="d-flex flex-row align-items-center justify-content-between"
                                    v-if="itinerary_data.slice_data?.slice_1"
                                >
                                    <div class="d-flex flex-column">
                                        <img
                                            width="50"
                                            :src="
                                                itinerary_data.slice_data
                                                    ?.slice_0.airline?.logo
                                            "
                                            class="rounded"
                                        />
                                        <p>
                                            {{
                                                itinerary_data.slice_data
                                                    ?.slice_0.airline?.name
                                            }}
                                        </p>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <h6>
                                            {{
                                                itinerary_data.slice_data
                                                    ?.slice_0.arrival.datetime
                                                    .time_12h
                                            }}
                                        </h6>
                                        <div class="text-muted">
                                            {{
                                                itinerary_data.slice_data
                                                    ?.slice_0.arrival.airport
                                                    .code
                                            }}
                                        </div>
                                    </div>
                                    <span>
                                        <i
                                            class="fa fa-arrow-left"
                                            aria-hidden="true"
                                        ></i>
                                        <i
                                            class="fa fa-arrow-left"
                                            aria-hidden="true"
                                        ></i>
                                    </span>
                                    <div class="d-flex flex-column">
                                        <h6>
                                            {{
                                                itinerary_data.slice_data
                                                    ?.slice_0.departure.datetime
                                                    .time_12h
                                            }}
                                        </h6>
                                        <div class="text-muted">
                                            {{
                                                itinerary_data.slice_data
                                                    ?.slice_0.departure.airport
                                                    .code
                                            }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                style="border: 1px solid #dee2e6"
                                class="mb-3 p-3 rounded col-md-4 d-flex flex-column justify-content-center"
                            >
                                <div>
                                    <div class="fw-bold">
                                        {{
                                            itinerary_data?.price_details
                                                ?.display_symbol
                                        }}
                                        {{
                                            itinerary_data?.price_details
                                                ?.display_total_fare
                                        }}
                                    </div>
                                    <button
                                        type="button"
                                        class="btn btn-primary"
                                        @click="selectFlight(itinerary_data)"
                                    >
                                        Select
                                        <i
                                            class="fa fa-arrow-right"
                                            aria-hidden="true"
                                        ></i>
                                    </button>
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
                        No flights found
                    </div>
                    <FlightBooking
                        @close-modal="closeModal"
                        v-if="stepper == 2"
                        :flight="selectedFlight"
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
