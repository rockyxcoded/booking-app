<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import { Head, Link, useForm, router } from "@inertiajs/vue3";
import { onMounted, toRaw, ref, computed } from "vue";
import { useFlightStore } from "@/stores/FlightStore";

const store = useFlightStore();

const props = defineProps({
    allFlights: {
        type: Array,
        default: [],
    },
    queryParams: {
        type: Object,
    },
});

const searchQ = ref("");

const flights = computed(() => {
    const q = searchQ.value.toLowerCase();
    if (q == "") {
        return props.allFlights;
    }

    return props.allFlights.filter((flight) =>
        flight.slice_data.slice_0.airline.name.toLowerCase().includes(q)
    );
});

const selectFlight = (itinerary_data) => {
    const encoded = window.btoa(JSON.stringify(itinerary_data));
    const randomStr = btoa(Math.random().toString()).substring(10, 15);
    localStorage.setItem("Itinerary-Data", encoded);
    router.get(
        route("flights.show", { id: randomStr }),
        {},
        {
            preserveState: true,
            preserveScroll: true,
            headers: {
                "Itinerary-Data": encoded,
            },
        }
    );
};

onMounted(() => {
    // console.log(props.queryParams);
});
</script>

<template>
    <GuestLayout>
        <Head title="Search Flight" />

        <div class="container">
            <div class="my-3 d-flex justify-content-between">
                <nav aria-label="breadcrumb ">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Flights
                        </li>
                    </ol>
                </nav>
                <div>
                    <input
                        v-model="searchQ"
                        type="text"
                        placeholder="Search"
                        class="form-control"
                        aria-describedby="passwordHelpInline"
                    />
                </div>
            </div>
            <template v-if="flights.length > 0">
                <div
                    class="mb-3 card"
                    v-for="(itinerary_data, index) in flights"
                >
                    <div>
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                <img
                                    :src="
                                        itinerary_data.slice_data?.slice_0
                                            .airline?.logo
                                    "
                                    class="img-fluid rounded-start"
                                    style="width: 100%"
                                />
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <div
                                        class="d-flex flex-row align-items-center justify-content-between"
                                        v-if="
                                            itinerary_data.slice_data?.slice_0
                                        "
                                    >
                                        <div class="d-flex flex-column">
                                            <h6>
                                                {{
                                                    itinerary_data.slice_data
                                                        ?.slice_0.departure
                                                        .datetime.time_12h
                                                }}
                                            </h6>
                                            <div class="text-muted">
                                                {{
                                                    itinerary_data.slice_data
                                                        ?.slice_0.departure
                                                        .airport.code
                                                }}
                                            </div>
                                        </div>
                                        <div>
                                            <i
                                                class="fa fa-long-arrow-right"
                                                aria-hidden="true"
                                            ></i>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h6>
                                                {{
                                                    itinerary_data.slice_data
                                                        ?.slice_0.arrival
                                                        .datetime.time_12h
                                                }}
                                            </h6>
                                            <div class="text-muted">
                                                {{
                                                    itinerary_data.slice_data
                                                        ?.slice_0.arrival
                                                        .airport.code
                                                }}
                                            </div>
                                        </div>
                                    </div>
                                    <hr />
                                    <div
                                        class="d-flex flex-row align-items-center justify-content-between"
                                        v-if="
                                            itinerary_data.slice_data?.slice_1
                                        "
                                    >
                                        <div class="d-flex flex-column">
                                            <h6>
                                                {{
                                                    itinerary_data.slice_data
                                                        ?.slice_1.arrival
                                                        .datetime.time_12h
                                                }}
                                            </h6>
                                            <div class="text-muted">
                                                {{
                                                    itinerary_data.slice_data
                                                        ?.slice_1.arrival
                                                        .airport.code
                                                }}
                                            </div>
                                        </div>
                                        <div>
                                            <i
                                                class="fa fa-long-arrow-left"
                                                aria-hidden="true"
                                            ></i>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h6>
                                                {{
                                                    itinerary_data.slice_data
                                                        ?.slice_1.departure
                                                        .datetime.time_12h
                                                }}
                                            </h6>
                                            <div class="text-muted">
                                                {{
                                                    itinerary_data.slice_data
                                                        ?.slice_1.departure
                                                        .airport.code
                                                }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div
                                    class="d-flex justify-content-center gap-2 align-items-between"
                                >
                                    <div class="d-flex flex-column">
                                        <div class="fw-bold">
                                            {{
                                                itinerary_data?.price_details
                                                    ?.display_symbol
                                            }}
                                            {{
                                                itinerary_data?.price_details
                                                    ?.display_total_fare
                                            }}
                                        </div>
                                        <div>
                                            {{
                                                itinerary_data.slice_data
                                                    ?.slice_0.airline?.name
                                            }}
                                        </div>
                                    </div>
                                    <button
                                        type="button"
                                        class="btn btn-success"
                                        @click="selectFlight(itinerary_data)"
                                    >
                                        <span class="me-5">Select</span>
                                        <i
                                            class="fa fa-angle-right"
                                            aria-hidden="true"
                                        ></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </template>
            <div class="alert alert-danger" role="alert" v-else>
                <span
                    class="glyphicon glyphicon-exclamation-sign"
                    aria-hidden="true"
                ></span>
                <span class="sr-only">Error:</span>
                No flights found
            </div>
        </div>
    </GuestLayout>
</template>
