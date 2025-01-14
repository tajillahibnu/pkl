<?php

namespace Modules\Panel\Repositories\Setting;

use App\Models\ConfigApp as MainModel;
use App\Repositories\BaseRepository;

class AppRepository extends BaseRepository
{
    public function __construct(MainModel $model)
    {
        parent::__construct($model);
    }
}
