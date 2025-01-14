<?php

namespace Modules\Panel\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Traits\ApiResponseTrait;
use Illuminate\Http\Request;
use Modules\Panel\Services\PageService;

class MenuController extends Controller
{
    use ApiResponseTrait;
    protected $mainService;
    public function __construct(PageService $mainService)
    {
        $this->mainService = $mainService;
    }

    public function getMenuPage(Request $request)
    {
        $dataService = $this->mainService->show($request);
        return $this->apiResponse($dataService)
            ->send();
    }
}
