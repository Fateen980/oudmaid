<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agencies', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->text('name');
            $table->text('address');
            $table->text('introduction');
            $table->text('officeHours');
            $table->string('email', 100);
            $table->string('website', 100);
            $table->string('tel', 100);
            $table->string('fax', 100);
            $table->string('handphone', 100);
            $table->string('licenceNo', 100);
            $table->string('contactPerson', 150);
            $table->text('path');
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
        Schema::dropIfExists('agencies');
    }
}
