<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Book::factory(4)->create();

        //
        // $data = [
        //     [
        //         'title' => 'Mencari bayangan',
        //         'author' => 'Nisrina',
        //         'release_date' => '2021-01-31',
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now(),
        //     ],
        //     [
        //         'title' => 'Ilusi bayangan',
        //         'author' => 'Farhan',
        //         'release_date' => '2016-02-10',
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now(),
        //     ],
        // ];

        // Book::insert($data);
    }
}
