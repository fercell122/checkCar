@extends('adminlte::page')

@section('title', 'CheckCar')

@section('content_header')
<h1>Detalhes do Carro</h1>
@stop

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        Detalhes dos dados do Carro
    </div>

    <div class="panel-body">
        <div class="row">
            <div class="col-sm-2">
                Nome do Carro
            </div>
            <div class="col-sm-10">
                {{ $carro->modelo }}
            </div>
        </div>

        <div class="row">
            <div class="col-sm-2">
                Tipo
            </div>
            <div class="col-sm-10">
                {{ $carro->tipo }}
            </div>
        </div>

        <div class="row">
            <div class="col-sm-2">
                Combustível
            </div>
            <div class="col-sm-10">
                {{$carro->combustivel}}
            </div>
        </div>

        <div class="row">
            <div class="col-sm-2">
                Ano de Fabricação
            </div>
            <div class="col-sm-10">
                {{$carro->ano_fab}}
            </div>
        </div>

        <div class="row">
            <div class="col-sm-2">
                Fabricante
            </div>
            <div class="col-sm-10">
                {{$carro->fabricante}}
            </div>
        </div>
    


        <div class="row">
            <div class="col-sm-2">
                Cor
            </div>
            <div class="col-sm-10">
                {{$carro->cor}}
            </div>
        </div>
    </div>


    <div class="panel-footer">
        <a href="{{route('carros.index')}}" class="btn btn-default">Voltar</a>
    </div>
</div>
@stop

@section('css')
@stop

@section('js')
@stop