@extends('welcome')


@section('content')

<section id="login">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">INICIAR SESIÓN</h2>
                <h3 class="section-subheading text-muted">Crea una cuenta o inicia sesión en <strong>Restaurant Sefardí</strong>. Reserva tu mesa, comparte con familiares y amigos.</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-lg-offset-4">
                <div class="">
                    <form  role="form" method="POST" action="{{ url('iniciarsesion') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label>Correo Electrónico</label>
                            <input id="email" type="text" class="form-control" name="email" placeholder="Ejm: ejemplo@hotmail.com" value="{{ old('email') }}" title="Aquí debe introducir su correo asociado a su cuenta del restaurant">

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <small>{{ $errors->first('email') }}</small>
                                </span>
                            @endif

                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label>Contraseña</label>
                            <input id="password" type="password" class="form-control" name="password" placeholder="Ejm: 123456" title="Aquí debe introducir su contraseña asociado a su cuenta del restaurant">
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <small>{{ $errors->first('password') }}</small>
                                </span>
                            @endif
                        </div>

                        <div class="checkbox">
                            <label>
                                <input name="remember" type="checkbox" value="Remember Me"> Recuérdame
                            </label>
                        </div>

                        <button class="btn btn-sm btn-primary btn-lg btn-block">Entrar</button><br>
                        <p class="text-center">¿No tiene una cuenta? <a href="{{ url('/registrar') }}"> Cree una.</a> </p>
                        <p class="text-center"><a href="{{ url('/password/reset') }}">He olvidado mi contraseña </a></p>
                                            
                    </form>
                </div>
            </div> 
        </div>
    </div>

</section>

@endsection

@section('autoClick')

    @if(count($errors) > 0)
        <script type="text/javascript">
            $(document).ready(function(){
                $('.login').trigger('click');
            });
        </script>
    @endif

@endsection