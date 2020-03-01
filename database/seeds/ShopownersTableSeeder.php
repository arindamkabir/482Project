<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class ShopownersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shopowners')->insert([
            'shop_id' => Int::random(10),
            'location' => 'Dhanmondi',
            'shop_name' => 'amazing store',
 
    }
}
