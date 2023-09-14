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