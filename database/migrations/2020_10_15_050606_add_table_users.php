<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTableUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->string('name', 191)->collation('utf8mb4_unicode_ci');
            $table->string('username', 191)->collation('utf8mb4_unicode_ci');
            $table->string('email', 191)->collation('utf8mb4_unicode_ci')->index();
            $table->text('address')->collation('utf8mb4_unicode_ci')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('hak_akses', 50)->collation('utf8mb4_unicode_ci')->nullable();
            $table->char('phone', 13)->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('password', 191)->collation('utf8mb4_unicode_ci');
            $table->string('remember_token', 100)->collation('utf8mb4_unicode_ci')->nullable();
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
        Schema::dropIfExists('users');
    }
}
