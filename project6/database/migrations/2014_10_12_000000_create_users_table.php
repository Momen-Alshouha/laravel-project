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
            $table->text('img');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->bigInteger('Phone_number')->unique();
            $table->integer('mentor_category')->unsigned();
            $table->string('category_name');

            $table->text('mentor_about');
            $table->rememberToken();
            $table->timestamps();
            
            $table->foreign('mentor_category')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');


            $table->foreign('category_name')->references('category_name')->on('categories')
            ->onDelete('cascade')
            ->onUpdate('cascade');

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
