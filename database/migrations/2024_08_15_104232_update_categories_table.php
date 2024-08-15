<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('categories', function (Blueprint $table) {
            // Add or modify columns
            $table->string('new_column')->nullable();
            // Modify existing columns if needed
            $table->string('name3')->change();
        });
    }
    
    public function down()
    {
        Schema::table('categories', function (Blueprint $table) {
            // Revert changes if needed
            $table->dropColumn('new_column');
        });
    }
}
