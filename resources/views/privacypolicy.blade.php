@extends('layouts.footer')
@section('content')
    <!-- Header -->
    <header id="header" class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Informativa sulla Privacy</h1>
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
                        <a href="{{route('home')}}">Home</a><i class="fa fa-angle-double-right"></i><span>Informativa sulla privacy</span>
                    </div> 
                </div> 
            </div> 
        </div> 
    </div> 


    <!-- Privacy Content -->
    <div class="ex-basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-container">
                        <h3>Che tipo di dati personali raccoglie AirStudents?</h3>
                        <p>Non possiamo aiutarti a prenotare il tuo alloggio perfetto se non ci fornisci informazioni. Quindi, quando utilizzi i nostri servizi, dobbiamo chiederti alcune cose. 
                            Si tratta di informazioni di routine, per esempio il tuo nome, i recapiti per contattarti.
                            Potresti anche decidere di inviare dati aggiuntivi relativi al tuo alloggio.</p>
                        <p>In aggiunta, raccogliamo anche dati dal computer, telefono, tablet o altro dispositivo che utilizzi per accedere ai nostri servizi. 
                            Tra questi, l'indirizzo IP, il browser che utilizzi e le impostazioni sulla lingua. Potremmo anche ricevere informazioni su di te tramite 
                            terze parti o quando raccogliamo automaticamente altre informazioni.</p>
                        <p>Questa è una panoramica generale, ma se vuoi saperne di più sulle informazioni che raccogliamo, qui sotto trovi maggiori dettagli.</p>
                    </div> <!-- end of text-container-->

                    <div class="text-container">
                        <h3>Perché AirStudents raccoglie e utilizza i tuoi dati personali?</h3>
                        <p>Lo facciamo per aiutarti a gestire la tua prenotazione dell'alloggio online e per assicurarti il miglior servizio possibile.</p>
                        <p>Utilizziamo i tuoi dati personali anche per contattarti a proposito di sconti, offerte speciali e altri prodotti o servizi che pensiamo possano interessarti.</p>
                    </div> <!-- end of text-container-->
                    <a class="btn-solid-reg" href="{{route('home')}}">TORNA ALLA HOME</a>
                </div> <!-- end of col-->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-2 -->
    <!-- end of privacy content -->

@endsection