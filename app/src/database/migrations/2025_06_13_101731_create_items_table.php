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
        //データベースでいうcreate table items
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);//アイテム名
            $table->integer('type');//種類(int)
            $table->integer('effect');//効果値(int)
            $table->string('detail', 255);//詳細
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
