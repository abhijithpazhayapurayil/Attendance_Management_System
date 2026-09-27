<?php
include "config.php";

$sql = "SELECT students.name, subjects.subject_name,
               attendance.date, attendance.status
        FROM attendance
        JOIN students ON attendance.student_id = students.id
        JOIN subjects ON attendance.subject_id = subjects.id
        ORDER BY attendance.date DESC";

$result = mysqli_query($conn, $sql);
?>

<?php include "header.php"; ?>
<?php include "sidebar.php"; ?>

<div class="main">
    <h2>Attendance Records</h2>

    <div class="table-container">
        <table>
            <tr>
                <th>Student</th>
                <th>Subject</th>
                <th>Date</th>
                <th>Status</th>
            </tr>

            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['name']); ?></td>
                    <td><?php echo htmlspecialchars($row['subject_name']); ?></td>
                    <td><?php echo htmlspecialchars($row['date']); ?></td>
                    <td><?php echo htmlspecialchars($row['status']); ?></td>
                </tr>
            <?php } ?>
        </table>
    </div>
</div>

</body>
</html>
