<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('untie_email')->nullable();
            $table->string('skype')->nullable();
            $table->string('teaching_profession')->nullable();
            $table->string('child_name')->nullable();
            $table->string('child_gender')->nullable();
            $table->string('child_age')->nullable();
            $table->date('birth_date')->nullable();
            $table->integer('phone')->nullable();
            $table->integer('another_phone')->nullable();
            $table->string('interface_language')->nullable();
            $table->string('time_zone')->nullable();
            $table->string('child_hobbies')->nullable();
            $table->string('wishes_for_training')->nullable();
            $table->string('study_notes')->nullable();
            $table->string('image')->nullable();
            $table->longText('admin_comments')->nullable();
            $table->integer('receive_email')->default(0)->nullable();
            $table->integer('receive_notifications_messenger')->default(0)->nullable();
            $table->integer('user_id')->nullable();
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
        Schema::dropIfExists('students');
    }
}
