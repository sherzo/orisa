 <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                      <th>#</th>
                                      <th>Licor</th>
                                      <th>Tipo</th>
                                      <th>Caracteristica</th>
                                      <th>Acciones</th>
                                     </tr>
                                </thead>
                                <tbody>
                                
                                @foreach($liqueurs as $liqueur)
                                  <tr>
                                   <td>{{ $liqueur->id }}</td>
                                   <td>{{ $liqueur->nombre_licor }}</td>
                                   <td>{{ $liqueur->id_type }}</td>
                                   <td>{{ $liqueur->caracteristica }}</td>

                                   <td class="text-center">
                                     <a class="btn btn-default btn-xs" title="Ver">
                                        <span class="fa fa-eye fa-2x"></span>
                                     </a>
                                     <a class="btn btn-default btn-xs" href="{{ route('admin.licores.edit', $liqueur) }}" title="Editar">
                                        <span class="fa fa-pencil fa-2x"></span>
                                     </a>

                                     <a href="{{ route('admin.licores.destroy', $liqueur) }}" class="btn btn-default btn-xs" title="Eliminar">
                                        <span class="fa fa-trash-o fa-2x"></span>
                                     </a>
                                   </td>
                                  </tr>
                                @endforeach
                               
                                </tbody>
                            </table>