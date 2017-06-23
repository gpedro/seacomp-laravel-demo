@extends('layouts.admin')

@section('title')
    Administrador - {{ config('app.name') }}
@endsection

@section('container')
    <div class="row well">
        <div class="col-md-12">
            <h2>Editar Noticia {{ $news->title }}</h2>
            <hr>

            {!! BootForm::open(['model' => $news, 'store' => 'news.store', 'update' => 'news.update']) !!}
            {!! BootForm::text('title') !!}
            {!! BootForm::text('slug') !!}
            {!! BootForm::textarea('excerpt') !!}
            {!! BootForm::textarea('body') !!}
            {!! BootForm::submit('Enviar', ['class' => 'btn btn-success btn-block']) !!}
            {!! BootForm::close() !!}
        </div>
    </div>
@endsection
