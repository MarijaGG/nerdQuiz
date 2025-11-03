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
            background: linear-gradient(180deg, #80c0ff, #e1f8ff);
            background-attachment: fixed;
            color: #222;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            min-height: 100vh;
            margin: 0;
        }

        p {
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
    <div>
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

    <!-- 🎊 Confetti Script -->
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.9.2/dist/confetti.browser.min.js"></script>
    <script>
      window.addEventListener('load', () => {
        const duration = 2 * 1000; // Confetti lasts 2 seconds
        const end = Date.now() + duration;
        const defaults = { startVelocity: 30, spread: 360, ticks: 60, zIndex: 999 };

        function randomInRange(min, max) {
          return Math.random() * (max - min) + min;
        }

        const interval = setInterval(() => {
          const timeLeft = end - Date.now();
          if (timeLeft <= 0) return clearInterval(interval);

          const particleCount = 50 * (timeLeft / duration);
          // Launch from the left and right sides
          confetti(Object.assign({}, defaults, {
            particleCount,
            origin: { x: randomInRange(0.1, 0.3), y: Math.random() - 0.2 }
          }));
          confetti(Object.assign({}, defaults, {
            particleCount,
            origin: { x: randomInRange(0.7, 0.9), y: Math.random() - 0.2 }
          }));
        }, 250);
      });
    </script>
</body>
</html>
