<?php
$num1 = isset($_POST['num1']) ? floatval($_POST['num1']) : null;
$num2 = isset($_POST['num2']) ? floatval($_POST['num2']) : null;
$message = null;

if (!is_null($num1) && !is_null($num2)) {
    $message = ($num1 > $num2)
        ? "The larger number is: $num1."
        : (($num1 < $num2) ? "The larger number is: $num2." : "The numbers are equal.");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 1 | Task 6: Comparison Tool</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="module-wrapper">
        <div class="module">
            <div class="module-title"><a href="./" class="module-back-btn">Previous</a> <h1>Task 6: Comparison Tool</h1></div>
            <p>Module 1: Assignment</p>
            <p>Student Name: Hasan</p>
        </div>
        <form action="" method="POST" class="module-form">
            <div class="input-group">
                <label for="num1">Enter First Number:</label>
                <input type="number" id="num1" name="num1" value="<?php echo htmlspecialchars($num1); ?>" required>
            </div>

            <div class="input-group">
                <label for="num2">Enter Second Number:</label>
                <input type="number" id="num2" name="num2" value="<?php echo htmlspecialchars($num2); ?>" required>
            </div>

            <button type="submit">Compare</button>
        </form>
        <?php if (!is_null($message)) : ?>
            <p class="results"><?php echo $message; ?></p>
        <?php endif; ?>
    </div>
</body>

</html>