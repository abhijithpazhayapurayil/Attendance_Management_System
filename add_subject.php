<?php
include "config.php";

if (isset($_POST['submit'])) {
    $subject_name = $_POST['subject_name'];
    $subject_code = $_POST['subject_code'];
    $faculty_name = $_POST['faculty_name'];

    $sql = "INSERT INTO subjects(subject_name, subject_code, faculty_name)
            VALUES('$subject_name', '$subject_code', '$faculty_name')";

    mysqli_query($conn, $sql);
}
?>

<?php include "header.php"; ?>
<?php include "sidebar.php"; ?>

<div class="main">
    <div class="card form-card">
        <h2>Add Subject</h2>

        <form method="POST">
            <label>Subject Name</label>
            <input type="text" name="subject_name" required>

            <label>Subject Code</label>
            <input type="text" name="subject_code" required>

            <label>Faculty Name</label>
            <input type="text" name="faculty_name" required>

            <button type="submit" name="submit">Add Subject</button>
        </form>
    </div>
</div>

</body>
</html>
