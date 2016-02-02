<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableNewHistoryOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::drop('history_order');
        Schema::create('history_order', function(Blueprint $table){
          $table->increments('id');
          $table->integer('member_id');
          $table->text('address');
          $table->decimal('total', 10, 2);
          $table->integer('status')->default('1');
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
        //
    }
}
