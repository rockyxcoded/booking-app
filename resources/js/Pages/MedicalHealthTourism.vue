<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import { Head } from "@inertiajs/vue3";
import { onMounted, ref } from "vue";
import BookService from "../Components/Partials/BookService.vue";
import FeaturedTours from "../Components/Partials/FeaturedTours.vue";

const container = ref("container");

onMounted(() => {
    container?.value?.scrollIntoView();
});
</script>

<template>
    <GuestLayout>
        <Head title="Page" />
        <section class="breadcrumb-blog-version-one">
	<div class="single-bredcurms" style="background-image:url('/images/bgimage/bg1.jpg');">
     	<div class="container">
             <div class="row">
                 <div class="col-sm-12">
                    <div class="bredcrums-content">
                       <h2>Medical-Health Tourism</h2>
                       <ul>
                            <li><a href="/">Home</a></li>
                            <li class="active"><a href="tours">Tours</a></li>
                       </ul>
                    </div>
                 </div>
             </div>
        </div>
	</div>
</section><!-- blog breadcrumb version one end here -->

<section class="section-paddings single-package-area">
	<div class="container">
		<div class="row">
			<!-- single package tab with details -->
			<div class="col-md-8 col-sm-12">
				<div class="single-package-details">
					<div class="single-package-title">
						<h2>Medical-Health Tourism</h2><br />
					</div>
					<div class="package-features-image">
						<img src="/images/pageheaders/medical-health-tourism.jpg" alt="" class="img-responsove border-raduis-3">
					</div>
				</div><!-- tab menu strat -->

				<!-- tab content start -->
				<div class="row">
                	<br />
					<div class="tour-description">
                        <p>We have working relationships with major internationally recognized and globally certified hospitals and medical centres across the world that are centres of medical and health excellence that offer pocket-friendly and superior medical services and treatments to our clients who may need medical attention to treat their debilitating health challenges based on the report of diagnosis supplied or recommended by their medical doctors.</p>
                        <p>At the end of the day, we assure that our clients will surely access and receive the best medical attentions and treatments at any of our partners’ medical and health facilities anywhere in the world.</p>
                        <p>
                            The following are some of the elements that are incorporated in our Medical/Health Tourism package:
                                <p>&#8226; Air Ambulance (where needed)</p>
                                <p>&#8226; Processing of international passport (where patient does not have)</p>
                                <p>&#8226; Assisting in booking medical treatment appointments with our overseas medical centres and hospitals partners</p>
                                <p>&#8226; Visa Processing</p>
                                <p>&#8226; Return flight booking and ticketing</p>
                                <p>&#8226; Assist in sourcing of forex for the medical treatment travel</p>
                                <p>&#8226; Component of a family member as an escort</p>
                                <p>&#8226; Airport transfers</p>
                                <p>&#8226; Travel medical insurance</p>
                                <p>&#8226; Local transportations</p>
                                <p>&#8226; Accommodations</p>
                                <p>&#8226; 24/7 local carers and medical support service</p>
                                <p>&#8226; Facilitating medical treatment & regular checkups with our partners abroad</p>
                                <p>&#8226; Facilitating telemedicine and pre-trip screening and treatment</p>
                        </p>
                        <a href="contact-us" class="read-more hvr-fade">Contact Us</a>
                    </div>
				</div><!-- tab content end -->
			</div><!-- single package tab with details -->
            <br /><br />
			<BookService />
		</div>
	</div>
</section>
        <FeaturedTours />
    </GuestLayout>
</template>
