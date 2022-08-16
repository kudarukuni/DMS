<style>
	.logo {
    margin: auto;
    font-size: 30px;
    color: white;
    border-radius: 50% 50%;
    background: blue;
}
</style>

<nav class="navbar navbar-light fixed-top bg-primary" style="padding:0;">
  <div class="container-fluid mt-2 mb-2">
  	<div class="col-lg-12">
  		<div class="col-md-1 float-left" style="display: flex;">
  			<div class="logo">
          <img src="assets/img/web_logo.gif" width="36rem">
  			</div>
  		</div>
      <div class="col-md-4 float-left text-white"><font color = "silver">
        <b>Digital Marketing System</b></h6>
      </div>
	  	<div class="col-md-2 float-right text-white">
	  		<a href="ajax.php?action=logout" class="text-white"><b><?php echo $_SESSION['login_name'] ?></b>&nbsp;&nbsp;<i class="fa fa-power-off"></i></a>
	    </div></font>
    </div>
  </div>
  
</nav>