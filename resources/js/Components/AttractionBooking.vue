<script setup>
import { onMounted, ref, toRaw } from "vue";
import { useForm } from "@inertiajs/vue3";

const props = defineProps({
    attraction: { type: Object, default: {} },
    form: { type: Object, default: {} },
});

const emit = defineEmits(["closeModal"]);

const form = useForm({
    name: "",
    email: "",
    phone: "",
});

form.transform((data) => ({
    ...data,
    ...(props.form && props.form),
    attraction: props.attraction,
}));

const bookAttraction = () => {
    form.post(route("attractions.store"), {
        onSuccess: () => {
            emit("closeModal");
            Swal.fire({
                title: "Success!",
                text: "Thank you for booking with Zenith Travels, your checkout and payment details have been sent to your email. *Note that Bookings not paid for in 48 hours will be canceled. ",
                icon: "success",
                confirmButtonText: "Ok",
            });
        },
    });
};

onMounted(() => {});

// defineExpose({ focus: () => input.value.focus() });
</script>

<template>
    <div class="text-left col-6 mx-auto">
        <form>
            <div class="mb-3" :class="{ 'has-error': form.errors.name }">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" v-model="form.name" />
                <div class="help-block">{{ form.errors.name }}</div>
            </div>
            <div class="mb-3" :class="{ 'has-error': form.errors.email }">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" v-model="form.email" />
                <div class="help-block">{{ form.errors.email }}</div>
            </div>
            <div class="mb-3" :class="{ 'has-error': form.errors.phone }">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" v-model="form.phone" />
                <div class="help-block">{{ form.errors.phone }}</div>
            </div>

            <button
                type="button"
                class="btn btn-primary"
                @click="bookAttraction"
            >
                <template v-if="form.processing">Processing</template>
                <template v-else>Book Now</template>
            </button>
        </form>
    </div>
</template>
