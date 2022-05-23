<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container">
            <a class="navbar-brand logo-image" href="{{route('home')}}"><img src="images/logo.png"></a> 

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#description">CHI SIAMO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="{{ route('accedi') }}">ACCEDI</a>
                    </li>
                </ul>
                <span class="nav-item">
                    <a class="btn-outline-sm page-scroll" href="{{ route('registrati') }}">REGISTRATI</a>
                </span>
            </div>
        </div> 
</nav> 
