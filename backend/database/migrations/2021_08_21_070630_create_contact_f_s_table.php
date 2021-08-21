<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactFSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_f_s', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable()->unsigned();
            $table->text('title')->nullable();
            $table->text('twitter_link')->nullable();
            $table->text('email_link')->nullable();
            $table->foreign("id")->references("id")->on("users");
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
        Schema::dropIfExists('contact_f_s');
    }
}
