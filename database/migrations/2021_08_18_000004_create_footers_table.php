<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFootersTable extends Migration
{
    public function up()
    {
        Schema::create('footers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('urutan')->unique();
            $table->longText('heading')->nullable();
            $table->longText('subheading')->nullable();
            $table->longText('desc')->nullable();
            $table->string('color')->nullable();
            $table->longText('meta')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
