<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Pgvector\Laravel\Vector;

class Knowledgebase extends Model
{
    /** @use HasFactory<\Database\Factories\KnowledgebaseFactory> */
    use HasFactory;

    protected $casts = [
        'embedding' => Vector::class
    ];
}
