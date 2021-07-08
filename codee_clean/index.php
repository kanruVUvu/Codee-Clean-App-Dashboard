<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CODEE App LoginPage</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/homepage.css">
    <!-- <script src="assets/js/bootstrap.min.js"></script> -->
    <script src="assets/js/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<link href='https://fonts.googleapis.com/css?family=Nunito Sans' rel='stylesheet'>
	<style>
	#ltype
	{
	-webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        background: url("assets/images/orangedropdownarrow.png") no-repeat right;
		background-position: right .7em top 50%, 0 0;
		background-size:auto;
	}
		</style>
</head>
<body class="bestloginpage" style="width:1540px;margin:auto;">
<div class="wrapper">
	<div class="row">
      <!-- Navbar start -->
		<div class="col-12 col-md-12" style="height:60px;">
			<nav class="navbar">
			  <div class="container-fluid">
			    <div class="navbar-header">
			      <img src="assets/images/logo.png" id="arrange" style="left:650px;">
			    </div>
			  </div>
			</nav>
		</div>
 <div class="bg-img">
 <?php if(!(isset($_GET['x'])))
 { ?>       
       <form  class="container" action="action.php" method="POST" enctype="multipart/form-data" style="position: absolute;
    width: 486px;
    height: 369px;
    left: 541px;
    top: 128px;
    background: #24272A;
    box-shadow: 0px 2px 2px rgb(156 156 156 / 25%);
    border-radius: 4px;">
	<div style="margin-left: 50px;">
	<div class="form-group">
	<lable for="login as" style="font-family: Nunito Sans;
    font-style: normal;
    font-weight: 300;
    font-size: 17px;
    line-height: 27px;
    color: #FFFFFF;
    position: relative;
    top: -19px;
    right: 1px;">Login As</lable>
            <select name="logintype" id="ltype" style="width: 246px;
    padding: 15px;
    margin: 15px 0px;
    border: 1px solid #FF6900;
    font-family: Nunito Sans;
    font-style: normal;
    font-weight: 300;
    font-size: 17px;
    line-height: 27px;
    position: relative;
    top: 32px;
    right: 71px;
    color: #FFFFFF;">
    <option value="Admin" style="font-family: Nunito Sans;
    font-style: normal;
    font-weight: 300;
    font-size: 20px;
    line-height: 27px;background:#24272A;">Admin</option>
    <option value="Client" style="font-family: Nunito Sans;
    font-style: normal;
    font-weight: 300;
    font-size: 20px;
    line-height: 27px;background:#24272A;">Client</option>
    <option value="Cleaner" style="font-family: Nunito Sans;
    font-style: normal;
    font-weight: 300;
    font-size: 20px;
    line-height: 27px;background:#24272A;">Cleaner</option>
  </select>
            </div>
	   <div class="form-group">
            <input type="text" placeholder="Username"
                    name="username" style="width:88%;" required>
					</div>
					<div class="form-group">
            <input type="password" placeholder="Password"
                    name="password" style="width:88%;" required>
            </div>
			<input type="hidden" name="helloindia" value="add">
            <input type="submit" class="buttn" value="LOGIN" style="position:relative;right:-110px;">
			<a href="forgotpasswordpage.php" class="forgotpw" style="color:#FFFFFF;top:63px;left:-34px;">Forgot Password ?</a>
 <?php } ?>
 </div>
        </form>	
   <?php if(isset($_GET['x']))
 { ?>       
      <form  class="container" action="action.php" method="POST" enctype="multipart/form-data" style="position: relative;
    width: 486px;
    height: 454px;
    left: 0px;
    top: -476px;
    background: #24272A;
    box-shadow: 0px 2px 2px rgb(156 156 156 / 25%);
    border-radius: 4px;">
	<div style="margin-left: 50px;">
	<div class="form-group">
	<lable for="login as" style="font-family: Nunito Sans;
    font-style: normal;
    font-weight: 300;
    font-size: 17px;
    line-height: 27px;
    color: #FFFFFF;
    position: relative;
    top: -19px;
    right: 1px;">Login As</lable>
            <select name="logintype" id="ltype" style="width: 246px;
    padding: 15px;
    margin: 15px 0px;
    border: 1px solid #FF6900;
    font-family: Nunito Sans;
    font-style: normal;
    font-weight: 300;
    font-size: 17px;
    line-height: 27px;
    position: relative;
    top: 32px;
    right: 71px;
    color: #FFFFFF;">
    <option value="Admin" style="font-family: Nunito Sans;
    font-style: normal;
    font-weight: 300;
    font-size: 20px;
    line-height: 27px;background:#24272A;">Admin</option>
    <option value="Client" style="font-family: Nunito Sans;
    font-style: normal;
    font-weight: 300;
    font-size: 20px;
    line-height: 27px;background:#24272A;">Client</option>
    <option value="Cleaner" style="font-family: Nunito Sans;
    font-style: normal;
    font-weight: 300;
    font-size: 20px;
    line-height: 27px;background:#24272A;">Cleaner</option>
  </select>
            </div>
	   <div class="form-group">
            <input type="text" placeholder="Username"
                    name="username" style="width:88%;" required>
					</div>
					<div class="form-group">
            <input type="password" placeholder="Password"
                    name="password" style="width:88%;" required>
            </div>
			<input type="hidden" name="helloindia" value="add">
			<div class="container" style="position: relative;
    width: 308.04px;
    height: 78.39px;
    left: -22.92px;
    top: -12.97px;
    background: #DDB89F;
    border-radius: 6.41744px;">
	<img src="assets/images/exclamation-triangle.png" style="position: relative;
    top: 22px;">
			<span><h4 style="position: relative;
    width: 270px;
    height: 20px;
    left: 55px;
    top: -29px;
    font-family: Nunito Sans;
    font-style: normal;
    font-weight: bold;
    font-size: 14.4392px;
    line-height: 20px;
    color: #000000;">Incorrect Username or password</h4><br><h5 style="position: relative;
    width: 258px;
    height: 20px;
    left: 55px;
    top: -64px;
    font-family: Nunito Sans;
    font-style: normal;
    font-weight: 300;
    font-size: 12.8349px;
    line-height: 18px;
    color: #000000;">Try entering your information again,<br>
 or <a href="forgotpasswordpage.php" style="text-decoration: underline;
    color: #000000;">resetting your password</a></h5></span> </div>	
            <input type="submit" class="buttn" value="LOGIN" style="position:relative;right:-110px;top:3px;">
			<a href="forgotpasswordpage.php" class="forgotpw" style="color:#FFFFFF;top:54px;left:-34px;">Forgot Password ?</a> 		
 <?php } ?>
	</div>
	</form>
	</div>
	</div>
	</div>
</body>
  
</html>