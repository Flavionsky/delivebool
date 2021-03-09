<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeRestaurantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_restaurant', function (Blueprint $table) {
            $table->foreignId('restaurant_id')->constrained('restaurants');
            $table->foreignId('type_id')->constrained('types');
            $table->primary(['restaurant_id', 'type_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('type_restaurant');
    }
}
