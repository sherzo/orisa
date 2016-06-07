 <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                      <th>#</th>
                                      <th>Nombre</th>
                                      <th>Usuario</th>
                                      <th>Correo</th>
                                      <th>Acciones</th>
                                     </tr>
                                </thead>
                                <tbody>
                                
                                @foreach($users as $user)
                                  <tr>
                                   <td>{{ $user->id }}</td>
                                   <td>{{ $user->name }}</td>
                                   <td>{{ $user->user }}</td>
                                   <td>{{ $user->email }}</td>
                                   <td class="text-center">
                                     <a class="btn btn-default btn-xs">
                                        <span class="fa fa-eye fa-2x"></span>
                                     </a>
                                     <a class="btn btn-default btn-xs" href="{{ route('admin.usuarios.edit', $user->id) }}">
                                        <span class="fa fa-pencil fa-2x"></span>
                                     </a>
                                     <a href="{{ route('admin.usuarios.destroy', $user->id) }}" class="btn btn-default btn-xs">
                                        <span class="fa fa-trash-o fa-2x"></span>
                                     </a>
                                   </td>
                                  </tr>
                                @endforeach
                               
                                </tbody>
                            </table>