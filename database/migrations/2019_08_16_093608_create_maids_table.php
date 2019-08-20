<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maids', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('name');
            $table->string('refCode');
            $table->integer('type');
            $table->integer('eduction');
            $table->integer('nationality');
            $table->integer('age');
            $table->integer('mStatus');
            $table->integer('language');
            $table->string('website');
            $table->integer('height');
            $table->integer('weight');
            $table->integer('religion');
            $table->integer('numberChildren');
            $table->integer('expectedSalary');
            $table->string('offDays');
            $table->text('path');
            $table->integer('isActive');
            $table->integer('duty');
            $table->text('introduction');
            $table->text('realPath');
            $table->unsignedBigInteger('agency_id');
            $table->timestamps();

            $table->foreign('agency_id')->references('id')->on('agencies');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maids');
    }
}
