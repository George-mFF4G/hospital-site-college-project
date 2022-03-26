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
        Schema::create('appointement', function (Blueprint $table) {
            $table->id();
            $table->string('patient_name');
            $table->string('phone')->nullable();
            $table->string('age');
            $table->string('description');
            $table->unsignedBigInteger('doc_id');
            $table->date('appointement_date');
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
        Schema::dropIfExists('appointement');
    }
};
