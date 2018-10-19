<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class BackendController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $limit =5;

    public function __construct()
    {
        $this->middleware('auth');
    }
}
