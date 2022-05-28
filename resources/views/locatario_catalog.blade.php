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


    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container">
            <a class="navbar-brand logo-image" href="{{route('home')}}"><img src="images/logo.png"></a>

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#description">CHI SIAMO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="{{ route('accedi') }}">CATALOGO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="##">CHAT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="##">IL TUO PROFILO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="##">ESCI
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <div class="ex-basic-2">
        <div class="container" style="padding-left: 12em; padding-right: 12em;">
           
            <div class="row">
                <div class="col-lg-12">
                    <header id="header" class="ex-header" style=" padding-bottom: 3em; padding-top: 5em;">
                        <div>
                            <div>
                                <div class="col-md-12">
                                    <h1>Catalogo</h1>
                                </div>
                            </div>
                        </div>
                    </header>
                    <ul class="list-group list-group-flush ">
                        <li class="list-group-item">
                            <div class="media align-items-lg-right flex-column flex-lg-row p-3">
                                <div class=" order-last order-lg-last" style="padding-left: 2em; margin-top: 2.4em;">
                                    <button type="button" class="btn btn-primary btn-sm" style="border-radius: 8em;">Invia messaggio</button>
                                    <br>
                                    <button type="button" class="btn btn-secondary btn-sm" style="margin-top: 1em; border-radius: 8em;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspOpziona&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
                                </div>
                                <img src="images/annuncio1.jpg" alt="Generic placeholder image" width="170" height="170" class=" order-1 order-lg-1">
                                <div class="media-body order-2 order-lg-1" style="padding-left: 2em;">
                                    <h4 class="mt-0 font-weight-bold mb-2">Via Lauro De Bosis 24</h4>
                                    <div class="d-flex align-items-center justify-content-between mt-1">
                                        <h6 class="font-weight-bold my-2">€800/mese</h6>
                                    </div>
                                    <p>
                                        <button class="btn btn-light" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" style="margin-top: 0.8em;">
                                            Altri dettagli
                                        </button>
                                    </p>


                                    <div class="collapse" id="collapseExample">
                                        <div class="card card-body">
                                            Situato nel centro storico, in zona tranquilla e silenziona, casa singola ristrutturata integralmente recuperando i materiali esistenti, elegante interamente ed elegantemente arredato.
                                            L'immobile ha una superficie commerciale di circa 120 mq. Ristrutturato partendo dalle fondamenta, dispone di portoni blindati, finestre in legno con doppio vetro a taglio termicoi;
                                            E' subito disponibile e da subito abitabile.

                                            <p> <br> <br> Tipologia: Appartamento </p>
                                            <p> Disponibilità dal 2022-05-01 al 2023-05-01</p>
                                            <p> <br> Caratteristiche dell'appartamento:</p>
                                            <p> Superficie: 90 mq</p>
                                            <p> Camere: 3 </p>
                                            <p> Posti letto: 4</p>
                                            <p> Bagni: 2</p>
                                            <p> Altri servizi:
                                                <ul>
                                                    <li> Zona comune</li>
                                                    <li> Cucina</li>
                                                    <li> Angolo studio</li>
                                                </ul>
                                        </div>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                                <div class=" order-last order-lg-last" style="padding-left: 2em; margin-top: 2.4em;">
                                    <button type="button" class="btn btn-primary btn-sm" style="border-radius: 8em;">Invia messaggio</button>
                                    <br>
                                    <button type="button" class="btn btn-secondary btn-sm" style="margin-top: 1em; border-radius: 8em;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspOpziona&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
                                </div>
                                <img src="images/annuncio2.jpg" alt="Generic placeholder image" width="170" height="170" class=" order-1 order-lg-1">
                                <div class="media-body order-2 order-lg-1" style="padding-left: 2em;">
                                    <h4 class="mt-0 font-weight-bold mb-2">Via Giordano Bruno 37</h4>
                                    <div class="d-flex align-items-center justify-content-between mt-1">
                                        <h6 class="font-weight-bold my-2">€190/mese</h6>
                                    </div>
                                    <p>
                                        <button class="btn btn-light" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapseExample" style="margin-top: 0.8em;">
                                            Altri dettagli
                                        </button>
                                    </p>
                                    <div class="collapse" id="collapse2">
                                        <div class="card card-body">
                                            Situato nel centro storico, in zona tranquilla e silenziona, casa singola ristrutturata integralmente recuperando i materiali esistenti, elegante interamente ed elegantemente arredato.
                                            L'immobile ha una superficie commerciale di circa 120 mq. Ristrutturato partendo dalle fondamenta, dispone di portoni blindati, finestre in legno con doppio vetro a taglio termicoi;
                                            E' subito disponibile e da subito abitabile.

                                            <p> <br> <br> Tipologia: Posto Letto in camera singola</p>
                                            <p> Disponibilità dal 2022-06-01 al 2023-06-01</p>
                                            <p> <br> Caratteristiche dell'appartamento:</p>
                                            <p> Superficie: 90 mq</p>
                                            <p> Camere: 3 </p>
                                            <p> Posti letto: 4</p>
                                            <p> Bagni: 2</p>
                                            <p> Altri servizi:
                                                <ul>
                                                    <li> Zona comune</li>
                                                    <li> Cucina</li>
                                                    <li> Angolo studio</li>
                                                </ul>
                                        </div>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                                <div class=" order-last order-lg-last" style="padding-left: 2em; margin-top: 2.4em;">
                                    <button type="button" class="btn btn-primary btn-sm" style="border-radius: 8em;">Invia messaggio</button>
                                    <br>
                                    <button type="button" class="btn btn-secondary btn-sm" style="margin-top: 1em; border-radius: 8em;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspOpziona&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
                                </div>
                                <img src="images/annuncio3.jpg" alt="Generic placeholder image" width="170" height="170" class=" order-1 order-lg-1">
                                <div class="media-body order-2 order-lg-1" style="padding-left: 2em;">
                                    <h4 class="mt-0 font-weight-bold mb-2">Via Capodistria 17</h4>
                                    <div class="d-flex align-items-center justify-content-between mt-1">
                                        <h6 class="font-weight-bold my-2">€230/mese</h6>
                                    </div>
                                    <p>
                                        <button class="btn btn-light" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapseExample" style="margin-top: 0.8em;">
                                            Altri dettagli
                                        </button>
                                    </p>
                                    <div class="collapse" id="collapse3">
                                        <div class="card card-body">
                                            Situato nel centro storico, in zona tranquilla e silenziona, casa singola ristrutturata integralmente recuperando i materiali esistenti, elegante interamente ed elegantemente arredato.
                                            L'immobile ha una superficie commerciale di circa 120 mq. Ristrutturato partendo dalle fondamenta, dispone di portoni blindati, finestre in legno con doppio vetro a taglio termicoi;
                                            E' subito disponibile e da subito abitabile.

                                            <p> <br> <br> Tipologia: Posto Letto in camera doppia</p>
                                            <p> Disponibilità dal 2022-09-01 al 2023-09-01</p>
                                            <p> <br> Caratteristiche dell'appartamento:</p>
                                            <p> Superficie: 300 mq</p>
                                            <p> Camere: 2 </p>
                                            <p> Posti letto: 2</p>
                                            <p> Bagni: 1</p>
                                            <p>
                                                <ul>
                                                    <li> Zona comune</li>
                                                    <li> Cucina</li>
                                                    <li> Wi-Fi</li>
                                                </ul>
                                        </div>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                                <div class=" order-last order-lg-last" style="padding-left: 2em; margin-top: 2.4em;">
                                    <button type="button" class="btn btn-primary btn-sm" style="border-radius: 8em;">Invia messaggio</button>
                                    <br>
                                    <button type="button" class="btn btn-secondary btn-sm" style="margin-top: 1em; border-radius: 8em;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspOpziona&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
                                </div>
                                <img src="images/annuncio4.jpg" alt="Generic placeholder image" width="170" height="170" class=" order-1 order-lg-1">
                                <div class="media-body order-2 order-lg-1" style="padding-left: 2em;">
                                    <h4 class="mt-0 font-weight-bold mb-2">Via Indipendenza 10</h4>
                                    <div class="d-flex align-items-center justify-content-between mt-1">
                                        <h6 class="font-weight-bold my-2">€780/mese</h6>
                                    </div>
                                    <p>
                                        <button class="btn btn-light" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapseExample" style="margin-top: 0.8em;">
                                            Altri dettagli
                                        </button>
                                    </p>
                                    <div class="collapse" id="collapse4">
                                        <div class="card card-body">
                                            Situato nel centro storico, in zona tranquilla e silenziona, casa singola ristrutturata integralmente recuperando i materiali esistenti, elegante interamente ed elegantemente arredato.
                                            L'immobile ha una superficie commerciale di circa 120 mq. Ristrutturato partendo dalle fondamenta, dispone di portoni blindati, finestre in legno con doppio vetro a taglio termicoi;
                                            E' subito disponibile e da subito abitabile.

                                            <p> <br> <br> Tipologia: Appartamento </p>
                                            <p> Disponibilità dal 2022-10-01 al 2023-09-01</p>
                                            <p> <br> Caratteristiche dell'appartamento:</p>
                                            <p> Superficie: 75 mq</p>
                                            <p> Camere: 3 </p>
                                            <p> Posti letto: 3</p>
                                            <p> Bagni: 1</p>
                                            <p> Altri servizi:
                                                <ul>
                                                    <li> Zona comune</li>
                                                    <li> Cucina</li>
                                                    <li> Balcone</li>
                                                </ul>
                                        </div>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                                <div class=" order-last order-lg-last" style="padding-left: 2em; margin-top: 2.4em;">
                                    <button type="button" class="btn btn-primary btn-sm" style="border-radius: 8em;">Invia messaggio</button>
                                    <br>
                                    <button type="button" class="btn btn-secondary btn-sm" style="margin-top: 1em; border-radius: 8em;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspOpziona&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
                                </div>
                                <img src="images/annuncio5.jpg" alt="Generic placeholder image" width="170" height="170" class=" order-1 order-lg-1">
                                <div class="media-body order-2 order-lg-1" style="padding-left: 2em;">
                                    <h4 class="mt-0 font-weight-bold mb-2">Via Umberto Saracini 8</h4>
                                    <div class="d-flex align-items-center justify-content-between mt-1">
                                        <h6 class="font-weight-bold my-2">€840/mese</h6>
                                    </div>
                                    <p>
                                        <button class="btn btn-light" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapseExample" style="margin-top: 0.8em;">
                                            Altri dettagli
                                        </button>
                                    </p>
                                    <div class="collapse" id="collapse5">
                                        <div class="card card-body">
                                            Situato nel centro storico, in zona tranquilla e silenziona, casa singola ristrutturata integralmente recuperando i materiali esistenti, elegante interamente ed elegantemente arredato.
                                            L'immobile ha una superficie commerciale di circa 120 mq. Ristrutturato partendo dalle fondamenta, dispone di portoni blindati, finestre in legno con doppio vetro a taglio termicoi;
                                            E' subito disponibile e da subito abitabile.

                                            <p> <br> <br> Tipologia: Appartamento </p>
                                            <p> Disponibilità dal 2022-12-01 al 2023-12-01</p>
                                            <p> <br> Caratteristiche dell'appartamento:</p>
                                            <p> Superficie: 75 mq</p>
                                            <p> Camere: 3 </p>
                                            <p> Posti letto: 3</p>
                                            <p> Bagni: 1</p>
                                            <p> Altri servizi:
                                                <ul>
                                                    <li> Zona comune</li>
                                                    <li> Cucina</li>
                                                    <li> Wi-Fi</li>
                                                </ul>
                                        </div>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


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
                            <li><a href="{{route('faqs')}}">Leggi le FAQ</a></li>
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