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
        Schema::create('job_listings', function (Blueprint $table) {
            $table->id();

            $table->integer('job_id');
            $table->string('title');
            $table->string('type');
            $table->string('level');
            $table->string('tags');
            $table->longText('summary');
            $table->longText('description');

            $table->string('logo')->nullable(); 
            $table->string('company');
            $table->string('location');
            $table->string('email');
            $table->string('website');

            
            $table->foreignId('user_id');
            $table->boolean('is_active')->default(1);
            // $table->boolean('is_active');
            $table->timestamps();
        });

        // updating table
        // Schema::table('job_listings', function (Blueprint $table) {
        //     $table->boolean('is_active')->default(1);
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_listings');
    }
};
