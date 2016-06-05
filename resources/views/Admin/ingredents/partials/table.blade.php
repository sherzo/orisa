 <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                      <th>#</th>
                                      <th>Rif</th>
                                      <th>Razon Social</th>
                                      <th>Correo</th>
                                      <th>Acciones</th>
                                     </tr>
                                </thead>
                                <tbody>
                                
                                @foreach($providers as $provider)
                                  <tr>
                                   <td>{{ $provider->id }}</td>
                                   <td>{{ $provider->rif }}</td>
                                   <td>{{ $provider->bussines_name }}</td>
                                   <td>{{ $provider->email_pro }}</td>
                                   <td class="text-center">
                                     <a class="btn btn-default btn-xs">
                                        <span class="fa fa-eye fa-2x"></span>
                                     </a>
                                     <a class="btn btn-default btn-xs" href="{{ route('admin.usuarios.edit', $user) }}">
                                        <span class="fa fa-pencil fa-2x"></span>
                                     </a>
                                     <a class="btn btn-default btn-xs">
                                        <span class="fa fa-trash-o fa-2x"></span>
                                     </a>
                                   </td>
                                  </tr>
                                @endforeach
                               
                                </tbody>
                            </table>