<?php
include "config.php";

$students = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM students"));
$subjects = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM subjects"));
$attendance = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM attendance"));
?>

<?php include "header.php"; ?>
<?php include "sidebar.php"; ?>

<div class="main">
    <h1>Dashboard</h1>

    <div class="dashboard-grid">
        <div class="card">
            <h3>Total Students</h3>
            <p><?php echo $students; ?></p>
        </div>

        <div class="card">
            <h3>Total Subjects</h3>
            <p><?php echo $subjects; ?></p>
        </div>

        <div class="card">
            <h3>Total Attendance Records</h3>
            <p><?php echo $attendance; ?></p>
        </div>
    </div>
</div>

</body>
</html>
