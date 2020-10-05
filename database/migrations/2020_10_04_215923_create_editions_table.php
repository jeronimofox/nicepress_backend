<?php

use Database\Helpers\LinkModel;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEditionsTable extends Migration
{
    use LinkModel;

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('editions', function (Blueprint $table) {
            $table->id();
            $this->linkModel($table, 'User', 'owner_id');
            $this->linkModel($table, 'EditionType', 'type_id');
            $this->linkModel($table, 'Team', 'team_id');
            $table->string('name');
            $table->longText('about');
            $table->string('logo')->nullable();
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
        Schema::dropIfExists('editions');
    }
}
