<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('task');
            $table->boolean('iscompleted')->default(0);

            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
};
