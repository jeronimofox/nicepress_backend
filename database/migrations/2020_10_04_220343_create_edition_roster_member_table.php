<?php

use Database\Helpers\LinkModel;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEditionRosterMemberTable extends Migration
{
    use LinkModel;

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('edition_roster_member', function (Blueprint $table) {
            $table->id();
            $this->linkModel($table, 'Edition', 'edition_id');
            $this->linkModel($table, 'EditionRoster', 'roster_id');
            $this->linkModel($table, 'User', 'user_id');
            $table->string('role')->nullable();
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
        Schema::dropIfExists('edition_roster_member');
    }
}
