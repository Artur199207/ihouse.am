<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // public function up()
    // {
    //     Schema::create('categories', function (Blueprint $table) {
    //         $table->id();
    //         $table->string('name');
    //         $table->string('slug');
    //         $table->mediumText('description');
    //         $table->string('image');
    //         $table->string('meta_title');
    //         $table->text('meta_description');
    //         $table->text('meta_keyword');
    //         $table->tinyInteger('navbar_status')->default('0');
    //         $table->tinyInteger('status')->default('0');
    //         $table->integer('created_by');
    //         $table->timestamps();
    //     });
    // }
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('name1')->nullable();
            $table->string('name2')->nullable();
            $table->integer('name3')->nullable();
            $table->integer('name4')->nullable();
            $table->string('name5')->nullable();
            $table->integer('name6')->nullable();
            $table->integer('name7')->nullable();
            $table->string('name8')->nullable();
            $table->string('name9')->nullable();
            $table->string('name10')->nullable();
            $table->string('name11')->nullable();
            $table->string('name12')->nullable();
            $table->string('slug')->nullable();
            $table->string('slug1')->nullable();
            $table->mediumText('description')->nullable();
            $table->string('image')->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->tinyInteger('navbar_status')->default('0');
            $table->tinyInteger('status')->default('0');
            $table->integer('created_by');
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
        Schema::dropIfExists('categories');
    }
}
