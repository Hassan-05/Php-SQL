<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
    <?php
        // Step 1: Database connection with error handling
        $conn = mysqli_connect("localhost", "root", "", "news_project");

        if (!$conn) {
            // Handle connection error
            die("Connection failed: " . mysqli_connect_error());
        }

        // Step 2: SQL query with error handling
        $sql = "SELECT * FROM students JOIN sclass WHERE students.sclass = sclass.cid";
        $result = mysqli_query($conn, $sql);

        if (!$result) {
            // Handle SQL query error
            die("SQL Error: " . mysqli_error($conn));
        }

        // Step 3: Check if records were found
        if (mysqli_num_rows($result) > 0) {
    ?>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>
            <?php
            // Step 4: Loop through results and display
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?php echo $row['sid']; ?></td>
                <td><?php echo $row['sname']; ?></td>
                <td><?php echo $row['saddress']; ?></td>
                <td><?php echo $row['cname']; ?></td>
                <td><?php echo $row['sphone']; ?></td>
                <td>
                    <a href='edit.php'>Edit</a>
                    <a href='delete-inline.php'>Delete</a>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <?php
        } else {
            // Step 5: Handle case where no records are found
            echo "<h2>No record found</h2>";
        }

        // Step 6: Close the database connection
        mysqli_close($conn);
    ?>
</div>
</div>
</body>
</html>