<?php
// Starting session
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta http-equiv="refresh" content="1800;url=login.php" />
<?php include_once '../header.php'; ?>

<link href="/css/login.css" rel="stylesheet">
</head>

<body id="loginpage">
<?php include_once 'nav.php'; ?>


<div class="main-w3layouts-form">
	<div id="logcnt" class="clearfix">
		
		<!-- main-w3layouts-form -->
		<form method="post" id="loginform">
			<h2>Connectez-vous à votre compte</h2>
			<div class="fields-w3-agileits">
				<span class="fa fa-user" aria-hidden="true"></span>
				<input type="text" name="username" id="username" required="" placeholder="Nom d'utilisateur" />
			</div>
			<div class="fields-w3-agileits">
				<span class="fa fa-key" aria-hidden="true"></span>
				<input type="password" name="password" id="password" required="" placeholder="Mot de passe" />
			</div>
			<div class="remember-section-wthree">
				<ul>
					 
					<li><img src="../images/svg/question.png" alt="">&nbsp; <a href="#" data-toggle="tooltip" title="Email to: ming@sinobectrading.com">Mot de passe oublié?</a> </li>
				</ul>
				<div class="clear"> </div>
			</div>
			<input type="submit" id="submitbtn" value="Login" />
			<div id="response">&nbsp;</div>
		</form>
 		 
	</div>
 
</div>
<?php include_once 'footer.php'; ?>	
<script type="application/x-javascript">
addEventListener("load", function () {
	setTimeout(hideURLbar, 0);
}, false);

function hideURLbar() {
	window.scrollTo(0, 1);
}
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
<script>
$(document).ready(function(){
	$('#loginform').submit(function(){
		// show that something is loading
		$('#response').html("Chargement de la réponse...");
		// Call ajax for pass data to other place
		$.ajax({
			type: 'POST',
			url: 'user.php',
			dataType: "json",
			data: $(this).serialize(), // getting filed value in serialize form
			success: function(dataE){
					if (dataE.success) {
						$('#response').html("Success!");
 						$(location).attr('href', 'doc.php')
					}
					else{
						$('#response').html(dataE.message);
					}
					console.log(dataE.message);
			},
			error:function(jrXHR){
				console.log("Wrong");
				$('#response').html("Password error.");
			}
		});
		 
	// to prevent refreshing the whole page page
	return false;
	});
});
</script>

</body>
</html>