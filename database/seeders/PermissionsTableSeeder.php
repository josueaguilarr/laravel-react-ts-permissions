<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            [
                'id' => 1,
                'title' => 'user_create',
            ],
            [
                'id' => 2,
                'title' => 'user_edit',
            ],
            [
                'id' => 3,
                'title' => 'user_destroy',
            ],
        ];

        Permission::insert($permissions);
    }
}
