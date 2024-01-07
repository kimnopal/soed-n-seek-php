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
        Schema::create('contact_post', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("contact_id")->nullable(false);
            $table->unsignedBigInteger("post_id")->nullable(false);

            $table->foreign("contact_id")->on("contacts")->references("id");
            $table->foreign("post_id")->on("posts")->references("id");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_post');
    }
};
