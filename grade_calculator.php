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

include 'head.php';
?>

<body>
    <div class="container-fluid py-5">
        <div class="row">
            <div class="col-md-3">
                <?php include 'side-nav.php'; ?>
            </div>
            <div class="col-md-9">
                <div class="task">
                    <h2 class="task-title">Task 3: Grade Calculator</h2>
                    <form action="" method="POST" class="row module-form g-3">
                        <div class="col-md-4">
                            <label class="form-label" for="score1">Test Score 1:</label>
                            <input type="number" id="score1" class="form-control" name="score1" value="<?php echo htmlspecialchars($score1); ?>" required>
                        </div>

                        <div class="col-md-4">
                            <label class="form-label" for="score2">Test Score 2:</label>
                            <input type="number" id="score2" class="form-control" name="score2" value="<?php echo htmlspecialchars($score2); ?>" required>
                        </div>

                        <div class="col-md-4">
                            <label class="form-label" for="score3">Test Score 3:</label>
                            <input type="number" id="score3" class="form-control" name="score3" value="<?php echo htmlspecialchars($score3); ?>" required>
                        </div>

                        <div class="col-12">
                            <button type="submit">Calculate</button>
                        </div>
                    </form>
                    <?php if (!is_null($average) && !is_null($grade)) : ?>
                        <p class="results">Average Score: <?php echo round($average, 2); ?></p>
                        <p class="results">Grade: <?php echo $grade; ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>