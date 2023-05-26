<?php

include "config.php";

$email = $_POST['email'];
$password = $_POST['password'];

$sql_p = $conn->query("SELECT * FROM personal WHERE email = '$email' AND password = '$password'");
$num_p = $sql_p->num_rows;


$sql_b = $conn->query("SELECT * FROM business WHERE email = '$email' AND password = '$password'");
$num_b = $sql_b->num_rows;

if($num_p == 1 OR $num_b == 1) 
	{
		?>
			<img src="images/success.png" style="padding: 20px" />
			<h2>Connecté.</h2>
			<p>Vous êtes connecté <br> vous pouvez faire des achats sur notre site et jouer le quizz pour course de taxi gratuites.</p>
		<?php
			if($num_p == 1) 
				{
					$row_p = $sql_p->fetch_assoc();
					$id = $row_p['id'];
					$nom = $row_p['nom'];
					$prenom = $row_p['prenom'];
			echo '
				<div class="evviede-venir-title" style="margin: 20px;">
	                <a href="quizz.php">Cliquer ici pour commencer</a> 
	            </div>';
	         		    $_SESSION['id'] = $id;
					    $_SESSION['nom'] = $nom;
					    $_SESSION['prenom'] = $prenom;
					    $_SESSION['email'] = $email;
						$_SESSION['type'] = 1;
				} else {
					$row_b = $sql_b->fetch_assoc();
					$id = $row_b['id'];
					$company = $row_b['company'];
					$owner = $row_b['owner'];
					$matricule = $row_b['matricule'];
			echo '
	            <div class="evviede-venir-title" style="margin: 20px;">
	                <a href="dashboard.php">Tableau de bors</a> 
	            </div>';
					    $_SESSION['id'] = $id;
					    $_SESSION['email'] = $email;
					    $_SESSION['company'] = $company;
						$_SESSION['type'] = 2;
						$_SESSION['matricule'] = $matricule;
            }
            	
		?>
			
		<?php
		
	} else {
		?>
			<img src="images/error.png" style="padding: 20px" />
			<h2>Tentative echoué</h2>
			<p>Adresse e-mail ou mot de passe erroné.</p>
			<div class="evviede-venir-title" style="margin: 20px;">
                <a href="login.php">Cliquer ici pour réessayer.</a> 
            </div>
		<?php
	}

?>

