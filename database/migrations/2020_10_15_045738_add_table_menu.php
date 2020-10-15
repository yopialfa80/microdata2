<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTableMenu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu', function (Blueprint $table) {
            $table->id()->unsigned(false);
            $table->integer('id_parent')->default(0);
            $table->string('nama_menu', 100)->collation('latin1_swedish_ci');
            $table->tinyInteger('order_menu')->nullable();
            $table->string('link', 100)->collation('latin1_swedish_ci')->nullable();
            $table->enum('status', ['y', 'n'])->collation('latin1_swedish_ci');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu');
    }
}
