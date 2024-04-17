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
            $table->decimal('deposite', 8, 2)->default(0);
            $table->decimal('space', 8, 2);
            $table->foreignId('city_id')->constrained()->onDelete('cascade');
            $table->string('address');
            $table->enum('renting_type', ["monthly", "daily", "yearly"]);
            $table->enum('features', ['garage', 'internet', 'pool', 'fireplace', 'garden', 'balcony'])->nullable();
            $table->date('ready_date');
            $table->integer('rooms');
            $table->string('images')->nullable();
            $table->enum('status', ["active", "inactive"])->default("inactive");
            $table->foreignId('category_id')->constrained('categories');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('properties');
    }
};
