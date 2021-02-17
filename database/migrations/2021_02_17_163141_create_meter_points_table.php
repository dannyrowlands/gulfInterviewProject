<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeterPointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meter_points', function (Blueprint $table) {
            $table->id();
            $table->char('meterpoint', 200);
            $table->bigInteger('consumption');
            $table->bigInteger('uplift');
            $table->timestamps();
            
            $table->index(['id', 'consumption', 'uplift', 'created_at']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meter_points');
    }
}
