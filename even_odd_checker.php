<?php
$number = isset($_POST['number']) ? intval($_POST['number']) : null;
$result = null;

if (!is_null($number)) {
    if ($number % 2 == 0) {
        $result = "Even";
    } else {
        $result = "Odd";
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
                    <h2 class="task-title">Task 4: Even or Odd Checker</h2>
                    <form action="" method="POST" class="row module-form g-3">
                        <div class="col-md-12">
                            <label class="form-label" for="number">Enter a number:</label>
                            <input type="number" class="form-control" id="number" name="number" value="<?php echo htmlspecialchars($number); ?>" required>
                        </div>
                        <div class="col-12">
                            <button type="submit">Check</button>
                        </div>
                    </form>
                    <?php if (!is_null($result)) : ?>
                        <p class="results">The number <?php echo $number; ?> is <?php echo $result; ?>.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>