@extends('layouts.app')

@section('title', 'Создать статью')

@section('header', 'Создать статью')

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

    <form method="POST" action="{{ route('articles.store') }}">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Название</label>
            <input
                type="text"
                name="name"
                id="name"
                class="form-control"
                value="{{ old('name') }}"
            >
        </div>

        <div class="mb-3">
            <label for="body" class="form-label">Текст</label>
            <textarea
                name="body"
                id="body"
                class="form-control"
                rows="10"
            >{{ old('body') }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Создать</button>
    </form>
@endsection