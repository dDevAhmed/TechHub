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
            $table->string('tags');
            $table->string('company');
            $table->string('location');
            $table->string('type');
            $table->string('level');
            $table->string('email');
            $table->string('website');
            $table->longText('description');
            $table->string('post_by');
            // $table->boolean('is_active')->default(1);
            $table->boolean('is_active');
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
