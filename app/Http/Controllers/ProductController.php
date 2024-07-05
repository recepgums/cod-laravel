<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Support\Facades\Cache;

class ProductController extends Controller
{
    public function show()
    {
        $cities = Cache::remember('cities', 14460,function (){
           return City::all();
        });

        return view('products.uzay-bulut-robotu',[
            'cities' => $cities,
        ]);
    }

    public function show2()
    {
        $cities = Cache::remember('cities', 14460,function (){
            return City::all();
        });

        return view('products.tak-cikar-lamba',[
            'cities' => $cities,
        ]);
    }
}
