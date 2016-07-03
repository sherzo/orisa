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
                                   <td></td>
								                   <td>{{ $purchase->fecha }}</td>
                                   <td class="text-center"><span class="label {!! $purchase->status == 0 ? 'label-warning' : 'label-success' !!}">{!! $purchase->status == 0 ? 'En espera' : 'Recibida' !!}</span></td>
                                   
                                   <td class="text-center">
                                      {!! $purchase->status == 0 ? '<a class="btn btn-default btn-xs" href="" title="Procesar">
                                        <span class="glyphicon glyphicon-copy fa-2x"></span>
                                     </a>' : '' !!}  
                                      
                                     <a class="btn btn-default btn-xs" href="{{ route('admin.compra.show', $purchase->id) }}" title="Ver">
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