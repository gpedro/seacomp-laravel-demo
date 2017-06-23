@extends('layouts.admin')

@section('title')
    Administrador - {{ config('app.name') }}
@endsection

@section('container')
    <div class="row well">
        <div class="col-md-12">
            <h2>{{ $news->title }}</h2>
            <hr>

            {!! BootForm::staticField('slug', 'Slug', $news->slug) !!}
            {!! BootForm::staticField('excerpt', 'Excerpt', $news->excerpt) !!}
            {!! BootForm::staticField('body', 'Body', $news->body) !!}
        </div>
    </div>
@endsection
