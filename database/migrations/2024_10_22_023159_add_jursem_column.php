<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('user', function (Blueprint $table) {
            $table->string('jurusan');
            $table->integer('semester'); 
        });
    }

    public function down()
    {
        Schema::table('user', function (Blueprint $table) {
            $table->dropColumn('jurusan'); 
            $table->dropColumn('semester'); 
        });
    }
};
