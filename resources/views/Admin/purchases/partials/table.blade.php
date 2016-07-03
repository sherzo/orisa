@include('flash::message')
 <table class="table table-bordered table-hover table-striped table-hover">
                                <thead>
                                    <tr>
                                      <th>#</th>
                                      <th>Proveedor</th>
                                      <th>Fecha</th>
                                      <th>Estatus</th>
                                      <th>Acciones</th>
                                     </tr>
                                </thead>
                                <tbody>
                                
                                @foreach($purchases as $purchase)
                                  <tr>
                                   <td>{{ $purchase->id }}</td>
                                   <td>{{ $purchase->status }}</td>
								   <td>{{ $purchase->status }}</td>
                                   <td class="text-center">{!! $purchase->status == 0 ? '<span class="label label-warning label-block">Espera</span>' : '<span class="label label-success">Recibida</span>' !!}</td>
                                   
                                   <td class="text-center">
                                     <a class="btn btn-default btn-xs" title="Ver">
                                        <span class="fa fa-eye fa-2x"></span>
                                     </a>
                                     <a class="btn btn-default btn-xs" href="{{ route('admin.compra.edit', $purchase) }}" title="Editar">
                                        <span class="fa fa-pencil fa-2x"></span>
                                     </a>
                                     <a href="{{ route('admin.compra.destroy', $purchase->id) }}" class="btn btn-default btn-xs" title="Eliminar">
                                        <span class="fa fa-trash-o fa-2x"></span>
                                     </a>
                                   </td>
                                  </tr>
                                @endforeach
                               
                                </tbody>
                            </table>