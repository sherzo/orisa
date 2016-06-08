@extends('layout.layoutAdmin')

@section('contenido')

 <!-- Page Content -->


        <div class="row">
           <div class="col-lg-12">
             @include('admin.partial.breadcumb', array('value1' => 'Platos', 'value2' => 'Nuevo'))
            
                <h4 class="page-header">Lista de Platos</h4>

          </div>
                <div class="col-lg-4">
                       <a  href="{{ url('admin/ingredientes/create') }}" class="btn btn-primary">
                        <span class="fa fa-plus"></span> Nuevo
                        </a>
                </div>  
          </div>
          <!--  CIERRE DEL ROW -->

        
            
<div class="row">
 <br>
 <?php 
for ($i=0; $i < 17; $i++) { 

 ?>
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img src="../img/plato{{$i}}.png" >
      <div class="caption">
        <h5>Arroz con pollo</h5>
        <!-- <hr>-->
        <p><a href="#" class="btn btn-default btn-sm" role="button"><span class="fa fa-pencil fa-2x"></span></a> <a href="#" class="btn btn-default btn-sm" role="button"><span class="fa fa-trash-o fa-2x"></span></a></p>
      </div>
    </div>
  </div>

<?php } ?>
        
               </div>
    </div>


  @endsection