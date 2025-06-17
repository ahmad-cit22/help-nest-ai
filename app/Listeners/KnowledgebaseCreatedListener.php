<?php

namespace App\Listeners;

use App\Events\KnowledgebaseCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;

class KnowledgebaseCreatedListener implements ShouldQueue
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
    public function handle(KnowledgebaseCreated $data): void
    {
        $knowledgebase = $data->knowledgebase;

        sleep(5);

        Log::info('New knowledgebase created: #'.$knowledgebase->id.' - '.$knowledgebase->title);
    }
}
