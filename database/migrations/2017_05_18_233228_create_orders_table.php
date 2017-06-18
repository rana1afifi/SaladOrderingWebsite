<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        
        
        Schema::create('orders', function($table) {
            $table->increments('id', true);
            $table->integer('customerID')->unsigned();
            $table->string('step1');
            $table->string('step2');
            $table->string('step3');
            $table->string('step4');
            $table->string('step5');
            $table->time('pickUpTime');
            $table->text('released');
            $table->tinyInteger('timecreated');
        });

       Schema::table('orders', function($table) {
           $table->foreign('customerID')->references('id')->on('users');
       });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
         Schema::drop('orders');
    }
}
