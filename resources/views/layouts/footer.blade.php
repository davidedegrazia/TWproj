<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>


    <!-- Webpage Title -->
    <title>AirStudents</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	

    @include('layouts/public_navbar')
    @yield('content')
    
    
    <!-- Footer -->
    <div class="footer">
        <div class="container foot">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-col first" style="margin-right: 5em;">
                        <h5>About AirStudent</h5>
                        <p class="p-small">AirStudent è un sito finalizzato a far incontrare l’offerta di locazione di alloggi della città di Ancona a studenti con la relativa domanda.</p>
                    </div>
                    <div class="footer-col second" style="margin-right: 5em;">
                        <h5>Contatti</h5>
                        <ul class="list-unstyled li-space-lg p-small">
                            <li class="media">
                                <i class="fas fa-map-marker-alt"></i>
                                <div class="media-body" style="width: 18em;">Via Brecce Bianche 12, Ancona </div>
                            </li>
                            <li class="media">
                                <i class="fas fa-envelope"></i>
                                <div class="media-body"><a href="#your-link">airstudents@gmail.com</a></div>
                            </li>
                            <li class="media">
                                <i class="fas fa-phone-alt"></i>
                                <div class="media-body"><a href="#your-link">+071 459 8765</a></div>
                            </li>
                        </ul>
                    </div> 
                    <div class="footer-col third" style="margin-right: 5em;">
                        <h5>Link utili</h5>
                        <ul class="list-unstyled li-space-lg p-small">
                            <li><a href="{{route('terminiecondizioni')}}">Termini e Condizioni</a></li>
                            <li><a href="{{route('privacypolicy')}}">Informativa sulla Privacy</a></li>
                        </ul>
                    </div> 
                    <div class="footer-col fourth" style="width: max-content;">
                        <h5>Domande frequenti</h5>
                        <ul class="list-unstyled li-space-lg p-small">
                            <li><a href="{{route('faq')}}">Leggi le FAQ</a></li>
                        </ul>
                    </div>
                </div> 
            </div> 
        </div> 
    </div>


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2022 - Gruppo TW22</p>
                </div> 
            </div> 
        </div> 
    </div> 
    
    	
    <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
</body>
    
    
</html>