<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Section;
use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    /** Run the database seeders. */
    public function run(): void
    {
        Section::insert([
            [
                'id'             => 1,
                'title'          => 'Welcome to',
                'featured_title' => 'LiveLms',
                'subtitle'       => 'LiveLms',
                'label'          => 'LiveLms',
                'link'           => 'https://LiveLms.com/',
                'description'    => 'Features of this package and what it includes',
                'status'         => '1',
                'bg_color'       => '#effaeb',
                'text_color'     => 'black',
                'position'       => '1',
                'type'           => 'home',
            ],
            [
                'id'             => 2,
                'title'          => 'About us',
                'featured_title' => 'LiveLms',
                'subtitle'       => 'LiveLms',
                'label'          => 'LiveLms',
                'link'           => 'https://LiveLms.com/',
                'description'    => 'Features of this package and what it includes',
                'status'         => '1',
                'bg_color'       => '#effaeb',
                'text_color'     => 'black',
                'position'       => '1',
                'type'           => 'about',
            ],
            [
                'id'             => 3,
                'title'          => 'Contact',
                'featured_title' => 'LiveLms',
                'subtitle'       => 'LiveLms',
                'label'          => 'LiveLms',
                'link'           => 'https://LiveLms.com/',
                'description'    => 'Features of this package and what it includes',
                'status'         => '1',
                'bg_color'       => '#effaeb',
                'text_color'     => 'black',
                'position'       => '1',
                'type'           => 'contact',
            ],
            [
                'id'             => 4,
                'title'          => 'Outdoor Activity',
                'featured_title' => 'LiveLms',
                'subtitle'       => 'We have a wide range of outdoor activities for you to enjoy.',
                'label'          => 'Check out our outdoor activities',
                'link'           => 'https://LiveLms.com/',
                'description'    => 'Features of this package and what it includes',
                'status'         => '1',
                'bg_color'       => '#effaeb',
                'text_color'     => 'black',
                'position'       => '1',
                'type'           => 'activity',
            ],
            [
                'id'             => 5,
                'title'          => 'Workshop Activity',
                'featured_title' => 'LiveLms',
                'subtitle'       => 'We have a wide range of workshop activities for you to enjoy.',
                'label'          => 'Check out our workshop activities',
                'link'           => 'https://LiveLms.com/',
                'description'    => 'Features of this package and what it includes',
                'status'         => '1',
                'bg_color'       => '#effaeb',
                'text_color'     => 'black',
                'position'       => '1',
                'type'           => 'workshop',
            ],
            [
                'id'             => 6,
                'title'          => 'Packages',
                'featured_title' => 'LiveLms',
                'subtitle'       => 'We have a wide range of packages for you to enjoy.',
                'label'          => 'Check out our workshop activities',
                'link'           => 'https://LiveLms.com/',
                'description'    => 'Features of this package and what it includes',
                'status'         => '1',
                'bg_color'       => '#effaeb',
                'text_color'     => 'black',
                'position'       => '1',
                'type'           => 'package',
            ],
        ]);
    }
}
