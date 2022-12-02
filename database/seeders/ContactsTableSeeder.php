<?php

namespace Database\Seeders;

use App\Models\Contacts;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contacts::factory()->count(34)->create();
    }
}
