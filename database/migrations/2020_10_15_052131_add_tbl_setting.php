<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTblSetting extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setting', function (Blueprint $table) {
            $table->id()->unsigned(false);
            $table->integer('idadm')->nullable();
            $table->text('googlecode')->collation('latin1_swedish_ci')->nullable();
            $table->string('judul', 75)->collation('latin1_swedish_ci')->nullable();
            $table->string('deskripsi', 200)->collation('latin1_swedish_ci')->nullable();
            $table->string('logo', 200)->collation('latin1_swedish_ci')->nullable();
            $table->string('alamat', 100)->collation('latin1_swedish_ci')->nullable();
            $table->string('telp', 12)->collation('latin1_swedish_ci')->nullable();
            $table->string('telp2', 15)->collation('latin1_swedish_ci')->nullable();
            $table->string('email', 50)->collation('latin1_swedish_ci')->nullable();
            $table->text('metatag')->collation('latin1_swedish_ci')->nullable();
            $table->text('footer')->collation('latin1_swedish_ci')->nullable();
            $table->text('fb')->collation('latin1_swedish_ci')->nullable();
            $table->text('twitter')->collation('latin1_swedish_ci')->nullable();
            $table->string('google', 100)->collation('latin1_swedish_ci')->nullable();
            $table->string('youtube', 100)->collation('latin1_swedish_ci')->nullable();
            $table->text('linked')->collation('latin1_swedish_ci')->nullable();
            $table->text('metadesc')->collation('latin1_swedish_ci')->nullable();
            $table->text('metakey')->collation('latin1_swedish_ci')->nullable();
            $table->string('maps', 600)->collation('latin1_swedish_ci')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('setting');
    }
}
