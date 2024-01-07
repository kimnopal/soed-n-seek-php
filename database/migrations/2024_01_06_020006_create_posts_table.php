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
            $table->string("title")->nullable(false);
            $table->string("code")->nullable(false)->unique("posts_code_unique");
            $table->longText("description")->nullable(false);
            $table->unsignedBigInteger("user_id")->nullable(false);
            $table->unsignedBigInteger("post_status_id")->nullable(false);
            $table->timestamps();

            $table->foreign("post_status_id")->on("post_statuses")->references("id");
            $table->foreign("user_id")->on("users")->references("id");
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
