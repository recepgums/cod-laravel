<?php

namespace App\Http\Controllers;

use App\Models\Legacy;
use Illuminate\Http\Request;

class LegacyController extends Controller
{
    public function legalShow($key)
    {
        $legal = Legacy::where('key', $key)->first();

        if ($legal) {
            return response()->json(['html' => $legal->content,'title' => $legal->title]);
        } else {
            return response()->json(['title' => 'Error', 'html' => '<p>Content not found.</p>'], 404);
        }
    }
}
