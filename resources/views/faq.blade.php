@extends('layouts.footer')
@section('content')


<header id="header" class="ex-header" style="background-color: white; padding-bottom: 3em; padding-top: 13em;">
    <div>
        <div>
            <div class="col-md-12">
                <h1>Domande frequenti</h1>
            </div>
        </div>
    </div>
</header>

<div class="form-container" style="margin: auto; max-width: 60%; margin-bottom: 10em;">
    <ul class="list-group list-group-flush">
        @foreach($faqs as $faq)
        <li class="list-group-item">
            <h4>{{$faq->domanda}}</h4>
            <p>{{$faq->risposta}}</p>
        </li>
        @endforeach
    </ul>
</div>

@endsection