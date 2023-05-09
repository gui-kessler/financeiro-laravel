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
        Schema::create('contas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('descricao', 50)->nullable(false);
            $table->float('valor', 7, 2, true)->nullable(false);
            $table->timestamp('competencia')->nullable(false);
            $table->timestamp('emissao')->nullable(false);
            $table->timestamp('vencimento')->nullable(false);
            $table->string('obs', 200);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contas');
    }
};
