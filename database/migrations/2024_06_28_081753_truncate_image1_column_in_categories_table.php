<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;

class TruncateImage1ColumnInCategoriesTable extends Migration
{
    public function up()
    {
        // Truncate data in image1 to 255 characters
        DB::table('categories')->update([
            'image1' => DB::raw('LEFT(image1, 255)')
        ]);
    }

    public function down()
    {
        // No action needed to revert the truncation
    }
}

