<!DOCTYPE html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />



    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico">
    <!-- bootstrap css -->
    <!-- <link rel="stylesheet" href="/css/bootstrap.min.css"> -->
   

    <!-- animate css -->
    <link rel="stylesheet" href="/css/animate.css">
    <!-- Button Hover animate css -->
    <link rel="stylesheet" href="/css/hover-min.css">
    <!-- jquery-ui.min css -->
    <link rel="stylesheet" href="/css/jquery-ui.min.css">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="/css/meanmenu.min.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <!-- slick css -->
    <link rel="stylesheet" href="/css/slick.css">
    <!-- chosen.min-->
    <link rel="stylesheet" href="/css/chosen.min.css">
    <!-- chosen.min-->
    <link rel="stylesheet" href="/css/jquery-customselect.css">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <!-- magnific Css -->
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <!-- Revolution Slider -->
    <link rel="stylesheet" href="/css/assets/revolution/layers.css">
    <link rel="stylesheet" href="/css/assets/revolution/navigation.css">
    <link rel="stylesheet" href="/css/assets/revolution/settings.css">
    <!-- custome css -->
    {{-- <link rel="stylesheet" href="/css/style.css"> --}}
    <!-- responsive css -->
    {{-- <link rel="stylesheet" href="/css/responsive.css"> --}}
    <!-- modernizr css -->
    <script src="/js/vendor/modernizr-2.8.3.min.js"></script>
    
    <!-- <link rel="stylesheet" href="/css/ext/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="/css/ext/bootstrap-theme.min.css"> -->
    <!-- <link rel="stylesheet" href="/css/ext/js/bootstrap.min.js"> -->

    <!-- Latest compiled and minified CSS -->
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous"> --}}

    <!-- Optional theme -->
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous"> --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/css/xct.css">




        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        <!-- Preloader -->
        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>


        @inertia


     <!-- ============================
    		JavaScript Files
    ============================= -->
    <!-- jquery -->
    <script src="/js/vendor/jquery-3.2.0.min.js"></script>
    <!-- bootstrap js -->
     <script src="/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    {{-- <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script> --}}
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script> --}}

    <!-- owl.carousel js -->
    <script src="/js/owl.carousel.min.js"></script>
    <!-- slick js -->
    <script src="/js/slick.min.js"></script>
    <!-- meanmenu js -->
    <script src="/js/jquery.meanmenu.min.js"></script>
    <!-- jquery-ui js -->
    <script src="/js/jquery-ui.min.js"></script>
    <!-- wow js -->
    <script src="/js/wow.min.js"></script>
    <!-- counter js -->
    <script src="/js/jquery.counterup.min.js"></script>
    <!-- Countdown js -->
    <script src="/js/jquery.countdown.min.js"></script>
    <!-- waypoints js -->
    <script src="/js/jquery.waypoints.min.js"></script>
    <!-- Isotope js -->
    <script src="/js/isotope.pkgd.min.js"></script>
    <!-- magnific js -->
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <!-- Image loaded js -->
    <script src="/js/imagesloaded.pkgd.min.js"></script>
    <!-- chossen js -->
    <!-- <script src="/js/chosen.jquery.min.js"></script> -->
    <!-- Revolution JS -->
    <script src="/js/assets/revolution/jquery.themepunch.revolution.min.js"></script>
    <script src="/js/assets/revolution/jquery.themepunch.tools.min.js"></script>
    <script src="/js/assets/revolution/extensions/revolution.extension.actions.min.js"></script>
    <script src="/js/assets/revolution/extensions/revolution.extension.carousel.min.js"></script>
    <script src="/js/assets/revolution/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="/js/assets/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="/js/assets/revolution/extensions/revolution.extension.migration.min.js"></script>
    <script src="/js/assets/revolution/extensions/revolution.extension.navigation.min.js"></script>
    <script src="/js/assets/revolution/extensions/revolution.extension.parallax.min.js"></script>
    <script src="/js/assets/revolution/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="/js/assets/revolution/extensions/revolution.extension.video.min.js"></script>
    <script src="/js/assets/revolution/revolution.js"></script>
    <!-- plugin js -->
    <script src="/js/plugins.js"></script>
    <!-- select2 js -->
    <script src="/js/select2.min.js"></script>    
    <script src="/js/colors.js"></script>
    <!-- customSelect Js -->
    <script src="/js/jquery-customselect.js"></script>
    <!-- custom js -->
    {{-- <script src="/js/custom.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.0.0/crypto-js.min.js"></script>


    </body>
</html>
