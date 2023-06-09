<<<<<<< HEAD
@extends('adminlte::page')

@section('title', 'Novo Notebook')

@section('content_header')
<h1>Novo Notebook</h1>
@stop
@section('content')
<!--Conteudo formulario-->
<div class="card">
    <div class="card-body">
        {!! Form::open(['route'=>'notebook.store']) !!}
        <div class="form-group">
            <div class="row">
                <div class="col-sm-6">
                    {!! Form::label('nome_colaborador', 'Nome Colaborador') !!}
                    {!! Form::text('nome_colaborador',null, ['class'=>'form-control', 'placeholder'=>'Nome do Colaborador...']) !!}
                </div>
                <div class="col-sm-2">
                    {!! Form::label('usuario_rede', 'Usuario Rede') !!}
                    {!! Form::text('usuario_rede',null, ['class'=>'form-control', 'placeholder'=>'Usuario rede...']) !!}
                </div>
                <div class="col-sm-2">
                    {!! Form::label('tipo_colaborador', 'Tipo Colaborador') !!}
                    <select class="form-control" name="tipo_colaborador" id="tipo_colaborador">
                        <option value="">SELECIONE</option>
                        <option value="0">EC500</option>
                        <option value="1">EC900</option>
                        <option value="2">Coordenador</option>
                    </select>
                </div>
                <div class="col-sm-2">
                    {!! Form::label('patrimonio', 'Patrimonio') !!}
                    {!! Form::text('patrimonio',null, ['class'=>'form-control', 'placeholder'=>'Patrimonio...']) !!}
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-3">
                    {!! Form::label('num_serie', 'Numero de Serie') !!}
                    {!! Form::text('num_serie',null, ['class'=>'form-control', 'placeholder'=>'Numero de Serie...']) !!}
                </div>
                <div class="col-sm-3">
                    {!! Form::label('hostname', 'Hostname') !!}
                    {!! Form::text('hostname',null, ['class'=>'form-control', 'placeholder'=>'Hostname...']) !!}
                    @error('hostname')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="col-sm-3">
                    {!! Form::label('id_marca', 'Marca') !!}
                    <select class="form-control" name="id_marca" id="id_marca">
                        <option value="">SELECIONE</option>
                        @foreach ($marcas as $marca)
                        <option value="{{$marca->id}}">{{$marca->marca}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-3">
                    {!! Form::label('id_modelo', 'Modelo') !!}
                    <select class="form-control" name="id_modelo" id="id_modelo">
                        <option value="">SELECIONE</option>
                        @foreach ($modelos as $modelo)
                        <option value="{{$modelo->id}}">{{$modelo->modelo}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
                {!! Form::submit('Salvar', ['class'=>'form-control btn btn-primary']) !!}
            </div>
        </div>
    </div>
    {!! Form::close() !!}
</div>

</div>
=======
@extends('adminlte::page')

@section('title', 'Novo Notebook')

@section('content_header')
<h1>Novo Notebook</h1>
@stop
@section('content')
<!--Conteudo formulario-->
<div class="card">
    <div class="card-body">
        {!! Form::open(['route'=>'notebook.store']) !!}
        <div class="form-group">
            <div class="row">
                <div class="col-sm-6">
                    {!! Form::label('nome_colaborador', 'Nome Colaborador') !!}
                    {!! Form::text('nome_colaborador',null, ['class'=>'form-control', 'placeholder'=>'Nome do Colaborador...']) !!}
                </div>
                <div class="col-sm-2">
                    {!! Form::label('usuario_rede', 'Usuario Rede') !!}
                    {!! Form::text('usuario_rede',null, ['class'=>'form-control', 'placeholder'=>'Usuario rede...']) !!}
                </div>
                <div class="col-sm-2">
                    {!! Form::label('tipo_colaborador', 'Tipo Colaborador') !!}
                    <select class="form-control" name="tipo_colaborador" id="tipo_colaborador">
                        <option value="">SELECIONE</option>
                        <option value="0">EC500</option>
                        <option value="1">EC900</option>
                        <option value="2">Coordenador</option>
                    </select>
                </div>
                <div class="col-sm-2">
                    {!! Form::label('patrimonio', 'Patrimonio') !!}
                    {!! Form::text('patrimonio',null, ['class'=>'form-control', 'placeholder'=>'Patrimonio...']) !!}
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-3">
                    {!! Form::label('num_serie', 'Numero de Serie') !!}
                    {!! Form::text('num_serie',null, ['class'=>'form-control', 'placeholder'=>'Numero de Serie...']) !!}
                </div>
                <div class="col-sm-3">
                    {!! Form::label('hostname', 'Hostname') !!}
                    {!! Form::text('hostname',null, ['class'=>'form-control', 'placeholder'=>'Hostname...']) !!}
                    @error('hostname')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="col-sm-3">
                    {!! Form::label('id_marca', 'Marca') !!}
                    <select class="form-control" name="id_marca" id="id_marca">
                        <option value="">SELECIONE</option>
                        @foreach ($marcas as $marca)
                        <option value="{{$marca->id}}">{{$marca->marca}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-3">
                    {!! Form::label('id_modelo', 'Modelo') !!}
                    <select class="form-control" name="id_modelo" id="id_modelo">
                        <option value="">SELECIONE</option>
                        @foreach ($modelos as $modelo)
                        <option value="{{$modelo->id}}">{{$modelo->modelo}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
                {!! Form::submit('Salvar', ['class'=>'form-control btn btn-primary']) !!}
            </div>
        </div>
    </div>
    {!! Form::close() !!}
</div>

</div>
>>>>>>> 4285e2f (Segundo Commit Teste - Alteração EntradaProduto)
@stop