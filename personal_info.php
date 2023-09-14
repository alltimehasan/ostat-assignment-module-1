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
    </style>
</head>
<body>
    <div class="module-wrapper">
        <div class="module">
            <div class="module-title"><a href="./" class="module-back-btn">Previous</a> <h1>Task 1 : Personal Information Page</h1></div>
            <p>Module 1: Assignment</p>
            <p>Student Name: Hasan</p>
        </div>
        <?php
            $name = "John Doe";
            $age = 30;
            $country = "USA";
            $introduction = "John Doe and Jane Doe are multiple-use placeholder names that are used in the United States and the United Kingdom when the true name of a person is unknown or is being intentionally concealed.";

            $personal_info = "
                <p><span class='text-bold'>Name:</span> {$name}</p>
                <p><span class='text-bold'>Age:</span> {$age}</p>
                <p><span class='text-bold'>Country:</span> {$country}</p>
                <p><span class='text-bold'>Country:</span> {$introduction}</p>
            ";

            echo $personal_info;
        ?>
    </div>
</body>
</html>