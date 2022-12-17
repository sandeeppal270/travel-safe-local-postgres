<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ReportJourney;

class ReportJourneySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ReportJourney = new ReportJourney;
        $ReportJourney->app_user_id = "";
        $ReportJourney->message = "this is first message";
        $ReportJourney->email_id = "sandeeppal270@gmail.com";
        $ReportJourney->app_user_name = "sandeep pal";
        $ReportJourney->journey_image_attachment = "http://www.google.com/";
        $ReportJourney->start_location = "lucknow";
        $ReportJourney->destination_location = "kanpur";
        $ReportJourney->created_at = time();
        $ReportJourney->updated_at = time();
    }
}
