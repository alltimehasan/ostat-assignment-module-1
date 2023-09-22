<?php
$message = '';

if (isset($_POST['temperature'])) {
    $temperature = floatval($_POST['temperature']);

    if ($temperature <= 0) {
        $message = "It's freezing!";
    } elseif ($temperature > 0 && $temperature <= 15) {
        $message = "It's cool.";
    } else {
        $message = "It's warm.";
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
                    <h2 class="task-title">Task 5: Weather Report</h2>
                    <form action="" method="POST" class="row module-form g-3">
                        <div class="col-md-12">
                            <label class="form-label" for="temperature">Enter Temperature (°C):</label>
                            <input type="number" class="form-control" id="temperature" name="temperature" required>
                        </div>
                        <div class="col-12">
                            <button type="submit">Get Weather Report</button>
                        </div>
                    </form>
                    <?php if (!empty($message)) : ?>
                        <p class="results">Temperature: <?php echo htmlspecialchars($temperature); ?>°C</p>
                        <p class="results"><?php echo $message; ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>