<?php
include_once 'header.php';
?>

<body>
<div class="usa-section">
  <div class="grid-container">
    <div class="grid-row grid-gap">
      <div class="usa-layout-docs__sidenav desktop:grid-col-3">
        </div><form class="usa-form usa-form--large" action="includes/signup.inc.php" method="post">
  <fieldset class="usa-fieldset">
    <legend class="usa-legend usa-legend--large">Register</legend>
    <p>
      Required fields are marked with an asterisk (<abbr title="required" class="usa-hint usa-hint--required">*</abbr>).
    </p>

    <label class="usa-label" for="first-name">
      First name <abbr title="required" class="usa-hint usa-hint--required">*</abbr>
    </label>
    <input class="usa-input usa-input--xl" onkeypress="return /[a-z]/i.test(event.key)" id="first-name" name="first-name" type="text" required aria-required="true">

    <label class="usa-label" for="middle-name">Middle name</label>
    <input class="usa-input usa-input--xl" onkeypress="return /[a-z]/i.test(event.key)" id="middle-name" name="middle-name" type="text">

    <label class="usa-label" for="last-name">
      Last name <abbr title="required" class="usa-hint usa-hint--required">*</abbr>    </label>
    <input class="usa-input usa-input--xl" onkeypress="return /[a-z]/i.test(event.key)" id="last-name" name="last-name" type="text" required aria-required="true">

    <label class="usa-label" for="phone-number">
      Phone Number <abbr title="required" class="usa-hint usa-hint--required">*</abbr>    </label>
    <input class="usa-input usa-input--xl" onkeypress="return /[0-9]/i.test(event.key)" id="phone-number" name="phone-number" type="text" required aria-required="true">

    <label class="usa-label" for="email">Email address
        <abbr title="required" class="usa-hint usa-hint--required">*</abbr></label>
    <input class="usa-input" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" id="email" name="email" type="email" autocapitalize="off" autocorrect="off" required>
    
    <label class="usa-label" for="user-name">
      Username <abbr title="required" class="usa-hint usa-hint--required">*</abbr>    </label>
    <input class="usa-input usa-input--xl" id="user-name" name="user-name" type="text" required aria-required="true">

    <label class="usa-label" for="password">
        Password<abbr title="required" class="usa-hint usa-hint--required">*</abbr></label>
    <input class="usa-input" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" id="password" name="password" type="password" required>
    
    <label class="usa-label" for="password-repeat">
        Repeat Password<abbr title="required" class="usa-hint usa-hint--required">*</abbr></label>
    <input class="usa-input" id="password-repeat" name="password-repeat" type="password" required>
    <p class="usa-form__note">
      <a title="Show password" href="javascript:void(0);"
        class="usa-show-password"
        aria-controls="password-sign-in">Show password</a>
    </p>
    <input class="usa-button" name="submit" type="submit" value="Sign Up">
    <p><a href="javascript:void(0);" title="Forgot password">
      Forgot password?</a></p>
</fieldset>
</form>
<?php
if (isset($_GET["error"])){
  if ($_GET["error"] == "phoneexists"){
    echo "<p>Phone Number already Associated with an account</p>";
  }
 else if ($_GET["error"] == "userexists"){
    echo "<p>Username already associated with an account</p>";
  }
  else if ($_GET["error"] == "emailexists"){
    echo "<p>Email already Associated with an account</p>";
  }
  else if ($_GET["error"] == "stmtfailed"){
    echo "<p>Something went wrong</p>";
  }
  else if ($_GET["error"] == "success"){
    echo "<p>You have signed up successfully!</p>";
  }
}
?>
<script src="assets/js/uswds.min.js"></script>
</body>