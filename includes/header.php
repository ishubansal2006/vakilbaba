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
    <div class="container-fluid">
      <div class="header_wrap  pull-right">
	  
        <div class="user_login" style="font-size: 15px; border:none; color: #fff; font-size: 18px; font-weight: bold;">
          <i class="fa fa-phone" style="font-size:15px; margin-right:3px;">+91- 7900127900 </i><br>
          <i class="fa fa-envelope" style="font-size:15px;"> support@vakilbaba.com</i>
         
        </div>
      </div>
	 
      <div class="navbar-header">
       <a class="pull-left navbar-brand navbar-brand-fix" href="index.php">
        <img class="img-responsive img-mobile" src="assets/images/logo.png" alt="image" class="img-responsive"/>
      </a> 
     <p style="margin-top: -55px"> </p>
        <!--<button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>-->
      

                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation" id="menu_slide">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                  
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
<ul class="user-login">
                         <li class="dropdown">
                                 <a href="" class="dropdown-toggle login_btn btn-xs uppercase" data-hover="dropdown" data-toggle="dropdown" style="background-color: #FFBC51; ">Advocate Panel <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="advocate-login.php" runat="server">Login</a></li>
                                    <li><a href="advocate-signup.php" runat="server">SignUp</a></li>
                                </ul>
                            </li>
							<li class="dropdown">
                                 <a href="" class="dropdown-toggle login_btn btn-xs uppercase" data-hover="dropdown" data-toggle="dropdown" style="background-color: #FFBC51; ">Customer <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="customer-login.php" runat="server">Login</a></li>
                                    <li><a href="customer-signup.php" runat="server">SignUp</a></li>
                                </ul>
                            </li></ul>
 <!-- <div class="login_btn"> <a href="advocate-signup.php" class="btn btn-xs uppercase" style="background-color: #FFBC51; ">Advocate Panel</a></div>
<h5 style="color: #fff; display: inline;margin-right: -35px;"><i class="fa fa-user-circle" aria-hidden="true"> Customer</i></h5>--->

<?php }
else{ 

echo "Welcome To Vakilbaba";
 } ?>
        </div>
      </div>
          <div class="horizontal-menu collapse navbar-collapse" id="navigation">
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