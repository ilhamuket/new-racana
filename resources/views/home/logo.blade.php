<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Racana App </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/trending/logo.jpg">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ URL::asset('/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/assets/css/ticker-style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/assets/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/assets/css/style.css') }}">
</head>
<style>
    ul.numbered-list {
        list-style-type: decimal;
        /* Use decimal numbering */
        padding-left: 20px;
        /* Add left padding to align the numbers */
    }
</style>

<body>

    <!-- Preloader Start -->
    <!-- <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div> -->
    <!-- Preloader Start -->

    @include('layouts.header')

    <main>
        <!-- Trending Area Start -->
        <div class="trending-area fix">
            <div class="container">
                <div class="trending-main">
                    <!-- Trending Tittle -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="trending-tittle">

                                <!-- <p>Rem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->

                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-lg-8">
                            <!-- Trending Top -->
                            <div class="trending mb-30">
                                <div class="row mb-3 justify-content-center">
                                    <h2>LOGO AMBACANA ARS UNIVERSITY</h2>
                                </div>
                                <div class="row justify-content-center">
                                    <img style="width: 10cm" src="..\assets\img\logo_racana\logo.png">
                                </div>
                                <div class="row mt-3">

                                    <p class="font-weight-bold">KIASAN DASAR </p>
                                </div>
                                <div>
                                    <P class="font-weight-bold"> 1. Lima Sudut </p>
                                    <p>Melambangkan 5 sila yang ada di indonesia yaitu PANCASILA </p>
                                    <P class="font-weight-bold"> 2. Garis Hitam </p>
                                    <p>Melambangkan Keseriusan dan kekuatan </p>
                                    <P class="font-weight-bold"> 3. Warna Coklat Pada Tunas dan Warna Kuning Pada Tusu
                                        Konde </p>
                                    <p>Melambangkan Warna Pandega dan Penegak </p>
                                    <P class="font-weight-bold"> 4. Gedung Sate </p>
                                    <p>Ciri Khas Daerah Pramuka Jawa Barat </p>
                                    <P class="font-weight-bold"> 5. Kujang </p>
                                    <p>Senjata Khas Jawa Barat </p>
                                    <P class="font-weight-bold"> 6. 2 Tunas Kelapa </p>
                                    <p>Melambangkan Gerakan Pramuka dan Melambangkan Putra Putri Satuan terpisah </p>
                                   
                                    <P class="font-weight-bold"> 7. 10 Libang Pada Kujang </p>
                                    <p>Melambangkan 10 Point Dasa Dharma Gerakan Pramuka </p>
                                    <P class="font-weight-bold"> 8. 3 Tingkat Gedung Sate </p>
                                    <p>Melambangkan 3 Janji Yang Ada di Gerakan Pramuka yaitu TRI SATYA </p>
                                    <P class="font-weight-bold"> 9. Tulisan ARS University </p>
                                    <p>Tempat Naungan atau Gugus Depan </p>
                                    <P class="font-weight-bold"> 10. Tulisan Gatot Mangkupradja - Dewi Sartika </p>
                                    <p>Melambangkan Nama Ambalan dan Racana Yang Diambil dari tokoh Pahlawan </p>
                                    <P class="font-weight-bold"> 11. Warna Putih Pada Tulisan </p>
                                    <p>Melambangkan Kesucian </p>
                                    <P class="font-weight-bold"> 12. Buku dan Tusu Konde </p>
                                    <p>Ciri Khas dari Dewi Sartika </p>

                                </div>
                            </div>


                        </div>
                        <!-- Riht content -->
                        @include('layouts.right')

                    </div>
                </div>
            </div>
        </div>
        <!-- Trending Area End -->
        <!--   Weekly-News start -->
        @include('layouts.end-content')

        <!-- End Weekly-News -->
        <!-- Whats New Start -->

        <!-- Whats New End -->
        <!--   Weekly2-News start -->

        <!-- End Weekly-News -->
        <!-- Start Youtube -->

        <!-- End Start youtube -->
        <!--  Recent Articles start -->

        <!--Recent Articles End -->
        <!--Start pagination -->

        <!-- End pagination  -->
    </main>

    @include('layouts.footer2')

    <!-- JS here -->
    {{ URL::asset('/build/css/bootstrap.min.css') }}
    <!-- All JS Custom Plugins Link Here here -->
    <script src="{{ URL::asset('/assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{ URL::asset('/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/popper.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/bootstrap.min.js') }}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{ URL::asset('/assets/js/jquery.slicknav.min.js') }}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{ URL::asset('/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/slick.min.js') }}"></script>
    <!-- Date Picker -->
    <script src="{{ URL::asset('/assets/js/gijgo.min.js') }}"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="{{ URL::asset('/assets/js/wow.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/animated.headline.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/jquery.magnific-popup.js') }}"></script>

    <!-- Breaking New Pluging -->
    <script src="{{ URL::asset('/assets/js/jquery.ticker.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/site.js') }}"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="{{ URL::asset('/assets/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/jquery.sticky.js') }}"></script>

    <!-- contact js -->
    <script src="{{ URL::asset('/assets/js/contact.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/jquery.form.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/mail-script.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/jquery.ajaxchimp.min.js') }}"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="{{ URL::asset('/assets/js/plugins.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/main.js') }}"></script>

</body>

</html>
