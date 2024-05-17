<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /** Run the database seeds. */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        Page::insert([
            [
                'id' => 1,
                'title'            => 'home',
                'slug'             => 'home',
                'description'      => json_encode(['text' => $faker->paragraph]),
                'image'            => $faker->imageUrl(),
                'type'             => 'home',
                'meta_title'       => $faker->sentence,
                'meta_description' => $faker->sentence,
                'status'           => $faker->boolean ? 1 : 0, // 1 for true, 0 for false
                'settings'         => json_encode([
                    'is_title'       => true,
                    'is_description' => true,
                    'is_sliders'     => true,
                    'is_courses'     => false,
                    'is_partners'    => true,
                    'is_about'       => true,
                ], JSON_THROW_ON_ERROR),
            ],
            [
                'id' => 2,
                'title'            => 'contact',
                'slug'             => 'contact',
                'description'      => json_encode(['text' => $faker->paragraph]),
                'image'            => $faker->imageUrl(),
                'type'             => 'contact',
                'meta_title'       => $faker->sentence,
                'meta_description' => $faker->sentence,
                'status'           => $faker->boolean ? 1 : 0, // 1 for true, 0 for false
                'settings'         => json_encode([
                    'is_title'       => true,
                    'is_description' => true,
                    'is_sliders'     => true,
                    'is_courses'     => false,
                    'is_partners'    => true,
                    'is_about'       => true,
                ], JSON_THROW_ON_ERROR),
            ],
            [
                'id' => 3,
                'title'            => 'about',
                'slug'             => 'about',
                'description'      => json_encode(['text' => $faker->paragraph]),
                'image'            => $faker->imageUrl(),
                'type'             => 'about',
                'meta_title'       => $faker->sentence,
                'meta_description' => $faker->sentence,
                'status'           => $faker->boolean ? 1 : 0, // 1 for true, 0 for false
                'settings'         => json_encode([
                    'is_title'       => true,
                    'is_description' => true,
                    'is_about'       => true,
                ], JSON_THROW_ON_ERROR),
            ]
        ]);
    }
}
