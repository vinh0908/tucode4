<?php

namespace App\Listeners;

use App\Events\TestEvent;
use App\Mail\OrderUpdateMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class TestDemoListener
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
     * @param  object  $event
     * @return void
     */
    public function handle(TestEvent $event)
    {
        $data['order_id'] = $event->data->id;
        $data['status'] = $event->data->status.'222222222222';

        Mail::to("nguyenlyhuuphuc@gmail.com")->send(new OrderUpdateMail($data));
    }
}
