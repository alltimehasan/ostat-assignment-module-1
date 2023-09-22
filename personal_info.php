<?php
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
                    <h2 class="task-title">Task 1 : Personal Information Page</h2>
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
            </div>
        </div>
    </div>
</body>

</html>