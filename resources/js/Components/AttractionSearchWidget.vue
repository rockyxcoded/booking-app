<script setup>
import { onMounted, ref } from "vue";
import { Head, Link, useForm, usePage } from "@inertiajs/vue3";
import AttractionBooking from "@/Components/AttractionBooking.vue";
import axios from "axios";
import { ModelListSelect } from "vue-search-select";
import debounce from "lodash.debounce";
import VueDatePicker from "@vuepic/vue-datepicker";

const allAttractions = ref({});
const stepper = ref(1);
const selectedAttraction = ref({});

const locations = ref([]);

const form = useForm({
    start_date: "",
    end_date: "",
    code: "",
});

const getLocations = debounce(async (city) => {
    const response = await axios.post(route("attractions.suggest"), { city });
    locations.value = response.data ?? [];
}, 500);

const submit = async (e) => {
    try {
        form.processing = true;
        const response = await axios.post(route("attractions.search"), form);
        allAttractions.value = response.data;
        console.log(response.data);
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

const selectCar = (product) => {
    selectedAttraction.value = product;
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
        <form @submit.prevent="submit($event)" method="POST" class="row g-1">
            <div class="col-md-3">
                <ModelListSelect
                    :list="locations"
                    option-value="code"
                    option-text="name"
                    v-model="form.code"
                    placeholder="Location"
                    @searchchange="(e) => getLocations(e)"
                    class="hotel-input-first"
                />
            </div>
            <div class="col-md-3">
                <VueDatePicker
                    v-model="form.start_date"
                    placeholder="Start Date"
                    :enable-time-picker="false"
                    :hide-input-icon="true"
                    class="hotel-input-first"
                    required
                />
            </div>

            <div class="col-md-3">
                <VueDatePicker
                    v-model="form.end_date"
                    placeholder="End Date"
                    :enable-time-picker="false"
                    :hide-input-icon="true"
                    class="hotel-input-first"
                    required
                />
            </div>

            <div class="col-md-3">
                <button
                    type="submit"
                    :disabled="form.processing"
                    class="btn btn-success btn-lg"
                >
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
                    <h4 class="modal-title" v-if="stepper == 2">
                        Book Attraction
                    </h4>
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
                    <template v-if="allAttractions">
                        <div
                            class="row"
                            v-for="(product, index) in allAttractions"
                            v-if="stepper == 1"
                        >
                            <div
                                style="border: 1px solid #dee2e6"
                                class="mb-3 p-3 rounded col-md-12"
                            >
                                <div
                                    class="d-flex flex-row align-items-center justify-content-between"
                                    v-if="product"
                                    style="gap: 1rem"
                                >
                                    <div class="d-flex flex-column">
                                        <img
                                            width="50"
                                            :src="product.photo"
                                            class="rounded"
                                        />
                                        <!-- <p>
                                            {{ product.car.type_name }}
                                        </p> -->
                                    </div>
                                    <div class="d-flex flex-column">
                                        <h5>
                                            {{ product.name }}
                                        </h5>
                                        <div class="text-muted">
                                            {{ product.description }}
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <div class="fw-bold">
                                            {{ product?.pricing?.currency }}
                                            {{ product?.pricing?.amount }}
                                        </div>
                                        <button
                                            type="button"
                                            class="btn btn-primary"
                                            @click="selectCar(product)"
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
                    </template>
                    <div class="alert alert-danger" role="alert" v-else>
                        <span
                            class="glyphicon glyphicon-exclamation-sign"
                            aria-hidden="true"
                        ></span>
                        <span class="sr-only">Error:</span>
                        No Attractions found
                    </div>
                    <AttractionBooking
                        @close-modal="closeModal"
                        v-if="stepper == 2"
                        :flight="selectedAttraction"
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
