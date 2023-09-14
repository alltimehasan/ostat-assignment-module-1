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
    <link rel="stylesheet" href="./css/style.css">
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