<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;

class HsrQuizSeeder extends Seeder
{
    public function run(): void
    {
         Question::where('quiz_id', 1)->delete();

        $questions = [
            [
                'quiz_id' => 1,
                'question_text' => 'Whose the Aeon of Destruction?',
                'option_a' => 'Nanook',
                'option_b' => 'Aha',
                'option_c' => 'IX',
                'option_d' => 'Tayzzyronth',
                'correct_answer' => 'Nanook',
            ],
            [
                'quiz_id' => 1,
                'question_text' => 'Whats Aventurine’s REAL name?',
                'option_a' => 'Sunday',
                'option_b' => 'Khaslana',
                'option_c' => 'Bob',
                'option_d' => 'Kakavasha',
                'correct_answer' => 'Kakavesha',
            ],
            [
                'quiz_id' => 1,
                'question_text' => 'What’s Phainon’s REAL name?',
                'option_a' => 'Khaslana',
                'option_b' => 'Kakavasha',
                'option_c' => 'Mydeimos',
                'option_d' => 'Steve',
                'correct_answer' => 'Khaslana',
            ],
            [
                'quiz_id' => 1,
                'question_text' => 'Whose Sunday’s sibling?',
                'option_a' => 'Robin',
                'option_b' => 'Raven',
                'option_c' => 'Tit',
                'option_d' => 'Crane',
                'correct_answer' => 'Robin',
            ],
            [
                'quiz_id' => 1,
                'question_text' => 'Who is the general of the Xianzhou Luofu?',
                'option_a' => 'Jing Yuan',
                'option_b' => 'Fe xiao',
                'option_c' => 'Lingsha',
                'option_d' => 'Yingxing',
                'correct_answer' => 'Jing Yuan',
            ],
            [
                'quiz_id' => 1,
                'question_text' => 'How many playable paths are there right now?',
                'option_a' => '18',
                'option_b' => '8',
                'option_c' => '6',
                'option_d' => '14',
                'correct_answer' => '8',
            ],
            [
                'quiz_id' => 1,
                'question_text' => 'Whose the Aeon of Abundance?',
                'option_a' => 'Yaoshi',
                'option_b' => 'IX',
                'option_c' => 'Fuli',
                'option_d' => 'Nanook',
                'correct_answer' => 'Yaoshi',
            ],
            [
                'quiz_id' => 1,
                'question_text' => 'Who is the demigod of Passage?',
                'option_a' => 'Tribios',
                'option_b' => 'Mydei',
                'option_c' => 'Aglea',
                'option_d' => 'Castorice',
                'correct_answer' => 'Tribios',
            ],
            [
                'quiz_id' => 1,
                'question_text' => 'Where does the MC first wake up in?',
                'option_a' => 'Penacony',
                'option_b' => 'Herta Space Station',
                'option_c' => 'Amphoreus',
                'option_d' => 'Belobog',
                'correct_answer' => 'Herta Space Station',
            ],
            [
                'quiz_id' => 1,
                'question_text' => 'Who is the leader of the Stellaron Hunters?',
                'option_a' => 'Stella',
                'option_b' => 'Blade',
                'option_c' => 'Kafka',
                'option_d' => 'Elio',
                'correct_answer' => 'Elio',
            ],
            [
                'quiz_id' => 1,
                'question_text' => 'Why is March 7th named that?',
                'option_a' => 'Born with it',
                'option_b' => 'The day she was found',
                'option_c' => 'Just cus',
                'option_d' => 'Her birthday',
                'correct_answer' => 'The day she was found',
            ],
            [
                'quiz_id' => 1,
                'question_text' => 'Who is the true leader of Wildfire?',
                'option_a' => 'Oleg',
                'option_b' => 'Natasha',
                'option_c' => 'Seele',
                'option_d' => 'Hook',
                'correct_answer' => 'Natasha',
            ],
            [
                'quiz_id' => 1,
                'question_text' => 'Where does Aventurine work?',
                'option_a' => 'Stellaron Hunters',
                'option_b' => 'IPC',
                'option_c' => 'The Family',
                'option_d' => 'Genius Society',
                'correct_answer' => 'IPC',
            ],
            [
                'quiz_id' => 1,
                'question_text' => 'Who is the #83 of the Genius Society?',
                'option_a' => 'Zander',
                'option_b' => 'The Herta',
                'option_c' => 'Ruan Mei',
                'option_d' => 'Polka Kakamond',
                'correct_answer' => 'The Herta',
            ],
            [
                'quiz_id' => 1,
                'question_text' => 'Who is the creator of HSR?',
                'option_a' => 'Hoyoverse',
                'option_b' => 'Kuro Games',
                'option_c' => 'Infold',
                'option_d' => 'Riot Games',
                'correct_answer' => 'Hoyoverse',
            ],
        ];

        foreach ($questions as $question) {
            Question::create($question);
        }
    }
}
