<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        DB::table('videos')->insert([
            'slug' => 'taylor-swift-blank-space',
            'source_id' => 'e-ORhEE9VVg',
            'source' => 'youtube',
            'status' => 'public',
            'title' => 'Taylor Swift - Blank Space',
            'description' => '',
            'image' => 'https://i.ytimg.com/vi/e-ORhEE9VVg/maxresdefault.jpg',
            'url' => 'https://www.youtube.com/v/e-ORhEE9VVg'
        ]);

        DB::table('videos')->insert([
            'slug' => 'taylor-swift-shake-it-off',
            'source_id' => 'nfWlot6h_JM',
            'source' => 'youtube',
            'status' => 'public',
            'title' => 'Taylor Swift - Shake It Off',
            'description' => 'Taylor’s new release 1989 is Available Now featuring the hit single “Shake It Off” and her latest single “Blank Space”.',
            'image' => 'https://i.ytimg.com/vi/nfWlot6h_JM/hqdefault.jpg',
            'url' => 'http://www.youtube.com/v/nfWlot6h_JM'
        ]);

        DB::table('videos')->insert([
            'slug' => 'meghan-trainor-all-about-that-bass',
            'source_id' => '7PCkvCPvDXk',
            'source' => 'youtube',
            'status' => 'public',
            'title' => 'Meghan Trainor - All About That Bass',
            'description' => '',
            'image' => 'https://i.ytimg.com/vi/7PCkvCPvDXk/maxresdefault.jpg',
            'url' => 'http://www.youtube.com/v/7PCkvCPvDXk'
        ]);

        DB::table('videos')->insert([
            'slug' => 'mark-ronson-uptown-funk-ft-bruno-mars',
            'source_id' => 'OPf0YbXqDm0',
            'source' => 'youtube',
            'status' => 'public',
            'title' => 'Mark Ronson - Uptown Funk ft. Bruno Mars',
            'description' => 'Mark Ronson – Uptown Funk ft. Bruno Mars From the album Uptown',
            'image' => 'https://i.ytimg.com/vi/OPf0YbXqDm0/hqdefault.jpg',
            'url' => 'http://www.youtube.com/v/OPf0YbXqDm0'
        ]);

        DB::table('videos')->insert([
            'slug' => 'ellie-goulding-love-me-like-you-do',
            'source_id' => 'AJtDXIazrMo',
            'source' => 'youtube',
            'status' => 'public',
            'title' => 'Ellie Goulding - Love Me Like You Do',
            'description' => '',
            'image' => 'https://i.ytimg.com/vi/AJtDXIazrMo/maxresdefault.jpg',
            'url' => 'http://www.youtube.com/v/AJtDXIazrMo'
        ]);

        DB::table('videos')->insert([
            'slug' => 'ed-sheeran-thinking-out-loud',
            'source_id' => 'lp-EO5I60KA',
            'source' => 'youtube',
            'status' => 'public',
            'title' => 'Ed Sheeran - Thinking Out Loud',
            'description' => '',
            'image' => 'https://i.ytimg.com/vi/lp-EO5I60KA/maxresdefault.jpg',
            'url' => 'http://www.youtube.com/v/lp-EO5I60KA'
        ]);

        DB::table('videos')->insert([
            'slug' => 'taylor-swift-style',
            'source_id' => '-CmadmM5cOk',
            'source' => 'youtube',
            'status' => 'public',
            'title' => 'Taylor Swift - Style',
            'description' => '',
            'image' => 'https://i.ytimg.com/vi/-CmadmM5cOk/maxresdefault.jpg',
            'url' => 'http://www.youtube.com/v/-CmadmM5cOk'
        ]);

        DB::table('videos')->insert([
            'slug' => 'maroon-5-sugar',
            'source_id' => '09R8_2nJtjg',
            'source' => 'youtube',
            'status' => 'public',
            'title' => 'Maroon 5 - Sugar',
            'description' => '',
            'image' => 'https://i.ytimg.com/vi/09R8_2nJtjg/hqdefault.jpg',
            'url' => 'http://www.youtube.com/v/09R8_2nJtjg'
        ]);

        DB::table('videos')->insert([
            'slug' => 'sia-chandelier',
            'source_id' => '2vjPBrBU-TM',
            'source' => 'youtube',
            'status' => 'public',
            'title' => 'Sia - Chandelier',
            'description' => '',
            'image' => 'https://i.ytimg.com/vi/2vjPBrBU-TM/maxresdefault.jpg',
            'url' => 'http://www.youtube.com/v/2vjPBrBU-TM'
        ]);

        DB::table('videos')->insert([
            'slug' => 'meghan-trainor-lips-are-movin',
            'source_id' => 'qDc_5zpBj7s',
            'source' => 'youtube',
            'status' => 'public',
            'title' => 'Meghan Trainor - Lips Are Movin',
            'description' => '',
            'image' => 'https://i.ytimg.com/vi/qDc_5zpBj7s/maxresdefault.jpg',
            'url' => 'http://www.youtube.com/v/qDc_5zpBj7s'
        ]);

        DB::table('videos')->insert([
            'slug' => 'ariana-grande-break-free-ft-zedd',
            'source_id' => 'L8eRzOYhLuw',
            'source' => 'youtube',
            'status' => 'public',
            'title' => 'Ariana Grande - Break Free ft. Zedd',
            'description' => '',
            'image' => 'https://i.ytimg.com/vi/L8eRzOYhLuw/maxresdefault.jpg',
            'url' => 'http://www.youtube.com/v/L8eRzOYhLuw'
        ]);

        DB::table('videos')->insert([
            'slug' => 'jessie-j-ariana-grande-nicki-minaj-bang-bang',
            'source_id' => '0HDdjwpPM3Y',
            'source' => 'youtube',
            'status' => 'public',
            'title' => 'Jessie J, Ariana Grande, Nicki Minaj - Bang Bang',
            'description' => '',
            'image' => 'https://i.ytimg.com/vi/0HDdjwpPM3Y/hqdefault.jpg',
            'url' => 'http://www.youtube.com/v/0HDdjwpPM3Y'
        ]);

        DB::table('videos')->insert([
            'slug' => 'ariana-grande-the-weeknd-love-me-harder',
            'source_id' => 'g5qU7p7yOY8',
            'source' => 'youtube',
            'status' => 'public',
            'title' => 'Ariana Grande, The Weeknd - Love Me Harder',
            'description' => '',
            'image' => 'https://i.ytimg.com/vi/g5qU7p7yOY8/maxresdefault.jpg',
            'url' => 'http://www.youtube.com/v/g5qU7p7yOY8'
        ]);

        DB::table('videos')->insert([
            'slug' => 'magic-rude',
            'source_id' => 'PIh2xe4jnpk',
            'source' => 'youtube',
            'status' => 'public',
            'title' => 'MAGIC! - Rude',
            'description' => '',
            'image' => 'https://i.ytimg.com/vi/PIh2xe4jnpk/maxresdefault.jpg',
            'url' => 'http://www.youtube.com/v/PIh2xe4jnpk'
        ]);

        DB::table('videos')->insert([
            'slug' => 'selena-gomez-the-heart-wants-what-it-wants',
            'source_id' => 'ij_0p_6qTss',
            'source' => 'youtube',
            'status' => 'public',
            'title' => 'Selena Gomez - The Heart Wants What It Wants',
            'description' => '',
            'image' => 'https://i.ytimg.com/vi/ij_0p_6qTss/maxresdefault.jpg',
            'url' => 'http://www.youtube.com/v/ij_0p_6qTss'
        ]);

        DB::table('videos')->insert([
            'slug' => 'sam-smith-im-not-the-only-one',
            'source_id' => 'nCkpzqqog4k',
            'source' => 'youtube',
            'status' => 'public',
            'title' => 'Sam Smith - I\'m Not The Only One',
            'description' => '',
            'image' => 'https://i.ytimg.com/vi/nCkpzqqog4k/maxresdefault.jpg',
            'url' => 'http://www.youtube.com/v/nCkpzqqog4k'
        ]);

        DB::table('videos')->insert([
            'slug' => 'ariana-grande-problme-ft-iggy-azalea',
            'source_id' => 'iS1g8G_njx8',
            'source' => 'youtube',
            'status' => 'public',
            'title' => 'Ariana Grande - Problem ft. Iggy Azalea',
            'description' => '',
            'image' => 'https://i.ytimg.com/vi/iS1g8G_njx8/maxresdefault.jpg',
            'url' => 'http://www.youtube.com/v/iS1g8G_njx8'
        ]);

        DB::table('videos')->insert([
            'slug' => 'taylor-swift-bad-blood-ft-kendrick-lamar',
            'source_id' => 'QcIy9NiNbmo',
            'source' => 'youtube',
            'status' => 'public',
            'title' => 'Taylor Swift - Bad Blood ft. Kendrick Lamar',
            'description' => '',
            'image' => 'https://i.ytimg.com/vi/QcIy9NiNbmo/maxresdefault.jpg',
            'url' => 'http://www.youtube.com/v/QcIy9NiNbmo'
        ]);

        Model::reguard();
    }
}
