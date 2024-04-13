<script setup>
import { onMounted, ref } from "vue";
import FlightSearchWidget from "@/Components/FlightSearchWidget.vue";
import CarsSearchWidget from "@/Components/CarsSearchWidget.vue";
import HotelSearchWidget from "@/Components/HotelSearchWidget.vue";
import AttractionSearchWidget from "@/Components/AttractionSearchWidget.vue";

// const model = defineModel({
//     type: String,
//     required: false,
// });

const selectedTab = ref("flights");

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
}
.tab-content > .active {
    display: flex !important;
    justify-content: center;
}
</style>

<template>
    <section class="tabbased-search-area">
        <div class="container">
            <div class="search-area">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tabbable-menu">
                            <ul class="tab-menu" id="myTab1">
                                <li class="active">
                                    <h6>
                                        <a
                                            href="#flights"
                                            data-easein="fadeIn"
                                            @click="selectedTab = 'flights'"
                                        >
                                            flights
                                            <i
                                                class="fa fa-plane fa-lg"
                                                aria-hidden="true"
                                            ></i>
                                        </a>
                                    </h6>
                                </li>
                                <li>
                                    <h6>
                                        <a
                                            href="#hotels"
                                            data-easein="fadeIn"
                                            @click="selectedTab = 'hotels'"
                                        >
                                            Hotels
                                            <i
                                                class="fa fa-bed fa-lg"
                                                aria-hidden="true"
                                            ></i>
                                        </a>
                                    </h6>
                                </li>
                                <li>
                                    <h6>
                                        <a
                                            href="#vehicles"
                                            data-easein="fadeIn"
                                            @click="selectedTab = 'vehicles'"
                                        >
                                            Cars
                                            <i
                                                class="fa fa-car fa-lg"
                                                aria-hidden="true"
                                            ></i>
                                        </a>
                                    </h6>
                                </li>
                                <li>
                                    <h6>
                                        <a
                                            href="#attraction"
                                            data-easein="fadeIn"
                                            @click="selectedTab = 'attraction'"
                                            >Attraction
                                            <i
                                                class="fa fa-camera fa-lg"
                                                aria-hidden="true"
                                            ></i>
                                        </a>
                                    </h6>
                                </li>
                                <!-- <li>
                                    <h6>
                                        <a href="#ship" data-easein="fadeIn"
                                            >Crusies
                                            <i
                                                class="fa fa-motorcycle fa-lg"
                                                aria-hidden="true"
                                            ></i>
                                        </a>
                                    </h6>
                                </li> -->
                            </ul>
                        </div>
                        <!-- tab menu end here -->

                        <div
                            class="tab-content"
                            id="tab-content1"
                            styes="display: flex !important; justify-content: center !important;"
                        >
                            <div class="tab-pane active" id="flights">
                                <FlightSearchWidget
                                    v-if="selectedTab == 'flights'"
                                />
                            </div>
                            <!-- flights form start here -->
                            <div class="tab-pane" id="vehicles">
                                <CarsSearchWidget
                                    v-if="selectedTab == 'vehicles'"
                                />
                            </div>
                            <!-- vehicles form end here -->
                            <div class="tab-pane" id="hotels">
                                <HotelSearchWidget
                                    v-if="selectedTab == 'hotels'"
                                />
                            </div>
                            <!-- Attraction form end here -->
                            <div class="tab-pane" id="attraction">
                                <AttractionSearchWidget
                                    v-if="selectedTab == 'attraction'"
                                />
                            </div>
                            <!-- Attraction form end here -->
                            <!-- <div class="tab-pane" id="ship">
                                <div class="hotels-form">
                                    <form action="#" method="post">
                                        <div class="hotel-input-4-23 input-s">
                                            <input
                                                type="text"
                                                name="s"
                                                id="shippickupdate"
                                                class="hotel-input-first"
                                                placeholder="Pickup Date & time"
                                            />
                                        </div>
                                        <div class="hotel-input-4-23 input-s">
                                            <input
                                                type="number"
                                                name="s"
                                                id="time"
                                                class="hotel-input-first"
                                                placeholder="Hours"
                                            />
                                        </div>
                                        <div class="hotel-input-4-23 input-s">
                                            <input
                                                type="text"
                                                name="s"
                                                id="name"
                                                class="hotel-input-first"
                                                placeholder="Pickup Location"
                                            />
                                        </div>
                                        <div class="hotel-input-4-23 input-s">
                                            <input
                                                type="text"
                                                name="s"
                                                id="drop-location"
                                                class="hotel-input-first"
                                                placeholder="Drop Location"
                                            />
                                        </div>
                                        <div class="searc-btn-7">
                                            <button type="submit">
                                                Search1
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div> -->
                            <!-- ship form end here -->
                        </div>
                        <!-- tab content end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- header tab based search area end-->
</template>
