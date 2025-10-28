<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function show(Request $request, $quiz_id)
    {
        // On first load or retake, randomize and store question IDs in session
        if (!$request->session()->has("quiz_{$quiz_id}_order") || ($request->isMethod('post') && $request->input('retake'))) {
            $order = Question::where('quiz_id', $quiz_id)->inRandomOrder()->pluck('id')->toArray();
            $request->session()->put("quiz_{$quiz_id}_order", $order);
            $request->session()->put("quiz_{$quiz_id}_index", 0);
            $request->session()->put("quiz_{$quiz_id}_correct", 0);
            $request->session()->put("quiz_{$quiz_id}_total", count($order));
            if ($request->input('retake')) {
                return redirect()->route('quiz.show', ['id' => $quiz_id]);
            }
        } else {
            $order = $request->session()->get("quiz_{$quiz_id}_order");
        }

        $index = $request->session()->get("quiz_{$quiz_id}_index", 0);
        $total = count($order);

        // Defensive: If no questions, show finished view immediately
        if ($total === 0) {
            return view('quizzes.finished', [
                'correct' => 0,
                'total' => 0,
                'quiz_id' => $quiz_id,
            ]);
        }

        // If form submitted, check answer and increment index
        if ($request->isMethod('post') && !$request->input('retake')) {
            if (isset($order[$index])) {
                $question = Question::find($order[$index]);
                $answer = $request->input('answer');
                $correct = $request->session()->get("quiz_{$quiz_id}_correct", 0);

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
                        $request->session()->put("quiz_{$quiz_id}_correct", $correct);
                    }
                }
            }
            $index++;
            $request->session()->put("quiz_{$quiz_id}_index", $index);

            // Check after incrementing
            if ($index >= $total) {
                $correct = $request->session()->get("quiz_{$quiz_id}_correct", 0);
                return view('quizzes.finished', [
                    'correct' => $correct,
                    'total' => $total,
                    'quiz_id' => $quiz_id,
                ]);
            }
        }

        // ✅ Check *before* trying to access $order[$index]
        if ($index >= $total || !isset($order[$index])) {
            $correct = $request->session()->get("quiz_{$quiz_id}_correct", 0);
            return view('quizzes.finished', [
                'correct' => $correct,
                'total' => $total,
                'quiz_id' => $quiz_id,
            ]);
        }

        $question = Question::find($order[$index]);

        return view('quizzes.hsr', [
            'question' => $question,
            'index' => $index,
            'total' => $total,
        ]);
    }
}
