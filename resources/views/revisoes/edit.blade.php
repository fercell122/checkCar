
@extends('adminlte::page')

@section('title', 'CheckCar')

@section('content_header')
    <h1><i class="fas fa-fx fa-user"></i> Alteração de Revisão</h1>
@stop

@section('content')


<form action="{{ route('revisoes.update') }}" method="post" enctype="multipart/form-data">
     {{ csrf_field() }}

     <div class="panel panel-default">
          <div class="panel-heading">
              Informe os dados da revisão
          </div>


          <div class="panel-body">
               <div class="row">
                   <div class="form-group col-sm-3">
                       <label for="carro_id">ID do Carro</label>
                       <input type="text" name="carro_id" id="carro_id" class="form-control" required>
                   </div>
               </div>

               <div class="row">
                <div class="form-group col-sm-3">
                    <label for="km">Quilometragem</label>
                    <input type="text" name="km" id="km" class="form-control" required>
                </div>
            </div>

               <div class="row">
                    <div class="form-group col-sm-2">
                        <label for="funcEletrica"> Funcionamento Eletrico</label>
                        <input type="text" name="funcEletrica" id="funcEletrica" class="form-control">
                    </div>
                </div>

          
                <div class="row">
                    <div class="form-group col-sm-3">
                        <label for="funcMecanica">Funcionamento Mecânico </label>
                        <input type="boolean" name="funcMecanica" id="funcMecanica" class="form-control" required>
                    </div>
                </div>
    
                <div class="row">
                    <div class="form-group col-sm-3">
                        <label for="condFuncionamento">Funcionamento Geral</label>
                        <input type="text" name="condFuncionamento" id="condFuncionamento" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-sm-3">
                        <label for="condPneu">Condição dos Pneus </label>
                        <input type="text" name="condPneu" id="condPneu" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-sm-3">
                        <label for="obsGeral">Observações Gerais </label>
                        <input type="text" name="obsGeral" id="obsGeral" class="form-control">
                    </div>
                </div>

                

                <div class="panel-footer">
                    <a href="{{ route('revisoes.index') }}" class="btn btn-default">Voltar</a>
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