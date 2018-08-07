<?php

namespace App\Listeners;

use App\Events\ChatterAfterNewDiscussion;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class HandleNewDiscussion
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
     * @param  ChatterAfterNewDiscussion  $event
     * @return void
     */
    public function handle(ChatterAfterNewDiscussion $event)
    {
        //
    }
}
