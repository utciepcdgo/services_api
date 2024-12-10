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
            $table->string('postal_code');
            $table->string('settlement_name');
            $table->string('settlement_type');
            $table->foreignIdFor(Municipality::class)->constrained('municipalities');
            $table->foreignIdFor(State::class)->constrained('states');
        });
    }

    public function down()
    {
        Schema::dropIfExists('postal_codes');
    }
};
