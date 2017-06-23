@extends('layouts.admin')

@section('title')
    Administrador - {{ config('app.name') }}
@endsection

@section('container')
    <div class="row well">
        <div class="col-md-12">
            <h2>Cadastrar Noticia</h2>
            <hr>

            <form action="{{ route('news.store') }}" method="POST">
                <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                    <label>Titulo</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                    @if ($errors->has('title'))
                        <label class="control-label">{{ $errors->first('title') }}</label>
                    @endif
                </div>

                <div class="form-group {{ $errors->has('slug') ? 'has-error' : '' }}">
                    <label>Slug</label>
                    <input type="text" name="slug" class="form-control" value="{{ old('slug') }}">
                    @if ($errors->has('slug'))
                        <label class="control-label">{{ $errors->first('slug') }}</label>
                    @endif
                </div>

                <div class="form-group {{ $errors->has('excerpt') ? 'has-error' : '' }}">
                    <label>Descrição</label>
                    <textarea name="excerpt" maxlength="255" class="form-control">{{ old('excerpt') }}</textarea>
                    @if ($errors->has('excerpt'))
                        <label class="control-label">{{ $errors->first('excerpt') }}</label>
                    @endif
                </div>

                <div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
                    <label>Conteúdo</label>
                    <textarea name="body" maxlength="255" class="form-control">{{ old('body') }}</textarea>
                    @if ($errors->has('body'))
                        <label class="control-label">{{ $errors->first('body') }}</label>
                    @endif
                </div>

                {{ csrf_field() }}
                <button type="submit" class="btn btn-success btn-block">Cadastrar</button>
            </form>
        </div>
    </div>
@endsection
