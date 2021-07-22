<?php
include_once 'header.php';
session_start();
$conn = mysqli_connect("localhost", "root", "", "blogly");
$id = $_SESSION['Userid'];
$sql = "SELECT * FROM courses ;";
$result = mysqli_query($conn, $sql);

?>
  <body>   
  <script src="assets/js/uswds.min.js"></script>
  <div class="usa-section">
  <div class="grid-container">
    <div class="grid-row grid-gap">
      <main class="" id="main-content">
        <div class="usa-prose">
<h1>Courses</h1>
<p class="usa-intro">A list of courses.</p>

<table border="1px" style="border-collapse: collapse;" align="center">
        <tr>
            <th>Course Name</th>
            <th>Course Code</th>
            <th>Description</th>
            <th>Department</th>
            <th>Semester</th>
            <th>Academic Year</th>
            <th>Course Instructor</th>
            <th>Result</th>
        </tr>
        <?php
        if (mysqli_num_rows($result) >= 1) {
            while ($row = mysqli_fetch_assoc($result)) {

        ?>
                <tr>
                    <td><?php echo $row['cName'] ?></td>  
                    <td><?php echo $row['cCode'] ?></td>                  
                    <td><?php echo $row['cDesc'] ?></td>
                    <td><?php echo $row['cDept'] ?></td>
                    <td><?php echo $row['Sem'] ?></td>
                    <td><?php echo $row['Yr'] ?></td>
                    <td><?php echo $row['cInst'] ?></td>
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
<div>
<?php
if (isset($_GET["error"])){
  if ($_GET["error"] == "courseexists"){
    echo "<p>Code already associated with a subject</p>";
  }
}
    ?>
<form class="usa-form usa-form--large" action="includes/courses.inc.php" method="post">
  <fieldset class="usa-fieldset">
    <legend class="usa-legend usa-legend--large">Add Courses</legend>
    <p>
      Required fields are marked with an asterisk (<abbr title="required" class="usa-hint usa-hint--required">*</abbr>).
    </p>

    <label class="usa-label" for="cCode">Course Code</label>
    <input class="usa-input usa-input--xl"  id="cCode" name="cCode" type="text">

    <label class="usa-label" for="cName">
      Course name<abbr title="required" class="usa-hint usa-hint--required">*</abbr>
    </label>
    <input class="usa-input usa-input--xl" onkeypress="return /[a-z]/i.test(event.key)" id="cName" name="cName" type="text" required aria-required="true">

    <label class="usa-label" for="cDesc">
      Description <abbr title="required" class="usa-hint usa-hint--required">*</abbr>    </label>
    <input class="usa-input usa-input--xl"maxlength="150" onkeypress="return /[a-z]/i.test(event.key)" id="cDesc" name="cDesc" type="text" required aria-required="true">

    <label class="usa-label" for="cDept">
      Department <abbr title="required" class="usa-hint usa-hint--required">*</abbr>    </label>
    <input class="usa-input usa-input--xl"maxlength="50" onkeypress="return /[a-z]/i.test(event.key)" id="cDept" name="cDept" type="text" required aria-required="true">

    <label class="usa-label" for="cInst">
      Instructor <abbr title="required" class="usa-hint usa-hint--required">*</abbr>    </label>
    <input class="usa-input usa-input--xl"maxlength="30" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" id="cInst" name="cInst" type="text" required aria-required="true">

    <label class="usa-label" for="Yr">
      Year <abbr title="required" class="usa-hint usa-hint--required">*</abbr>    </label>
    <input class="usa-input usa-input--xl" maxlength="1" onkeypress="return /[1-5]/i.test(event.key)" id="Yr" name="Yr" type="text" required aria-required="true">

    <label class="usa-label" for="Sem">
      Semester<abbr title="required" class="usa-hint usa-hint--required">*</abbr>    </label>
    <input class="usa-input usa-input--xl" maxlength="1" onkeypress="return /[1-2]/i.test(event.key)" id="Sem" name="Sem" type="text" required aria-required="true">

    <label class="usa-label" for="results">
      Results<abbr title="required" class="usa-hint usa-hint--required">*</abbr>    </label>
    <input class="usa-input usa-input--xl" maxlength="1" onkeypress="return /[a-e]/i.test(event.key)" id="results" name="results" type="text" required aria-required="true">

    <input class="usa-button" name="submit" type="submit" value="Submit">
</fieldset>
</form>
    </div>
</body>
