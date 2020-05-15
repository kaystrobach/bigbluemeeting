<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeetingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meetings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('access_code')->nullable();
            $table->tinyInteger('mute_on_join');
            $table->tinyInteger('require_moderator_approval');
            $table->tinyInteger('anyone_can_start')->default();
            $table->tinyInteger('all_join_moderator')->default();
            $table->tinyInteger('auto_join')->default();
            $table->string('url')->nullable();
            $table->text('attendee_password')->nullable();
            $table->unsignedBigInteger('user_id');

            $table->timestamps();

            // $table->string('attendee_password');
            //$table->string('moderator_password');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meetings');
    }
}
