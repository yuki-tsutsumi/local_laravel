<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePriceTaxiesTable extends Migration
{

    public $timestamps = false;

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('price_taxies', function (Blueprint $table) {
            $table->id();
            $table->integer('tax')->comment('消費税率');
            $table->dateTime('start_at')->comment('開始日');
            $table->dateTime('end_at')->nullable()->comment('終了日');
            $table->tinyInteger('del_flag')->nullable()->comment('有効・無効');
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
        Schema::dropIfExists('price_taxies');
    }
}
