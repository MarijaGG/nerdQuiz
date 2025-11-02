<!DOCTYPE html>
<html>
<head>
    <title>Quiz Finished</title>
</head>
<body>
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
</body>
</html>