<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('stage_cells', function (Blueprint $table) {
            $table->id();
            $table->integer('stage_id');//効果値(int)
            $table->integer('x');//効果値(int)
            $table->integer('y');//効果値(int)
            $table->integer('object_id');//効果値(int)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stage_cells');
    }
};
