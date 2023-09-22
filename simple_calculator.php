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
                    <h2 class="task-title">Task 7: Simple Calculator</h2>
                    <form action="" method="POST" class="row module-form g-3">
                        <div class="col-md-6">
                            <label class="form-label" for="num1">Enter First Number:</label>
                            <input type="number" class="form-control" id="num1" name="num1" value="<?php echo htmlspecialchars($num1); ?>" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="num2">Enter Second Number:</label>
                            <input type="number" class="form-control" id="num2" name="num2" value="<?php echo htmlspecialchars($num1); ?>" required>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label" for="operation">Select Operation:</label>
                            <select id="operation" class="form-select" name="operation">
                                <option value="add" <?php echo ($operation == "add") ? 'selected' : ''; ?>>Addition (+)</option>
                                <option value="subtract" <?php echo ($operation == "subtract") ? 'selected' : ''; ?>>Subtraction (-)</option>
                                <option value="multiply" <?php echo ($operation == "multiply") ? 'selected' : ''; ?>>Multiplication (x)</option>
                                <option value="divide" <?php echo ($operation == "divide") ? 'selected' : ''; ?>>Division (/)</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <button type="submit">Calculate</button>
                        </div>
                    </form>

                    <?php if (!is_null($result)) : ?>
                        <p class="results">Result: <?php echo $result; ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>