<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id");
            $table->char("condition");       //n-new, u-used, c-crashed
            $table->string("brand");
            $table->string("model");
            $table->char("body_type", 2);

            /* BODY TYPES: */
            /* 'li' - limusine,
            'hb' - hatchback,
            'ca' - caravan,
            'co' - coupe,
            'mv' - minivan,
            'cb' - cabrio,
            'su' - SUV,
            'pu' - Pick-up */

            $table->integer("price");
            $table->char("fuel", 1);

            /* FUEL:
            'g' - gasoline,
            'd' - diesel,
            'e' - electricity,
            'h' - hydrogen */

            $table->integer("horses");      // horse power
            $table->integer("milage");      // milage in km
            $table->integer("year");        // year of car production
            $table->text("desc");           // seller's description
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
        Schema::dropIfExists('ads');
    }
}
