@extends('layouts.footer')
@section('content')
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
                <ul class="list-group list-group-flush">
                    @foreach($annunci as $annuncio)
                    <li class="list-group-item">
                        <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                            <img src="images/{{$annuncio->foto}}.jpg" alt="Generic placeholder image" width="170" height="170" class=" order-1 order-lg-1">
                            <div class="media-body order-2 order-lg-1" style="padding-left: 2em;">
                                <h4 class="mt-0 font-weight-bold mb-2">{{$annuncio->via}} {{$annuncio->civico}}</h4>
                                <div class="d-flex align-items-center justify-content-between mt-1">
                                    <h6 class="font-weight-bold my-2">€{{$annuncio->prezzo}}/mese</h6>
                                </div>
                                <p>
                                    <button class="btn btn-light" type="button" data-toggle="collapse" data-target="#collapseExample{{$annuncio->id}}" aria-expanded="false" aria-controls="collapseExample" style="margin-top: 0.8em;">
                                        Altri dettagli
                                    </button>
                                </p>
                                <div class="collapse" id="collapseExample{{$annuncio->id}}">
                                    <div class="card card-body">
                                        {{$annuncio->descrizione}}
                                        
                                        @if($annuncio->tipologia == 'Posto Letto')
                                        <p> <br> <br> Tipologia: {{$annuncio->tipologia}} in {{$annuncio->tipo_postoletto}}</p>
                                        @else <p> <br> <br> Tipologia: {{$annuncio->tipologia}} </p>
                                        @endif

                                        
                                        <p> Disponibilità dal {{$annuncio->inizio_disp}} al {{$annuncio->fine_disp}}</p>
                                        <p> <br> Caratteristiche dell'appartamento:</p>
                                        <p> Superficie: {{$annuncio->superficie}} mq</p>
                                        <p> Camere: {{$annuncio->n_camere}} </p>
                                        <p> Posti letto: {{$annuncio->posti_letto}}</p>
                                        <p> Bagni: {{$annuncio->n_bagni}}</p>
                                        <p> Altri servizi:
                                            <ul>
                                                @if($annuncio->zona_comune == 1)
                                                <li> Zona comune</li>
                                                @endif
                                                @if($annuncio->angolo_studio  == 1)
                                                <li> Angolo studio</li>
                                                @endif
                                                @if($annuncio->balcone  == 1)
                                                <li> Balcone</li>
                                                @endif
                                                @if($annuncio->wi_fi  == 1)
                                                <li> Wi-Fi</li>
                                                @endif
                                                @if($annuncio->cucina  == 1)
                                                <li> Cucina</li>
                                                @endif
                                            </ul>
                                    </div>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach

                </ul>
            </div>

        </div>
    </div>
</div>
@endsection