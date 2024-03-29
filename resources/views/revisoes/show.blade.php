@extends('adminlte::page')

@section('title', 'CheckCar')

@section('content_header')
<h1>Detalhes da revisão</h1>
@stop

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        Detalhes dos dados da Revisão
    </div>





    <div class="panel-body">


            <div class="row">
                    <div class="col-sm-2">
                        Carro_id
                    </div>
                    <div class="col-sm-10">
                        {{ $revisao->carro_id }}
                    </div>
                </div>


        <div class="row">
            <div class="col-sm-2">
                Número da revisão
            </div>
            <div class="col-sm-10">
                {{ $revisao->id }}
            </div>
        </div>

        <div class="row">
            <div class="col-sm-2">
                KM
            </div>
            <div class="col-sm-10">
                {{ $revisao->km }}
            </div>
        </div>

        <div class="row">
            <div class="col-sm-2">
                Funcionamento Elétrico
            </div>
            <div class="col-sm-10">
                {{$revisao->funcEletrica}}
            </div>
        </div>

        <div class="row">
            <div class="col-sm-2">
                Funcionamento Mecânico
            </div>
            <div class="col-sm-10">
                {{$revisao->funcMecanica}}
            </div>
        </div>

        <div class="row">
            <div class="col-sm-2">
                Funcionamento Gera
            </div>
            <div class="col-sm-10">
                {{$revisao->condFuncionamento}}
            </div>
        </div>
    
        <div class="row">
            <div class="col-sm-2">
                Condição do Pneu
            </div>
            <div class="col-sm-10">
                {{$revisao->condPneu}}
            </div>
        </div>

        <div class="row">
            <div class="col-sm-2">
                Observações Gerais
            </div>
            <div class="col-sm-10">
                {{$revisao->obsGeral}}
            </div>
        </div>

        



    </div>


   
        



    <div class="panel-footer">
        <a href="{{route('revisoes.index')}}" class="btn btn-default">Voltar</a>
    </div>
</div>
@stop

@section('css')
@stop

@section('js')
@stop