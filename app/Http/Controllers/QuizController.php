<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function show(Request $request, $quiz_id)
    {
        // If user starts fresh or comes from dashboard, reset finished status
        if (!session()->has("quiz_{$quiz_id}_order") || session()->has("quiz_finished_{$quiz_id}")) {
            session()->forget("quiz_finished_{$quiz_id}");
            session()->forget("quiz_progress_{$quiz_id}");
            session()->forget("quiz_{$quiz_id}_order");
            session()->forget("quiz_{$quiz_id}_index");
            session()->forget("quiz_{$quiz_id}_correct");
            session()->forget("quiz_{$quiz_id}_total");

            // Create new random question order
            $order = Question::where('quiz_id', $quiz_id)->inRandomOrder()->pluck('id')->toArray();
            session()->put("quiz_{$quiz_id}_order", $order);
            session()->put("quiz_{$quiz_id}_index", 0);
            session()->put("quiz_{$quiz_id}_correct", 0);
            session()->put("quiz_{$quiz_id}_total", count($order));
        } else {
            $order = session()->get("quiz_{$quiz_id}_order");
        }

        $index = session()->get("quiz_{$quiz_id}_index", 0);
        $total = count($order);

        // Defensive: if no questions
        if ($total === 0) {
            return view('quizzes.finished', [
                'correct' => 0,
                'total' => 0,
                'quiz_id' => $quiz_id,
            ]);
        }

        // If submitted answer
        if ($request->isMethod('post') && !$request->input('retake')) {
            if (isset($order[$index])) {
                $question = Question::find($order[$index]);
                $answer = $request->input('answer');
                $correct = session()->get("quiz_{$quiz_id}_correct", 0);

                if ($answer) {
                    $selectedText = match ($answer) {
                        'A' => $question->option_a,
                        'B' => $question->option_b,
                        'C' => $question->option_c,
                        'D' => $question->option_d,
                        default => null,
                    };

                    if ($selectedText && trim(strtolower($selectedText)) === trim(strtolower($question->correct_answer))) {
                        $correct++;
                        session()->put("quiz_{$quiz_id}_correct", $correct);
                    }
                }
            }

            // Move to next question
            $index++;
            session()->put("quiz_{$quiz_id}_index", $index);

            // If quiz completed
            if ($index >= $total) {
                $correct = session()->get("quiz_{$quiz_id}_correct", 0);
                session()->put("quiz_finished_{$quiz_id}", true); // ✅ mark finished

                return view('quizzes.finished', [
                    'correct' => $correct,
                    'total' => $total,
                    'quiz_id' => $quiz_id,
                ]);
            }
        }

        // If all questions answered, but session somehow persisted
        if ($index >= $total || !isset($order[$index])) {
            $correct = session()->get("quiz_{$quiz_id}_correct", 0);
            session()->put("quiz_finished_{$quiz_id}", true);
            return view('quizzes.finished', [
                'correct' => $correct,
                'total' => $total,
                'quiz_id' => $quiz_id,
            ]);
        }

        $question = Question::find($order[$index]);

        // Use quiz view that matches your quiz name (genshin, hsr, dino, fnaf, jojo)
        $quizViews = [
            1 => 'quizzes.hsr',
            2 => 'quizzes.gi',
            3 => 'quizzes.dino',
            4 => 'quizzes.fnaf',
            5 => 'quizzes.jojo',
        ];
        $view = $quizViews[$quiz_id] ?? 'quizzes.hsr';

        return view($view, [
            'question' => $question,
            'index' => $index,
            'total' => $total,
        ]);
    }
}
