<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToAboutsTable extends Migration
{
    public function up()
    {
        Schema::table('abouts', function (Blueprint $table) {
            $table->unsignedBigInteger('style_id')->nullable();
            $table->foreign('style_id', 'style_fk_4638758')->references('id')->on('styles');
        });
    }
}
