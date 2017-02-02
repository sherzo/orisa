@if (count($errors) > 0)
    <div class="alert alert-danger">
    <p><b> Corriga los errores </b></p>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif