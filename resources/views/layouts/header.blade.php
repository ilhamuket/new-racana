<header>
    <!-- Header Start -->
   <div class="header-area">
        <div class="main-header ">
            <div class="header-mid d-none d-md-block">
               <div class="container">
                    <div class="row d-flex align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-3 col-lg-3 col-md-3">
                            <div class="logo">
                                <a href="/"><img src="build/img/trending/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-9">
                            <div class="header-banner f-right ">
                               <a href="{{ route('join') }}"> <img  src="assets/img/trending/join.png" alt=""></a>
                            </div>
                        </div>
                       
                    </div>
               </div>
            </div>
           <div class="header-bottom header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-lg-12 col-md-12 header-flex">
                            <!-- sticky -->
                                <div class="sticky-logo">
                                    <a href="index.html"><img src="build/img/trending/logo.png" alt=""></a>
                                </div>
                            <!-- Main-menu -->
                            <div class="main-menu d-none d-md-block">
                                <nav>                  
                                    <ul id="navigation">    
                                        <li><a href="/">BERANDA</a></li>
                                        <li><a href="#">PROFIL AMBACANA</a>
                                            <ul class="submenu">
                                                <li><a href="{{ route('logo') }}">LOGO AMBACANA</a></li>
                                                <li><a href="#">PRAMUKA ARS</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">SANDI AMBACANA</a></li>
                                        <li><a href="#">ADMINISTRASI PRAMUKA ARS</a>
                                            <ul class="submenu">
                                                <li><a href="{{ route('adart') }}">AD & ART</a></li>
                                                <li><a href="{{ route('pramukars') }}">PRAMUKA ARS</a></li>
                                                <li><a href="{{ route('data') }}">DATA POTENSI</a></li>
                                                <li><a href="{{ route('struktur') }}">STRUKTUR KEPENGURUSAN</a>
                                                    <ul class="submenu">
                                                        <li><a href="{{ route('gugusdepan') }}">GUGUS DEPAN</a></li>
                                                        <li><a href="{{ route('dewanambalan') }}">DEWAN AMBALAN</a></li>
                                                        <li><a href="{{ route('dewanracana') }}">DEWAN RACANA</a></li>
                                                    </ul>
                                                </li>
                                            </ul></li>
                                            <li><a href="#">UNIT PENGEMBANGAN</a>
                                                <ul class="submenu">
                                                    <li><a href="{{ route('unitprotokol') }}">UNIT PROTOKOLER</a></li>
                                                    <li><a href="{{ route('unitsearchandrescue') }}">UNIT SEARCH AND RESCUE</a></li>
                                                    <li><a href="{{ route('unitmediapers') }}">UNIT MEDIA PERS DAN KOMINFO</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{ route('programkerja') }}">PROGRAM KERJA</a></li>
                                            <li><a href="{{ route('sandi') }}">PRESTASI</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>             
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-md-none"></div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
   </div>
    <!-- Header End -->
</header>