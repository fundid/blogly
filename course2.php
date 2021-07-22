<?php
include_once 'header.php';
session_start();
$conn = mysqli_connect("localhost", "root", "", "is181_assignment");
$id = $_SESSION['Userid'];
$sql = "SELECT * FROM courses WHERE Userid=$id";
$result = mysqli_query($conn, $sql);

?>

    <style>
        table {
            text-align: left;
            align-content: center;
            justify-content: center;
            /* margin: 7% 32%; */
            background-color: #3ddad7;
            box-shadow: -10px 7px #69868a;
            border-radius: 10px;
            margin-top: 5%;
            width: 70%;


        }
    </style>
    <table border="1px" style="border-collapse: collapse;" align="center">
        <tr>
            <th>Course Name</th>
            <th>Course Code</th>
            <th>Description</th>
            <th>Department</th>
            <th>Semister</th>
            <th>Academic Year</th>
            <th>Course Instructor</th>
            <th>Result</th>
        </tr>
        <?php
        if (mysqli_num_rows($result) >= 1) {
            while ($row = mysqli_fetch_assoc($result)) {

        ?>
                <tr>
                    <td><?php echo $row['Name'] ?></td>
                    <td><?php echo $row['Code'] ?></td>
                    <td><?php echo $row['Desc'] ?></td>
                    <td><?php echo $row['Dept'] ?></td>
                    <td><?php echo $row['Sem'] ?></td>
                    <td><?php echo $row['Year'] ?></td>
                    <td><?php echo $row['Instructor'] ?></td>
                    <td><?php echo $row['Result'] ?></td>
                </tr>


            <?php
            }

            ?>

    </table>
<?php
        } else {
            echo "Records Not Found";
        }
?>
</body>

<script src="assets/js/uswds.min.js"></script>