<?php
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [ 'name' => 'Ayon', 'email' => 'smunt@munni.com', 'password' => Hash::make('123456'), 'role' => '2', 'contact' => '1234567878', 'created_at' => date('Y-m-d H:i:s')],
            [ 'name' => 'Munni', 'email' => 'munty@munni.com', 'password' => Hash::make('123456'), 'role' => '2', 'contact' => '1234567878', 'created_at' => date('Y-m-d H:i:s')],
        ]);
        DB::table('shop_owners')->insert([
            [ 'user_id' => '1', 'location' => 'Dhanmondi', 'shop_name' => 'Shwapno'],
            [ 'user_id' => '2', 'location' => 'Bashundhara', 'shop_name' => 'Meena Bazar'],
        ]);
    }
}
