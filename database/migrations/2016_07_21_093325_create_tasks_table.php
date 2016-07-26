<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection("default")->create('tasks', function(Blueprint $table)
        {
            $table->string('title');
            $table->string('slug')->index();
            $table->text('description');
            $table->tinyInteger('type')->index();
            $table->text('links');
            $table->tinyInteger('status')->index();
            $table->tinyInteger('priority')->index();
            $table->unsignedInteger('user_id');

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
        Schema::connection("default")->drop("tasks");
    }
}
