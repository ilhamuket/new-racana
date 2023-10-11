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
    .pagination .page-item .page-link {
        color: #ff0000; /* Set your desired color here */
    }

    .pagination .page-item.active .page-link {
        background-color: #ff0000;
        color: #ffffff; /* Set your desired color here */
        border-color: #ffffff; /* Set your desired color here */
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
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalTitle">Bergabung Bersama Kami!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="{{ $trending->image_url }}" alt="pramuka Image" class="img-fluid mb-3">
                    <p>Salam Pramuka! <br> Saat ini kami sedang membuka open recruitment Anggota Pramuka Ars University Tahun 2023. <br> Jika kakak tertarik, silahkan kakak bisa klik tombol dibawah ini yaa!</p>
                    <div class="text-center">
                        <a href="{{ route('store') }}" class="btn btn-primary">Daftar Anggota</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
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
                            <strong>Berita Terbaru </strong>
                            <!-- <p>Rem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Trending Top -->
                        <div class="trending-top mb-30">
                            
                            <div class="trend-top-img">
                                <img src="{{ $trending->image_url }}" alt="" width="300" height="500">
                                <div class="trend-top-cap">
                                    <span>{{ $trending->categories->name }}</span>
                                    <h2><a href="{{ route('detail',$trending->id) }}">{{ $trending->name }}</a></h2>
                                </div>
                            </div>
                            
                        </div>
                        <!-- Trending Bottom -->
                        <div class="trending-bottom">
                            <div class="container">
                                <div class="row">
                                    @foreach ($data as $item)
                                        <div class="col-lg-4">
                                            <div class="single-bottom mb-35">
                                                <div class="trend-bottom-img mb-30">
                                                    <img src="{{ $item->image_url }}" alt="" width="200" height="150">
                                                </div>
                                                <div class="trend-bottom-cap">
                                                    <span class="color1">{{ $item->categories->name }}</span>
                                                    <h4><a href="{{ route('detail',$item->id) }}">{{ $item->name }}</a></h4>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <h6 class="text-muted"><i class="
                                                                    fas fa-eye"></i> {{ $item->views }}</h6>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <h6 class="text-muted"><i class="
                                                                far fa-calendar"></i> {{ $item->updated_at->format('m/Y') }}
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination">
                                                @if ($data->currentPage() > 1)
                                                    <li class="page-item"><a class="page-link" href="{{ $data->previousPageUrl() }}">Previous</a></li>
                                                @endif
                        
                                                @for ($i = 1; $i <= $data->lastPage(); $i++)
                                                    <li class="page-item{{ $data->currentPage() == $i ? ' active' : '' }}">
                                                        <a class="page-link" href="{{ $data->url($i) }}">{{ $i }}</a>
                                                    </li>
                                                @endfor
                        
                                                @if ($data->hasMorePages())
                                                    <li class="page-item"><a class="page-link" href="{{ $data->nextPageUrl() }}">Next</a></li>
                                                @endif
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
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
               
 
    </main>
    
   @include('layouts.footer2')
   
	<!-- JS here -->
    
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
        <script>
            $(document).ready(function() {
                // Show the modal when the page is opened
                $('#myModal').modal('show');
            });
        </script>
    </body>
</html>