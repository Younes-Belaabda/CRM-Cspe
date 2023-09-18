<?php

namespace App\Events;

use App\Models\Contrat;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class ClientSigner implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public Contrat $contrat;

    /**
     * Create a new event instance.
     */
    public function __construct(Contrat $contrat)
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
            // new PrivateChannel('users.' . $this->contrat->user_id)
        ];
    }
}
