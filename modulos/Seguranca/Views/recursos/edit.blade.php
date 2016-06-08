@extends('layouts.interno')

@section('title')
    <div class="row">
        <div class="col-md-8">
            <h2 style="margin:0px;font-size:30px" class="lead" >Alterar Recurso</h2>
        </div>
    </div>
@stop

@section('content')
    <div class="panel panel-default ">
        <div class="panel-body">
            <div class="ibox float-e-margins wrapper wrapper-content">
                <div class="ibox-title">
                    <h5>Formulário de Cadastro de Recurso</h5>
                </div>
                <div class="ibox-content">
                    {!! Form::model($recurso,["url" => "/security/recursos/edit/".$recurso->rcs_id, "method" => "PUT", "id" => "form", "role" => "form"]) !!}
                        {!! Form::hidden('rcs_id') !!}
                        @include('security.recursos.includes.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@stop