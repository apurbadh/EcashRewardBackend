<?php

namespace Database\Seeders;

use App\Models\AdminUser;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => "Bipin Rijal",
            'email' => 'bipin@ecashreward.com',
            'password' => Hash::make('alpha-vega')
        ]);

        $admin = new AdminUser();
        $admin->user_id = $user->id;
        $admin->save();
    }
}
