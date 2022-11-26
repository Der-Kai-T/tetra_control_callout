@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>TMEs</h1>
   
    <x-flash />
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tetra Melde-Empfänger (TME)</h3>
                    <div class='card-tools'>
                        <a href="tme/new" title="neuen TME anlegen" class="btn btn-primary"><span class="fa fa-plus-circle"> </span> neu</a>
                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-head-fixed text-nowrap">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>ISSI</td>
                                <td>Gruppe</td>
                                <td>Bezeichnung</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($tmes as $tme): ?>
                            <tr>
                                <td>{{ $tme->id; }}</td>
                                <td>{{ $tme->ISSI; }}</td>
                                <td>{{ $tme->orga_groups->name }}</td>
                                <td>{{ $tme->short; }}<br>
                                {{ $tme->long; }}</td>
                                <td><a href='tme/{{ $tme->id;}}/edit'>Edit</a></td>
                                
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

