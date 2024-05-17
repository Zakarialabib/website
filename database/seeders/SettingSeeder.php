<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Settings;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /** @var array */
    protected $settings = [
        [
            'key'   => 'company_name',
            'value' => 'Zakaria Labib',
        ],
        [
            'key'   => 'site_title',
            'value' => 'Zakaria Labib',
        ],
        [
            'key'   => 'company_email_address',
            'value' => 'connect@zakarialabib.com',
        ],
        [
            'key'   => 'company_phone',
            'value' => '+212638041919',
        ],
        [
            'key'   => 'company_address',
            'value' => 'Casablanca, Maroc',
        ],
        [
            'key'   => 'company_tax',
            'value' => '123456789',
        ],
        [
            'key'   => 'site_logo',
            'value' => '',
        ],
        [
            'key'   => 'site_favicon',
            'value' => '',
        ],
        [
            'key'   => 'footer_copyright_text',
            'value' => '',
        ],
        [
            'key'   => 'seo_meta_title',
            'value' => 'Zakaria Labib',
        ],
        [
            'key'   => 'seo_meta_description',
            'value' => 'Zakaria Labib',
        ],
        [
            'key'   => 'social_facebook',
            'value' => '#',
        ],
        [
            'key'   => 'social_twitter',
            'value' => '#',
        ],
        [
            'key'   => 'social_tiktok',
            'value' => '#',
        ],
        [
            'key'   => 'social_instagram',
            'value' => '#',
        ],
        [
            'key'   => 'social_linkedin',
            'value' => '#',
        ],
        [
            'key'   => 'social_whatsapp',
            'value' => '#',
        ],
        [
            'key'   => 'head_tags',
            'value' => '',
        ],
        [
            'key'   => 'body_tags',
            'value' => '',
        ],
        [
            'key'   => 'header_bg_color',
            'value' => '#ffffff',
        ],
        [
            'key'   => 'footer_bg_color',
            'value' => '#ffffff',
        ],
        [
            'key'   => 'site_maintenance_message',
            'value' => 'Site is under maintenance',
        ],
        [
            'key'   => 'whatsapp_custom_message',
            'value' => "Salam, J'ai une Question/Demande d'nformation",
        ],
    ];

    /** Run the database seeds. */
    public function run(): void
    {
        foreach ($this->settings as $index => $setting) {
            $result = Settings::create($setting);

            if ( ! $result) {
                $this->command->info(sprintf('Insert failed at record %s.', $index));

                return;
            }
        }

        $this->command->info('Inserted '.count($this->settings).' records');
    }
}
