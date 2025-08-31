public function up(): void
{
    Schema::create('articles', function (Blueprint $table) {
        $table->id();
        $table->string('name'); // название статьи
        $table->text('body');   // текст статьи
        $table->timestamps();
    });
}

public function down(): void
{
    Schema::dropIfExists('articles');
}

