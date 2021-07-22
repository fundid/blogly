<?php
session_start();
?>

<!doctype html>
<html lang="en-US">
  <!-- made by fundid -->
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Blogly</title>
    <link rel="stylesheet" href="assets/css/uswds.min.css">
    <script src="assets/js/uswds-init.min.js"></script>
    <script src="assets/js/uswds-init.js"></script>
    <script src="assets/js/uswds.min.js"></script>
    <script src="assets/js/uswds.js"></script>
  </head>
  <body>

<a class="usa-skipnav" href="#main-content">Skip to main content</a>
  
<div class="usa-overlay"></div>
<header class="usa-header usa-header--extended">
<div class="usa-navbar">
  <div class="usa-logo" id="extended-logo" >
    <em class="usa-logo__text">
      <a href="index.php" title="Home">
        Blogly
      </a>
    </em>
  </div>
  <button class="usa-menu-btn">Menu</button>
</div>
<nav aria-label="Primary navigation" class="usa-nav">
    <div class="usa-nav__inner">

<button class="usa-nav__close">
  <img src="assets/img/usa-icons/close.svg" role="img" alt="Close">
</button>
<ul class="usa-nav__primary usa-accordion">

<li class="usa-nav__primary-item">
    
  
    <a href="index.php" class="usa-nav__link">
      
        <span>Home</span>
      
    </a>
  
      </li>

<li class="usa-nav__primary-item">
    
  
  <a href="about.php" class="usa-nav__link">
    
      <span>About</span>
    
  </a>

    </li>

<li class="usa-nav__primary-item">
    
  
  <a href="cv.php" class="usa-nav__link">
    
      <span>CV</span>
    
  </a>

    </li>      

    <li class="usa-nav__primary-item">
    
  
    <a href="contacts.php" class="usa-nav__link">
      
        <span>Contacts</span>
      
    </a>
  
      </li>
      
          <?php
        if (isset($_SESSION["user-name"])) {
          echo'

          <li class="usa-nav__primary-item">
    
  
          <a href="courses.php" class="usa-nav__link">
            
              <span>Courses</span>
            
          </a>
        
            </li>
            
          <li class="usa-nav__primary-item">    

          <button
          class="usa-accordion__button usa-nav__link"
          aria-expanded="false"
          aria-controls="extended-nav-section-one">
          <span>Account</span>
            </button>
            
              <ul id="extended-nav-section-one" class="usa-nav__submenu">
                <li class="usa-nav__submenu-item">  
        <a href="includes/logout.inc.php" >    
            Log out
        </a>
               </li>
   
        <li class="usa-nav__submenu-item">
        
        <a href="404.php" >
            Profile 
        </a>
              
        </li>
        <li class="usa-nav__submenu-item">
        
        <a href="upload-cv.php" >
            Upload CV
        </a>
              
        </li>        
            </ul></li>';
        }
        else {
          echo'<li class="usa-nav__primary-item">
    
  
          <a href="signup.php" class="usa-nav__link">
            
              <span>Register</span>
            
          </a>
        
            </li>
          <li class="usa-nav__primary-item">    

          <button
          class="usa-accordion__button usa-nav__link"
          aria-expanded="false"
          aria-controls="extended-nav-section-one">
          <span>Account</span>
            </button>
            
              <ul id="extended-nav-section-one" class="usa-nav__submenu">
                <li class="usa-nav__submenu-item">  
        <a href="login.php" >    
            Login
        </a>
               </li>
   
        <li class="usa-nav__submenu-item">
        
        <a href="signup.php" >
            Sign Up 
        </a>
              
        </li>
            </ul></li>';
        }
        ?>

            
            </ul>
</div>
  </nav>
</header>