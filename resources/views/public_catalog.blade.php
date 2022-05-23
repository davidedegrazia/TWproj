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
                    <li class="list-group-item">
                        <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                            <img src="images/cane.jpg" alt="Generic placeholder image" width="170" height="170" class=" order-1 order-lg-1">
                            <div class="media-body order-2 order-lg-1" style="padding-left: 2em;">
                                <h4 class="mt-0 font-weight-bold mb-2">Via Montenapoleone 56</h4>
                                <div class="d-flex align-items-center justify-content-between mt-1">
                                    <h6 class="font-weight-bold my-2">€670/mese</h6>
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

                                        <p> <br> <br> Tipologia: appartamento intero </p>
                                        <p> Superficie: 120 mq</p>
                                        <p> Camere: 3 </p>
                                        <p> Posti letto: 4</p>
                                        <p>
                                            <ul>
                                                <li> Balcone</li>
                                                <li> Cucina</li>
                                                <li> Wi-Fi</li>
                                            </ul>
                                    </div>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                    <li class="list-group-item">A fourth item</li>
                    <li class="list-group-item">And a fifth one</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection