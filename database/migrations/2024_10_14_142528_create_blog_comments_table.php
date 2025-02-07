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
        // Schema::create('blog_comments', function (Blueprint $table) {
        //     $table->id();
        //     $table->integer('user_id');
        //     $table->integer('blog_id');
        //     $table->integer('parent_id')->nullable();
        //     $table->string('name');
        //     $table->string('email');
        //     $table->string('comment');
        //     $table->timestamps();
        // });

        Schema::create('blog_comments', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('blog_id');
            $table->integer('parent_id')->nullable();
            $table->string('name');
            $table->string('email');
            $table->string('comment');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_comments');
    }
};
