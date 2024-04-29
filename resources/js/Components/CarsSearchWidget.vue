<script setup>
import { onMounted, ref } from "vue";
import { ModelListSelect } from "vue-search-select";
import VueDatePicker from "@vuepic/vue-datepicker";
import { useCarStore } from "@/stores/CarStore";

const store = useCarStore();

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
        <form @submit.prevent="store.onSearch()" class="row g-1">
            <div class="col-md-3 mb-3">
                <ModelListSelect
                    :list="store.pickupLocations"
                    option-value="code"
                    option-text="name"
                    v-model="store.form.pickup_code"
                    placeholder="Pickup Location"
                    @searchchange="(e) => store.getPickupLocations(e)"
                    class="hotel-input-first"
                />
            </div>
            <div class="col-md-3 mb-3">
                <VueDatePicker
                    v-model="store.form.pickup_datetime"
                    placeholder="Pickup Date & Time"
                    :enable-time-picker="true"
                    :hide-input-icon="true"
                    class="hotel-input-first"
                    required
                />
            </div>
            <div class="col-md-3 mb-3">
                <ModelListSelect
                    :list="store.dropOffLocations"
                    option-value="code"
                    option-text="name"
                    v-model="store.form.dropoff_code"
                    placeholder="DropOff Location"
                    @searchchange="(e) => store.getDropOffLocations(e)"
                    class="hotel-input-first"
                />
            </div>
            <div class="col-md-2 mb-3">
                <VueDatePicker
                    v-model="store.form.dropoff_datetime"
                    placeholder="DropOff Date & time"
                    :enable-time-picker="true"
                    :hide-input-icon="true"
                    class="hotel-input-first"
                    required
                />
            </div>

            <div class="col-md-1">
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
