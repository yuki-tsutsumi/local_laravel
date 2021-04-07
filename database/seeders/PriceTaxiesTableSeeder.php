<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PriceTaxies;


class PriceTaxiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // テーブルのクリア
        \DB::table('price_taxies')->truncate();

        // 初期データ用意（列名をキーとする連想配列）
        $priceTax = ['tax' => 10,
                       'start_at' => '2021-01-01 12:00:00',
                       'end_at' => NULL,
                       'del_flag' => 0];

        // 登録
        PriceTaxies::create($priceTax);
    }
}
