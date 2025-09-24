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

         // Tabla: stations
    Schema::create('stations', function (Blueprint $table) {
        $table->id();
        $table->text('name');
        $table->text('code')->nullable();
        $table->boolean('status')->default(true);
        $table->unsignedBigInteger('id_city')->nullable();
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
        Schema::dropIfExists('stations');
    }
};
