<?php

namespace App\Http\Controllers\Frontend;

use App\Sport;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SportController extends Controller
{
    use MediaUploadingTrait;

    public function index(Request $request, $slug)
    {
        $sport = Sport::where('slug', $slug)->firstOrFail();
        return view('frontend.sport', compact('sport'));
    }
}
