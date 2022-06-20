<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berita_penulis', function (Blueprint $table) {
            $table->foreignId('berita_id')->references('id')
            ->on('berita')->constrained();
            $table->foreignId('penulis_id')->references('id')
            ->on('penulis')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('beritapenulis');
    }
};