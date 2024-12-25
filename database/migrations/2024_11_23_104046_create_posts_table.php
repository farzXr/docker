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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content')->nullable();
            $table->unsignedBigInteger('catigory_id')->nullable();
            $table->timestamps();

            $table->softDeletes();

            //$table->unsignedBigInteger('catigory_id')->nullable();
            //$table->index('catigory_id', 'post_catigory_idx');
            //$table->foreign('catigory_id', 'post_catigory_fk')->on('catigories')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
