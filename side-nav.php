<?php $current_page = basename($_SERVER['REQUEST_URI']); ?>
<nav class="nav flex-column side-nav">
    <a href="./" class="nav-link <?php echo  ($current_page == 'ostat-assignment-module-1') ? 'active' : ''; ?>">Home</a>
    <a href="personal_info.php" class="nav-link <?php echo  ($current_page == 'personal_info.php') ? 'active' : ''; ?>">Task 1: Personal Information Page</a>
    <a href="temperature_converter.php" class="nav-link <?php echo  ($current_page == 'temperature_converter.php') ? 'active' : ''; ?>">Task 2: Temperature Converter</a>
    <a href="grade_calculator.php" class="nav-link <?php echo  ($current_page == 'grade_calculator.php') ? 'active' : ''; ?>">Task 3: Grade Calculator</a>
    <a href="even_odd_checker.php" class="nav-link <?php echo  ($current_page == 'even_odd_checker.php') ? 'active' : ''; ?>">Task 4: Even or Odd Checker</a>
    <a href="weather_report.php" class="nav-link <?php echo  ($current_page == 'weather_report.php') ? 'active' : ''; ?>">Task 5: Weather Report</a>
    <a href="comparison_tool.php" class="nav-link <?php echo  ($current_page == 'comparison_tool.php') ? 'active' : ''; ?>">Task 6: Comparison Tool</a>
    <a href="simple_calculator.php" class="nav-link <?php echo  ($current_page == 'simple_calculator.php') ? 'active' : ''; ?>">Task 7: Simple Calculator</a>
</nav>