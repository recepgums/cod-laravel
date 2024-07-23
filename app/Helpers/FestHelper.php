<?php

namespace App\Helpers;

use App\Models\Order;
use Illuminate\Support\Facades\Http;

class FestHelper
{
    protected $base_url = "http://185.241.103.28:90/restapi/client";
    public function getProvinces()
    {
        $response = Http::get($this->base_url.'/province');

        if ($response->successful()){
            return json_decode($response->body())?->result;
        }
    }

    public function getCountiesByProvinceId($provinceId)
    {
        $response = Http::get($this->base_url.'/county/'.$provinceId);

        if ($response->successful()){
            return json_decode($response->body())?->result;
        }
    }

    public function getDistrictByProvinceAndCountyId($provinceId,$countyId)
    {
        $response = Http::get($this->base_url.'/district/'.$provinceId.'/'.$countyId);

        if ($response->successful()){
            return json_decode($response->body())?->result;
        }
    }

    public function storeConsignment(Order $order)
    {

        $response = Http::withHeaders([
            'Authorization'=>'5KORmDz3wpjNGB6s79rUtPAHbh01QfJg4yCMIdna',
            'From' => 'trendygoods@festcargo.com'
        ])->post($this->base_url.'/consignment/add',[
            'customer' => $order->name,
            'province_name' => $order->city?->name,//maybe id
            'county_name' => $order->district?->name,//maybe id
            'district' => $order->neighborhood?->name,//maybe id
            'address' => $order->address,
            'telephone' => $order->phone,
            'branch_code' => '790',
            'amount' => number_format(floatval($order->total_price), 2, '.', ''),
            'currency_name' =>  "Türk Lirası",
            'summary' =>  $order->products,
            'sender_note' => "Müşteriyi mutlaka arayın",
            'quantity' => 1,
            'consignment_type_id' => 2,
            'amount_type_id' => 6,
            'barcode' => '',
        ]);

        if ($response->successful()){
            return json_decode($response->body())?->result;
        }
    }
    public function updateConsignment(Order $order)
    {
        $response = Http::withHeaders([
            'Authorization'=>'5KORmDz3wpjNGB6s79rUtPAHbh01QfJg4yCMIdna',
            'From' => 'trendygoods@festcargo.com'
        ])->put($this->base_url.'/consignment/edit/'.$order->barcode,[
            'customer' => $order->name,
            'province_name' => $order->city?->name,
            'county_name' => $order->district?->name,
            'district' => $order->neighborhood?->name,
            'address' => $order->address,
            'amount' => number_format(floatval($order->total_price), 2, '.', ''),
            'currency_name' =>  "Türk Lirası",
            'summary' =>  $order->products,
            'sender_note' => "Müşteriyi mutlaka arayın",
            'quantity' => 1,
            'consignment_type_id' => 2,
            'amount_type_id' => 6,
        ]);

        if ($response->successful()){
            return json_decode($response->body())?->result;
        }

        dd($response->body());
    }
    public function deleteConsignment(Order $order)
    {

        $response = Http::withHeaders([
            'Authorization'=>'5KORmDz3wpjNGB6s79rUtPAHbh01QfJg4yCMIdna',
            'From' => 'trendygoods@festcargo.com'
        ])->delete($this->base_url.'/consignment/delete/'.$order->barcode);


        if ($response->successful()){
            return json_decode($response->body())?->result;
        }

        dd($response->body());
    }
}
