<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**'
     * Run the database seeds.
     */
    public function run(): void
    {
        if(!User::where('email', 'rennan@email.com.br')->first()){
            User::create([
                'name' => 'Rennan',
                'email' => 'rennan@gmail.com.br',
                'password' => Hash::make('123456a', ['rounds'=> 12]),
            ]);
        }

        if(!User::where('email', 'rennan2@email.com.br')->first()){
            User::create([
                'name' => 'Rennan 2',
                'email' => 'rennan2@gmail.com.br',
                'password' => Hash::make('123456a', ['rounds'=> 12]),
            ]);
        }

        if(!User::where('email', 'rennan3@email.com.br')->first()){
            User::create([
                'name' => 'Rennan 3',
                'email' => 'rennan3@gmail.com.br',
                'password' => Hash::make('123456a', ['rounds'=> 12]),
            ]);
        }

        if(!User::where('email', 'rennan4@email.com.br')->first()){
            User::create([
                'name' => 'Rennan 4',
                'email' => 'rennan4@gmail.com.br',
                'password' => Hash::make('123456a', ['rounds'=> 12]),
            ]);
        }

        if(!User::where('email', 'rennan5@email.com.br')->first()){
            User::create([
                'name' => 'Rennan 5',
                'email' => 'rennan5@gmail.com.br',
                'password' => Hash::make('123456a', ['rounds'=> 12]),
            ]);
        }
    }
}
