@extends('layouts.master')

@section('title')
    {{ $news->title }} - {{ config('app.name') }}
@endsection

@section('container')
    <div class="row well">
        <div class="col-md-12">
            <h2>{{ $news->title }}</h2>
            <h5>Publicado em {{ $news->created_at->format('d/m/Y H:i:s') }}</h5>
            <hr>

            <div class="row">
                <div class="col-md-12">
                    <p>{{ $news->body }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
