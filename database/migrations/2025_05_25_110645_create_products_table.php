<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');                         // Название
            $table->decimal('price', 10, 2);                // Цена
            $table->decimal('discount', 10, 2)->default(0); // Скидка
            $table->string('short_description');            // Краткое описание
            $table->text('long_description');               // Длинное описание
            $table->string('color');                        // Цвет
            $table->unsignedInteger('stock');               // Кол-во на складе
            $table->foreignId('category_id')                // Категория
            ->constrained('categories')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
