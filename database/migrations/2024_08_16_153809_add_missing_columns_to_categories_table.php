<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMissingColumnsToCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('categs', function (Blueprint $table) {
            if (!Schema::hasColumn('categs', 'name100')) {
                $table->string('name100')->nullable();
            }
            if (!Schema::hasColumn('categs', 'name101')) {
                $table->string('name101')->nullable();
            }
            // Add other columns with similar checks
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('categories', function (Blueprint $table) {
            //
        });
    }
}
