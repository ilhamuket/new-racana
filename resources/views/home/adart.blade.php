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

    #pdf-viewer {
    display: flex;
    flex-wrap: wrap;
    align-items: flex-start;
  }

  .pdf-page {
    margin-bottom: 20px;
    overflow-y: auto; /* Enable vertical scrolling */
    overflow-x: hidden;
    max-width: 100%; /* Disable horizontal scrolling */
    max-height: 110vh; /* Set maximum height to viewport height */
  }
  </style>

   <body>

    @include('layouts.header')

    <main>
        <!-- Trending Area Start -->
        <div class="trending-area fix">
          <div class="container">
            <div class="trending-main">
              <div class="row">
                <div class="col-lg-12">
                  <div class="trending-tittle">
                    <!-- <p>Rem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-8">
                  <div class="trending-bottom mb-3">
                    <div class="container">
                      <div class="row mb-3">
                        <h3 class="text-center">ANGGARAN DASAR RACANA GATOT MANGKUPRAJA - RD. DEWI SARTIKA <br>
                          GUGUS DEPAN - PANGKALAN UNIVERSITAS ADHIRAJASA RESWARA SANJAYA PERIODE 2022/2023</h3>
                      </div>
                      <div class="row mt-3" id="pdf-viewer">
                        <!-- Canvas elements will be dynamically added here -->
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
        @include('layouts.end-content')
      </main>
      
      
    
   @include('layouts.footer2')
   
	<!-- JS here -->

		<!-- All JS Custom Plugins Link Here here -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.338/pdf.min.js"></script>
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
            var pdfPath = "/assets/pdf/adart.pdf";
        
            // PDF.js configuration options
            pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.338/pdf.worker.min.js';
        
            // Load the PDF document
            pdfjsLib.getDocument(pdfPath).promise.then(function (pdf) {
              var totalPages = pdf.numPages; // Get the total number of pages in the PDF
              var container = document.getElementById('pdf-viewer');
        
              // Iterate through each page and render it
              for (var i = 1; i <= totalPages; i++) {
                // Create a container for each page
                var pageContainer = document.createElement('div');
                pageContainer.className = 'pdf-page';
                container.appendChild(pageContainer);
        
                // Render the page
                pdf.getPage(i).then(function (page) {
                  var scale = 1.5;
                  var viewport = page.getViewport({ scale: scale });
                  var canvas = document.createElement('canvas');
                  canvas.className = 'pdf-canvas';
        canvas.style.maxWidth = '100%';
        
                  var context = canvas.getContext('2d');
                  canvas.height = viewport.height;
                  canvas.width = viewport.width;
                  page.render({ canvasContext: context, viewport: viewport }).promise.then(function () {
                    pageContainer.appendChild(canvas);
                  });
                });
              }
            });
          </script>
        
    </body>
</html>