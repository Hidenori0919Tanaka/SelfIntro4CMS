<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkFSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_f_s', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable()->unsigned();
			$table->text('title')->nullable();
			$table->text('image_id')->nullable()->unsigned();
			$table->text('github_link')->nullable();
			$table->text('hp_link')->nullable();
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
        Schema::dropIfExists('work_f_s');
    }
}
