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
        Schema::create('berita', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategori_id')
                ->references('id')
                ->on('kategori')
                ->onDelete('cascade')
                ->onUpdate('cascade'); 
            $table->string('judul', 100);
            $table->string('content', 3000);
            $table->string('picture', 100);
               

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
        Schema::dropIfExists('berita');
    }
};
