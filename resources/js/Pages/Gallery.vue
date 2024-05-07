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
            <div
                class="single-bredcurms"
                style="background-image: url('/images/bgimage/bg1.jpg')"
            >
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="bredcrums-content">
                                <h2>Services</h2>
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li class="active">
                                        <a href="tours">Tours</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog breadcrumb version one end here -->

        <!-- realted tour start here -->
        <section>
            <div class="container">
                <div class="row">
                    <h2><br /><br /></h2>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-title text-center">
                            <h2>Interesting Tour Photos</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="blog-contents-version-one popular-packages">
            <div class="container">
                <div class="row">
                    ?php ///1. Obtain the required page number if
                    (isset($_REQUEST['pageno'])) { $pageno =
                    $_REQUEST['pageno']; } else { $pageno = 1; } // if //2.
                    Identify how many database rows are available
                    require('includes/conn.php'); $query = "SELECT COUNT(SNo)
                    FROM tblphotos where CoverPhoto = 1 order by SNo"; $result =
                    $conn->prepare($query); $result->execute(); $numrows =
                    $result->fetchColumn(); $conn = null; $numrows = 3; //echo
                    $numrows; //3. Calculate number of $lastpage $rows_per_page
                    = 9; $lastpage = ceil($numrows/$rows_per_page); //4. Ensure
                    that $pageno is within range $pageno = (int)$pageno; if
                    ($pageno > $lastpage) { $pageno = $lastpage; } // if if
                    ($pageno < 1) { $pageno = 1; } // if //5. Construct LIMIT
                    clause //$limit = 'LIMIT ' .($pageno - 1) * $rows_per_page
                    .',' .$rows_per_page; $limit = 'LIMIT 3'; ?> ?php
                    if($numrows > 0) { require('includes/conn.php'); $query =
                    "SELECT Caption, PhotoURL, TargetURL FROM tblphotos where
                    CoverPhoto = 1 order by SNo asc ".$limit; $result =
                    $conn->prepare($query); $result->execute(); foreach($result
                    as $row) { echo'
                    <div class="col-md-4 col-sm-6">
                        <div class="single-package">
                            <div class="package-image">
                                <a href="'.$row[TargetURL].'"
                                    ><img
                                        src="/images/gallery/'.$row[PhotoURL].'"
                                        alt="'.$row[Caption].'"
                                /></a>
                            </div>
                            <div align="center" class="package-content">
                                <h3>'.$row[Caption].'</h3>
                            </div>
                        </div>
                    </div>
                    '; } $conn = null; } else { echo'
                    <div align="center" style="font-weight: bold; color: #f00">
                        No Record Found!
                    </div>
                    '; } ?>
                </div>
            </div>
        </section>
        <!-- single popular destination  end-->

        <section>
            <div class="container">
                <div class="buy-now text-center">
                    <a href="photo-gallery" class="travel-primary-btn hvr-fade"
                        >View More Photos</a
                    >
                </div>
            </div>
        </section>

        <!-- realted tour start here -->
        <section>
            <div class="container">
                <div class="row">
                    <h2><br /><br /></h2>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-title text-center">
                            <h2>Interesting Tour Videos</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="video-play video-play-3">
            <div class="video-content">
                <div class="video-play-btn">
                    <a href="tour-videos"
                        ><span><i class="fa fa-play"></i></span>
                        <h6>Explore our Tour Videos</h6></a
                    >
                </div>
            </div>
        </section>
        <!-- video area end  here -->

        <section>
            <div class="container">
                <h2><br /></h2>
                <div class="buy-now text-center">
                    <a href="tour-videos" class="travel-primary-btn hvr-fade"
                        >View Tour Videos</a
                    >
                </div>
            </div>
        </section>

        <!-- popular destination strat -->
        <section class="section-paddings"></section>
        <!-- single popular destination  end-->
    </GuestLayout>
</template>
