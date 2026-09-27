<?php
include "config.php";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $department = $_POST['department'];
    $semester = $_POST['semester'];

    $sql = "INSERT INTO students(name, department, semester)
            VALUES('$name', '$department', '$semester')";

    mysqli_query($conn, $sql);
}
?>

<?php include "header.php"; ?>
<?php include "sidebar.php"; ?>

<div class="main">
    <div class="card form-card">
        <h2>Add Student</h2>

        <form method="POST">
            <label>Name</label>
            <input type="text" name="name" required>

            <label>Department</label>
            <input type="text" name="department" required>

            <label>Semester</label>
            <input type="number" name="semester" min="1" required>

            <button type="submit" name="submit">Add Student</button>
        </form>
    </div>
</div>

</body>
</html>
