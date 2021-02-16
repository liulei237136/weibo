<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::factory()->count(50)->create();

        $user = User::find(1);
        $user->name = 'liulei237136';
        $user->email = 'liulei237136@163.com';
        $user->save();
    }
}
