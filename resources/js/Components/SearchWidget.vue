<script setup>
import { onMounted, ref } from "vue";
import FlightSearchWidget from "@/Components/FlightSearchWidget.vue";
import HotelSearchWidget from "@/Components/HotelSearchWidget.vue";

// const model = defineModel({
//     type: String,
//     required: false,
// });

const input = ref(null);

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

.active {
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
                                        <a href="#flights" data-easein="fadeIn">
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
                                        <a href="#hotels" data-easein="fadeIn">
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
                                        <a href="#ship" data-easein="fadeIn"
                                            >Attraction
                                            <i
                                                class="fa fa-camera fa-lg"
                                                aria-hidden="true"
                                            ></i>
                                        </a>
                                    </h6>
                                </li>
                                <li>
                                    <h6>
                                        <a href="#ship" data-easein="fadeIn"
                                            >Crusies
                                            <i
                                                class="fa fa-motorcycle fa-lg"
                                                aria-hidden="true"
                                            ></i>
                                        </a>
                                    </h6>
                                </li>
                            </ul>
                        </div>
                        <!-- tab menu end here -->

                        <div class="tab-content" id="tab-content1">
                            <div class="tab-pane active" id="flights">
                                <FlightSearchWidget />
                            </div>
                            <!-- flights form start here -->
                            <div class="tab-pane" id="vehicles">
                                <HotelSearchWidget />
                            </div>
                            <!-- vehicles form end here -->
                            <div class="tab-pane" id="hotels">
                                <div class="hotels-form">
                                    <form action="contact.php" method="post">
                                        <div class="hotel-input-2 input-b">
                                            <input
                                                type="text"
                                                name="s"
                                                id="keyword"
                                                class="hotel-input-first"
                                                placeholder="Type Keyword"
                                            />
                                        </div>
                                        <div class="hotel-input-4 input-b">
                                            <select
                                                id="standard1"
                                                name="standard"
                                                class="custom-select"
                                            >
                                                <option value="">
                                                    Select a Location
                                                </option>
                                                <option value="Us">
                                                    America
                                                </option>
                                                <option value="Canda">
                                                    Canada
                                                </option>
                                                <option value="london">
                                                    London
                                                </option>
                                                <option value="france">
                                                    Paris
                                                </option>
                                                <option value="bd">
                                                    Bangladesh
                                                </option>
                                            </select>
                                        </div>
                                        <div class="hotel-input-1 input-s">
                                            <input
                                                type="text"
                                                name="s"
                                                id="datepicker"
                                                class="hotel-input-first"
                                                placeholder="Check-In"
                                            />
                                        </div>
                                        <div class="hotel-input-1 input-s">
                                            <input
                                                type="text"
                                                name="s"
                                                id="datepicker1"
                                                class="hotel-input-first"
                                                placeholder="Check-out"
                                            />
                                        </div>
                                        <div class="hotel-input-1 input-s">
                                            <input
                                                type="number"
                                                name="s"
                                                id="number"
                                                class="hotel-input-first"
                                                placeholder="Guest"
                                            />
                                        </div>
                                        <div class="hotel-input-1 input-s">
                                            <input
                                                type="text"
                                                name="s"
                                                id="budget"
                                                class="hotel-input-first"
                                                placeholder="Budget"
                                            />
                                        </div>
                                        <div class="searc-btn-7">
                                            <button type="submit">
                                                Search
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- hotel form end here -->
                            <div class="tab-pane" id="tour">
                                <div class="hotels-form">
                                    <form action="#" method="post">
                                        <div class="hotel-input-4-23 input-b">
                                            <input
                                                type="text"
                                                name="s"
                                                id="keyword2"
                                                class="hotel-input-first"
                                                placeholder="Type Keyword"
                                            />
                                        </div>
                                        <div class="hotel-input-4-23 input-b">
                                            <select
                                                id="standard2"
                                                name="standard"
                                                class="custom-select"
                                            >
                                                <option value="">
                                                    Select a Location
                                                </option>
                                                <option value="Us">
                                                    America
                                                </option>
                                                <option value="Canda">
                                                    Canada
                                                </option>
                                                <option value="london">
                                                    London
                                                </option>
                                                <option value="france">
                                                    Paris
                                                </option>
                                                <option value="bd">
                                                    Bangladesh
                                                </option>
                                            </select>
                                        </div>
                                        <div class="hotel-input-4-23 input-s">
                                            <input
                                                type="text"
                                                name="s"
                                                id="datepicker2"
                                                class="hotel-input-first"
                                                placeholder="Check-In Date"
                                            />
                                        </div>
                                        <div class="hotel-input-4-23 input-s">
                                            <input
                                                type="number"
                                                name="s"
                                                id="number1"
                                                class="hotel-input-first"
                                                placeholder="Number of Guest"
                                            />
                                        </div>
                                        <div class="searc-btn-7">
                                            <button type="submit">
                                                Search
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- hotel form end here -->
                            <div class="tab-pane" id="ship">
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
                            </div>
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
