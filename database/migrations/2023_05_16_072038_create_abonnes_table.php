<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('abonnes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom',100);
            $table->string('prenom',100);
            $table->integer('age');
            $table->char('sexe',1)->default('F');
            $table->string('profession',30);  
            $table->string('rue',30);
            $table->string('code_postal',10);
            $table->string('ville',30);
            $table->string('pays',20);
            $table->string('tel',20);
            $table->string('email',300);
            $table->unsignedInteger('id_motivation');
            $table->foreign('id_motivation')->references('id')->on('motivations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abonnes');
    }
};
