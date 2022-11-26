@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Organisationseinheiten</h1>
    <x-flash />
@stop

@section('content')

    <div class="row">
        <div class="col-12">
            <form action="/admin/orgagroup/new" method="POST">
                @csrf
               
            <x-panels.card>
                <x-slot name="card_title">
                    neue Organisationseinheit anlegen
                </x-slot>
                <div class="row">
                    <x-adminlte-input name="name" label="Bezeichnung der Einheit" placeholder="Verband und Einheit"
                        fgroup-class="col-md-6" value="{{old('name')}}"/>
                   
                </div>
                <x-slot name="card_footer">
                    <x-adminlte-button label="Speichern" theme="primary" icon="fas fa-save" type="submit"/>
                </x-slot>
           </x-panels.card>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

