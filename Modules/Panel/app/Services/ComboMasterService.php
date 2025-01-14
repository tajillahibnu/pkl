<?php

namespace Modules\Panel\Services;

use App\Models\TahunAkademik;

class ComboMasterService
{

    public function tahun_pelajaran()
    {
        $data = TahunAkademik::select('year AS id', 'year AS name')->get();
        return $data->map(function ($item) {
            return [
                'id' => $item->id,
                'name' => ucwords($item->name)
            ];
        });
    }
}
