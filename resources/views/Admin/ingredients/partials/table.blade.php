<table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                      <th>#</th>
                                      <th>Ingrediente</th>
                                      <th>Clase</th>
                                      <th>Caracteristica</th>
                                      <th>Unidad</th>
                                      <th>Acciones</th>
                                     </tr>
                                </thead>
                                <tbody>
                                
                                @foreach($ingredients as $ingredient)
                                  <tr>
                                   <td>{{ $ingredient->id }}</td>
                                   <td>{{ $ingredient->ingrediente }}</td>
                                   <td>{{ $ingredient->type->tipo_ingrediente }}</td>
                                   
                                    <td>{{ $ingredient->caracteristica }}</td>
                                   <td>{{ $ingredient->unit->unidad }}</td>                                  
                                   <td class="text-center">
                                     <a class="btn btn-default btn-xs" title="Ver">
                                        <span class="fa fa-eye fa-2x"></span>
                                     </a>
                                     <a class="btn btn-default btn-xs" href="{{ route('admin.ingredientes.edit', $ingredient) }}" title="Editar">
                                        <span class="fa fa-pencil fa-2x"></span>
                                     </a>
                                     <a href="{{ route('admin.ingredientes.destroy', $ingredient->id) }}" class="btn btn-default btn-xs" title="Eliminar">
                                        <span class="fa fa-trash-o fa-2x"></span>
                                     </a>
                                   </td>
                                  </tr>
                                @endforeach
                               
                                </tbody>
                            </table>