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
        Schema::create('employees_salariees', function (Blueprint $table) {
            $table->id();
            $table->integer('e_s_id');
            $table->foreign('e_s_id')->references('emp_id')->on('employees');
            $table->string('emp_testing_column');
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
        Schema::dropIfExists('employees_salariees');
    }
};
