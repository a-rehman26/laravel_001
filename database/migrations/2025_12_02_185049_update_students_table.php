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
        Schema::table('student', function (Blueprint $table) {
            // $table->renameColumn('stu_contact', 'stu_contacts');
            // $table->dropColumn('stu_cnic');
            // $table->string('stu_test')->after('stu_age');
            // $table->string('stu_test');
            $table->dropColumn('stu_test');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('student', function (Blueprint $table) {
            //
        });
    }
};
