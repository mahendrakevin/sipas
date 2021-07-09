<?php

namespace App\Events;

use App\Models\Mail;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;

class CreatedMailInProcess
{
    use Dispatchable, InteractsWithSockets, SerializesModels;


    public $mail;
    public $request;
    public $file;
    public $mail_version;
    public $mail_transaction;
    public $mail_transaction_log;

    /**
     * Create a new event instance.
     *
     * @return void
     */


    public function __construct(Mail $mail, Request $request)
    {
        $this->mail = $mail;
        $this->request = $request;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}