<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublisherReportagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publisher_reportages', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['vip', 'news','advertisement']);
            $table->integer('price');
            $table->foreignId('publisher_id')->constrained('publishers')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publisher_reportages');
    }
}
