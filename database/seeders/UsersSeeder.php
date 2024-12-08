<?php

namespace Database\Seeders;

use App\Models\Equip;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (Equip::all() as $equip){
            User::create([
                'name' => 'Manager  '.$equip->nom,
                'email' => $equip->nom.'@manager.com',
                'password' => Hash::make('1234'),
                'role' => 'manager',
                'equip_id' => $equip->id,
            ]);
        }
    }
}
