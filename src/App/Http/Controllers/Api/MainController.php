<?php

namespace Laracore\Admin\App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    /** return  CoreCMF\Core\Builder\Main */
    public function __construct()
    {
    }
    public function index()
    {
        return 'builderHtml';
    }
}
