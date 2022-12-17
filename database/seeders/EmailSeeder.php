<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Email;

class EmailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $email = new Email;

        $email->app_user = "sandeep";
        $email->contact_person = "pal";
        $email->email_id = "sandeeppal270@gmail.com";
        $email->address = "lko";
        $email->image_attachment = "http://www.example.com/images/";
        $email->city_name = "lucknow";
        $email->latitude = "91.1236587";
        $email->longitude = "92.1234678";
        $email->created_at = time();
        $email->updated_at = time();
        $email->save();

        
    }
}
