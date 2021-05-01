<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->string('card_name')->nullable();;
            $table->string('name')->nullable();;
            $table->string('title')->nullable();;
            $table->string('position')->nullable();;
            $table->string('mobile')->nullable();;
            $table->string('fixed_line')->nullable();;
            $table->string('email')->nullable();;
            $table->string('website')->nullable();;
            $table->string('street_1')->nullable();;
            $table->string('street_2')->nullable();;
            $table->string('postal')->nullable();;
            $table->string('state')->nullable();;
            $table->string('country')->nullable();;
            $table->string('back_side_image')->nullable();;
            $table->string('your_photo')->nullable();;
            $table->string('logo')->nullable();;

            // additional 

            
            $table->string('mobile2')->nullable();
            // company date
            $table->string('company')->nullable();
            $table->string('department')->nullable();
            // second address 
            $table->string('street2_1')->nullable();
            $table->string('street2_2')->nullable();
            $table->string('city2')->nullable();
            $table->string('state2')->nullable();
            $table->string('fixed_line2')->nullable();
            $table->string('fax2')->nullable();


            // social 

            $table->string('facebook')->nullable();
            $table->string('linkedIn')->nullable();
            $table->string('twitter')->nullable();
            $table->string('skype')->nullable();
            $table->string('vimeo')->nullable();
            $table->string('youtube')->nullable();
            $table->string('instagram')->nullable();
            $table->string('weChat')->nullable();
            $table->string('tumblr')->nullable();
            $table->string('0ther')->nullable();


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
        Schema::dropIfExists('cards');
    }
}
