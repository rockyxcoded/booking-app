import { defineStore } from "pinia";
import { ref, computed } from "vue";
import { useForm } from "@inertiajs/vue3";
import debounce from "lodash.debounce";

export const useHotelStore = defineStore("hotel", () => {
    const hotels = ref({});
    const countries = ref([]);

    const form = useForm({
        city_id: "",
        check_out: "",
        check_in: "",
        adults: "",
        children: "",
    });

    const resetForm = () => {
        form.city_id = "";
        form.check_out = "";
        form.check_in = "";
        form.adults = "";
        form.children = "";
    };

    const hotelsAutoSuggest = debounce(async (city) => {
        const response = await axios.post(route("hotels.suggest"), { city });
        const result = Object.values(response.data.result.cities).map((r) => ({
            code: r.cityid_ppn,
            name: `${r.city} (${r.country})`,
        }));

        countries.value = result ?? [];
    }, 500);

    const onSearch = () => {
        form.get(route("hotels.index"), {
            preserveState: true,
            preserveScroll: true,
            replace: true,
        });
    };

    return {
        form,
        countries,
        onSearch,
        hotels,
        resetForm,
        hotelsAutoSuggest,
    };
});
