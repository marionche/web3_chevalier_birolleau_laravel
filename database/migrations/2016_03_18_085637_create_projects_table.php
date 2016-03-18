<?php


use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('name_author');
            $table->string('adress');
            $table->string('telephone');
            $table->string('suivi');
            $table->string('adresse');
            $table->string('telephones');
            $table->string('fiche');
            $table->string('type_project');
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
        Schema::drop('projects');
    }
}
