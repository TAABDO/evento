<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $events = [
            [
                'title' => 'Event 1',
                'date' => '2024-03-01',
                'location' => 'Location 1',
                'description' => 'Description for Event 1',
                'availablePlaces' => 100,
                'status' => 'active',
                'isAuto' => true,
                'category_id' => 1,
            ],
            [
                'title' => 'Event 2',
                'date' => '2024-03-05',
                'location' => 'Location 2',
                'description' => 'Description for Event 2',
                'availablePlaces' => 50,
                'status' => 'inactive',
                'isAuto' => false,
                'category_id' => 2,
            ],
            // Add more events as needed
        ];

        foreach ($events as $event) {
            Event::create($event);
        }
    }
}
