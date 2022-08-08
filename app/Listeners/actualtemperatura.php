<?php

namespace App\Listeners;

use App\Events\actualizartemperatura;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class actualtemperatura
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
     * @param  \App\Events\actualizartemperatura  $event
     * @return void
     */
    public function handle(actualizartemperatura $event)
    {
        broadcast(new actualizartemperatura("{$event->temperatura->descripcion} update ", 'success'));
    }
}
