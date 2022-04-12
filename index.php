<h3>Maze000 -0- Register</h3>

<?php

include 'connection.php';
$msg='';
if(isset($_POST['mail']) AND isset($_POST['password'])){

	$mail =$_POST["mail"];
	$password=$_POST["password"];
	
	$msg = 'Congrats, your account has been made, <br /> please check your email for activation, maybe in spam.';
	
	$hash = md5(rand(0,1000) );
	

	$sql = "INSERT INTO user (mail,password,hash) values('$mail','$password','$hash')";

	$insert = mysqli_query($connection, $sql);
	
	$subject = 'Signup | Verification'; 
	
	$link='https://marionettegames.000webhostapp.com/verifyCorrection2/verify.php?mail='.$mail.'&hash='.$hash.'';
	  
	$message="<strong>Activate your account by link</strong><br/>";
	$message.="<span style='color:#2980B9'>Mail:</span>" .$mail."<br/>";
	$message.="<span style='color:#2980B9'>Password:</span>".$password."<br/>";
	$message.="<a style='font-weight:bold;color:#2BA6CB;' target='_blank' href=".$link."> Click Here </a>";
	$headers = 'From:infimo000@gmail.com' . "\r\n"; 
	$headers.="Content-type: text/html; charset=UTF-8";          
	
	$mail=mail($mail, $subject, $message, $headers); 
	
}
?>

	<form action="index.php"  method="POST">
		<input type="text" name="mail" placeholder="mail">
		<input type="password" name="password" placeholder="password">	
		<input type="submit"  value="Register">		
	</form>
	<?php 
		  if($msg){
		   echo $msg; 
		  }
		 ?>
				

				
			

			
		
		
			
						
						
				
				
			


