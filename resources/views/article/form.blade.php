<div class="mb-3">
    <label for="name" class="form-label">Название</label>
    <input
        type="text"
        name="name"
        id="name"
        class="form-control"
        value="{{ old('name', $article->name) }}"
    >
</div>

<div class="mb-3">
    <label for="body" class="form-label">Текст</label>
    <textarea
        name="body"
        id="body"
        class="form-control"
        rows="10"
    >{{ old('body', $article->body) }}</textarea>
</div>
