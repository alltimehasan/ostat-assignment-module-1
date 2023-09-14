<?php
$temperature = isset($_POST['temperature']) ? $_POST['temperature'] : null;
$conversion = isset($_POST['conversion']) ? $_POST['conversion'] : null;
$result = null;

if (!is_null($temperature) && !is_null($conversion)) {
    if($temperature == null) {
        $result = null;
    } else {
        if ($conversion === "c2f") {
            $result = ($temperature * 9 / 5) + 32;
        } elseif ($conversion === "f2c") {
            $result = ($temperature - 32) * 5 / 9;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 1 | Task 2: Temperature Converter</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="module-wrapper">
        <div class="module">
            <div class="module-title"><a href="./" class="module-back-btn">Previous</a> <h1>Task 2: Temperature Converter</h1></div>
            <p>Module 1: Assignment</p>
            <p>Student Name: Hasan</p>
        </div>
        <form action="" method="post" class="module-form">
            <div class="input-group">
                <label for="temperature">Enter Temperature:</label>
                <input type="number" id="temperature" name="temperature" value="<?php echo htmlspecialchars($temperature); ?>" required>
            </div>

            <div class="input-group">
                <label for="conversion">Conversion Type:</label>
                <select id="conversion" name="conversion">
                    <option value="c2f" <?php echo ($conversion === "c2f") ? 'selected' : ''; ?>>Celsius to Fahrenheit</option>
                    <option value="f2c" <?php echo ($conversion === "f2c") ? 'selected' : ''; ?>>Fahrenheit to Celsius</option>
                </select>
            </div>

            <button type="submit">Convert</button>
        </form>
        <?php if (!is_null($result)) : ?>
            <p class="results"> <?php echo "Converted Temperature: " . round($result, 2); ?></p>
        <?php endif; ?>
    </div>
</body>

</html>