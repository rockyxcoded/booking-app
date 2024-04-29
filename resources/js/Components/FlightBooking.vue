<script setup>
import { onMounted, ref, toRaw } from "vue";
import { useForm } from "@inertiajs/vue3";
import { useFlightStore } from "@/stores/FlightStore";
import VueDatePicker from "@vuepic/vue-datepicker";

const store = useFlightStore();

const props = defineProps({
    flight: { type: Object, default: {} },
    form: { type: Object, default: {} },
});

let myModal = null;
const form = useForm({
    title: "",
    first_name: "",
    last_name: "",
    email: "",
    phone: "",
    dob: "",
    passport_number: "",
    passport_issuing_country: "",
    passport_expiry_date: "",
});

form.transform((data) => ({
    ...data,
    ...(store.form && store.form),
    flight: props.flight,
}));

const bookFlight = () => {
    form.post(route("flights.store"), {
        onSuccess: () => {
            form.reset();
            store.resetForm();
            closeModal();
            Swal.fire({
                title: "Success!",
                text: "Thank you for booking with Zenith Travels, your checkout and payment details have been sent to your email. *Note that Bookings not paid for in 48 hours will be canceled. ",
                icon: "success",
                confirmButtonText: "Ok",
            });
        },
        onError: (e) => {
            console.log({ e });
        },
        onFinish: () => {},
    });
};

const closeModal = () => {
    myModal.hide();
};
const openModal = () => {
    myModal.show();
};

onMounted(() => {
    myModal = new bootstrap.Modal("#exampleModal", {
        keyboard: false,
        backdrop: "static",
    });
});

// defineExpose({ focus: () => input.value.focus() });
</script>

<template>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-success" @click="openModal">
        Book Now
    </button>

    <!-- Modal -->
    <div
        class="modal fade"
        id="exampleModal"
        tabindex="-1"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
    >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                        Traveler Details
                    </h1>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    ></button>
                </div>
                <div class="modal-body">
                    <div class="text-left col-10 mx-auto">
                        <form @submit.prevent="bookFlight">
                            <div class="mb-3">
                                <label for="name" class="form-label"
                                    >Title</label
                                >
                                <select
                                    name="title"
                                    class="form-select"
                                    v-model="form.title"
                                    required
                                >
                                    <option value="">Select</option>
                                    <option value="mr">Mr.</option>
                                    <option value="mrs">Mrs.</option>
                                    <option value="ms">Ms.</option>
                                    <option value="dr">Dr.</option>
                                    <option value="chief">Chief.</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label"
                                    >First Name</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    :class="{
                                        'is-invalid': form.errors.first_name,
                                    }"
                                    v-model="form.first_name"
                                />
                                <div class="invalid-feedback">
                                    {{ form.errors.first_name }}
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label"
                                    >Last Name</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    :class="{
                                        'is-invalid': form.errors.last_name,
                                    }"
                                    v-model="form.last_name"
                                />
                                <div class="invalid-feedback">
                                    {{ form.errors.last_name }}
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label"
                                    >Date Of Birth</label
                                >
                                <VueDatePicker
                                    v-model="form.dob"
                                    :enable-time-picker="false"
                                    :hide-input-icon="false"
                                    required
                                />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email address</label>
                                <input
                                    type="email"
                                    class="form-control"
                                    :class="{ 'is-invalid': form.errors.email }"
                                    v-model="form.email"
                                />
                                <div class="invalid-feedback">
                                    {{ form.errors.email }}
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label"
                                    >Phone</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    :class="{ 'is-invalid': form.errors.phone }"
                                    v-model="form.phone"
                                />
                                <div class="invalid-feedback">
                                    {{ form.errors.phone }}
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="passport_number" class="form-label"
                                    >Passport Number</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    :class="{
                                        'is-invalid':
                                            form.errors.passport_number,
                                    }"
                                    v-model="form.passport_number"
                                />
                                <div class="invalid-feedback">
                                    {{ form.errors.passport_number }}
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="issuing_country" class="form-label"
                                    >Issuing Country</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    :class="{
                                        'is-invalid':
                                            form.errors.issuing_country,
                                    }"
                                    v-model="form.issuing_country"
                                />
                                <div class="invalid-feedback">
                                    {{ form.errors.issuing_country }}
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="name" class="form-label"
                                    >Expiry Date</label
                                >
                                <VueDatePicker
                                    v-model="form.passport_expiry_date"
                                    :enable-time-picker="false"
                                    :hide-input-icon="false"
                                    required
                                />
                            </div>

                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-success">
                                    <template v-if="form.processing"
                                        >Processing</template
                                    >
                                    <template v-else>Submit</template>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
