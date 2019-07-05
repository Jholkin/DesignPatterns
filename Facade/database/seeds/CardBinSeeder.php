<?php

use Illuminate\Database\Seeder;
use Faker\Factory;

class CardBinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        DB::table('_card_bin')->insert([
            'prefix' => '123',
            'company' => 'VISA',
            'cardType' => 'Credit',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ]);

        DB::table('_card_bin')->insert([
            'prefix' => '234',
            'company' => 'MASTERCARD',
            'cardType' => 'Debit',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ]);

        DB::table('_card_bin')->insert([
            'prefix' => '123',
            'company' => 'AMEX',
            'cardType' => 'Credit',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ]);
    }
}
