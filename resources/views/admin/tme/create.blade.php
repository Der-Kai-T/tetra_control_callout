@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>TMEs</h1>
    <x-flash />
@stop

@section('content')

    <div class="row">
        <div class="col-12">
            <form action="/admin/tme/new" method="POST">
                @csrf
               
            <x-panels.card>
                <x-slot name="card_title">
                    neuen TME anlegen
                </x-slot>
                <div class="row">
                    <x-adminlte-input required type="number" name="ISSI" label="ISSI" placeholder="ISSI des TME"
                        fgroup-class="col-md-3" value="{{old('ISSI')}}"/>
                       
                    <x-adminlte-input required name="short" label="Kurzbezeichnung" placeholder="z.B.: DME#003"
                        fgroup-class="col-md-3" value="{{old('short')}}"/>
                       
                    <x-adminlte-input required name="long" label="Lange Bezeichnugn" placeholder=""
                        fgroup-class="col-md-6" value="{{old('long')}}"/>
                       
                </div>
                <div class="row">
                        <x-adminlte-select required name='orga_groups_id' label="Organisationseinheit" fgroup-class="col-md-6">
                            <option value="" selected disabled>+++ bitte Gruppe auswählen +++</option>

                            @foreach ($orgagroups as $grp)
                            <option value="{{$grp->id}}">{{$grp->name}}</option>
                            @endforeach
                        </x-adminlte-select>
                     
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

