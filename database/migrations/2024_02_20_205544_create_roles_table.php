<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('identifiant', 50);
            $table->string('nom_role', 50);
            $table->timestamps();
        });

        // Ajout des enregistrements par défaut
        DB::table('roles')->insert([
            ['identifiant' => 'utilisateur', 'nom_role' => 'Utilisateur'],
            ['identifiant' => 'botaniste', 'nom_role' => 'Botaniste'],
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('roles');
    }
}