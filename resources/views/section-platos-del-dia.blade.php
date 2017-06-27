<section id="portfolio" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Menu del día</h2>
            </div>
        </div>
        <div class="row">
            @if(!empty($platos))
                @foreach($platos as $plato)
                    <div class="col-md-4 col-sm-6 portfolio-item">
                        <a href="#portfolioModal{{$plato->id}}" class="portfolio-link" data-toggle="modal">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fa fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="{{ asset('img/plates/')}}/{{ $plato->image->imagen }}" class="img-responsive" alt="">
                        </a>
                        <div class="portfolio-caption">
                            <h4>{{ $plato->plato }}</h4>
                            <p class="text-muted">Graphic Design</p>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-md-12 text-center">
                    <h3 class="section-subheading text-muted">NO HAY MENU DISPONIBLE DEL DÍA</h3>
                </div>
            @endif
        </div>
    </div>
</section>
