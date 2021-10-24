<?php

namespace App\Http\Controllers\Resume;

use App\Models\Resume\Resume;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;

class HomepageController extends Controller
{
    public function index(): Renderable
    {
        $resume = Resume::query()->where('slug', '=', 'dave-lemmens')->firstOrFail();

        return view('layouts.resume', [
            'resume' => $resume,
        ]);
    }
}
