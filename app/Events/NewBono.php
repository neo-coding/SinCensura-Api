<?php

namespace App\Events;
use App\Bono;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;

class NewBono implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $bono;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Bono $bono)
    {
        $this->bono = Bono::find($bono)->first();
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('bonos');
    }

    public function broadcastAs(){
        return 'new-bono';
    }
}
