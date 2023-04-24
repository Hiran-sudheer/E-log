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
        Schema::create('e-log-user-log-details', function (Blueprint $table) {
            $table->id();
            $table->text('user_id');
            $table->timestamp('login_time');
            $table->timestamp('logout_time')->nullable();
            //$table->boolvalue('exception');
            $table->text('exception')->default(0)->change()->nullable();
            $table->string('total_hours');
            $table->rememberToken();
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
        Schema::dropIfExists('e-log-user-log-details');
    }
};
