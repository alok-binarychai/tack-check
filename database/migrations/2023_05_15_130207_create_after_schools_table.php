<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAfterSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('after_schools', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('where')->nullable();
            $table->string('when')->nullable();
            $table->text('description')->nullable();
            $table->string('term_file')->nullable();
            $table->string('classrooms_file')->nullable();
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
        Schema::dropIfExists('after_schools');
    }
}
