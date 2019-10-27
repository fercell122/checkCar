
@extends('adminlte::page')

@section('title', 'ChecK')

@section('content_header')
    <h1><i class="fas fa-fx fa-user"></i> Inclusao de Carros</h1>
@stop

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fas fa-fx fa-user"></i> Tela de cadastramento de carro
        </div>

       <div class="panel-body">
          <form method="post" action="" enctype="multipart/form-data">

          <div class="form-group">
               <label for="modelo">Nome do Modelo <span class="text-red">*</span></label>
               <input type="text" name="modelo" id="modelo" class="form-control">
          </div>

          <div class="form-group">
               <label for="tipo">Tipo <span class="text-red">*</span></label>
               <input type="text" name="tipo" id="tipo" class="form-control">
          </div>

          <div class="form-group">
               <label for="combustivel">Tipo do combustível</label>
               <input type="text" name="combustivel" id="combustivel" class="form-control">
          </div>

          <div class="form-group">
               <label for="ano_fab">Ano de Fabricação <span class="text-red">*</span></label>
               <input type="text" name="ano_fab" id="ano_fab" class="form-control">
          </div>

          <div class="form-group">
                <label for="fabricante">Fabricante <span class="text-red">*</span></label>
                <input type="text" name="fabricante" id="fabricante" class="form-control">
           </div>

           <div class="form-group">
                <label for="cor">Cor <span class="text-red">*</span></label>
                <input type="text" name="cor" id="cor" class="form-control">
           </div>

         <!-- falta colocar os botoes -->

          </form>
       </div>
    </div>
@stop

@section('css')
@stop

@section('js')
@stop