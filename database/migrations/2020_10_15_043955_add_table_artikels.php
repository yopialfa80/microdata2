<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTableArtikels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artikels', function (Blueprint $table) {
            $table->id()->unsigned(false);
            $table->integer('user_id');
            $table->integer('kategori_id');
            $table->tinyInteger('headlines');
            $table->tinyInteger('utama');
            $table->string('judul_artikel', 500)->collation('latin1_swedish_ci');
            $table->string('slug', 500)->collation('latin1_swedish_ci');
            $table->text('isi_artikel')->collation('latin1_swedish_ci');
            $table->string('img', 500)->collation('latin1_swedish_ci');
            $table->string('caption', 200)->collation('latin1_swedish_ci');
            $table->text('metakey')->collation('latin1_swedish_ci');
            $table->text('metadesc')->collation('latin1_swedish_ci');
            $table->date('tanggal');
            $table->integer('view');
            $table->text('tag')->collation('latin1_swedish_ci');
            $table->integer('parent');
            $table->dateTime('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artikels');
    }
}
