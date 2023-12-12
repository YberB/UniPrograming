<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  
    public function up(): void
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned();
            $table->enum('nombre', ['Diseño', 'Arte', 'Tecnología', 'Matemáticas', 'Programación']);
            $table->string('codigo', 20);
            $table->unsignedBigInteger('docente_id');
            $table->foreign('docente_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::table('cursos', function (Blueprint $table) {
            $table->dropColumn('cursos');
        });
    }
};
