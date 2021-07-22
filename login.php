<?php
include_once 'header.php';
?>
<div class="usa-section">
  <div class="grid-container">
    <div class="grid-row grid-gap">
      <div class="usa-layout-docs__sidenav desktop:grid-col-3">
<form class="usa-form" action="includes/login.inc.php" method="post">
  <fieldset class="usa-fieldset">
    <legend class="usa-legend usa-legend--large">Log In</legend>
    <label class="usa-label" for="user-name">Username</label>
    <input class="usa-input" id="user-name" name="user-name" type="text" autocapitalize="off" autocorrect="off" required>
    <label class="usa-label" for="password">Password</label>
    <input class="usa-input" id="password" name="password" type="password" required>
    <p class="usa-form__note">
      <a title="Show password" href="javascript:void(0);"
        class="usa-show-password"
        aria-controls="password">Show password</a>
    </p>
    <input class="usa-button" type="submit" name="submit" value="Log In">
<!------------------------    
<p><a href="javascript:void(0);" title="Forgot password">
      Forgot password?</a></p>------------------------>
  </fieldset>
</form>
<?php
if (isset($_GET["error"])){
  if ($_GET["error"] == "wronglogin"){
    echo "<p>Incorrect Credentials</p>";
  }
 else if ($_GET["error"] == "wrongpassword"){
    echo "<p>Check password</p>";
  }
}
?>
<script src="assets/js/uswds.min.js"></script>