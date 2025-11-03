<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;

class JojosQuizSeeder extends Seeder
{
    public function run(): void
    {
         Question::where('quiz_id', 5)->delete();

        $questions = [
            [
                'quiz_id' => 5,
                'question_text' => 'Who is Giorno Giovanni’s father?
',
                'option_a' => 'Dio',
                'option_b' => 'Jotaro',
                'option_c' => 'Joseph',
                'option_d' => 'Polnareff',
                'correct_answer' => 'Dio',
            ],
            [
                'quiz_id' => 5,
                'question_text' => 'What is Jotaro Kujo’s Stand called?',
                'option_a' => 'Star Platinum',
                'option_b' => 'The World',
                'option_c' => 'Crazy Diamond',
                'option_d' => 'Silver Chariot',
                'correct_answer' => 'Star Platinum',
            ],
            [
                'quiz_id' => 5,
                'question_text' => 'Who was the Stardust Crusaders pet dog?',
                'option_a' => 'Iggy',
                'option_b' => 'Oggy',
                'option_c' => 'Steve',
                'option_d' => 'Tedd',
                'correct_answer' => 'Iggy',
            ],
            [
                'quiz_id' => 5,
                'question_text' => "Who is JOtaro's child?",
                'option_a' => 'Jolyne',
                'option_b' => 'Joseph',
                'option_c' => 'Josuke',
                'option_d' => 'Johnathan',
                'correct_answer' => 'Jolyne',
            ],
            [
                'quiz_id' => 5,
                'question_text' => 'Who is the JoBro of part 1?',
                'option_a' => 'Speedwagon',
                'option_b' => 'Dio',
                'option_c' => 'Kakyoin',
                'option_d' => 'Abbachio',
                'correct_answer' => 'Speedwagon',
            ],
            [
                'quiz_id' => 5,
                'question_text' => 'What organization helps the Joestars with intel and resources?',
                'option_a' => 'Speedwagon foundation',
                'option_b' => 'Joestar group',
                'option_c' => 'The Mafia',
                'option_d' => 'The Nazis',
                'correct_answer' => '8',
            ],
            [
                'quiz_id' => 5,
                'question_text' => 'Why is Dio a vampire?',
                'option_a' => 'Born that way',
                'option_b' => 'Bitten by a vampire',
                'option_c' => 'Ancient relic',
                'option_d' => 'Ritual',
                'correct_answer' => 'Ancient relic',
            ],
            [
                'quiz_id' => 5,
                'question_text' => 'Who is the french man?',
                'option_a' => 'Polnareff',
                'option_b' => 'Kakyoin',
                'option_c' => 'Iggy',
                'option_d' => 'Avdol',
                'correct_answer' => 'Polnareff',
            ],
            [
                'quiz_id' => 5,
                'question_text' => 'What nationality is Jotaro?',
                'option_a' => 'Japanese-Italian-British',
                'option_b' => 'Japanese-Nigerian-British',
                'option_c' => 'Japanese-French-British',
                'option_d' => 'Japanese-British-Korean',
                'correct_answer' => 'Japanese-Italian-British',
            ],
            [
                'quiz_id' => 5,
                'question_text' => 'What is Jotaro in relation to Jotaro?',
                'option_a' => 'His nephew',
                'option_b' => 'His uncle',
                'option_c' => 'His brother',
                'option_d' => 'His cousin',
                'correct_answer' => 'His uncle',
            ],
            [
                'quiz_id' => 5,
                'question_text' => "Who is Josuke's JoBro",
                'option_a' => 'Okuyasu',
                'option_b' => 'Koichi',
                'option_c' => 'Kira',
                'option_d' => 'Rohan',
                'correct_answer' => 'Okuyasu',
            ],
            [
                'quiz_id' => 5,
                'question_text' => 'Why is Johnny a paraplegic?',
                'option_a' => 'Got shot',
                'option_b' => 'Fell off a horse',
                'option_c' => 'Born that way',
                'option_d' => 'Disease',
                'correct_answer' => 'Got shot',
            ],
            [
                'quiz_id' => 5,
                'question_text' => 'Why is Gyro participating in the race?',
                'option_a' => 'To become rich',
                'option_b' => 'To save a child',
                'option_c' => 'To boost his ego',
                'option_d' => 'To save his mother',
                'correct_answer' => 'IPC',
            ],
            [
                'quiz_id' => 5,
                'question_text' => "What are Kakyoin's earrings?",
                'option_a' => 'Strawberries',
                'option_b' => 'Cherries',
                'option_c' => 'Bananas',
                'option_d' => 'Tomatoes',
                'correct_answer' => 'Cherries',
            ],
            [
                'quiz_id' => 5,
                'question_text' => "What is Mista's biggest fear?",
                'option_a' => 'The number 4',
                'option_b' => 'Heights',
                'option_c' => 'The Dark',
                'option_d' => '67',
                'correct_answer' => 'The number 4',
            ],
        ];

        foreach ($questions as $question) {
            Question::create($question);
        }
    }
}
