<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTblPages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id()->unsigned(false);
            $table->string('slug', 500)->collation('latin1_swedish_ci');
            $table->string('judul', 100)->collation('latin1_swedish_ci');
            $table->text('content')->collation('latin1_swedish_ci');
            $table->string('keyword', 500)->collation('latin1_swedish_ci');
            $table->string('description', 270)->collation('latin1_swedish_ci');
            $table->string('status', 10)->collation('latin1_swedish_ci');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
