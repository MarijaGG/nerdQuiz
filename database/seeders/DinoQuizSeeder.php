<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;

class DinosaursQuizSeeder extends Seeder
{
    public function run(): void
    {
        // Clean old quiz data
        Question::where('quiz_id', 3)->delete();

        $questions = [
            [
                'quiz_id' => 3,
                'question_text' => 'What was one of the largest saurapods ever discovered?',
                'option_a' => 'Gigantosaurus',
                'option_b' => 'T-rex',
                'option_c' => 'Argentinosaur',
                'option_d' => 'Titanosaurus',
                'correct_answer' => 'Argentinosaur',
            ],
            [
                'quiz_id' => 3,
                'question_text' => 'What dinosaur has had the most revisions and major controversies?',
                'option_a' => 'Tyrannosaurus Rex',
                'option_b' => 'Spinosaurus',
                'option_c' => 'Tricerotops',
                'option_d' => 'Aerodactyl',
                'correct_answer' => 'Spinosaurus',
            ],
            [
                'quiz_id' => 3,
                'question_text' => 'What is the largest marine reptile discovered?',
                'option_a' => 'Mosasaurus haffmani',
                'option_b' => 'Ichthyotitan severnesis',
                'option_c' => 'Pliosaurus macromerus',
                'option_d' => 'Dakosaurus Maximus',
                'correct_answer' => 'Pliosaurus macromerus',
            ],
            [
                'quiz_id' => 3,
                'question_text' => 'What is the largest airborne reptile?',
                'option_a' => 'Quetzalcoatlus',
                'option_b' => 'Azhdarchidae',
                'option_c' => 'Dimorphodon',
                'option_d' => 'Nemicolopterus crypticus',
                'correct_answer' => 'Quetzalcoatlus',
            ],
            [
                'quiz_id' => 3,
                'question_text' => 'What is the oldest known conclusive dinosaur fossil (as of 2024)?',
                'option_a' => 'Herrerasauridae',
                'option_b' => 'Tyrannosaurus Rex',
                'option_c' => 'Psittacosaurus',
                'option_d' => 'Nanotyrannus',
                'correct_answer' => 'Herrerasauridae',
            ],
            [
                'quiz_id' => 3,
                'question_text' => 'What dinosaur has 10000000000 teeth?',
                'option_a' => 'Nigersaur',
                'option_b' => 'Tyrannosaurs Rex',
                'option_c' => 'Dimophodon',
                'option_d' => 'Hadrosaurus',
                'correct_answer' => 'Nigersaur',
            ],
            [
                'quiz_id' => 3,
                'question_text' => 'What dinosaur has the potentially largest head to body ratio?',
                'option_a' => 'Archosaur Erythrosuchus',
                'option_b' => 'Tyrannosaurs Rex',
                'option_c' => 'Cotylorhynchus',
                'option_d' => 'Corythosaurus',
                'correct_answer' => 'Archosaur Erythrosuchus',
            ],
            [
                'quiz_id' => 3,
                'question_text' => 'What is the largest animal skull ever found?',
                'option_a' => 'Pentaceratops',
                'option_b' => 'Tyrannosaurs Rex',
                'option_c' => 'Troodon',
                'option_d' => 'Europasaurus',
                'correct_answer' => 'Tyrannosaurs Rex',
            ],
            [
                'quiz_id' => 3,
                'question_text' => 'What species was the most complete dinosaur fossil named “Sue”?',
                'option_a' => 'Tyrannosaurs Rex',
                'option_b' => 'Utahraptor',
                'option_c' => 'Spinosaurus',
                'option_d' => 'Gallimimus',
                'correct_answer' => 'Tyrannosaurs Rex',
            ],
            [
                'quiz_id' => 3,
                'question_text' => 'What does "dreadnoughtus" mean?',
                'option_a' => 'fears nothing',
                'option_b' => 'eats everything',
                'option_c' => 'fears everything',
                'option_d' => 'shellfish',
                'correct_answer' => 'fears nothing',
            ],
            [
                'quiz_id' => 3,
                'question_text' => 'What is the theorized bite force of a mosasaur?',
                'option_a' => '13,000 -16,000 pounds PSI',
                'option_b' => '4000 - 6000 pounds PSI',
                'option_c' => '1,000,000 pounds PSI',
                'option_d' => '700 - 1200 pounds PSI',
                'correct_answer' => '13,000 -16,000 pounds PSI',
            ],
            [
                'quiz_id' => 3,
                'question_text' => 'What species was Blue from Jurassic Park?',
                'option_a' => 'Genetically modified velociraptor',
                'option_b' => 'Velociraptor',
                'option_c' => 'Genetically modified utahraptor',
                'option_d' => 'Bambiraptor',
                'correct_answer' => 'Genetically modified velociraptor',
            ],
            [
                'quiz_id' => 3,
                'question_text' => 'What was the Stegosaur’s diet made up of?',
                'option_a' => 'Plants',
                'option_b' => 'Anything',
                'option_c' => 'Meat',
                'option_d' => 'Bugs',
                'correct_answer' => 'Plants',
            ],
            [
                'quiz_id' => 3,
                'question_text' => 'What dinosaur was mistaken for an “egg thief”, but then discovered to be an “egg guarder”?',
                'option_a' => 'Oviraptor',
                'option_b' => 'Compsognatus',
                'option_c' => 'Tyrannosaurus Rex',
                'option_d' => 'Archaeopteryx',
                'correct_answer' => 'Oviraptor',
            ],
            [
                'quiz_id' => 3,
                'question_text' => 'What species does the largest coprolite (poop fossil) “Barnum” belong to?',
                'option_a' => 'Tyrannosaurs Rex',
                'option_b' => 'Plesiosaurus',
                'option_c' => 'Patagotitan',
                'option_d' => 'Gigantosaurus',
                'correct_answer' => 'Tyrannosaurs Rex',
            ],
        ];

        foreach ($questions as $question) {
            Question::create($question);
        }
    }
}
