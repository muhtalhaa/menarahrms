<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id');
            $table->foreignId('position_id')->nullable();
            $table->foreignId('hub_id')->nullable();
            $table->foreignId('division_id')->nullable();
            $table->foreignId('salary_id')->nullable();
            $table->foreignId('workday_id')->nullable();
            $table->string('uuid');
            $table->string('name');
            $table->string('nik');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->date('joined_at');
            $table->boolean('status');
            $table->date('inactive_at')->nullable();
            $table->string('client_ip')->nullable();
            $table->timestamp('last_login_at')->nullable();
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
};