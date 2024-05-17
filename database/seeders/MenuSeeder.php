<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /** Run the database seeds. */
    public function run(): void
    {
        Menu::create([
            'name'       => 'Home',
            'label'      => 'Home',
            'url'        => '/',
            'type'       => 'link',
            'placement'  => 'header',
            'sort_order' => 1,
            'parent_id'  => null,
            'new_window' => false,
        ]);

        Menu::create([
            'name'       => 'Discussions',
            'label'      => 'Discussions',
            'url'        => '/discussions',
            'type'       => 'link',
            'placement'  => 'header',
            'sort_order' => 1,
            'parent_id'  => null,
            'new_window' => false,
        ]);

        Menu::create([
            'name'       => 'Forum',
            'label'      => 'forum',
            'url'        => '/forum',
            'type'       => 'link',
            'placement'  => 'header',
            'sort_order' => 1,
            'parent_id'  => null,
            'new_window' => false,
        ]);

        Menu::create([
            'name'       => 'Articles',
            'label'      => 'Articles',
            'url'        => '/articles',
            'type'       => 'link',
            'placement'  => 'header',
            'sort_order' => 2,
            'parent_id'  => null,
            'new_window' => false,
        ]);

        Menu::create([
            'name'       => 'Courses',
            'label'      => 'Cours',
            'url'        => '/courses',
            'type'       => 'link',
            'placement'  => 'header',
            'sort_order' => 2,
            'parent_id'  => null,
            'new_window' => false,
        ]);
    }
}
