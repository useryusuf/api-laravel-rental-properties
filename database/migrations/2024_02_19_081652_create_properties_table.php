<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->decimal('price', 8, 2);
            $table->foreignId('city_id')->constrained();
            $table->string('address');
            $table->string('images');
            $table->boolean('is_active');
            $table->foreignId('category_id')->constrained('categories'); // Assuming a 'categories' table exists
            $table->foreignId('user_id')->constrained();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('properties');
    }
};
