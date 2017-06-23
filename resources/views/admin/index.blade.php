@extends('layouts.admin')

@section('title')
    Administrador - {{ config('app.name') }}
@endsection

@section('container')
    <div class="row">
        <div class="col-md-12">
            <h2>Listagem de Noticias</h2>
            <a href="{{ route('news.create') }}" class="btn btn-success">Cadastrar Noticia</a>
            <hr>

            <table class="table table-striped table-hover table-bordered">
                <thead>
                <tr>
                    <th>Título</th>
                    <th>Descrição</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                @forelse($news as $item)
                    <tr>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->excerpt }}</td>
                        <td>
                            <a href="{{ route('news.show', $item->id) }}" class="btn btn-primary">VER</a>
                            <a href="{{ route('news.edit', $item->id) }}" class="btn btn-danger">EDITAR</a>
                        </td>
                    </tr>
                @empty
                <tr>
                    <td colspan="4">Nenhuma notícia cadastrada.</td>
                </tr>
                @endforelse
                </tbody>
            </table>

            {{ $news->links() }}
        </div>
    </div>
@endsection
