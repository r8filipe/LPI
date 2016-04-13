@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Eventos</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Listagem dos Eventos
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Morada</th>
                                <th>Latitude</th>
                                <th>Longitude</th>
                                <th>Categoria</th>
                                <th>Ocorrência</th>
                                <th>Local</th>
                                <th>Data/Hora</th>
                                <th>Opções</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($events as $event)
                                <tr class="gradeU">
                                    <td>{{$event->id}}</td>
                                    <td>{{$event->address}}</td>
                                    <td class="center">{{$event->lat}}</td>
                                    <td  class="center">{{$event->long}}</td>
                                    <td class="center">{{$event->sub_category->category->description}}</td>
                                    <td class="center">{{$event->sub_category->description}}</td>
                                    <td class="center">{{$event->local_type->description}}</td>
                                    <td class="center">{{$event->created_at}}</td>
                                    <td class="center"><a href='/events/{{$event->id}}'>ver</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->

                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
@endsection