<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function addlike(Request $request)
    {
        // dd($request);
        Like::create($request->all());
        return redirect()->back();
    }
}
