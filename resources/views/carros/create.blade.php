
@extends('adminlte::page')

@section('title', 'CheckCar')

@section('content_header')
    <h1><i class="fas fa-fx fa-user"></i> Inclusão de Carros</h1>
@stop

@section('content')


<form action="{{ route('carros.store') }}" method="post" enctype="multipart/form-data">
     {{ csrf_field() }}

     <div class="panel panel-default">
          <div class="panel-heading">
              Informe os dados do carro a ser cadastrado
          </div>


          <div class="panel-body">
               <div class="row">
                   <div class="form-group col-sm-3">
                       <label for="modelo">Modelo do Carro</label>
                       <input type="text" name="modelo" id="modelo" class="form-control" required>
                   </div>
               </div>

               <div class="row">
                <div class="form-group col-sm-3">
                    <label for="tipo">Tipo do Carro</label>
                    <input type="text" name="tipo" id="tipo" class="form-control" required>
                </div>
            </div>

               <div class="row">
                    <div class="form-group col-sm-2">
                        <label for="combustivel"> Tipo de Combustível</label>
                        <input type="text" name="combustivel" id="combustivel" class="form-control">
                    </div>
                </div>

          
                <div class="row">
                    <div class="form-group col-sm-3">
                        <label for="ano_fab">Ano  de Fabricação </label>
                        <input type="date" name="ano_fab" id="ano_fab" class="form-control" required>
                    </div>
                </div>
    
                <div class="row">
                    <div class="form-group col-sm-3">
                        <label for="fabricante">Nome do Fabricante</label>
                        <input type="text" name="fabricante" id="fabricante" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-sm-2">
                        <label for="cor">Cor do carro </label>
                        <input type="text" name="cor" id="cor" class="form-control">
                    </div>
                </div>

                

                <div class="panel-footer">
                    <a href="{{ route('carros.index') }}" class="btn btn-default">Voltar</a>
                    <button type="submit" class="btn btn-success">Gravar</button>
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