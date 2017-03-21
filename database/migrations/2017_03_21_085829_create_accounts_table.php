<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->increments('id');   
            $table->integer('patient_id')->unsigned();
            $table->date('date_issued');
            $table->date('date_paid');
            $table->timestamps();
        });

        Schema::table('accounts', function ($table) {
            
            $table->foreign('patient_id')->references('id')->on('patients');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts');
    }
}
