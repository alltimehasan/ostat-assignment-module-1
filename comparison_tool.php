<?php
$num1 = isset($_POST['num1']) ? floatval($_POST['num1']) : null;
$num2 = isset($_POST['num2']) ? floatval($_POST['num2']) : null;
$message = null;

if (!is_null($num1) && !is_null($num2)) {
    $message = ($num1 > $num2)
        ? "The larger number is: $num1."
        : (($num1 < $num2) ? "The larger number is: $num2." : "The numbers are equal.");
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
                    <h2 class="task-title">Task 6: Comparison Tool</h2>
                    <form action="" method="POST" class="row module-form g-3">
                        <div class="col-md-6">
                            <label class="form-label" for="num1">Enter First Number:</label>
                            <input type="number" class="form-control" id="num1" name="num1" value="<?php echo htmlspecialchars($num1); ?>" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="num2">Enter Second Number:</label>
                            <input type="number" class="form-control" id="num2" name="num2" value="<?php echo htmlspecialchars($num2); ?>" required>
                        </div>
                        <div class="col-12">
                            <button type="submit">Compare</button>
                        </div>
                    </form>
                    <?php if (!is_null($message)) : ?>
                        <p class="results"><?php echo $message; ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>