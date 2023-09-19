<?php

namespace App\Events;

use App\Models\ContratPlus;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class ClientSignerCspePlus implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public ContratPlus $contrat;
    /**
     * Create a new event instance.
     */
    public function __construct(ContratPlus $contrat)
    {
        $this->contrat = $contrat;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new Channel('demo-chan'),
        ];
    }
}
