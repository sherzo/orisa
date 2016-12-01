    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Bienvenido a sefardi @if(!Auth::guest() AND Auth::user()->roles_id == '7') {{ Auth::user()->name}}@endif!</div>
                <div class="intro-heading">Restaurant & Sport Bar</div>
                <a href="#services" class="page-scroll btn btn-xl">Muestrame más</a>
            </div>
        </div>
    </header>
    <!-- End Header -->
