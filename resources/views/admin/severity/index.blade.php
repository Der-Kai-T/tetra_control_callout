@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Severities</h1>
   
    <x-flash />
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Schwerergrade</h3>
                    <div class='card-tools'>
                        <a href="severity/new" title="neuen Schweregrad anlegen" class="btn btn-primary"><span class="fa fa-plus-circle"> </span> neu</a>
                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-head-fixed text-nowrap">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Severity</td>
                                <td>Label</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($severities as $severity): ?>
                            <tr>
                                <td>{{ $severity->id; }}</td>
                                <td>{{ $severity->level; }}</td>
                                <td>{{ $severity->label; }}</td>
                                <td><a href='severity/{{ $severity->id;}}/edit'>Edit</a></td>
                                
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

