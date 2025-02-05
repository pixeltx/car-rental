<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create(['key' => 'phone_number', 'value' => '+1234567890']);
        Setting::create(['key' => 'email_address', 'value' => 'info@example.com']);
        Setting::create(['key' => 'tiktok_link', 'value' => 'https://tiktok.com/example']);
        Setting::create(['key' => 'twitter_link', 'value' => 'https://twitter.com/example']);
        Setting::create(['key' => 'instagram_link', 'value' => 'https://instagram.com/example']);
    }
}
