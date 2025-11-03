<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;

class FnafQuizSeeder extends Seeder
{
    public function run(): void
    {
         Question::where('quiz_id', 4)->delete();

        $questions = [
            [
                'quiz_id' => 4,
                'question_text' => 'Who is the creator of FNAF?
',
                'option_a' => 'Scott Cawthon',
                'option_b' => 'William Afton',
                'option_c' => 'Henry Emily',
                'option_d' => 'Arthur Morgan',
                'correct_answer' => 'Scott Cawthon',
            ],
            [
                'quiz_id' => 4,
                'question_text' => 'What year did the Bite happen?',
                'option_a' => '93',
                'option_b' => '83',
                'option_c' => '87',
                'option_d' => '80',
                'correct_answer' => '83',
            ],
            [
                'quiz_id' => 4,
                'question_text' => 'Who delivers the phone calls in the original games?',
                'option_a' => 'Phone Guy',
                'option_b' => 'Mike Schmidt',
                'option_c' => 'Jeremy Fitzgerald',
                'option_d' => 'Michael Afton',
                'correct_answer' => 'Iggy',
            ],
            [
                'quiz_id' => 4,
                'question_text' => "Which animatronic is known for hiding in the Pirate Cove?",
                'option_a' => 'Freddy',
                'option_b' => 'Foxy',
                'option_c' => 'Golden Freddy',
                'option_d' => 'Chica',
                'correct_answer' => 'Foxy',
            ],
            [
                'quiz_id' => 4,
                'question_text' => 'What year was the first FNAF game released?',
                'option_a' => '2014',
                'option_b' => '2001',
                'option_c' => '2015',
                'option_d' => '2013',
                'correct_answer' => '2014',
            ],
            [
                'quiz_id' => 4,
                'question_text' => 'In FNAF 2, what is the only real animatronic you face?',
                'option_a' => 'Springtrap',
                'option_b' => 'Shadow Freddy',
                'option_c' => 'Phantom Foxy',
                'option_d' => 'Phantom Chica',
                'correct_answer' => 'Springtrap',
            ],
            [
                'quiz_id' => 4,
                'question_text' => "Which animatronic's catchphrase is 'It's me'?",
                'option_a' => 'Golden Freddy',
                'option_b' => 'Toy Chica',
                'option_c' => 'Funtime Foxy',
                'option_d' => 'Withered Bonnie',
                'correct_answer' => 'Golden Freddy',
            ],
            [
                'quiz_id' => 4,
                'question_text' => 'Who eats your batteries in FNAF 2?',
                'option_a' => 'BB',
                'option_b' => 'Balloon Girl',
                'option_c' => 'Toy Bonnie',
                'option_d' => 'Mangle',
                'correct_answer' => 'BB',
            ],
            [
                'quiz_id' => 4,
                'question_text' => 'Which animatronic is made of broken parts and named the "Radio Demon"',
                'option_a' => 'None',
                'option_b' => 'Mangle',
                'option_c' => 'Molten Freddy',
                'option_d' => 'Ennard',
                'correct_answer' => 'None',
            ],
            [
                'quiz_id' => 4,
                'question_text' => 'Which game introduces Nightmare animatronics?',
                'option_a' => 'FNAF 3',
                'option_b' => 'FNAF 4',
                'option_c' => 'FNAF World',
                'option_d' => 'FNAF 2',
                'correct_answer' => 'FNAF 4',
            ],
            [
                'quiz_id' => 4,
                'question_text' => "WHo is the Purple figure seen in the minigames?",
                'option_a' => 'William Afton',
                'option_b' => 'Michael Afton',
                'option_c' => 'Bonnie',
                'option_d' => 'Shadow freddy',
                'correct_answer' => 'William Afton',
            ],
            [
                'quiz_id' => 4,
                'question_text' => 'What is the goal in FNAF World?',
                'option_a' => 'RPG Adventure',
                'option_b' => 'Run a pizzeria',
                'option_c' => 'Survive 5 nights',
                'option_d' => 'Fight springtrap',
                'correct_answer' => 'RPG Adventure',
            ],
            [
                'quiz_id' => 4,
                'question_text' => 'Which animatronic is controlled by multiple childrens souls?',
                'option_a' => 'Ennard',
                'option_b' => 'Springtrap',
                'option_c' => 'Freddy',
                'option_d' => 'Mangle',
                'correct_answer' => 'Ennard',
            ],
            [
                'quiz_id' => 4,
                'question_text' => "Who is ofthen called 'the Crying Child'? ",
                'option_a' => 'Evan Afton',
                'option_b' => 'Jeremy Fitzgerald',
                'option_c' => 'Cassidy',
                'option_d' => 'Michael Schmidt',
                'correct_answer' => 'Evan Afton',
            ],
            [
                'quiz_id' => 4,
                'question_text' => "What year is FNAF:SB set in?",
                'option_a' => '2020',
                'option_b' => '2023',
                'option_c' => '2030',
                'option_d' => '2019',
                'correct_answer' => '2023',
            ],
        ];

        foreach ($questions as $question) {
            Question::create($question);
        }
    }
}
