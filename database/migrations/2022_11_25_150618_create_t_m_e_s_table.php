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
        Schema::create('t_m_e_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId("orga_groups_id")->constrained()->cascadeOnDelete();
            $table->string("ISSI");
            $table->string("short");
            $table->string("long");
            
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
        Schema::dropIfExists('t_m_e_s');
    }
};
