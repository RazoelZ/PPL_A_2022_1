<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('IRS', function (Blueprint $table) {
            $table->id();
            $table->string('userid');
            $table->string('semester')->nullable();
            $table->integer('jmlsks')->nullable();
            $table->binary('scansks')->nullable();
            $table->boolean('isverified')->default('0');
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
        Schema::dropIfExists('IRS');
    }
};
