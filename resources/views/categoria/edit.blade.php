<<<<<<< HEAD
@extends('adminlte::page')

@section('title', 'Editar Categoria')

@section('content_header')
<h1>Editar Categoria {{$categoria->categoria}}</h1>
@stop

@section('content')
<!--Mensagem de Ação-->

@if (session('mensagem'))
    <div class="alert alert-success">
    <strong>{{session('mensagem')}}</strong>
</div>
@endif
<!--Conteudo formulario-->
<div class="card">
    <div class="card-body">
    {!! Form::model($categoria,['route'=>['categoria.update',$categoria],
                                    'method'=>'put']) !!}
        <div class="form-group">
            <div class="row">
                <div class="col-sm-4">
                    {!! Form::label('categoria', 'Categoria') !!}
                    {!! Form::text('categoria',null, ['class'=>'form-control', 'placeholder'=>'Categoria...']) !!}
                    @error('categoria')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
                {!! Form::submit('Atualizar', ['class'=>'form-control btn btn-primary']) !!}
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>
=======
@extends('adminlte::page')

@section('title', 'Editar Categoria')

@section('content_header')
<h1>Editar Categoria {{$categoria->categoria}}</h1>
@stop

@section('content')
<!--Mensagem de Ação-->

@if (session('mensagem'))
    <div class="alert alert-success">
    <strong>{{session('mensagem')}}</strong>
</div>
@endif
<!--Conteudo formulario-->
<div class="card">
    <div class="card-body">
    {!! Form::model($categoria,['route'=>['categoria.update',$categoria],
                                    'method'=>'put']) !!}
        <div class="form-group">
            <div class="row">
                <div class="col-sm-4">
                    {!! Form::label('categoria', 'Categoria') !!}
                    {!! Form::text('categoria',null, ['class'=>'form-control', 'placeholder'=>'Categoria...']) !!}
                    @error('categoria')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
                {!! Form::submit('Atualizar', ['class'=>'form-control btn btn-primary']) !!}
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>
>>>>>>> 4285e2f (Segundo Commit Teste - Alteração EntradaProduto)
@stop