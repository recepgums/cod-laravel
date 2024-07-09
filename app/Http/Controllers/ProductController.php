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
    public function showKumSanati()
    {
        $cities = Cache::remember('cities', 14460,function (){
            return City::all();
        });

        return view('layouts/only_images_app',[
            'cities' => $cities,
        ]);
    }
    public function showPaspas()
    {
        $cities = Cache::remember('cities', 14460,function (){
            return City::all();
        });

        return view('products.paspas',[
            'cities' => $cities,
        ]);
    }
}
