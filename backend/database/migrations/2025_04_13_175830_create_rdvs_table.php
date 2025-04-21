<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('rdvs', function (Blueprint $table) {
        $table->id();
        $table->string('service');
        $table->string('nom');
        $table->string('telephone');
        $table->date('date');
        $table->time('heure');
        $table->unsignedBigInteger('cabinet_id');
        $table->timestamps();
    });
}

public function down()
{
    Schema::table('rdvs', function (Blueprint $table) {
        $table->dropForeign(['patient_id']);
        $table->dropColumn('patient_id');
    });
}

};
