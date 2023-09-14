<?php
$result = null;
$operation = "";

if (isset($_POST['num1'], $_POST['num2'], $_POST['operation'])) {
    $num1 = floatval($_POST['num1']);
    $num2 = floatval($_POST['num2']);
    $operation = $_POST['operation'];

    switch ($operation) {
        case 'add':
            $result = $num1 + $num2;
            break;
        case 'subtract':
            $result = $num1 - $num2;
            break;
        case 'multiply':
            $result = $num1 * $num2;
            break;
        case 'divide':
            $result = ($num2 != 0) ? $num1 / $num2 : "Cannot divide by zero!";
            break;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 1 | Task 7: Simple Calculator</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="module-wrapper">
        <div class="module">
            <div class="module-title"><a href="./" class="module-back-btn">Previous</a> <h1>Task 7: Simple Calculator</h1></div>
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
                <input type="number" id="num2" name="num2" value="<?php echo htmlspecialchars($num1); ?>" required>
            </div>

            <div class="input-group">
                <label for="operation">Select Operation:</label>
                <select id="operation" name="operation">
                    <option value="add" <?php echo ($operation == "add") ? 'selected' : ''; ?>>Addition (+)</option>
                    <option value="subtract" <?php echo ($operation == "subtract") ? 'selected' : ''; ?>>Subtraction (-)</option>
                    <option value="multiply" <?php echo ($operation == "multiply") ? 'selected' : ''; ?>>Multiplication (x)</option>
                    <option value="divide" <?php echo ($operation == "divide") ? 'selected' : ''; ?>>Division (/)</option>
                </select>
            </div>

            <button type="submit">Calculate</button>
        </form>

        <?php if (!is_null($result)) : ?>
            <p class="results">Result: <?php echo $result; ?></p>
        <?php endif; ?>
    </div>
</body>

</html>