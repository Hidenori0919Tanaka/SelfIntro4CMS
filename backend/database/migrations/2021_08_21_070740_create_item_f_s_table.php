<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemFSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_f_s', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable()->unsigned();
            $table->text('item1')->nullable();
            $table->text('item2')->nullable();
            $table->text('item3')->nullable();
            $table->text('item4')->nullable();
            $table->text('item5')->nullable();
            $table->text('item6')->nullable();
            $table->foreign("user_id")->references("id")->on("users");
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
        Schema::dropIfExists('item_f_s');
    }
}
