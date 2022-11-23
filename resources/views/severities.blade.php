@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Severities</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Test</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Severity</td>
                                <td>Label</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($severities as $severity): ?>
                            <tr>
                                <td>{{ $severity->id; }}</td>
                                <td>{{ $severity->level; }}</td>
                                <td>{{ $severity->label; }}</td>
                               
                                
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

