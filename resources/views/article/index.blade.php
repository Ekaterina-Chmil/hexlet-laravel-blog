@extends('layouts.app')

@section('title', 'Список статей')

@section('header', 'Список статей')

@section('content')
    {{-- 🔥 Флеш-сообщение об успехе --}}
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- Кнопка "Создать статью" --}}
    <a href="{{ route('articles.create') }}" class="btn btn-success mb-3">+ Новая статья</a>

    {{-- Список статей --}}
    @foreach ($articles as $article)
        <h2>
            <a href="{{ route('articles.show', $article->id) }}">
                {{ $article->name }}
            </a>
        </h2>
        <div>{{ \Illuminate\Support\Str::limit($article->body, 200) }}</div>

        {{-- 🔹 Ссылка на редактирование --}}
        <a href="{{ route('articles.edit', $article->id) }}">Редактировать</a>
        <hr>
    @endforeach

    {{-- Пагинация (если используешь paginate()) --}}
    {{ $articles->links() }}
@endsection
