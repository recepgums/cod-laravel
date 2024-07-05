<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Neighborhood;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function getDistrictsByCity($cityId)
    {
        $districts = District::where('city_id', $cityId)->get();
        return response()->json($districts);
    }

    public function getNeighborhoodsByDistrict($districtId)
    {
        $neighborhoods = Neighborhood::where('district_id', $districtId)->get();
        return response()->json($neighborhoods);
    }

    public function store(Request $request)
    {
        $order = Order::create([
            'name' => $request->get('name'),
            'phone' => $request->get('phone'),
            'city_id' => $request->get('city_id'),
            'district_id' => $request->get('district_id'),
            'neighborhood_id' => $request->get('neighborhood_id'),
            'address' => $request->get('address'),
            'products' => $request->get('quantity') . " X ". $request->get('products'),
            'total_price' => $request->get('total_price') ?? '0',
            'is_done' => false,
        ]);

        return redirect()->route('upsell', ['order' => $order]);
    }

    public function upsell(Order $order)
    {
        return view('upsell', ['order' => $order]);
    }
    public function thankyou(Order $order)
    {
        return view('thankyou', ['order' => $order]);
    }

    public function addToCart(Order $order, Request $request)
    {
        $newProducts = $order->products . "\n 1 X " . $request->get('product_name');

        $price = floatval($request->get('product_price'));
        $totalPrice = floatval($order->total_price) + $price;

        $totalPriceStr = (string)$totalPrice;

        $order->update([
            'products' => $newProducts,
            'total_price' => $totalPriceStr,
        ]);
        return response()->json(['message' => 'Sepete eklendi']);
    }
    public function finishOrder(Order $order)
    {
        $order->update(['is_done' => true]);

        return redirect()->route('thankyou', ['order' => $order]);
    }
}
