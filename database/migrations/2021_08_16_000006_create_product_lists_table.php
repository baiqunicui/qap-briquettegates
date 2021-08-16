<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductListsTable extends Migration
{
    public function up()
    {
        Schema::create('product_lists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug')->unique();
            $table->longText('heading')->nullable();
            $table->longText('subheading')->nullable();
            $table->longText('desc')->nullable();
            $table->string('color')->nullable();
            $table->longText('meta')->nullable();
            $table->longText('s_2_heading')->nullable();
            $table->longText('s_2_desc')->nullable();
            $table->longText('s_2_meta')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
