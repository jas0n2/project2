<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('covers', function (Blueprint $table) {
            $table->id();
            $table->string('cover_name');
            $table->string('fbenefit_policyholder');
            $table->string('fbenefit_familymember');
            $table->string('hospitalization');
            $table->string('hospitalization_desc');
            $table->string('accidental');
            $table->string('lifecover');
            $table->string('life_premium');
            $table->string('pensions1');
            $table->string('pensions2');

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
        Schema::dropIfExists('covers');
    }
}
