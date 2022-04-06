<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rules', function (Blueprint $table) {
            $table->id('rid');
            $table->timestamp('date')->nullable();
            $table->timestamp('time')->nullable();
            $table->integer('gid')->nullable();
            $table->integer('sid')->nullable();
            $table->longText('msg')->nullable();
            $table->string('classification')->nullable();
            $table->integer('priority')->nullable();
            $table->string('protocol')->nullable();
            $table->string('source_ip')->nullable();
            $table->string('destination_ip')->nullable();
            $table->integer('source_port')->nullable();
            $table->integer('destination_port')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rules');
    }
}
