<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categ', function (Blueprint $table) {
            $table->id();
            $table->string('name100')->nullable();
            $table->string('name101')->nullable();
            $table->string('name102')->nullable();
            $table->string('name103')->nullable();
            $table->string('name104')->nullable();
            $table->string('name105')->nullable();
            $table->string('name106')->nullable();
            $table->string('name107')->nullable();
            $table->string('name108')->nullable();
            $table->string('name109')->nullable();
            $table->string('name110')->nullable();
            $table->string('name111')->nullable();
            $table->string('name112')->nullable();
            $table->string('name113')->nullable();
            $table->string('name114')->nullable();
            $table->string('name115')->nullable();
            $table->string('name116')->nullable();
            $table->string('name117')->nullable();
            $table->string('name118')->nullable();
            $table->string('name119')->nullable();
            $table->string('name120')->nullable();
            $table->string('name121')->nullable();
            $table->string('name122')->nullable();
            $table->string('name123')->nullable();
            $table->string('name124')->nullable();
            $table->string('name125')->nullable();
            $table->string('name126')->nullable();
            $table->string('name127')->nullable();
            $table->string('name128')->nullable();
            $table->string('name129')->nullable();
            $table->string('name130')->nullable();
            $table->string('name131')->nullable();
            $table->string('image001')->nullable();
            $table->string('image002')->nullable();
            $table->text('description')->nullable(); 
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
        Schema::dropIfExists('categ');
    }
}
