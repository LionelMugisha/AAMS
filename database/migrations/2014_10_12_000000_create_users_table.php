<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('telephone')->nullable()->unique();
            $table->string('employment_status')->nullable();
            $table->string('employment')->nullable();
            $table->string('status')->nullable()->default('inactive');
            $table->string('faculty')->nullable();
            $table->string('department')->nullable();
            $table->string('yearofgraduation')->nullable();
            $table->string('address')->nullable();
            $table->string('school_id')->nullable()->unique();
            $table->string('password');
            $table->foreignId('role_id');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
