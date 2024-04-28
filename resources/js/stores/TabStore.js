import { defineStore } from "pinia";
import { ref, computed } from "vue";

export const useTabStore = defineStore("tab", () => {
    const selectedTab = ref("flights");

    return {
        selectedTab,
    };
});
