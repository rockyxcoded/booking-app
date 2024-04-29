<script setup>
import { onMounted, ref } from "vue";
import FlightSearchWidget from "@/Components/FlightSearchWidget.vue";
import CarsSearchWidget from "@/Components/CarsSearchWidget.vue";
import HotelSearchWidget from "@/Components/HotelSearchWidget.vue";
import AttractionSearchWidget from "@/Components/AttractionSearchWidget.vue";
import { router } from "@inertiajs/vue3";

import { useTabStore } from "@/stores/TabStore";

const store = useTabStore();

onMounted(() => {});

// defineExpose({ focus: () => input.value.focus() });
</script>
<style>
.search-area {
    border: 1px solid white;
    padding: 2.5rem;
    margin-bottom: 1.5rem;
    border-radius: 20px;
    background-color: #f5f5f5;
    /* box-shadow: 0 8px 20px 0 rgba(15,41,77,.12); */
}
.tab-content > .active {
    display: flex !important;
    justify-content: center;
}
.nav-link {
    color: #198754;
}
.nav-link:hover {
    color: var(--bs-orange);
}
.nav-pills .nav-link.active {
    background-color: var(--bs-green);
    border-radius: 17px;
}
.tabbased-search-area1 {
    background: rgba(34, 67, 74, 0.7);
    width: 100%;
    text-align: center;
    padding: 10px 0 10px 0px;
}
.tabbased-search-area1 .form-control,
.dp__input,
.form-select {
    height: 53px !important;
}
.form-check-input:checked {
    background-color: var(--bs-green);
    border-color: var(--bs-green);
}
</style>

<template>
    <section class="tabbased-search-area1">
        <div class="container contain">
            <div class="search-area">
                <div class="tabbable-menu">
                    <div
                        class="d-flex flex-column align-items-center justify-content-center"
                    >
                        <div>
                            <ul
                                class="nav nav-pills mb-3"
                                id="pills-tab"
                                role="tablist"
                            >
                                <li class="nav-item mb-4" role="presentation">
                                    <button
                                        class="nav-link"
                                        :class="{
                                            active:
                                                store.selectedTab == 'flights',
                                        }"
                                        id="flight-tab"
                                        data-bs-toggle="pill"
                                        data-bs-target="#flight"
                                        type="button"
                                        role="tab"
                                        aria-controls="flight"
                                        aria-selected="true"
                                        @click="store.selectedTab = 'flights'"
                                    >
                                        Flights
                                        <i
                                            class="fa fa-plane fa-lg"
                                            aria-hidden="true"
                                        ></i>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button
                                        class="nav-link"
                                        :class="{
                                            active:
                                                store.selectedTab == 'hotels',
                                        }"
                                        id="hotels-tab"
                                        data-bs-toggle="pill"
                                        data-bs-target="#hotels"
                                        type="button"
                                        role="tab"
                                        aria-controls="hotels"
                                        aria-selected="false"
                                        @click="store.selectedTab = 'hotels'"
                                    >
                                        Hotels
                                        <i
                                            class="fa fa-bed fa-lg"
                                            aria-hidden="true"
                                        ></i>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button
                                        class="nav-link"
                                        id="vehicles-tab"
                                        data-bs-toggle="pill"
                                        data-bs-target="#vehicles"
                                        type="button"
                                        role="tab"
                                        aria-controls="vehicles"
                                        aria-selected="false"
                                        @click="store.selectedTab = 'vehicles'"
                                    >
                                        Cars
                                        <i
                                            class="fa fa-car fa-lg"
                                            aria-hidden="true"
                                        ></i>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button
                                        class="nav-link"
                                        id="attractions-tab"
                                        data-bs-toggle="pill"
                                        data-bs-target="#attractions"
                                        type="button"
                                        role="tab"
                                        aria-controls="attractions"
                                        aria-selected="false"
                                        @click="
                                            store.selectedTab = 'attractions'
                                        "
                                    >
                                        Attraction
                                        <i
                                            class="fa fa-camera fa-lg"
                                            aria-hidden="true"
                                        ></i>
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <!-- tab menu end here -->

                        <div class="tab-content" id="pills-tabContent">
                            <div
                                class="tab-pane fade"
                                :class="{
                                    'show active':
                                        store.selectedTab == 'flights',
                                }"
                                id="flight"
                                role="tabpanel"
                                aria-labelledby="flight-tab"
                                tabindex="0"
                            >
                                <FlightSearchWidget />
                            </div>
                            <div
                                class="tab-pane fade"
                                id="vehicles"
                                role="tabpanel"
                                aria-labelledby="vehicles-tab"
                                tabindex="0"
                            >
                                <CarsSearchWidget />
                            </div>
                            <div
                                class="tab-pane fade"
                                :class="{
                                    'show active':
                                        store.selectedTab == 'hotels',
                                }"
                                id="hotels"
                                role="tabpanel"
                                aria-labelledby="hotels-tab"
                                tabindex="0"
                            >
                                <HotelSearchWidget />
                            </div>
                            <div
                                class="tab-pane fade"
                                id="attractions"
                                role="tabpanel"
                                aria-labelledby="attractions-tab"
                                tabindex="0"
                            >
                                <AttractionSearchWidget />
                            </div>
                        </div>
                        <!-- tab content end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- header tab based search area end-->
</template>
