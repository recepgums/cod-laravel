<?php

namespace App\Observers;

use App\Helpers\WhatsappHelper;
use App\Models\Order;

class OrderObserver
{
    /**
     * Handle the Order "created" event.
     */
    public function created(Order $order): void
    {
        if ($order->is_done) {
            WhatsappHelper::sendMessage(
                $order->phone,"Merhaba ". $order->name . ", \n\n Siparişinizi aldık: \n\n"
                . $order->products. "\n\n Toplam: " . $order->total_price . "TL \n\n Siparişinizi onaylıyor musunuz?"
            );
        }
    }

    /**
     * Handle the Order "updated" event.
     */
    public function updated(Order $order): void
    {
        if (!$order->getOriginal('is_done') && $order->is_done) {
            WhatsappHelper::sendMessage(
                $order->phone,"Merhaba ". $order->name . ", \n\n Siparişinizi aldık: \n\n"
                . $order->products. "\n\n Toplam: " . $order->total_price . "TL \n\n Siparişinizi onaylıyor musunuz?"
            );
        }
    }

    /**
     * Handle the Order "deleted" event.
     */
    public function deleted(Order $order): void
    {
        //
    }

    /**
     * Handle the Order "restored" event.
     */
    public function restored(Order $order): void
    {
        //
    }

    /**
     * Handle the Order "force deleted" event.
     */
    public function forceDeleted(Order $order): void
    {
        //
    }
}
