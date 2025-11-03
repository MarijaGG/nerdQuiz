<!DOCTYPE html>
<html>
<head>
    <title>Quiz Finished</title>
    <style>
         h1 {
                        
                    color: #2b6cb0;
                    text-shadow: 1px 1px 3px #aee;
                    font-size: 55px;
                }

         body {
            font-family: Arial, sans-serif;
            background: linear-gradient(180deg, #80c0ff, #e1f8ffff);
            background-attachment: fixed; /* Keeps the gradient stable when scrolling */
            color: #222;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

p{
    font-size: 35px;
}
   button {
                    margin-top: 20px;
                    padding: 10px 25px;
                    background: #2b6cb0;
                    color: white;
                    border: none;
                    border-radius: 8px;
                    cursor: pointer;
                    font-size: 16px;
                }

                button:hover {
                    background: #1a4f80;
                }

    </style>
</head>
<body>
    <div class="flex justify-center items-center h-screen">
    <h1>Quiz Complete!</h1>
    <p>You got {{ $correct }} out of {{ $total }} correct!</p>

    <form method="POST" action="{{ route('quiz.show', ['id' => $quiz_id]) }}">
        @csrf
        <input type="hidden" name="retake" value="1">
        <button type="submit">Retake Quiz</button>
    </form>

    <form method="GET" action="{{ route('dashboard') }}">
        <button type="submit">Return To Dashboard</button>
    </form>
    </div>
</body>
</html>