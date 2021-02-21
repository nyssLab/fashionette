<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use TCG\Voyager\Models\Setting;
use TCG\Voyager\Traits\Seedable;

class DatabaseSeeder extends Seeder {
    use Seedable;

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        $user = User::create([
            'name'           => 'Admin',
            'email'          => 'admin@fashionette.test',
            'password'       => bcrypt('secret'),
            'remember_token' => Str::random(60),
            'avatar'         => 'users/default.png',
            'role_id'        => 1,
        ]);
        $user->save();

        $setting = $this->findSetting('site.items_per_page');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Number of items per page',
                'value'        => '16',
                'details'      => '',
                'type'         => 'text',
                'order'        => 1,
                'group'        => 'Site',
            ])->save();
        }
    }

    /**
     * @param $key
     * @return mixed
     */
    protected function findSetting($key) {
        return Setting::firstOrNew(['key' => $key]);
    }
}
