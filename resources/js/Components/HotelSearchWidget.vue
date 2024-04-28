<script setup>
import { onMounted, ref } from "vue";
import { Head, Link, useForm, usePage } from "@inertiajs/vue3";
import HotelBooking from "@/Components/HotelBooking.vue";
import axios from "axios";
import { ModelListSelect } from "vue-search-select";
import debounce from "lodash.debounce";
import VueDatePicker from "@vuepic/vue-datepicker";
import { useHotelStore } from "@/stores/HotelStore";

const store = useHotelStore();

const allHotels = ref({});
const stepper = ref(1);
const selectedHotel = ref({});
const countries = ref([]);

const form = useForm({
    city_id: "",
    check_out: "",
    check_in: "",
    adults: "",
    children: "",
});

onMounted(() => {});
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
        <form
            @submit.prevent="store.onSearch"
            class="row align-items-center g-1"
        >
            <div class="col-md-3 mb-3">
                <ModelListSelect
                    :list="store.countries"
                    option-value="code"
                    option-text="name"
                    v-model="store.form.city_id"
                    placeholder="Enter city name"
                    @searchchange="(e) => store.hotelsAutoSuggest(e)"
                    class="form-control"
                />
            </div>

            <div class="col-md-2 mb-3">
                <VueDatePicker
                    v-model="store.form.check_in"
                    placeholder="Check-In"
                    :enable-time-picker="false"
                    :hide-input-icon="true"
                    required
                />
            </div>
            <div class="col-md-2 mb-3">
                <VueDatePicker
                    v-model="store.form.check_out"
                    placeholder="Check-out"
                    :enable-time-picker="false"
                    :hide-input-icon="true"
                    required
                />
            </div>
            <div class="col-md-2 mb-3">
                <input
                    v-model="store.form.children"
                    type="number"
                    class="form-control"
                    placeholder="Children"
                />
            </div>
            <div class="col-md-2 mb-3">
                <input
                    v-model="store.form.adults"
                    type="number"
                    class="form-control"
                    placeholder="Adults"
                />
            </div>
            <div class="col-md-1 mb-3">
                <button
                    type="submit"
                    :disabled="store.form.processing"
                    class="btn btn-success"
                    style="height: 50px"
                >
                    <template v-if="store.form.processing">
                        Searching...
                    </template>
                    <template v-else> Search </template>
                </button>
            </div>
        </form>
    </div>
</template>
