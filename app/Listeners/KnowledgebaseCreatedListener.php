<?php

namespace App\Listeners;

use App\Events\KnowledgebaseCreated;
use Illuminate\Support\Facades\Log;

class KnowledgebaseCreatedListener
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

        Log::info('New knowledgebase created: #' . $knowledgebase->id . ' - ' . $knowledgebase->title);
    }
}
