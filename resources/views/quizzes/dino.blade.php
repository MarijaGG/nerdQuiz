<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dinosaur quiz</title>
    <style>
            html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(180deg, #80ff95ff, #e1ffeaff);
            background-attachment: fixed; /* Keeps the gradient stable when scrolling */
            color: #222;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }


                h1 {
                    color: #2b7e50ff;
                    text-shadow: 1px 1px 3px rgba(40, 92, 67, 1);
                }

                form {
                    display: inline-block;
                    text-align: left;
                    background: #ffffffcc;
                    padding: 25px 40px;
                    border-radius: 12px;
                    box-shadow: 0 0 12px rgba(0,0,0,0.2);
                    margin-top: 20px;
                }

                button {
                    margin-top: 20px;
                    padding: 10px 25px;
                    background: #2b7e50ff;
                    color: white;
                    border: none;
                    border-radius: 8px;
                    cursor: pointer;
                    font-size: 16px;
                }

                button:hover {
                    background: #0e4226ff;
                }

                .progress-container {
                    width: 100%;
                    background: #eee, 0%;
                    border-radius: 8px;
                    margin-top: 30px;
                    height: 24px;
                }

                .progress-bar {
                    height: 100%;
                    background: #2b7e50ff;
                    border-radius: 8px;
                    width: {{ round((($index + 1) / $total) * 100) }}%;
                    transition: width 0.3s;
                    text-align: center;
                    color: #fff;
                    line-height: 24px;
                    font-weight: bold;
                }

                label {
                    display: block;
                    margin: 8px 0;
                    font-size: 16px;
                }

                input[type="radio"] {
                    margin-right: 10px;
                }

                p {
                    font-size: 18px;
                }
    </style>
</head>
<body>
    <h1>Dinosaur Quiz</h1>

    <form method="POST" action="{{ route('quiz.show', ['id' => $question->quiz_id]) }}">
        @csrf
        <div style="margin-bottom: 20px;">
            <p><strong>Question {{ $index + 1 }} of {{ $total }}</strong></p>
            <p>{{ $question->question_text }}</p>

            <label><input type="radio" name="answer" value="A"> {{ $question->option_a }}</label>
            <label><input type="radio" name="answer" value="B"> {{ $question->option_b }}</label>

            @if($question->option_c)
                <label><input type="radio" name="answer" value="C"> {{ $question->option_c }}</label>
            @endif

            @if($question->option_d)
                <label><input type="radio" name="answer" value="D"> {{ $question->option_d }}</label>
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
