<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Form extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('form', function (Blueprint $table) {
            
                $table->string(name);
                $table->string(uname);
                $table->string(dob);
                $table->string(email);
                $table->string(tel);
                $table->string(nic);
                $table->string(male);
                $table->string(female);
                $table->string(other);
                $table->string(pass);
                $table->string(repass);
                $table->save();
                
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
        //
    }
}
