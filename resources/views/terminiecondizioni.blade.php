@extends('layouts.footer')
@section('content')
   <!-- Header -->
    <header id="header" class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Termini e condizioni</h1>
                </div> 
            </div> 
        </div> 
    </header> 



    <!-- Breadcrumbs -->
    <div class="ex-basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs">
                        <a href="{{route('home')}}">Home</a><i class="fa fa-angle-double-right"></i><span>Termini e condizioni</span>
                    </div> 
                </div> 
            </div> 
        </div> 
    </div> 
    


    <!-- Terms Content -->
    <div class="ex-basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-container dark">
                        <h3>Termini di servizio</h3>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Usiamo prudenza nella fornitura della nostra piattaforma, ma non possiamo garantire che tutti i contenuti 
                                    siano esatti (riceviamo le informazioni dai fornitori di servizi). Nella misura consentita dalla legge, non possiamo essere
                                    ritenuti responsabili di errori, interruzioni o parti di informazioni mancanti, sebbene facciamo di tutto per correggerli non appena possibile.</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">La nostra piattaforma non costituisce un suggerimento o un sostegno verso i prodotti, i servizi, le strutture, ecc. 
                                    del fornitore di servizi.</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Siamo esclusi dai termini tra te e il fornitore di servizi. Il fornitore di servizi è il responsabile 
                                    esclusivo dell’esperienza dell'alloggio.</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Per effettuare una richiesta, occorre dover creare un account. Verifica che tutte le informazioni che 
                                    ti riguardano siano corrette e aggiornate. In caso contrario, potresti non avere 
                                    accesso al servizio completo della piattaforma. Sei responsabile di tutte le operazioni eseguite con il tuo account, quindi non lasciare 
                                    che altri lo utilizzino e tieni segreti il nome utente e la password.</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Salvo diversa indicazione, per utilizzare la piattaforma devi avere almeno 16 anni.</div>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->
                    
                    <div class="text-container">
                        <h3>I nostri valori</h3>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Rispettare i nostri valori</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Rispettare tutte le leggi applicabili</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Astenerti dall’utilizzare la piattaforma per causare inconvenienti o effettuare false prenotazioni</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Evitare di provocare inconvenienti o danni e di avere un comportamento inappropriato con il 
                                    personale del Fornitore di servizi</div>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->
                    
                    <div class="text-container last">
                        <a class="btn-solid-reg" href="{{route('home')}}">TORNA ALLA HOME</a>
                    </div> <!-- end of text-container -->
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic -->
    <!-- end of terms content -->
@endsection