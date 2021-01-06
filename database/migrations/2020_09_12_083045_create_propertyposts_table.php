<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertypostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propertyposts', function (Blueprint $table) {
            $table->id();
            $table->integer('cat_id');
            $table->integer('country_id');
            $table->integer('division_id');
            $table->integer('dist_id');
            $table->integer('subdist_id')->nullable();
            $table->integer('user_id');
            $table->string('title_en');
            $table->string('title_bn');
            $table->text('desc_en');
            $table->text('desc_bn');
            $table->string('bed_en');
            $table->string('bed_bn')->nullable();
            $table->string('bath_en');
            $table->string('bath_bn')->nullable();
            $table->string('belconi_en');
            $table->string('belconi_bn')->nullable();
            $table->string('garage_en');
            $table->string('garage_bn')->nullable();
            $table->string('price_en');
            $table->string('price_bn')->nullable();
            $table->string('price_fixed');
            $table->string('gas');
            $table->string('area_en');
            $table->string('area_bn');
            $table->string('fulladdress_en');
            $table->string('fulladdress_bn');
            $table->string('phone_en');
            $table->string('phone_bn')->nullable();
            $table->string('email');
            $table->string('image');
            $table->string('post_date')->nullable();
            $table->string('post_month')->nullable();
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
        Schema::dropIfExists('propertyposts');
    }
}
