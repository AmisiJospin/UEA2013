<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<title>Informatique 2013| Accueil</title>
</head>
<body>
	
	<div class="corps">
	
	<div id="entete">
		<a href="."><img src="image/infobanner.png" /></a>
	</div>
	
	<div id="menu">
		<ul>
			<a href="index.php"><li class="menu_active">Accueil</li></a>
			<a href="#"><li>A Propos de Nous</li></a>
			<a href="#"><li>Livre d'or</li></a>
			<a href="#"><li>Forum</li></a>
			<a href="#"><li>Gallerie</li></a>
			<a href="#"><li class="dernier_menu">Contacts</li></a>
		</ul>
	</div>
		
		<div id="contenu">
					<p>
						<h3 class="exe">Formulaire de contacts</h3>
						<div class="erreur">
							<?php include('verification.php');?> 
						</div>
					
					<form action="" method="POST">
							<table>
								<tr>
									<td>Nom:</td>
									<td><input type="text" name="nom" class="textform" value="" placeholder="Ex:Amisi"/></td>
								</tr>
								
								<tr>
									<td>Téléphone:</td>
									<td><input type="number" name="phone" class="textform" value="" placeholder="Ex:(+257)75603090" /></td>
								</tr>
								
								<tr>
									<td>Adresse Electronique:</td>
									<td><input type="email" name="email" class="textform" value="" placeholder="Ex: jospinamissi@gmail.com"/></td>
								</tr>
								
								<tr>
									<td colspan="2">
										<h3>Ecrivez - Nous:</h3>
										<textarea name="texte" class="message"  placeholder="Ex: Bonjour! Je suis ravi ......"></textarea>
									</td>
								</tr>
								<tr>
									<td colspan="2"><input type="submit" name="boutonenvoyer"  value="Envoyer" class="boutonenvoyer" /></td>
								</tr>
								
								</table>
						</form>
						</p>
						
							<div id="pied_de_page">
		<p class="pied">
			Retrouvez-nous: <img src="image/icon1.gif" class="icon" /><img src="image/icon2.gif" class="icon" /><img src="image/icon3.gif" class="icon" /><br/>
			&copy; HopeInfo2013 All Right Reserved
		</p>
	</div>

					</div>
				</body>
			</html>
								