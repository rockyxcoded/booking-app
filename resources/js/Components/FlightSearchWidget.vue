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
const form = useForm(store.form);
</script>

<template>
    <div class="flights-form">
        <div class="form-check form-check-inline mb-4">
            <input
                class="form-check-input"
                type="radio"
                name="trip_type"
                value="round"
                v-model="store.form.trip_type"
            />
            <label class="form-check-label" for="inlineRadio1">Round</label>
        </div>
        <div class="form-check form-check-inline">
            <input
                class="form-check-input"
                type="radio"
                name="trip_type"
                id="inlineRadio2"
                value="oneway"
                v-model="store.form.trip_type"
            />
            <label class="form-check-label" for="inlineRadio2">One Way</label>
        </div>
        <!-- <div class="form-check form-check-inline">
            <input
                class="form-check-input"
                type="radio"
                name="trip_type"
                id="inlineRadio2"
                value="return"
                v-model="store.form.trip_type"
            />
            <label class="form-check-label" for="inlineRadio2">Return</label>
        </div> -->

        <form method="post" @submit.prevent="store.onSearch">
            <div class="row g-1">
                <div class="col-md-6 mb-3">
                    <ModelListSelect
                        :list="store.locations1"
                        option-value="code"
                        option-text="name"
                        v-model="store.form.location"
                        placeholder="From"
                        @searchchange="(e) => store.getLocations1(e)"
                        class="form-control form-control-lg"
                        required
                    />
                </div>
                <div class="col-md-6 mb-3">
                    <ModelListSelect
                        :list="store.locations2"
                        option-value="code"
                        option-text="name"
                        v-model="store.form.destination"
                        placeholder="To"
                        @searchchange="(e) => store.getLocations2(e)"
                        class="form-control form-control-lg"
                        required
                    />
                </div>
            </div>
            <div class="row justify-content-between g-1">
                <div class="col-md-2 mb-3">
                    <VueDatePicker
                        v-model="store.form.departure_date"
                        placeholder="Departure date"
                        :enable-time-picker="false"
                        :hide-input-icon="true"
                        required
                    />
                </div>
                <div
                    class="col-md-2 mb-3"
                    v-if="store.form.trip_type == 'round'"
                >
                    <VueDatePicker
                        v-model="store.form.return_date"
                        :enable-time-picker="false"
                        placeholder="Return Date"
                        :hide-input-icon="true"
                        required
                    />
                </div>
                <div class="col-md-2 mb-3">
                    <select
                        name="cabin_class"
                        class="form-select"
                        v-model="store.form.cabin_class"
                        required
                    >
                        <option value="">Cabin Class</option>
                        <option value="Economy">Economy</option>
                        <option value="Business">Business</option>
                        <option value="Premium">Premium</option>
                        <option value="First">First</option>
                    </select>
                </div>
                <div class="col-md-2 mb-3">
                    <input
                        type="number"
                        name="adult"
                        class="form-control"
                        placeholder="Adults"
                        v-model="store.form.adults"
                        required
                    />
                </div>
                <div class="col-md-2 mb-3">
                    <input
                        name="kids"
                        class="form-control"
                        v-model="store.form.children"
                        placeholder="Kids"
                        required
                    />
                </div>
                <div class="col-md-2">
                    <button
                        type="submit"
                        :disabled="store.form.processing"
                        class="btn btn-lg btn-success"
                    >
                        <template v-if="store.form.processing">
                            Searching...
                        </template>
                        <template v-else> Search </template>
                    </button>
                </div>
            </div>
        </form>
    </div>
</template>
