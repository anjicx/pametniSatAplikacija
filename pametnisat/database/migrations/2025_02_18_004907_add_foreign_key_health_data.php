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
        Schema::table('health_data', function (Blueprint $table) {
            
            $table->foreignId('user_id')->constrained('user')->onDelete('cascade');  

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('health_data', function (Blueprint $table) {
            $table->dropForeign(['user_id']);

        });
    }
};
