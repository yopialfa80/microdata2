<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTblAds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->id()->unsigned(false);
            $table->string('posisi', 100)->collation('latin1_swedish_ci');
            $table->string('link', 200)->collation('latin1_swedish_ci');
            $table->text('keterangan')->collation('latin1_swedish_ci');
            $table->string('img', 500)->collation('latin1_swedish_ci');
            $table->string('status', 100)->collation('latin1_swedish_ci');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ads');
    }
}
