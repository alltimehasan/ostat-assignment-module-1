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
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #edf2f9;
            font-family: 'Lato', sans-serif;
            color: #344050;
        }

        p {
            font-size: 16px;
            color: #344050;
            line-height: 35px;
            margin-bottom: 15px;
        }

        p:last-child {
            margin-bottom: 0;
        }

        span.text-bold {
            font-weight: 700;
        }

        .module {
            margin-bottom: 30px;
        }

        .module-title {
            display: flex;
            margin-bottom: 15px;
            align-items: center;
            justify-content: flex-start;
            align-content: center;
            gap: 15px;
        }
        .module h1 {
            font-size: 40px;
            line-height: 55px;
            color: #344050;
        }
        .module-back-btn {
            background-color: #ff8c4b;
            color: #fff;
            text-decoration: none;
            font-weight: 700;
            font-size: 16px;
            padding: 12px 15px;
            text-transform: uppercase;
            border-radius: 3px;
            display: block;
        }

        .module p {
            margin-bottom: 0;
            line-height: 22px;
        }

        .module-wrapper {
            max-width: 1024px;
            margin: 30px auto;
            padding: 30px;
            background-color: #fff;
            box-shadow: 0 7px 14px 0 rgba(65, 69, 88, 0.1), 0 3px 6px 0 rgba(0, 0, 0, 0.07);
            border-radius: 3px;
        }

        .module-form label {
            display: block;
            margin-bottom: 5px;
            font-family: 'Lato', sans-serif;
            font-weight: normal;
            font-size: 16px;
            font-weight: 700;
        }

        .module-form input,
        .module-form select,
        .module-form input:focus,
        .module-form select:focus {
            padding: 10px;
            min-width: 350px;
            border: 1px solid lightgray;
            font-size: 16px;
            font-family: 'Lato', sans-serif;
            font-weight: normal;
            outline: none;
            box-shadow: none;
            border-radius: 3px;
        }

        .module-form .input-group {
            margin-bottom: 15px;
        }

        .module-form button {
            padding: 10px;
            min-width: 350px;
            border: none;
            font-size: 16px;
            font-family: 'Lato', sans-serif;
            font-weight: 700;
            text-transform: uppercase;
            outline: none;
            box-shadow: none;
            background-color: #ffcd33;
            color: #000;
            border-radius: 3px;
            cursor: pointer;
        }

        .results {
            font-size: 25px;
            line-height: 35px;
            margin-top: 30px;
        }
    </style>
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