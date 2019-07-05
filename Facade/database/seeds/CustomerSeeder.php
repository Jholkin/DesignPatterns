<?php

use Illuminate\Database\Seeder;
use Faker\Factory;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        DB::table('_customer')->insert([
            'name' => "Jhil Palacios",
            'saldo' => "500",
            'status' => "ACTIVO",
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ]);

        DB::table('_customer')->insert([
            'name' => "Juan Peréz",
            'saldo' => "300",
            'status' => "SUSPENDIDO",
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ]);

        DB::table('_customer')->insert([
            'name' => "Adriano Lopéz",
            'saldo' => "100",
            'status' => "ACTIVO",
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ]);

        DB::table('_customer')->insert([
            'name' => "Melisa Mares",
            'saldo' => "100",
            'status' => "BAJA",
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ]);
    }
}
