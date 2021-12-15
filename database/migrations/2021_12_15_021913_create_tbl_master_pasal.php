<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblMasterPasal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_pasal', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_header');
            $table->string('nama',255)->nullable();
            $table->timestamps();
            $table->softDeletes('deleted_at',0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_pasal');
    }
}
