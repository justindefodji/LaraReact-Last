<?php

namespace Database\Seeders;

use App\Models\About;
use App\Models\Contact;
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
         Contact::factory(100)->create();
         About::factory(1)->create();
    }
}
