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
       /* if ($order->is_done && app()->environment('production')) {
            WhatsappHelper::sendMessage($order->phone,$order->getWhatsappMessage());
        }*/
    }

    /**
     * Handle the Order "updated" event.
     */
    public function updated(Order $order): void
    {
       /* if (!$order->getOriginal('is_done') && $order->is_done && app()->environment('production')) {
            WhatsappHelper::sendMessage($order->phone,$order->getWhatsappMessage());
        }*/
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
