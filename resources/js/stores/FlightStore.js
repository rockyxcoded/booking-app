import { defineStore } from "pinia";
import { ref, computed } from "vue";
import { useForm } from "@inertiajs/vue3";
import debounce from "lodash.debounce";

export const useFlightStore = defineStore("flight", () => {
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

    const locations1 = ref([]);
    const locations2 = ref([]);

    const resetForm = () => {
        form.location = "";
        form.destination = "";
        form.departure_date = "";
        form.return_date = "";
        form.cabin_class = "";
        form.adults = "";
        form.children = "";
        form.trip_type = "round";
    };

    const getLocations1 = debounce(async (query, loading) => {
        console.log(query, loading);
        const response = await axios.post(route("flights.locations"), {
            query,
        });
        locations1.value =
            response.data.map((l) => ({
                code: l.city.code,
                name: l.name,
            })) ?? [];
    }, 500);

    const getLocations2 = debounce(async (query) => {
        const response = await axios.post(route("flights.locations"), {
            query,
        });
        locations2.value =
            response.data.map((l) => ({
                code: l.city.code,
                name: l.name,
            })) ?? [];
    }, 500);

    const onSearch = () => {
        form.get(route("flights.index"), {
            preserveState: true,
            preserveScroll: true,
            replace: true,
        });
    };

    return {
        form,
        locations1,
        locations2,
        onSearch,
        getLocations1,
        getLocations2,
        resetForm,
    };
});
