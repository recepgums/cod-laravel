<?php

namespace App\Console\Commands;

use App\Helpers\FestHelper;
use App\Models\Order;
use Illuminate\Console\Command;

class GetOrderStatusCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'order:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update order status';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $orders = Order::where('created_at', '>=', now()->subDays(20))
            ->whereNotNull('barcode')
            ->whereHas('tags', function ($tagQuery) {
                $tagQuery->where('name', 'fest');
            })->get();

        $festHelper = new FestHelper();
        foreach ($orders as $order){
            $festResponse = $festHelper->getStatusByBarcode($order->barcode);

            if ($festResponse->statu_no == "10"){
                //kargo teslim oldu
            }

            if (count($festResponse?->hareketler ?? []) > 0){
                //kargo teslim alindi
                //daha once kargo takip mesaji atilmadiysa kargo linkli mesaj at
            }


        }
    }
}
