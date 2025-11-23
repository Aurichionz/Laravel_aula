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
    Schema::create('produtos', function (Blueprint $table) {
        $table->id(); // chave primária (auto increment)
        $table->string('nome'); // nome do produto
        $table->decimal('preco', 8, 2); // R$ 999.999,99
        $table->integer('quantidade'); // estoque
        $table->text('descricao')->nullable(); // texto opcional
        $table->timestamps(); // created_at e updated_at
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
