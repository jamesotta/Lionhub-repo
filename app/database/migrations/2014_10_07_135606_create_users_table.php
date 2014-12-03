<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('users', function ($table)
        {
            $allowed_genders = array('Male', 'Female'); $table->increments('id'); $table->
                string('Name', 50); $table->string('State', 50); $table->enum('Gender', $allowed_genders);
                $table->date('dob'); $table->unsignedBigInteger('phone'); $table->string('Email',
                50)->unique(); $table->string('Username', 50)->unique(); $table->string('Password',
                50); $table->string('Password_temp', 50); $table->string('Carrier'); $table->
                string('product_developing'); $table->string('web_profficient'); $table->string
                ('Moblie_applications'); $table->text('hopes_aspirations'); $table->text('why_member');
                $table->text('web_technologies'); $table->text('activation_code'); $table->
                unsignedInteger("active"); $table->timestamps(); $table->softDeletes(); }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::drop('users');
    }

}
