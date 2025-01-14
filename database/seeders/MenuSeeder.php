<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $no = 1;
        $aArrMenu = [
            'dashboard',
            'setting',
            'headNav',
        ];
        for ($i = 1; $i <= count($aArrMenu); $i++) {
            $menuNumber = 1;
            $this->{$aArrMenu[$i - 1]}($i, $menuNumber);
            $menuNumber++;
        }
    }

    private function dashboard($id, $menuNumber)
    {

        $save['id']    = $id;
        $save['name']  = 'Dashboard';
        $save['type']  = 'main';
        $save['slug']   = 'dashboard_~|role|~';
        $save['url']   = 'dashboard';
        $save['view_path']  = 'dashboard/~|role|~';
        $save['view_file']  = 'default';
        $save['level'] = '0';
        $save['menu_order'] = $menuNumber;
        $save['middlewares'] = json_encode(['auth']);
        Menu::create($save);
    }

    private function setting($id, $menuNumber)
    {
        $dd = $id;
        $save['id']    = $id;
        $save['name']  = 'Setting';
        $save['slug']   = 'setting';
        $save['url']   = 'setting';
        $save['level'] = '0';
        $save['type']  = 'main';
        $save['menu_order'] = $menuNumber;
        Menu::create($save);

        $dd = $dd + 1;
        $save['id']         = $id.$dd;
        $save['parent_id']  = $id;
        $save['name']       = 'Aplikasi';
        $save['slug']        = 'config_app';
        $save['url']        = 'config_app';
        $save['level']      = '1';
        $save['type']       = 'main';
        $save['menu_order'] = $dd;
        $save['view_path']      = 'setting/app/';
        $save['view_file']      = 'default';
        Menu::create($save);

        $dd = $dd + 1;
        $save['id']         = $id.$dd;
        $save['parent_id']  = $id;
        $save['name']       = 'Sekolah';
        $save['slug']        = 'config_kurikulum';
        $save['url']        = 'config_kurikulum';
        $save['level']      = '1';
        $save['type']       = 'main';
        $save['menu_order'] = $dd;
        $save['view_path']  = 'setting/kurikulum/';
        $save['view_file']  = 'default';
        Menu::create($save);
    }

    private function headNav($id, $menuNumber)
    {
        $dd = $id;
        $save['id']    = $id;
        $save['name']  = 'Profile';
        $save['type']  = 'head';
        $save['slug']   = 'profile_~|role|~';
        $save['url']   = 'profile';
        $save['view_path']  = 'biodata/~|role|~';
        $save['view_file']  = 'default';
        $save['level'] = '0';
        $save['menu_order'] = $menuNumber;
        Menu::create($save);
        $dd = $dd + 1;

        // $save['id']    = $id.$dd;
        // $save['name']  = 'Profile';
        // $save['type']  = 'head';
        // $save['slug']   = 'profile_~|role|~';
        // $save['url']   = 'profile';
        // $save['view_path']  = 'biodata/~|role|~';
        // $save['view_file']  = 'default';
        // $save['level'] = '0';
        // $save['menu_order'] = $menuNumber;
        // Menu::create($save);
    }
}
