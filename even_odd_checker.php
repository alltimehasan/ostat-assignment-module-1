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
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 1 | Task 4: Even or Odd Checker</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="module-wrapper">
        <div class="module">
            <div class="module-title"><a href="./" class="module-back-btn">Previous</a> <h1>Task 4: Even or Odd Checker</h1></div>
            <p>Module 1: Assignment</p>
            <p>Student Name: Hasan</p>
        </div>
        <form action="" method="POST" class="module-form">
            <div class="input-group">
                <label for="number">Enter a number:</label>
                <input type="number" id="number" name="number" value="<?php echo htmlspecialchars($number); ?>" required>
            </div>

            <button type="submit">Check</button>
        </form>
        <?php if (!is_null($result)) : ?>
            <p class="results">The number <?php echo $number; ?> is <?php echo $result; ?>.</p>
        <?php endif; ?>
    </div>
</body>

</html>