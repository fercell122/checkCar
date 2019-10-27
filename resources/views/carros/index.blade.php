@extends('adminlte::page')

@section('title', 'Carros')

@section('content_header')
<h1><i class="fas fa-bars"></i>  Listar Carros</h1>
@stop

@section('content')
<div class="panel panel-default">
    <div class="panel-heading clearfix">
        Relaçao dos Carros
        <div class="pull-right">
            <a href="{{ route('carros.index')}}" class="btn btn-info"><i class="fas fa-sync"></i> Atualizar a tela</a>
            <a href="{{ route('carros.create')}}" class="btn btn-success"><i class="fas fa-plus"></i> Inserir um Novo Registro</a>
        </div>
    </div>
    <div class="panel-body">
        <table id="table-carro" class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Modelo</td>
                    <td>Tipo</td>
                    <td>Combustível</td>
                    <td>Ano de Fabricação</td>
                    <td>Fabricante</td>
                    <td>Cor</td>

                </tr>
            </thead>
            <tbody>
                @foreach($carros as $carro)
                <tr>
                    <td>{{  $carro->id }}</td>
                    <td>{{  $carro->modelo }}</td>
                    <td>{{  $carro->tipo }}</td>
                    <td>{{  $carro->combustivel }}</td>
                    <td>{{  $carro->ano_fab }}</td>
                    <td>{{  $carro->fabricante }}</td>
                    <td>{{  $carro->cor }}</td>

                    <td>
                            <a href="{{ route('carros.show', $carro) }}" class="btn btn-xs btn-primary">
                                    <i class="fas fa-fx fa-eye"></i>
                                </a>
                    
                                <a href="{{ route('carros.edit', $carro) }}" class="btn btn-xs btn-warning">
                                        <i class="fas fa-fx fa-pencil-alt"></i>
                                    </a>

                                    <form action="{{ route('carros.destroy', $carro) }}" method="post" onsubmit="return confirm('Você tem certeza de que quer excluir este registro?');" style="display: inline-block;">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">


                                            <button type="submit" class="btn btn-xs btn-danger">
                                                    <i class="fas fa-fx fa-trash-alt"></i>
                                                 </button>
                                             </form>
                        </td>


                </tr>
                @endforeach
            </tbody>

        </table>


    </div>


</div>
@stop

@section('css')
    
@stop


@section ('js')
<script>
    $(document).ready(function() {
        $('#table-carro').DataTable({
            language: {
                url: "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json",
            }
        });
    } );
    </script>
@stop
    
