@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Organisationseinheiten</h1>
   
    <x-flash />
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Organisationseinheiten</h3>
                    <div class='card-tools'>
                        <a href="orgagroup/new" title="neue Organisationsgruppe anlegen" class="btn btn-primary"><span class="fa fa-plus-circle"> </span> neu</a>
                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-head-fixed text-nowrap">
                        <thead>
                            <tr>
                                <td>ID</td>
                                
                                <td>Gruppe</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($orgagroups as $group): ?>
                            <tr>
                                <td>{{ $group->id; }}</td>
                                <td>{{ $group->name; }}</td>
                                
                                <td><a href='orgagroup/{{ $group->id;}}/edit'>Edit</a></td>
                                
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

