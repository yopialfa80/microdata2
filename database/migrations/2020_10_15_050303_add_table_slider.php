<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTableSlider extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slider', function (Blueprint $table) {
            $table->id()->unsigned(false);
            $table->string('judul', 200)->collation('latin1_swedish_ci')->nullable();
            $table->string('link', 200)->collation('latin1_swedish_ci')->nullable();
            $table->text('img')->collation('latin1_swedish_ci')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('slider');
    }
}
