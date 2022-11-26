@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Severities</h1>
    <x-flash />
@stop

@section('content')

    <div class="row">
        <div class="col-12">
            <form action="/admin/severity/{{$severity->id}}/edit" method="POST">
                @csrf
                @method("PATCH")
            <x-panels.card>
                <x-slot name="card_title">
                    Severity bearbeiten
                </x-slot>
                <div class="row">
                    <x-adminlte-input name="level" label="Schweregrad" placeholder="TME Call-Out Schweregrad"
                        fgroup-class="col-md-6" value="{{$severity->level}}"/>
                    <x-adminlte-input name="label" label="Bezeichnung" placeholder="Bezeichnung"
                        fgroup-class="col-md-6" value="{{$severity->label}}"/>
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

