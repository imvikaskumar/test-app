<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $booksArr = ["Pilot Of Dawn", "Vulture Of The Prison", "Boys Of The Mountain", "Lions Of Reality", "Kings And Wolves", "Swindlers And Creators", "Revenge Of Stone", "Culling Of The Great", "Learning From The North", "Hunted By The Champions"];
        for ($i=0; $i <10 ; $i++) {
            Book::create([
                "unique_id" => "#". time().$i,
                "book_name" => $booksArr[$i]
            ]);
        }
    }
}