<?php

namespace App\Providers;

use App\Providers\NewFavoriteAdded;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendNewFavoriteNotification
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
    public function handle(NewFavoriteAdded $event): void
    {
        //
    }
}
