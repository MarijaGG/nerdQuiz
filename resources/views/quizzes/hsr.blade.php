<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HSR Quiz</title>
    <style>
        .progress-container {
            width: 100%;
            background: #eee;
            border-radius: 8px;
            margin-top: 30px;
            height: 24px;
        }
        .progress-bar {
            height: 100%;
            background: #4caf50;
            border-radius: 8px;
            width: {{ round((($index + 1) / $total) * 100) }}%;
            transition: width 0.3s;
            text-align: center;
            color: #fff;
            line-height: 24px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>HSR Quiz</h1>

    <form method="POST" action="{{ route('quiz.show', ['id' => $question->quiz_id]) }}">
        @csrf
        <div style="margin-bottom: 20px;">
            <p><strong>Question {{ $index + 1 }} of {{ $total }}</strong></p>
            <p>{{ $question->question_text }}</p>

            <label><input type="radio" name="answer" value="A"> {{ $question->option_a }}</label><br>
            <label><input type="radio" name="answer" value="B"> {{ $question->option_b }}</label><br>

            @if($question->option_c)
                <label><input type="radio" name="answer" value="C"> {{ $question->option_c }}</label><br>
            @endif

            @if($question->option_d)
                <label><input type="radio" name="answer" value="D"> {{ $question->option_d }}</label><br>
            @endif
        </div>

        <button type="submit">Next</button>
    </form>

    <div class="progress-container">
        <div class="progress-bar">
            {{ round((($index + 1) / $total) * 100) }}%
        </div>
    </div>
</body>
</html>
