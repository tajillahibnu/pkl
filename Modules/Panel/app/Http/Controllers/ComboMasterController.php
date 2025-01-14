<?php

namespace Modules\Panel\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Traits\ApiResponseTrait;
use Illuminate\Http\Request;
use Modules\Panel\Services\ComboMasterService;

class ComboMasterController extends Controller
{
    use ApiResponseTrait;
    protected $mainServices;
    public function __construct(ComboMasterService $mainServices)
    {
        $this->mainServices = $mainServices;
    }

    public function combo($tipe)
    {
        switch ($tipe) {
            case 'tahun-pelajaran':
                $data = $this->mainServices->tahun_pelajaran();
                return $this->apiResponse($data)->send();
                break;
            default:
                return response()->json(['error' => 'Tipe tidak valid'], 400);
        }

    }
}
