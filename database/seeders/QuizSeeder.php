<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Quiz;

class QuizSeeder extends Seeder
{
  
    public function run(): void
    {
        $quizzes = [
            ['title' => 'Honkai Star Rail', 'description' => 'Quiz about the game Honkai Star Rail.'],
            ['title' => 'Genshin Impact', 'description' => 'Quiz about the game Genshin Impact.'],
            ['title' => 'Dinosaurs', 'description' => 'All about prehistoric creatures.'],
            ['title' => 'Five Nights at Freddy\'s', 'description' => 'Trivia on the FNAF series.'],
            ['title' => 'JoJo\'s Bizarre Adventure', 'description' => 'Questions on JoJo\'s Bizarre Adventure.'],

        ];

        foreach ($quizzes as $q) {
            Quiz::create($q);
        }
    }
}
