<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
                        $table->bigIncrements('id');
                        $table->String('VehiclesTitle');
                        $table->unsignedInteger('VehiclesBrand');
                        $table->string('slug');
                        $table->text('VehiclesOverview');
                        $table->String('PricePerDay');
                        $table->String('FuelType');
                        $table->String('ModelYear');
                        $table->integer('SeatingCapacity')->default(0)->default(0);
                        $table->integer('AirConditioner')->default(0);
                        $table->integer('PowerDoorLocks')->default(0);
                        $table->integer('AntiLockBrakingSystem')->default(0);
                        $table->integer('BrakeAssist')->default(0);
                        $table->integer('PowerSteering')->default(0);
                        $table->integer('DriverAirbag')->default(0);
                        $table->integer('PassengerAirbag')->default(0);
                        $table->integer('PowerWindows')->default(0);
                        $table->integer('CDPlayer')->default(0);
                        $table->integer('CentralLocking')->default(0);
                        $table->integer('CrashSensor')->default(0);
                        $table->integer('LeatherSeats')->default(0);

                        $table->timestamps();

                        $table->foreign('VehiclesBrand')
                        ->references('id')->on('brands')
                        ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
}
