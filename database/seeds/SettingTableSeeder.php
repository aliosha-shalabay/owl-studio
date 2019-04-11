<?php

use App\Http\Node\Model\SettingNodeModel;
use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (SettingNodeModel::first() === null) {

            $newSetting = SettingNodeModel::create([
                'seo_title' => 'SEO Title',
                'seo_desc' => 'SEO Description',
                'seo_keywords' => 'SEO Keywords',
                'seo_text' => 'SEO text',
                'phone' => '+380970453578',
                'email' => 'aliosha.shalabay@gmail.com',
                'telegram' => '@telegram',
                'facebook' => 'facebook',
                'instagram' => 'instagram',
                'address_uk' => 'address_uk',
                'address_en' => 'address_en',
                'created_at' => date('Y-m-d h:m:s'),
                'updated_at' => date('Y-m-d h:m:s'),
            ]);

        }
    }
}
