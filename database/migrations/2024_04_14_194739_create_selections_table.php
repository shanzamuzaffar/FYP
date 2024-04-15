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
        Schema::create('selections', function (Blueprint $table) {
         $table->id();
            $table->string('title');
            $table->string('class_name');
            $table->string('group_member_1');
            $table->string('group_member_2');
            $table->string('group_member_3');

            $table->unsignedBigInteger('supervisor_id');

            $table->foreign('supervisor_id')->references('id')->on('supervisor')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('selections');
    }
};
