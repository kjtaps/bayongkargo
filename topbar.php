<style>
	.logo {
    margin: auto;
    font-size: 20px;
    background: white;
	background-image: url("bayong.png")
    padding: 5px 11px;
    border-radius: 50% 50%;
    color: #0047ab;
}
</style> 

<nav class="navbar navbar-dark bg-danger fixed-top " style="padding:0;">
  <div class="container-fluid mt-2 mb-2">
  	<div class="col-lg-12">
  		<div class="col-md-1 float-left" style="display: flex;">
  			<div class="logo">
  				<img src="bayong.png" width="60" height="60"> 
  			</div>
  		</div> 
	  	<div class="col-md-2 float-right"> 
	  		<a href="ajax.php?action=logout"><?php echo $_SESSION['login_name'] ?> <i class="fa fa-power-off"></i></a> 
	    </div>
    </div>
  </div>
</nav>
