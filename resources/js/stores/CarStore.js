import { defineStore } from "pinia";
import { ref, computed } from "vue";
import { useForm } from "@inertiajs/vue3";
import debounce from "lodash.debounce";

export const useCarStore = defineStore("car", () => {
    const pickupLocations = ref([]);
    const dropOffLocations = ref([]);

    const form = useForm({
        pickup_datetime: "",
        dropoff_datetime: "",
        pickup_code: "",
        dropoff_code: "",
    });

    const resetForm = () => {
        form.pickup_datetime = "";
        form.dropoff_datetime = "";
        form.pickup_code = "";
        form.dropoff_code = "";
    };

    const getDropOffLocations = debounce(async (city) => {
        const response = await axios.post(route("cars.suggest"), { city });
        const result = Object.values(response.data.city_data).map((r) => ({
            code: r?.ppn_car_cityid,
            name:
                r.state_code !== null
                    ? `${r.city}, ${r.state_code} (${r.country})`
                    : `${r.city} (${r.country})`,
        }));

        dropOffLocations.value = result ?? [];
    }, 500);

    const getPickupLocations = debounce(async (city) => {
        const response = await axios.post(route("cars.suggest"), { city });
        const result = Object.values(response.data.city_data).map((r) => ({
            code: r?.ppn_car_cityid,
            name:
                r.state_code !== null
                    ? `${r.city}, ${r.state_code} (${r.country})`
                    : `${r.city} (${r.country})`,
        }));

        pickupLocations.value = result ?? [];
    }, 500);

    const onSearch = () => {
        form.get(route("cars.index"), {
            preserveState: true,
            preserveScroll: true,
            replace: true,
        });
    };

    return {
        form,
        getDropOffLocations,
        getPickupLocations,
        onSearch,
        pickupLocations,
        dropOffLocations,
        resetForm,
    };
});
