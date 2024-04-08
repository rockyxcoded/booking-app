<script setup>
import { onMounted, ref } from "vue";
import { Head, Link, useForm, usePage } from "@inertiajs/vue3";
import FlightBooking from "@/Components/FlightBooking.vue";
import axios from "axios";
import VueDatePicker from "@vuepic/vue-datepicker";
// import "@vuepic/vue-datepicker/dist/main.css";

const allFlights = ref({});
const stepper = ref(1);
const selectedFlight = ref({});

const form = useForm({
    location: "",
    destination: "",
    departure_date: "",
    return_date: "",
    cabin_class: "",
    adults: "",
    children: "",
    trip_type: "round",
});

const submit = async (e) => {
    e.preventDefault();
    // const formData = new FormData(e.target);
    // form.location = formData.get("location");
    // form.destination = formData.get("destination");
    // form.departure_date = formData.get("departure_date");
    // form.return_date = formData.get("return_date");
    // form.cabin_class = formData.get("cabin_class");
    // form.adults = formData.get("adults") ?? 0;
    // form.children = formData.get("children") ?? 0;
    // form.trip_type = formData.get("trip_type") ?? "round";

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
};
onMounted(() => {});

// defineExpose({ focus: () => input.value.focus() });
</script>

<template>
    <div class="flights-form">
        <form method="post" @submit.prevent="submit($event)">
            <div class="tour-input-20 input-b">
                <select
                    name="location"
                    class="custom-select"
                    required
                    v-model="form.location"
                >
                    <option value="">Origin City or airport</option>
                    <option value="LOS">Lagos</option>
                    <option value="NYC">New York City</option>
                    <option value="LON">London</option>
                    <option value="CAN">CANADA</option>
                </select>
            </div>
            <div class="tour-input-20 input-b">
                <select
                    name="destination"
                    class="custom-select"
                    required
                    v-model="form.destination"
                >
                    <option value="">Destination City</option>
                    <option value="LOS">Lagos</option>
                    <option value="NYC">New York City</option>
                    <option value="LON">London</option>
                </select>
            </div>
            <div class="tour-input-15 input-s">
                <!-- <input
                    type="text"
                    name="departure_date"
                    id="datepicker3"
                    class="hotel-input-first"
                    placeholder="Departure date"
                    required
                    v-model="form.departure_date"
                /> -->
                <VueDatePicker
                    v-model="form.departure_date"
                    placeholder="Departure date"
                    :enable-time-picker="false"
                    :hide-input-icon="true"
                    required
                />
            </div>
            <div class="tour-input-15 input-s">
                <!-- <input
                    type="text"
                    name="return_date"
                    id="datepicker4"
                    class="hotel-input-first"
                    placeholder="Return date"
                    required
                    v-model="form.return_date"
                /> -->
                <VueDatePicker
                    v-model="form.return_date"
                    :enable-time-picker="false"
                    placeholder="Return Date"
                    :hide-input-icon="true"
                    required
                />
            </div>
            <div class="tour-input-15 input-b">
                <select
                    name="cabin_class"
                    class="custom-select"
                    required
                    v-model="form.cabin_class"
                >
                    <option value="">Cabin Class</option>
                    <option value="Economy">Economy</option>
                    <option value="Business">Business</option>
                </select>
            </div>
            <div class="tour-input-7-5 input-s input-xm">
                <select
                    name="adult"
                    class="custom-select"
                    required
                    v-model="form.adults"
                >
                    <option value="">Adult</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </div>
            <div class="tour-input-7-5 input-s input-xm">
                <select
                    name="kids"
                    class="custom-select"
                    required
                    v-model="form.children"
                >
                    <option value="">Kids</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
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
