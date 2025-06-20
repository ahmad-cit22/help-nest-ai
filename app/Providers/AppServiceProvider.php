<?php

namespace App\Providers;

use App\Events\KnowledgebaseCreated;
use App\Listeners\KnowledgebaseCreatedListener;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Model::automaticallyEagerLoadRelationships();
        //        Event::listen(KnowledgebaseCreated::class, [KnowledgebaseCreatedListener::class, 'handle']);
    }
}
