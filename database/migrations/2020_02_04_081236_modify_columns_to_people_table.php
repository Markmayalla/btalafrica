<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyColumnsToPeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('people', function (Blueprint $table) {
            $table->string('facebook')->nullable()->change();
            $table->string('twitter')->nullable()->change();
            $table->string('linkedin')->nullable()->change();
            $table->string('position')->nullable()->change();
            $table->text('description')->nullable()->change();
            $table->string('avatar')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('people', function (Blueprint $table) {
            $table->string('facebook')->change();
            $table->string('twitter')->change();
            $table->string('linkedin')->change();
            $table->string('position')->change();
            $table->text('description')->change();
            $table->string('avatar')->change();
        });
    }
}
