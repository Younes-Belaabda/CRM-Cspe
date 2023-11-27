<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Database\Seeders\ContratsSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $roles = ['admin' , 'agent'];
        foreach($roles as $role){
            Role::create(['name' => $role]);
        }

        // Admin
        $admin = User::create([
            'name' => 'COMDISTRIB',
            'email' => 'comdistrib1@gmail.com',
            'password' => bcrypt('Comdistrib2022')
        ]);
        $admin->assignRole('admin');

        // Agent 1
        $admin = User::create([
            'name' => 'AGENT1',
            'email' => 'agent1@gmail.com',
            'password' => bcrypt('123456789')
        ]);
        $admin->assignRole('agent');
        // Agent 2
        $admin = User::create([
            'name' => 'AGENT2',
            'email' => 'agent2@gmail.com',
            'password' => bcrypt('123456789')
        ]);
        $admin->assignRole('agent');

        $this->call(ContratsSeeder::class);

    }
}
