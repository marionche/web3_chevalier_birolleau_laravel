<?php
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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('name_author');
            $table->string('adress');
            $table->string('tel');
            $table->string('suivi');
            $table->string('adress2');
            $table->string('tel2');
            $table->string('fiche');
            $table->string('type_projet');
            $table->string('contexte');
            $table->string('demande');
            $table->string('objectifs');
            $table->string('contraintes');
            
            
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
        Schema::drop('users');
    }
}
