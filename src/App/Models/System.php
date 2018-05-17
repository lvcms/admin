<?php

namespace Laracore\Admin\App\Models;

use Laracore\Core\App\Models\Model;

class System extends Model
{
    protected $config;

    public function setConfig($config)
    {
        $this->config = $config;
        return $this;
    }

    public function value($config)
    {
        return 'values';
    }
}
