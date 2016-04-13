@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Evento {{$event->id}}</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Dados
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <label>Endereço</label>
                            <p>{{$event->address}}</p>
                            <label>Coordenadas (Latitude, Longitude)</label>
                            <p>{{$event->lat}}, {{$event->long}}</p>
                            <label>Categoria</label>
                            <p>{{$event->sub_category->category->description}}</p>
                            <label>Sub Categoria</label>
                            <p>{{$event->sub_category->description}}</p>
                            <label>Registado por</label>
                            <p>user do evento</p>
                            <label>Criado em</label>
                            <p>{{$event->created_at}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-6 -->
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Por um mapa com a localização do Evento
                </div>
                <div class="panel-body">

                </div>
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-6 -->
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Um gráfico de uma estatistica
                </div>
                <div class="panel-body">

                </div>
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-6 -->
    </div>
    <!-- /.row -->
@endsection