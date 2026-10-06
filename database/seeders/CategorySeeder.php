<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::create([
            'name' => 'Fiksi',
            'description' => 'Buku cerita fiksi dan novel',
        ]);
        Category::create([
            'name' => 'Non-Fiksi',
            'description' => 'Buku pengetahuan dan biografi',
        ]);
        Category::create([
            'name' => 'Teknologi',
            'description' => 'Buku pemrograman dan IT',
        ]);
    }
}