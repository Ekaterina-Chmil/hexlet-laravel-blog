@extends('layouts.app')

@section('title', 'Редактировать статью')
@section('header', 'Редактировать статью')

@section('content')
    {{-- Вывод ошибок --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('articles.update', $article->id) }}">
        @csrf
        @method('PATCH')
        @include('article.form')
        <button type="submit" class="btn btn-primary">Обновить</button>
    </form>
@endsection
