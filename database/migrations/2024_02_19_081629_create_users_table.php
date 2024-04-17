<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('password');
            $table->string('email');
            $table->string('address')->default("");
            $table->string('avatar')->default('');
            $table->string('phone1')->nullable();
            $table->string('phone2')->nullable();
            $table->enum('role', ['admin', 'user'])->default('user');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
};
