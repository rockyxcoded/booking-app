<template>
    <!-- booking form start here -->
    <div class="col-md-4 col-sm-12">
        <aside>
            <div class="booking-form">
                <div class="booking-title">
                    <h2>Book A Service</h2>
                </div>
                <form action="#" method="post">
                    <div class="form-group">
                        <input
                            type="text"
                            class="form-control"
                            id="booking-name"
                            placeholder="Name *"
                        />
                    </div>
                    <div class="form-group">
                        <input
                            type="email"
                            class="form-control"
                            id="booking-email"
                            placeholder="E-mail *"
                        />
                    </div>
                    <div class="form-group">
                        <input
                            type="tel"
                            class="form-control"
                            id="booking-number"
                            placeholder="Phone Number *"
                        />
                    </div>
                    <div class="form-group">
                        <input
                            type="text"
                            class="form-control"
                            id="booking-date"
                            placeholder="dd-mm-yy *"
                        />
                    </div>
                    <div class="form-group">
                        <select
                            class="form-control"
                            id="booking-services"
                            placeholder="Select Service*"
                        >
                            <option value="travel-tour-service">
                                Travel Tour Service
                            </option>
                            <option value="ticketing-reservation">
                                Ticketing &amp; Reservation
                            </option>
                            <option value="travel-insurance">
                                Travel Insurance
                            </option>
                            <option value="conference-fairs">
                                Conference &amp; Fairs
                            </option>
                            <option value="rent-a-car-service">
                                Rent-a-Car Service
                            </option>
                            <option value="boat-cruise-service">
                                Boat Cruise Service
                            </option>
                            <option value="bus-hire-service">
                                Bus Hire Service
                            </option>
                            <option value="entertainment-promotion">
                                Entertainment Promotion
                            </option>
                            <option value="management-retreat">
                                Management Retreat
                            </option>
                            <option value="hotel-reservation">
                                Hotel Reservation
                            </option>
                            <option value="event-management">
                                Event Management
                            </option>
                            <option value="visa-counseling">
                                Visa Counseling
                            </option>
                            <option value="immigration-protocol">
                                Immigration &amp; Protocol
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea
                            name="messgae"
                            id="booking-message"
                            cols="30"
                            rows="10"
                            class="form-control"
                            placeholder="Message *"
                        ></textarea>
                    </div>
                    <div class="form-group">
                        <button
                            type="button"
                            id="booking-submit-button"
                            class="booking-confirm hvr-shutter-out-horizontal"
                        >
                            Book Now
                        </button>
                    </div>
                    <div style="height: 10px !important"></div>
                    <div id="remark4"></div>
                </form>
            </div>
        </aside>
        <!-- adverestment start here-->

        <div class="adding-form">
            <div class="addfor-bg">
                <div class="add-content">
                    <h3>Any Question?</h3>
                    <p class="pgad">
                        If you require additional information on Tours,
                        Ticketing &amp; Reservation, Hotel Reservation, Visa
                        Counseling, Immigration &amp; Protocol Service and any
                        other; kindly contact us:
                    </p>
                    <ul class="contact-for-add">
                        <li>
                            <img src="images/icon/phone.png" alt="" />+234 802
                            2235 119
                        </li>
                        <li>
                            <img
                                src="images/icon/gmail.png"
                                alt=""
                            />info@zenithtravelgroup.com
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- adverestment start here-->
    </div>
    <!-- booking form end here -->
</template>

<script setup></script>

<style lang="scss" scoped></style>
