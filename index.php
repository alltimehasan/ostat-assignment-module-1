<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 1 | Task 1 : Personal Information Page</title>
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

        .module h1 {
            font-size: 40px;
            line-height: 55px;
            color: #344050;
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
        .module-tasks {
            list-style: none;
        }
        .module-tasks li a {
            text-decoration: none;
            font-size: 18px;
            font-family: 'Lato', sans-serif;
            font-weight: 700;
            color: rgb(102, 112, 133);
            border: 1px solid lightgray;
            padding: 10px 15px;
            min-width: 350px;
            display: inline-block;
            margin-bottom: 15px;
            border-radius: 3px;
            transition: all 0.25s;
        }
        .module-tasks li a:hover {
            background-color: #101828;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="module-wrapper">
        <div class="module">
            <h1>Module 1: Assignment</h1>
            <p>Student Name: Hasan</p>
        </div>
        <ul class="module-tasks">
            <li><a href="personal_info.php">Task 1: Personal Information Page</a></li>
            <li><a href="temperature_converter.php">Task 2: Temperature Converter</a></li>
            <li><a href="grade_calculator.php">Task 3: Grade Calculator</a></li>
            <li><a href="even_odd_checker.php">Task 4: Even or Odd Checker</a></li>
            <li><a href="weather_report.php">Task 5: Weather Report</a></li>
            <li><a href="comparison_tool.php">Task 6: Comparison Tool</a></li>
            <li><a href="simple_calculator.php">Task 7: Simple Calculator</a></li>
        </ul>
    </div>
</body>

</html>