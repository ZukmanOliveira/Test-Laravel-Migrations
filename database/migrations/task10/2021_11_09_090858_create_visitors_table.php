<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // TASK: edit this migration so country_id would allow NULL values
        Schema::create('visitors', function (Blueprint $table) {
            $table->id();            
            $table->unsignedBigInteger('country_id');
            $table->string('ip_address');
            $table->timestamps();
        });
        
        Schema::table('visitors', function(Blueprint $table){
            $table->foreign('country_id')->references('id')->on('countries');
            $table->unsignedBigInteger('country_id')->nullable()->change();
        });
        

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visitors');
    }
}
