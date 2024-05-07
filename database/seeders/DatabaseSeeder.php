<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $videos = [
            [
                'cover' => 1,
                'caption' => 'Zenith Travels Dubai Video 4',
                'photo_url' => 'zenith-travels-dubai-video-4.jpg',
                'video_url' => 'ce3SFFG4Iko',
            ],

            [
                'cover' => 1,
                'caption' => 'Israel November 2013 Video 030',
                'photo_url' => 'israel-november-2013-pix-and-video-030.jpg',
                'video_url' => '4G-1pL-Q_Pw',
            ],
            [
                'cover' => 1,
                'caption' => 'Kiddies Summer Tour',
                'photo_url' => 'kiddies-summer-tour.jpg',
                'video_url' => 'ztLIMG-ZcHs',
            ],
        ];

        $photos = [
            [
                'cover' => 1,
                'caption' => 'WALT DISNEY XMAS TOUR',
                'photo_url' => 'walt_disney_xmas_2013-tour/photo5.jpg',
                'target_url' => 'walt_disney_xmas_2013-tour',
            ],

            [
                'cover' => 1,
                'caption' => 'FRANCE TOUR',
                'photo_url' => 'france_2012_tour/photo4.jpg',
                'target_url' => 'france_2012_tour',
            ],
            [
                'cover' => 1,
                'caption' => 'FRANCE SUMMER TOUR',
                'photo_url' => 'france_summer_2010_tour/photo21.jpg',
                'target_url' => 'france_summer_2010_tour',
            ],
        ];

        collect($photos)->each(fn ($video) => DB::table('photos')->insert($video));
        collect($videos)->each(fn ($video) => DB::table('videos')->insert($video));

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
