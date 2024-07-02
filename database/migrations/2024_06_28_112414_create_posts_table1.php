<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts_table1', function (Blueprint $table) {
            $table->id();
            $table->string('building');
            $table->string('condition');
            $table->string('types');
            $table->string('taxes');
            $table->string('living');
            $table->string('cars');
            $table->string('bathrooms');
            $table->string('ceiling');
            $table->string('old');
            $table->string('land');
            $table->string('repair');
            $table->string('mony');
            $table->string('change');
            $table->string('amenities');
            $table->string('agent');
            $table->string('image')->nullable();
            $table->string('image2')->nullable();
            $table->mediumText('communications');
            $table->string('region');
            $table->string('appliances');
            $table->mediumText('desi');
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
        Schema::dropIfExists('posts_table1');
    }
}
