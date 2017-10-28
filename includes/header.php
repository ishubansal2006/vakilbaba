<!--db connection-->
<?php 
session_start();
 require_once('includes/my_config.php');
 require_once('includes/functions.php');
 ?>
<!--/db connection-->
<header>
  
  <!-- Navigation -->
  <nav id="navigation_bar" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="header_wrap  pull-left" style="margin-left: -90px">
        <div class="user_login" style="font-size: 15px; border:none; color: #fff; font-size: 18px; font-weight: bold;">
          <i class="fa fa-phone">+91- 7900127900</i><br>
          <i class="fa fa-envelop" style="padding: 10px">support@vakilbaba.com</i>
         
        </div>
      </div>
      <div class="navbar-header">
       <a class="pull-left navbar-brand navbar-brand-fix" href="index.php">
        <img class="img-responsive" src="assets/images/logo.png" alt="image" style="margin-top: -55px"/>
      </a> 
     <p style="margin-top: -55px"> </p>
        <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        
      </div>
        <div class="header_wrap">  
        <div class="header_search">

          <?php 

          if(strlen($_SESSION['login'])==0)
  { 
?>
<style type="text/css">
  .login_btn .btn .btn-xs .uppercase :hover{
    background-color: #000;
  }
</style>
 <div class="login_btn"> <a href="advocate-signup.php" class="btn btn-xs uppercase" style="background-color: #FFBC51; ">Advocate Panel</a></div>
 <h5 style="color: #fff; display: inline;margin-right: -35px;"><i class="fa fa-user-circle" aria-hidden="true"> Customer</i></h5>

<?php }
else{ 

echo "Welcome To Vakilbaba";
 } ?>
        </div>
      </div>
          <div class="collapse navbar-collapse" id="navigation">
        <ul class="nav navbar-nav" style="font-size: 15px; color: #fff">
          <li><a href="index.php">Home</a></li>
             
          <li><a href="about-us.php">About Us</a></li>
          <li><a href="services-description.php">Our Services</a></li>
          <li><a href="contact-us.php">Contact Us</a></li>

        </ul>
      </div>
    
  
</div>
  </nav>
  <!-- Navigation end --> 
</header>