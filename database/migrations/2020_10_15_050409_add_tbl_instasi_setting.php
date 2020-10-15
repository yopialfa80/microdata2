<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTblInstasiSetting extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instansi_setting', function (Blueprint $table) {
            $table->id()->unsigned(false);
            $table->string('nama_kepala', 200)->collation('latin1_swedish_ci')->nullable();
            $table->string('kabupaten', 200)->collation('latin1_swedish_ci')->nullable();
            $table->string('provinsi', 200)->collation('latin1_swedish_ci')->nullable();
            $table->text('foto_kepala')->collation('latin1_swedish_ci')->nullable();
            $table->string('font', 100)->collation('latin1_swedish_ci')->nullable();
            $table->string('theme', 100)->collation('latin1_swedish_ci')->nullable();
            $table->string('style', 100)->collation('latin1_swedish_ci')->nullable();
            $table->string('bg', 100)->collation('latin1_swedish_ci')->nullable();
            $table->string('preloader', 100)->collation('latin1_swedish_ci')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('instansi_setting');
    }
}
