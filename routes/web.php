<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('chat');
});

Route::get('/users', function () {
    $users = \App\Models\User::all();

    return $users;
});

Route::get('/create-kb', function () {
    $knowledgebase = \App\Models\Knowledgebase::create([
        'title' => 'Test KB',
        'content' => 'Test KB content',
        'embedding' => [0.1, 0.2, 0.3],
        'created_by' => 1,
    ]);

    \App\Events\KnowledgebaseCreated::dispatch($knowledgebase);

    //    event(new \App\Events\KnowledgebaseCreated($knowledgebase));

    return 'OK2';
});
