<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {



        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\User::factory()->create([
            'first_name' => 'First',
            'last_name'  => 'Last',
            'email' => 'test@example.com',
        ]);

        \App\Models\User::factory(10)->create();



        \App\Models\User::all()->each(function ($user) {
            $user->todos()->saveMany(\App\Models\Todo::factory(10)->make())->each(function ($todo) {
                $todo->tasks()->saveMany(\App\Models\TodoTask::factory(10)->make());
            });
        });
    }
}
