@extends('layouts.footer')

@section('content')
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    


    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-container">
                        <h1>Benvenuto in AirStudents</h1>
                        <p class="p-large p-heading">Se sei uno studente in cerca di un alloggio ad Ancona, in questo sito potrai scegliere un posto letto o un appartamento fra le numerose offerte messe a disposizione. 
                                                    Se invece sei proprietario di un immobile e vuoi metterlo in affitto a uno studente, potrai inserirlo nel catalogo del sito e aspettare che qualcuno
                                                    si interessi al tuo annuncio.
                        </p>
                        <a class="btn-solid-lg" href="{{ route('public_catalog')}}">ESPLORA IL CATALOGO</a>
                    </div>
                </div> 
            </div> 
            <div class="row">
                <div class="col-lg-12">
                    <div class="image-container">
                        <img class="img-fluid" src="images/ancona.png">
                    </div> 
                </div> 
            </div> 
        </div> 
        <div class="deco-white-circle-1">
            <img src="images/decorative-white-circle.svg">
        </div> 
        <div class="deco-white-circle-2">
            <img src="images/decorative-white-circle.svg">
        </div> 
        <div class="deco-blue-circle">
            <img src="images/decorative-blue-circle.svg">
        </div>
        <div class="deco-yellow-circle">
            <img src="images/decorative-yellow-circle.svg">
        </div>
        <div class="deco-green-diamond">
            <img src="images/decorative-green-diamond.svg">
        </div>
    </header>

    



    <!-- Description 2 -->
    <div class="tabs">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="tabs-container">
                        <div class="tab-content" id="cedoTabsContent">
                            <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1" style="font-size: 1.2em;">
                                <p style="font-size: 0.9em;"><b>Affitta l'alloggio che ti piace di più in 3 semplici passi:</b>  </p>
                                <ul class="list-unstyled li-space-lg">
                                    <li class="media">
                                        <i class="far fa-check-square"></i>
                                        <div class="media-body">Effettua una nuova ricerca impostando i filtri a seconda delle tue esigenze</div>
                                    </li>
                                    <li class="media">
                                        <i class="far fa-check-square"></i>
                                        <div class="media-body">Sfoglia i risultati che soddisfano i tuoi criteri</div>
                                    </li>
                                    <li class="media">
                                        <i class="far fa-check-square"></i>
                                        <div class="media-body">Invia una richiesta al proprietario grazie a un semplice meccanismo di messagistica interna al sito</div>
                                    </li>
                                </ul>
                            </div> 
                        </div> 
                    </div> 
                </div> 

                <div class="col-lg-6">
                    <img class="img-fluid" src="images/camere-home.png" alt="alternative">
                </div>
            </div> 
        </div> 
    </div>

@endsection