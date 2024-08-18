<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddName219ColumnToCategsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('categs', function (Blueprint $table) {
            $table->string('name219')->nullable(); // Add the column
        });
    }
    
    public function down()
    {
        Schema::table('categs', function (Blueprint $table) {
            $table->dropColumn('name219'); // Drop the column if rolled back
        });
    }
    
}
