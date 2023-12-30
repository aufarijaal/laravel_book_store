<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // \App\Models\Book::factory(100)->create();
        \App\Models\Book::all()->each(function ($book) {
            $book->slug = \Illuminate\Support\Str::slug($book->id . '-' . $book->title);
            $book->save();
        });
    }
}
