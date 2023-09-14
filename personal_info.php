<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 1 | Task 1 : Personal Information Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
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