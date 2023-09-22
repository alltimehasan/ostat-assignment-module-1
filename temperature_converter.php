<?php
$temperature = isset($_POST['temperature']) ? $_POST['temperature'] : null;
$conversion = isset($_POST['conversion']) ? $_POST['conversion'] : null;
$result = null;

if (!is_null($temperature) && !is_null($conversion)) {
    if ($temperature == null) {
        $result = null;
    } else {
        if ($conversion === "c2f") {
            $result = ($temperature * 9 / 5) + 32;
        } elseif ($conversion === "f2c") {
            $result = ($temperature - 32) * 5 / 9;
        }
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
                    <h2 class="task-title">Task 2: Temperature Converter</h2>
                    <form class="row module-form g-3" method="POST">
                        <div class="col-md-6">
                            <label class="form-label" for="temperature">Enter Temperature:</label>
                            <input type="number" id="temperature" name="temperature" class="form-control" value="<?php echo htmlspecialchars($temperature); ?>" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="conversion">Conversion Type:</label>
                            <select id="conversion" name="conversion" class="form-select">
                                <option value="c2f" <?php echo ($conversion === "c2f") ? 'selected' : ''; ?>>Celsius to Fahrenheit</option>
                                <option value="f2c" <?php echo ($conversion === "f2c") ? 'selected' : ''; ?>>Fahrenheit to Celsius</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <button type="submit">Convert</button>
                        </div>
                    </form>
                    <?php if (!is_null($result)) : ?>
                        <p class="results"> <?php echo "Converted Temperature: " . round($result, 2); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>