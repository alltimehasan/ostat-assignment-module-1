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
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 1 | Task 5: Weather Report</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="module-wrapper">
        <div class="module">
            <div class="module-title"><a href="./" class="module-back-btn">Previous</a> <h1>Task 5: Weather Report</h1></div>
            <p>Module 1: Assignment</p>
            <p>Student Name: Hasan</p>
        </div>
        <form action="" method="POST" class="module-form">
            <div class="input-group">
                <label for="temperature">Enter Temperature (°C):</label>
                <input type="number" id="temperature" name="temperature" required>
            </div>

            <button type="submit">Get Weather Report</button>
        </form>
        <?php if (!empty($message)) : ?>
            <p class="results">Temperature: <?php echo htmlspecialchars($temperature); ?>°C</p>
            <p class="results"><?php echo $message; ?></p>
        <?php endif; ?>
    </div>
</body>

</html>