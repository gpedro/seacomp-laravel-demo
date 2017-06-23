@extends('layouts.master')

@php
    $types = [
        'abstract', 'animals', 'business', 'cats', 'city', 'food', 'night',
        'life', 'fashion', 'people', 'nature', 'sports', 'technics', 'transport'
    ];
@endphp

@section('title')
    Últimas Notícias - {{ config('app.name') }}
@endsection

@section('container')
    <div class="row well">
        <div class="col-md-12">
            <h2>Últimas Notícias</h2>
            <hr>

            @foreach($news as $news)
                <div class="row">
                    <div class="col-md-3">
                        @php
                        shuffle($types);
                        $type = $types[0];
                        @endphp
                        <img src="http://lorempixel.com/200/200/{{ $type }}" class="img-responsive" alt="{{ $news->title }}">
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-12">
                                <h4>{{ $news->title }}</h4>
                                <small>{{ $news->created_at->format('d/m/Y H:i:s') }}</small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">{{ $news->excerpt }}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-right">
                                <a href="{{ route('news.show', $news->slug) }}" class="btn btn-primary">Leia Mais</a>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            @endforeach
        </div>
    </div>
@endsection
