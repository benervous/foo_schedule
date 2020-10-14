<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $User = User::updateOrCreate(
            ['email'=>'dr.kurilets23@gmail.com'],
            [
                'name'=>'Valery',
                'password'=>bcrypt('12345'),
                'email'=>'dr.kurilets23@gmail.com'
            ]
        );
    }
}
