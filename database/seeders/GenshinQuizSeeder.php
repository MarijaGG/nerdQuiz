<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;

class GenshinQuizSeeder extends Seeder
{
    public function run(): void
    {
        // Remove old questions for this quiz before seeding
        Question::where('quiz_id', 2)->delete();

        $questions = [
            [
                'quiz_id' => 2,
                'question_text' => 'How many elements are there?',
                'option_a' => '7',
                'option_b' => '1',
                'option_c' => '3',
                'option_d' => '10',
                'correct_answer' => '7',
            ],
            [
                'quiz_id' => 2,
                'question_text' => 'Who is the archon of Anemo?',
                'option_a' => 'Venti',
                'option_b' => 'Zhongli',
                'option_c' => 'Nahida',
                'option_d' => 'Mauvika',
                'correct_answer' => 'Venti',
            ],
            [
                'quiz_id' => 2,
                'question_text' => 'Who is Ei’s twin?',
                'option_a' => 'Yae Miko',
                'option_b' => 'Makoto',
                'option_c' => 'Kuki Shinobu',
                'option_d' => 'Itto',
                'correct_answer' => 'Makoto',
            ],
            [
                'quiz_id' => 2,
                'question_text' => 'Who is rank 1 of the Fatui Harbingers?',
                'option_a' => 'Capitano',
                'option_b' => 'Dottore',
                'option_c' => 'Childe',
                'option_d' => 'Columbina',
                'correct_answer' => 'Capitano',
            ],
            [
                'quiz_id' => 2,
                'question_text' => 'How old is Genshin turning in 2025?',
                'option_a' => '3',
                'option_b' => '5',
                'option_c' => '4',
                'option_d' => '6',
                'correct_answer' => '5',
            ],
            [
                'quiz_id' => 2,
                'question_text' => 'Who owns the Dawn Winery?',
                'option_a' => 'Diluc',
                'option_b' => 'Venti',
                'option_c' => 'Diona',
                'option_d' => 'Jean',
                'correct_answer' => 'Diluc',
            ],
            [
                'quiz_id' => 2,
                'question_text' => 'Who is the Grandmaster of the Knights of Favonius?',
                'option_a' => 'Varka',
                'option_b' => 'Jean',
                'option_c' => 'Noelle',
                'option_d' => 'Kaeya',
                'correct_answer' => 'Varka',
            ],
            [
                'quiz_id' => 2,
                'question_text' => 'Who is the General Mahamatra?',
                'option_a' => 'Cyno',
                'option_b' => 'Tighnari',
                'option_c' => 'Nahida',
                'option_d' => 'Alhaitham',
                'correct_answer' => 'Cyno',
            ],
            [
                'quiz_id' => 2,
                'question_text' => 'Who is the youngest of the Seven?',
                'option_a' => 'Nahida',
                'option_b' => 'Raiden',
                'option_c' => 'Zhongli',
                'option_d' => 'Mauvika',
                'correct_answer' => 'Nahida',
            ],
            [
                'quiz_id' => 2,
                'question_text' => 'Who is the administrator of the Fortress of Meropide?',
                'option_a' => 'Wriothesley',
                'option_b' => 'Furina',
                'option_c' => 'Neuvillette',
                'option_d' => 'Navia',
                'correct_answer' => 'Wriothesley',
            ],
            [
                'quiz_id' => 2,
                'question_text' => 'What is the name of the continent Genshin takes place in?',
                'option_a' => 'Teyvat',
                'option_b' => 'Europe',
                'option_c' => 'Irminsul',
                'option_d' => 'Fontaine',
                'correct_answer' => 'Teyvat',
            ],
            [
                'quiz_id' => 2,
                'question_text' => 'Who claims they worked with the Five Sinners of Khaenri’ah?',
                'option_a' => 'Varka',
                'option_b' => 'Alice',
                'option_c' => 'Dainsleif',
                'option_d' => 'Itto',
                'correct_answer' => 'Dainsleif',
            ],
            [
                'quiz_id' => 2,
                'question_text' => 'Who is Albedo’s creator?',
                'option_a' => 'Rhinedottir',
                'option_b' => 'Alice',
                'option_c' => 'Nicole',
                'option_d' => 'Andersdotter',
                'correct_answer' => 'Rhinedottir',
            ],
            [
                'quiz_id' => 2,
                'question_text' => 'Who is the Moonchant Envoy of the Frostmoon Scions?',
                'option_a' => 'Lauma',
                'option_b' => 'Flins',
                'option_c' => 'Aether',
                'option_d' => 'Columbina',
                'correct_answer' => 'Lauma',
            ],
            [
                'quiz_id' => 2,
                'question_text' => 'Who is known as “Father” by the House of the Hearth members?',
                'option_a' => 'Childe',
                'option_b' => 'Pierro',
                'option_c' => 'Arlecchino',
                'option_d' => 'Lyney',
                'correct_answer' => 'Arlecchino',
            ],
        ];

        foreach ($questions as $question) {
            Question::create($question);
        }
    }
}
