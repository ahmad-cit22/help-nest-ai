<?php

namespace Database\Seeders;

use App\Models\Knowledgebase;
use Illuminate\Database\Seeder;

class KnowledgebaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Knowledgebase::factory(10)->create();
    }
}
