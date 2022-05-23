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
    
    

    <header id="header" class="ex-header" style="background-color: white; padding-bottom: 3em; padding-top: 13em;">
        <div>
            <div>
                <div class="col-md-12">
                    <h1>Accedi al tuo account</h1>
                </div> 
            </div> 
        </div> 
    </header> 

    

    <!-- Login Form -->
    <div class="form-container" style="margin: auto; max-width: 40%; margin-bottom: 10em;">
            <form id="privacyForm" data-toggle="validator" data-focus="false">
                <div class="form-group">
                    <input type="text" class="form-control-input" id="username" required>
                    <label class="label-control">Username</label>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control-input" id="password" required>
                    <label class="label-control" >Password</label>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group checkbox p-small">
                    <p>Non hai un account? <a href="{{route('registrati')}}">Registrati cliccando qui</a></p>
                </div>
                <div class="form-group">
                    <button type="submit" class="form-control-submit-button">ACCEDI</button>
                </div>
            </form>
    </div> <!-- end of form container -->
        
@endsection
    

