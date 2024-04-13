<script setup>
import { onMounted, ref } from "vue";
import { Head, Link, useForm, usePage } from "@inertiajs/vue3";
import HotelBooking from "@/Components/HotelBooking.vue";
import axios from "axios";
import { ModelListSelect } from "vue-search-select";
import debounce from "lodash.debounce";
import VueDatePicker from "@vuepic/vue-datepicker";

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

const hotelsAutoSuggest = debounce(async (city) => {
    const response = await axios.post(route("hotels.suggest"), { city });
    const result = Object.values(response.data.result.cities).map((r) => ({
        code: r.cityid_ppn,
        name: `${r.city} (${r.country})`,
    }));

    countries.value = result ?? [];
}, 500);

const submit = async (e) => {
    try {
        form.processing = true;
        const response = await axios.post(route("hotels.search"), form);
        allHotels.value = response.data;
        $("#staticBackdrop").appendTo("body").modal("show");
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

const selectHotel = (rate_data) => {
    selectedHotel.value = rate_data;
    stepper.value++;
};

const closeModal = () => {
    $("#staticBackdrop").modal("hide");
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
                    :list="countries"
                    option-value="code"
                    option-text="name"
                    v-model="form.city_id"
                    placeholder="Enter city name"
                    @searchchange="(e) => hotelsAutoSuggest(e)"
                    class="hotel-input-first"
                />
            </div>

            <!-- <div class="hotel-input-4 input-b">
                <select id="standard1" name="standard" class="custom-select">
                    <option value="">Select a Location</option>
                    <option value="Us">America</option>
                    <option value="Canda">Canada</option>
                    <option value="london">London</option>
                    <option value="france">Paris</option>
                    <option value="bd">Bangladesh</option>
                </select>
            </div> -->
            <div class="hotel-input-2 input-s">
                <VueDatePicker
                    v-model="form.check_in"
                    placeholder="Check-In"
                    :enable-time-picker="false"
                    :hide-input-icon="true"
                    class="hotel-input-first"
                    required
                />
            </div>
            <div class="hotel-input-2 input-s">
                <VueDatePicker
                    v-model="form.check_out"
                    placeholder="Check-out"
                    :enable-time-picker="false"
                    :hide-input-icon="true"
                    class="hotel-input-first"
                    required
                />
            </div>
            <div class="hotel-input-1 input-s">
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
            </div>
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
                    <h4 class="modal-title" v-if="stepper == 2">Book Hotel</h4>
                    <h4 class="modal-title" v-if="stepper == 1">
                        List of available hotels
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
                    <template v-if="allHotels.rate_data">
                        <div
                            class="row"
                            v-for="(rate_data, index) in allHotels.rate_data"
                            v-if="stepper == 1"
                        >
                            <div
                                style="border: 1px solid #dee2e6"
                                class="mb-3 p-3 rounded col-md-12"
                            >
                                <div
                                    class="d-flex flex-row align-items-center justify-content-between"
                                    v-if="rate_data"
                                    style="gap: 10px"
                                >
                                    <div class="d-flex flex-column">
                                        <img
                                            width="200"
                                            :src="`https:${rate_data.thumbnail}`"
                                            class="rounded"
                                        />
                                        <p></p>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <h4>
                                            {{ rate_data?.name }} ({{
                                                rate_data.hotel_zone
                                            }})
                                        </h4>
                                        <div class="text-muted">
                                            {{
                                                rate_data.hotel_description.slice(
                                                    0,
                                                    200
                                                )
                                            }}
                                            ...
                                        </div>
                                    </div>

                                    <div class="d-flex flex-column">
                                        <div>
                                            <div class="fw-bold">$300</div>
                                            <button
                                                type="button"
                                                class="btn btn-primary"
                                                @click="selectHotel(rate_data)"
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
                    <HotelBooking
                        @close-modal="closeModal"
                        v-if="stepper == 2"
                        :hotel="selectedHotel"
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
