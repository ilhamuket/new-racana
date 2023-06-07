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
      list-style-type: decimal; /* Use decimal numbering */
      padding-left: 20px; /* Add left padding to align the numbers */
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
              <div class="row">
                <div class="col-lg-8">
                  <!-- Trending Top -->
                  <!-- Trending Bottom -->
                  <div class="trending-bottom mb-3 text-center"> <!-- Add "text-center" class here -->
                    <div class="container">
                      <div class="row mb-2 justify-content-center">
                        <h2>Data Potensi Gugus Depan Ambacana <br> Ars University</h2>
                      </div>
                      <div class="row" id="pdf-viewer">
                        <div class="col-lg-12 d-flex justify-content-center align-items-center">
                          <canvas id="pdf-canvas"></canvas>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Right content -->
                @include('layouts.right')
              </div>
            </div>
          </div>
        </div>
        <!-- Trending Area End -->
        <!-- Weekly-News start -->
        @include('layouts.end-content')
        <!-- End Weekly-News -->
        <!-- Whats New Start -->
        <!-- Whats New End -->
        <!-- Weekly2-News start -->
        <!-- End Weekly-News -->
        <!-- Start Youtube -->
        <!-- End Start youtube -->
        <!-- Recent Articles start -->
        <!-- Recent Articles End -->
        <!-- Start pagination -->
        <!-- End pagination -->
      </main>
      
    
   @include('layouts.footer2')
   
	<!-- JS here -->
    {{ URL::asset('/build/css/bootstrap.min.css') }}
		<!-- All JS Custom Plugins Link Here here -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.10.377/pdf.min.js"></script>
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
            // Get the path to your PDF file
            var pdfPath = "/assets/pdf/data.pdf";
          
            // PDF.js configuration options
            var pdfjsLib = window['pdfjs-dist/build/pdf'];
          
            // Load the PDF document
            pdfjsLib.getDocument(pdfPath).promise.then(function(pdf) {
              // Get the first page of the PDF
              return pdf.getPage(1);
            }).then(function(page) {
              var canvas = document.getElementById('pdf-canvas');
              var context = canvas.getContext('2d');
          
              // Set the desired scale (e.g., 2 for double the size)
              var scale = 1.5;
          
              // Get the viewport of the page at the desired scale
              var viewport = page.getViewport({ scale: scale });
          
              // Set the canvas size to match the viewport
              canvas.width = viewport.width;
              canvas.height = viewport.height;
          
              // Render the page content on the canvas
              var renderContext = {
                canvasContext: context,
                viewport: viewport
              };
              page.render(renderContext);
            });
        </script>
        
    </body>
</html>