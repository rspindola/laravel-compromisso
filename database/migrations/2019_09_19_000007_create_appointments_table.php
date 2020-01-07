<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('client_id');
            $table->unsignedInteger('employee_id');
            $table->datetime('start_time');
            $table->datetime('finish_time');
            $table->decimal('price', 15, 2)->nullable();
            $table->longText('comments')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('client_id', 'client_fk_360714')->references('id')->on('clients');

            $table->foreign('employee_id', 'employee_fk_360715')->references('id')->on('employees');
        });
    }
}
