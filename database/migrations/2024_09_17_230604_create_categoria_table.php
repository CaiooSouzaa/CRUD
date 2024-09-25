<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('categoria', function (Blueprint $table) {
            $table->id(); // campo inteiro autoincremento PK = id
            $table -> string ("cat_nome");
            $table->boolean("cat_ativo")->default(1);
            $table->string("cat_descricao")->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('categoria');
    }
};
