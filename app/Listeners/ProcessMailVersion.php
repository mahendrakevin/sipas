<?php

namespace App\Listeners;

use App\Models\MailVersion;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ProcessMailVersion
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
    public function handle($event)
    {
        $mail_version = MailVersion::create([
            'mail_id' => $event->mail->id,
            'file_id' => $event->file->id
        ]);

        $event->mail_version = $mail_version;
    }
}
