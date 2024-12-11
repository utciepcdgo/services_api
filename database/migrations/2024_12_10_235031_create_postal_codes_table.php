<?php

use App\Models\Municipality;
use App\Models\State;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('postal_codes', function (Blueprint $table) {
            $table->id();
            $table->integer('postal_code');
            $table->string('settlement_name');
            $table->string('settlement_type');
            $table->string('municipality');
            $table->string('state');
            $table->string('city')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('postal_codes');
    }
};
