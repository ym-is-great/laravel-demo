<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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

            $table->increments('id');

            // my code start
            $table->string('number', 16);
            $table->string('name', 16);
            $table->tinyInteger('class_id');
            // my code end

            $table->timestamps();

            // my code start
            $table->softDeletes();
            // my code end
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
