@include('flash::message')
 <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                      <th>#</th>
                                      <th>Cédula</th>
                                      <th>Nombre</th>
                                      <th>Telefono</th>
                                      <th>Correo</th>
                                      <th>Acciones</th>
                                     </tr>
                                </thead>
                                <tbody>
                                
                                @foreach($clients as $client)
                                  <tr>
                                   <td>{{ $client->id }}</td>
                                   <td>{{ $client->cedula }}</td>
                                   <td>{{ $client->nombre }}</td>
                                   
                                   <td>{{ $client->telefono }}</td> 
                                   <td>{{ $client->correo }}</td>                                   
                                   <td class="text-center">
                                     <a class="btn btn-default btn-xs" title="Ver">
                                        <span class="fa fa-eye fa-2x"></span>
                                     </a>
                                     <a class="btn btn-default btn-xs" href="{{ route('admin.clientes.edit', $client) }}" title="Editar">
                                        <span class="fa fa-pencil fa-2x"></span>
                                     </a>
                                     <a href="{{ route('admin.clientes.destroy', $client->id) }}" class="btn btn-default btn-xs" title="Eliminar">
                                        <span class="fa fa-trash-o fa-2x"></span>
                                     </a>
                                   </td>
                                  </tr>
                                @endforeach
                               
                                </tbody>
                            </table>