<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBalancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('balances', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->decimal('total_earnings', 8, 2)->nullable();
            $table->decimal('total_withdrawal', 8, 2)->nullable();
            $table->decimal('total_orders', 8, 2)->nullable();
            $table->decimal('total_balance_extra', 8, 2)->nullable();
            $table->decimal('final_balance', 8, 2)->nullable();
            $table->string('timeStamps');
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
        Schema::dropIfExists('balances');
    }
}
