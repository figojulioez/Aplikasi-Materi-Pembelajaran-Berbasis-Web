<?php

use App\Models\User;
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
        Schema::create('soals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->boolean('mjdh')->nullable();
            $table->boolean('variabel')->nullable();
            $table->boolean('operator')->nullable();
            $table->boolean('kondisi')->nullable();
            $table->boolean('loop')->nullable();
            $table->boolean('fungsi')->nullable();
            $table->boolean('all')->nullable(); 
            $table->integer('nilai')->nullable();
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
        Schema::dropIfExists('soals');
    }
};
