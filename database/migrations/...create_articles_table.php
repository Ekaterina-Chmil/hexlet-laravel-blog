public function up(): void
{
    Schema::create('articles', function (Blueprint $table) {
        $table->id();
        $table->string('name');   // Заголовок статьи
        $table->text('body');     // Текст статьи
        $table->timestamps();     // created_at и updated_at
    });
}

