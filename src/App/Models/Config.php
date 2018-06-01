<?php

namespace Laracore\Admin\App\Models;

use Illuminate\Database\Eloquent\Model;
use Laracore\Core\App\Models\Model as LaracoreModel;

class Config extends Model
{
    use LaracoreModel;
    public $table = 'admin_configs';

    public $timestamps = false;
}
