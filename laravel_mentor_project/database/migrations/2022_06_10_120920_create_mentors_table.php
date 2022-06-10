<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMentorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mentors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('mentor_firstname');
            $table->string('mentor_lastname');
            $table->string('mentor_email');
            $table->string('mentor_password');
            $table->bigInteger('mentor_phone_number');
            $table->text('mentor_image');
            $table->bigInteger('mentor_category')->unsigned()->nullable();
            $table->text('mentor_about');


            $table->foreign('mentor_category')->references('id')->on('services')
            ->onDelete('cascade')
            ->onUpdate('cascade');







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
        Schema::dropIfExists('mentors');
    }
}
