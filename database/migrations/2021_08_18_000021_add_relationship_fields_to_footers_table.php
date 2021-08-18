<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToFootersTable extends Migration
{
    public function up()
    {
        Schema::table('footers', function (Blueprint $table) {
            $table->unsignedBigInteger('style_id')->nullable();
            $table->foreign('style_id', 'style_fk_4640513')->references('id')->on('styles');
        });
    }
}
