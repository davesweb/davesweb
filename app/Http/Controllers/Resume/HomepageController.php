<?php

namespace App\Http\Controllers\Resume;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;

class HomepageController extends Controller
{
    public function index(): Renderable
    {
        return view('layouts.resume');
    }
}
