<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantsToTypeRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants_to_type_restaurants', function (Blueprint $table) {
            $table->foreignId('restaurant_id')->constrained('restaurants');
            $table->foreignId('type_id')->constrained('type_restaurants');
            $table->primary(['restaurant_id', 'type_id']);
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
        Schema::dropIfExists('restaurants_to_type_restaurants');
    }
}
