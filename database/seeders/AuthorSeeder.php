<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $authors = [
            ["name" => "Stephen King", "dob" => "1947-09-21", "nationality" => "American"],
            ["name" => "J.K. Rowling", "dob" => "1965-07-31", "nationality" => "British"],
            ["name" => "Agatha Christie", "dob" => "1890-09-15", "nationality" => "British"],
            ["name" => "George R.R. Martin", "dob" => "1948-09-20", "nationality" => "American"],
            ["name" => "J.R.R. Tolkien", "dob" => "1892-01-03", "nationality" => "British"],
            ["name" => "Jane Austen", "dob" => "1775-12-16", "nationality" => "British"],
            ["name" => "Mark Twain", "dob" => "1835-11-30", "nationality" => "American"],
            ["name" => "Charles Dickens", "dob" => "1812-02-07", "nationality" => "British"],
            ["name" => "Leo Tolstoy", "dob" => "1828-09-09", "nationality" => "Russian"],
            ["name" => "William Shakespeare", "dob" => "1564-04-23", "nationality" => "British"],
            ["name" => "Ernest Hemingway", "dob" => "1899-07-21", "nationality" => "American"],
            ["name" => "Virginia Woolf", "dob" => "1882-01-25", "nationality" => "British"],
            ["name" => "Toni Morrison", "dob" => "1931-02-18", "nationality" => "American"],
            ["name" => "Haruki Murakami", "dob" => "1949-01-12", "nationality" => "Japanese"],
            ["name" => "Gabriel García Márquez", "dob" => "1927-03-06", "nationality" => "Colombian"],
            ["name" => "Fyodor Dostoevsky", "dob" => "1821-11-11", "nationality" => "Russian"],
            ["name" => "Dan Brown", "dob" => "1964-06-22", "nationality" => "American"],
            ["name" => "Roald Dahl", "dob" => "1916-09-13", "nationality" => "British"],
            ["name" => "J.D. Salinger", "dob" => "1919-01-01", "nationality" => "American"],
            ["name" => "H.G. Wells", "dob" => "1866-09-21", "nationality" => "British"],
            ["name" => "Emily Dickinson", "dob" => "1830-12-10", "nationality" => "American"],
            ["name" => "Edgar Allan Poe", "dob" => "1809-01-19", "nationality" => "American"],
            ["name" => "Herman Melville", "dob" => "1819-08-01", "nationality" => "American"],
            ["name" => "Kurt Vonnegut", "dob" => "1922-11-11", "nationality" => "American"],
            ["name" => "Miguel de Cervantes", "dob" => "1547-09-29", "nationality" => "Spanish"],
            ["name" => "John Steinbeck", "dob" => "1902-02-27", "nationality" => "American"],
            ["name" => "George Orwell", "dob" => "1903-06-25", "nationality" => "British"],
            ["name" => "F. Scott Fitzgerald", "dob" => "1896-09-24", "nationality" => "American"],
            ["name" => "Oscar Wilde", "dob" => "1854-10-16", "nationality" => "Irish"],
            ["name" => "Rabindranath Tagore", "dob" => "1861-05-07", "nationality" => "Indian"]
        ];

        // \App\Models\Author::create()
    }
}
