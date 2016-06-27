 <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                      <th>#</th>
                                      <th>Rif</th>
                                      <th>Razon Social</th>
                                      <th>Telefono</th>
                                      <th>Correo</th>
                                      <th>Acciones</th>
                                     </tr>
                                </thead>
                                <tbody>
                                
                                @foreach($providers as $provider)
                                  <tr>
                                   <td>{{ $provider->id }}</td>
                                   <td>{{ $provider->rif }}</td>
                                   <td>{{ $provider->razon_social }}</td>
                                   <td>{{ $provider->telefono }}</td>
                                   <td>{{ $provider->correo }}</td>
                                   <td class="text-center">
                                    <a class="btn btn-default btn-xs" title="Ornde de compra">
                                        <span class="fa fa-shopping-cart fa-2x"></span>
                                     </a>
                                     <a class="btn btn-default btn-xs" title="Ver">
                                        <span class="fa fa-eye fa-2x"></span>
                                     </a>
                                     <a class="btn btn-default btn-xs" href="{{ route('admin.proveedores.edit', $provider) }}" title="Editar">
                                        <span class="fa fa-pencil fa-2x"></span>
                                     </a>
                                     <a href="{{ route('admin.proveedores.destroy', $provider->id) }}" class="btn btn-default btn-xs" title="Eliminar">
                                        <span class="fa fa-trash-o fa-2x"></span>
                                     </a>
                                   </td>
                                  </tr>
                                @endforeach
                               
                                </tbody>
                            </table>