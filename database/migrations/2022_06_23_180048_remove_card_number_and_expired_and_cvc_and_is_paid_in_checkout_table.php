<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveCardNumberAndExpiredAndCvcAndIsPaidInCheckoutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('checkouts', function (Blueprint $table) {
            $table->dropColumn([
                'card_number', 'is_paid', 'expired', 'cvc'
            ]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('checkouts', function (Blueprint $table) {
            $table->string('card_number', 20)->nullable();
            $table->boolean('is_paid')->default(false);
            $table->date('expired')->nullable();
            $table->string('cvc', 3)->nullable();
        });
    }
}
