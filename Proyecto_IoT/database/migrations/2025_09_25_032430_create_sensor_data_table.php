<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('sensor_data', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_sensor')->constrained('sensors')->cascadeOnDelete();
            $table->foreignId('id_station')->constrained('stations')->cascadeOnDelete();
            $table->float('temp_value');
            $table->float('humidity');
            $table->boolean('status')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sensor_data');
    }
};
