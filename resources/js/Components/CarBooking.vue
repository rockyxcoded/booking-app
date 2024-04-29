<script setup>
import { onMounted, ref, toRaw } from "vue";
import { useForm } from "@inertiajs/vue3";
import { useCarStore } from "@/stores/CarStore";

const store = useCarStore();

const props = defineProps({
    car: { type: Object, default: {} },
    form: { type: Object, default: {} },
});

let myModal = null;
const form = useForm({
    name: "",
    email: "",
    phone: "",
});

form.transform((data) => ({
    ...data,
    ...(store.form && store.form),
    car: props.car,
}));

const bookCar = () => {
    form.post(route("cars.store"), {
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
</script>

<template>
    <button type="button" class="btn btn-success" @click="openModal">
        Book Now
    </button>

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
                        Book car
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
                        <form @submit.prevent="bookCar">
                            <div class="mb-3">
                                <label for="name" class="form-label"
                                    >Name</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    :class="{ 'is-invalid': form.errors.name }"
                                    v-model="form.name"
                                />
                                <div class="invalid-feedback">
                                    {{ form.errors.name }}
                                </div>
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
