 <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                      <th>#</th>
                                      <th>Licor</th>
                                      <th>Acciones</th>
                                     </tr>
                                </thead>
                                <tbody>
                                
                                @foreach($liqueurs as $liqueur)
                                  <tr>
                                   <td>{{ $liqueur->id }}</td>
                                   <td>{{ $liqueur->liqueur_name }}</td>
                                   <td class="text-center">
                                     <a class="btn btn-default btn-xs">
                                        <span class="fa fa-eye fa-2x"></span>
                                     </a>
                                     <a class="btn btn-default btn-xs" href="{{ route('admin.usuarios.edit', $liqueur) }}">
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