<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('father_name ')->nullable();
            $table->string('email_profile')->nullable();
            $table->string('phone')->nullable();
            /*   تولد     */
            $table->string('years')->nullable();
            $table->string('month')->nullable();
            $table->string('day')->nullable();
            /*   تحصیلات     */
            $table->string('education')->nullable();
            $table->string('work')->nullable();
            /*   افتخارات     */
            $table->text('honors')->nullable();
            $table->text('about_me')->nullable();

            $table->string('status')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
