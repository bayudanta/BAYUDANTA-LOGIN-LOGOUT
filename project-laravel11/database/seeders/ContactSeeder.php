<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    public function run(): void
    {
        Contact::create([
            'name' => 'Adi Bengkel',
            'phone' => '08123456789',
        ]);

        Contact::create([
            'name' => 'Yanti Kopling',
            'phone' => '08987654321',
        ]);
    }
}
