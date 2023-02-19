<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('date');
            $table->string('title');
            $table->longText('content');
            $table->string('signed_by');
            $table->datetime('publish_at')->nullable();
            $table->datetime('publish_until')->nullable();
            $table->boolean('is_published')->default(false);
        });
    }


    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
