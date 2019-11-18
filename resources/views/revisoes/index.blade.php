@extends('adminlte::page')

@section('title', 'Revisões')

@section('content_header')
<h1><i class="fas fa-bars"></i>  Listar Revisões</h1>
@stop

@section('content')
<div class="panel panel-default">
    <div class="panel-heading clearfix">
        Relação das Revisões
        <div class="pull-right">
            <a href="{{ route('revisoes.index')}}" class="btn btn-info"><i class="fas fa-sync"></i> Atualizar a tela</a>
            <a href="{{ route('revisoes.create')}}" class="btn btn-success"><i class="fas fa-plus"></i> Inserir um Novo Registro</a>
        </div>
    </div>
    <div class="panel-body">
        <table id="table-revisao" class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Km</td>
                    <td>Funcionamento Elétrico</td>
                    <td>Funcionamento Mecânico</td>
                    <td>Funcionamento Geral</td>
                    <td>Condição do Pneu</td>
                    <td>Observações Gerais</td>

                </tr>
            </thead>
            <tbody>
                @foreach($revisoes as $revisao)
                <tr>
                    <td>{{  $revisao->id }}</td>
                    <td>{{  $revisao->km }}</td>
                    <td>{{  $revisao->funcEletrica }}</td>
                    <td>{{  $revisao->funcMecanica }}</td>
                    <td>{{  $revisao->condFuncionamento }}</td>
                    <td>{{  $revisao->condPneu }}</td>
                    <td>{{  $revisao->obsGeral }}</td>

                    <td>
                            <!-- botão visualização -->
                            <a href="{{ route('revisoes.show', $revisao->id) }}" class="btn  btn-primary btn-xs">
                                    <i class="fas fa-fx fa-eye"></i>
                                </a>

                                <!-- botão alteração -->
                                    <a href="{{ route('revisoes.edit', $revisao->id) }}" class="btn btn-warning btn-xs">
                                        <i class="fas fa-fx fa-pencil-alt"></i>
                                    </a>

                    
                               
                                     <!-- botão exclusão -->
                                    <form action="{{ route('revisoes.destroy', $revisao->id) }}" method="post" onsubmit="return confirm('Você tem certeza de que quer excluir este registro?');" style="display: inline-block;">
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
        $('#table-revisao').DataTable({
            language: {
                url: "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json",
            }
        });
    } );
    </script>
@stop
    
