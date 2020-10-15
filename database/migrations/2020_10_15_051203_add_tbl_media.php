<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTblMedia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media', function (Blueprint $table) {
            $table->id()->unsigned(false);
            $table->string('type', 20)->collation('latin1_swedish_ci');
            $table->string('judul_media', 200)->collation('latin1_swedish_ci')->nullable();
            $table->text('judul_img', 200)->collation('latin1_swedish_ci')->nullable();
            $table->text('img')->collation('latin1_swedish_ci')->nullable();
            $table->bigInteger('instansi_id')->nullable();
            $table->string('source', 500)->collation('latin1_swedish_ci');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('media');
    }
}
