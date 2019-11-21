<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('useremail');
            $table->bigInteger('user_id')->unsigned()->index();;
            $table->string('message')->nullable();
            $table->integer('vehicle_id');
            $table->date('from_date');
            $table->date('to_date');
            $table->boolean('status')->default(0);

            $table->foreign('user_id')
            ->references('id')->on('users')
            ->onDelete('cascade');
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
        Schema::dropIfExists('bookings');
    }
}
