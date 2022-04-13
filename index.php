<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<body>
<!-- header -->
<!-- header-menu -->
<!-- //header -->
<!-- breadcrumbs -->
<!-- register -->
	<div class="register">
		<div class="container">
			<h3 class="animated wow zoomIn" data-wow-delay=".5s">Send Email Here</h3>
			<div class="login-form-grids">
				<form class="animated wow slideInUp" method="post" autocomplete="off" action="email.php" data-wow-delay=".5s">
		<!--		<div class="register-check-box animated wow slideInUp" data-wow-delay=".5s">
					<div class="check">
						<label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>Subscribe to Newsletter</label>
					</div>
				</div>  -->
					<input type="email" name="emailid" placeholder="Email Address" required=" " >
					<input type="submit" value="Send Email" name="email">
				</form>
			</div>
		</div>
	</div>
<!-- //register -->
</body>
</html>