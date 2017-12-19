<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       \App\Setting::create([
       	'site_name' => "Laravel\'s Blog",
	       'contact_number' => '22 335 511 44',
	       'contact_email' => 'laravel@blog.com',
	       'address' => 'adressa 123 Sarajevo'
       ]);
    }
}
