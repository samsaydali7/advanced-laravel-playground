<?php

namespace App\Listeners;

use App\Events\OrderShipped;
use App\Mail\OrderShipped as OrderShippedMail;
use Illuminate\Support\Facades\Mail;

class SendOrderShippedMail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  OrderShipped  $event
     * @return void
     */
    public function handle(OrderShipped $event)
    {
        //
        Mail::to('samsaydali@gmail.com')->send(new OrderShippedMail($event->orderNumber));
    }
}
