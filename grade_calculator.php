<?php
$score1 = isset($_POST['score1']) ? (float) $_POST['score1'] : null;
$score2 = isset($_POST['score2']) ? (float) $_POST['score2'] : null;
$score3 = isset($_POST['score3']) ? (float) $_POST['score3'] : null;
$average = null;
$grade = null;

if (!is_null($score1) && !is_null($score2) && !is_null($score3)) {
    $average = ($score1 + $score2 + $score3) / 3;

    if ($average >= 90) {
        $grade = "A";
    } elseif ($average >= 80) {
        $grade = "B";
    } elseif ($average >= 70) {
        $grade = "C";
    } elseif ($average >= 60) {
        $grade = "D";
    } else {
        $grade = "F";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 1 | Task 3: Grade Calculator</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #edf2f9;
            font-family: 'Lato', sans-serif;
            color: #344050;
        }

        p {
            font-size: 16px;
            color: #344050;
            line-height: 35px;
            margin-bottom: 15px;
        }

        p:last-child {
            margin-bottom: 0;
        }

        span.text-bold {
            font-weight: 700;
        }

        .module {
            margin-bottom: 30px;
        }

        .module-title {
            display: flex;
            margin-bottom: 15px;
            align-items: center;
            justify-content: flex-start;
            align-content: center;
            gap: 15px;
        }
        .module h1 {
            font-size: 40px;
            line-height: 55px;
            color: #344050;
        }
        .module-back-btn {
            background-color: #ff8c4b;
            color: #fff;
            text-decoration: none;
            font-weight: 700;
            font-size: 16px;
            padding: 12px 15px;
            text-transform: uppercase;
            border-radius: 3px;
            display: block;
        }

        .module p {
            margin-bottom: 0;
            line-height: 22px;
        }

        .module-wrapper {
            max-width: 1024px;
            margin: 30px auto;
            padding: 30px;
            background-color: #fff;
            box-shadow: 0 7px 14px 0 rgba(65, 69, 88, 0.1), 0 3px 6px 0 rgba(0, 0, 0, 0.07);
            border-radius: 3px;
        }

        .module-form label {
            display: block;
            margin-bottom: 5px;
            font-family: 'Lato', sans-serif;
            font-weight: normal;
            font-size: 16px;
            font-weight: 700;
        }

        .module-form input,
        .module-form select,
        .module-form input:focus,
        .module-form select:focus {
            padding: 10px;
            min-width: 350px;
            border: 1px solid lightgray;
            font-size: 16px;
            font-family: 'Lato', sans-serif;
            font-weight: normal;
            outline: none;
            box-shadow: none;
            border-radius: 3px;
        }

        .module-form .input-group {
            margin-bottom: 15px;
        }

        .module-form button {
            padding: 10px;
            min-width: 350px;
            border: none;
            font-size: 16px;
            font-family: 'Lato', sans-serif;
            font-weight: 700;
            text-transform: uppercase;
            outline: none;
            box-shadow: none;
            background-color: #ffcd33;
            color: #000;
            border-radius: 3px;
            cursor: pointer;
        }

        .results {
            font-size: 25px;
            line-height: 35px;
            margin-top: 30px;
        }
    </style>
</head>

<body>
    <div class="module-wrapper">
        <div class="module">
            <div class="module-title"><a href="./" class="module-back-btn">Previous</a> <h1>Task 3: Grade Calculator</h1></div>
            <p>Module 1: Assignment</p>
            <p>Student Name: Hasan</p>
        </div>
        <form action="" method="POST" class="module-form">
            <div class="input-group">
                <label for="score1">Test Score 1:</label>
                <input type="number" id="score1" name="score1" value="<?php echo htmlspecialchars($score1); ?>" required>
            </div>

            <div class="input-group">
                <label for="score2">Test Score 2:</label>
                <input type="number" id="score2" name="score2" value="<?php echo htmlspecialchars($score2); ?>" required>
            </div>

            <div class="input-group">
                <label for="score3">Test Score 3:</label>
                <input type="number" id="score3" name="score3" value="<?php echo htmlspecialchars($score3); ?>" required>
            </div>

            <button type="submit">Calculate</button>
        </form>
        <?php if (!is_null($average) && !is_null($grade)) : ?>
            <p class="results">Average Score: <?php echo round($average, 2); ?></p>
            <p class="results">Grade: <?php echo $grade; ?></p>
        <?php endif; ?>
    </div>
</body>

</html>