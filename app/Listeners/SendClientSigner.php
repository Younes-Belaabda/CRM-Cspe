<?php

namespace App\Listeners;

use App\Events\ClientSigner;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendClientSigner
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(ClientSigner $event): void
    {
        // dd($event->contrat);
    }
}
