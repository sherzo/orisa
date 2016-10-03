 <!-- Portfolio Grid Section -->
    <section id="reservations" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Panel de reservaciones</h2>
                    <h3 class="section-subheading text-muted">Información sobre sus reservaciones</h3>
                </div>
            </div>
            <div class="row">
             <div class="row">
                 <form name="sentMessage" id="contactForm" novalidate>
                    <div class="col-md-4">
                        <div class="form-group">
                        <label>Fecha</label>
                            <input type="date" class="form-control" placeholder="" id="fecha" required data-validation-required-message="Please enter your name." data-toggle="tooltip" data-placement="top" title="Fecha de la reservación">
                            <p class="help-block">Seleccione la Fecha</p>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <label>Hora</label>
                            <select class="form-control" id="hora" data-toggle="tooltip" data-placement="top" title="Hora de la reservación">
                                <option value="9:00:00">9:00 am</option>
                                <option value="10:00:00">10:00 am</option>
                                <option value="11:00:00">11:00 am</option>
                                <option value="12:00:00">12:00 am</option>
                                <option value="13:00:00">1:00 pm</option>
                                <option value="14:00:00">2:00 pm</option>
                                <option value="15:00:00">4:00 pm</option>
                                <option value="16:00:00">5:00 pm</option>
                                <option value="17:00:00">6:00 pm</option>
                                <option value="18:00:00">7:00 pm</option>
                                <option value="19:00:00">8:00 pm</option>
                                <option value="20:00:00">9:00 pm</option>
                            </select>
                            <p class="help-block">Seleccione la hora</p>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                        <label>Alguna especificación</label>
                            <textarea class="form-control" data-toggle="tooltip" data-placement="top" title="Algo en que podamos ayudarlo (Ej: dos mesas juntas)"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-xl" id="btn" data-toggle="tooltip" data-placement="top" title="Guardar reservación" disabled="true">
                                Reservar
                            </button>
                        </div>
                    </div>
                    <div id="contenedor">
                        
                    <!-- </div>
                    <div class="col-md-2 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal" >
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/mesa.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h5>Mesa #</h5>
                    </div>
                    </div> -->
                   
                </form>
            </div>
        </div>
    </div>
</section>