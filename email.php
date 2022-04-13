<?php
 include('functions.class.php');
	if(isset($_POST['email'])){
		$email = $_POST['emailid'];
		$msg=$functionObj->fetch_EmailByRegemail($email);
		
		if($msg){
			echo "<script type='text/javascript'>window.location.href='index.php';</script>";
			echo $msg;
		}	
		else{
			echo "not work";
		}
	}else{
		echo "post is not work";
	}
?>