<?php
include "config.php";

$students = mysqli_query($conn, "SELECT * FROM students");
$subjects = mysqli_query($conn, "SELECT * FROM subjects");

if (isset($_POST['submit'])) {
    $subject = $_POST['subject'];
    $date = date("Y-m-d");

    if (!empty($_POST['attendance'])) {
        foreach ($_POST['attendance'] as $student_id => $status) {
            $sql = "INSERT INTO attendance(student_id, subject_id, date, status)
                    VALUES('$student_id', '$subject', '$date', '$status')";
            mysqli_query($conn, $sql);
        }
    }
}
?>

<?php include "header.php"; ?>
<?php include "sidebar.php"; ?>

<div class="main">
    <div class="card attendance-card">
        <h2>Mark Attendance</h2>

        <form method="POST">
            <label>Subject</label>
            <select name="subject" required>
                <option value="">Select Subject</option>
                <?php while ($sub = mysqli_fetch_assoc($subjects)) { ?>
                    <option value="<?php echo $sub['id']; ?>">
                        <?php echo htmlspecialchars($sub['subject_name']); ?>
                    </option>
                <?php } ?>
            </select>

            <div class="student-list">
                <?php while ($row = mysqli_fetch_assoc($students)) { ?>
                    <div class="attendance-row">
                        <span><?php echo htmlspecialchars($row['name']); ?></span>

                        <select name="attendance[<?php echo $row['id']; ?>]">
                            <option value="Present">Present</option>
                            <option value="Absent">Absent</option>
                        </select>
                    </div>
                <?php } ?>
            </div>

            <button type="submit" name="submit">Save Attendance</button>
        </form>
    </div>
</div>

</body>
</html>
