<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AuthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $row           = new User();
        $row->name     = 'Admin';
        $row->email    = 'info@admin.com';
        $row->password = bcrypt('12345678');
        $row->save();
    }
}
