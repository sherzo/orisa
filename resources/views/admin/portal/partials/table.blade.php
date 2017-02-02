<table class="table table-striped table-bordered table-hover" id="dataTables-example">
  <thead>
    <tr>
      <th>Imagen</th>
      <th>Plato</th>
      <th>Seleccionar</th>
    </tr>
  </thead>
  <tbody>
@foreach($plates as $plate)
  <tr>
    <td>
      <img src="../img/plates/{{ $plate->image->imagen }}" alt="" width="40" height="40" class="img-responsive">
    </td>
    <td>{{ $plate->plato }}</td>
    <td>
      <div class="checkbox">
        <label>
          <input type="checkbox" name="platos[]" value="{{ $plate->id }}"> 
        </label>
      </div>
    </td>
  </tr>

@endforeach
</body>
<tfoot>
<tr>
  <td colspan="3">
    <button class="btn btn-default btn-sm btn-block" type="submit" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Guardar"><span class="glyphicon glyphicon-floppy-saved fa-2x"></span></button>
  </td>
</tr>
</tfoot>
</table>
