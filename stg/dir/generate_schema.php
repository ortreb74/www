<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
                      "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:svg="http://www.w3.org/2000/svg">					  
   <head>
      <meta charset="utf-8" />
	  <link rel="stylesheet" style="text/css" href="css/schema.css"/>
	  <script src="js/click.js" type="text/javascript"></script>
	  <title>page</title>
	</head>
	
	<body>
		<h1>enchaînement des programmes BOFIP</h1>
		<div class = "line">		
<?php
		try{
			$bdd = new PDO('mysql:host=localhost;dbname=basics','root','');
			$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(Exception $e) {
			die('Erreur : '.$e->getMessage());
		}

		$reponse = $bdd->query("select * from ARRAY_LIST order by ORD");

		if ($donnees = $reponse->fetch()) {
?>			
			<div class="rounded-box">
				<span>
<?php
					echo $donnees['WORD'];
?>
				</span>
			</div>			
<?php			
		}
		
		while($donnees = $reponse->fetch()) {
?>			
			<div class="horizontal-connector">
				<img src = "svg/horizontal-connector.svg"/>			  
			</div>	
			<div class="rounded-box">
				<span>
<?php
					echo $donnees['WORD'];
?>
				</span>
			</div>
			  			
<?php
		}
?>		
		</div>		
		
		<!--- ceci est un bloc -->
		<h1>structure des données EL</h1>
		<div class = "line">		
<?php
		try{
			$bdd = new PDO('mysql:host=localhost;dbname=basics','root','');
			$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(Exception $e) {
			die('Erreur : '.$e->getMessage());
		}

		$reponse = $bdd->query("select * from NAMED_LIST where LIST_NAME = 'BO_EL1' order by ORD");

		if ($donnees = $reponse->fetch()) {
?>			
			<div class="rounded-box">
				<span>
<?php
					echo $donnees['WORD'];
?>
				</span>
			</div>			
<?php			
		}
		
		while($donnees = $reponse->fetch()) {
?>			
			<div class="horizontal-connector">
				<img src = "svg/horizontal-connector.svg"/>			  
			</div>	
			<div class="rounded-box">
				<span>
<?php
					echo $donnees['WORD'];
?>
				</span>
			</div>
			  			
<?php
		}
?>		
		</div>	
		<!-- fin du bloc -->
		
		<!-- bloc -->
		<h1>schéma en construction</h1>
		<div class = "line">		
<?php
		try{
			$bdd = new PDO('mysql:host=localhost;dbname=basics','root','');
			$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(Exception $e) {
			die('Erreur : '.$e->getMessage());
		}

		$reponse = $bdd->query("select * from NAMED_LIST where LIST_NAME = 'ELA_DTD' order by ORD");

		if ($donnees = $reponse->fetch()) {
?>			
			<div class="rounded-box">
				<span>
<?php
					echo $donnees['WORD'];
?>
				</span>
			</div>			
<?php			
		}
		
		while($donnees = $reponse->fetch()) {
?>			
			<div class="horizontal-connector">
				<img src = "svg/horizontal-connector.svg"/>			  
			</div>	
			<div class="rounded-box">
				<span>
<?php
					echo $donnees['WORD'];
?>
				</span>
			</div>
			  			
<?php
		}
?>		
		</div>
		<!-- fin du bloc -->

		<!-- bloc -->
		<h1>Un pipe</h1>
		<div class = "line">		
<?php
		try{
			$bdd = new PDO('mysql:host=localhost;dbname=basics','root','');
			$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(Exception $e) {
			die('Erreur : '.$e->getMessage());
		}

		$reponse = $bdd->query("select * from NAMED_LIST where LIST_NAME = 'pipe1' order by ORD");

		if ($donnees = $reponse->fetch()) {
?>			
			<div class="rounded-box">
				<span>
<?php
					echo $donnees['WORD'];
?>
				</span>
			</div>			
<?php			
		}
		
		while($donnees = $reponse->fetch()) {
?>			
			<div class="horizontal-connector">
				<img src = "svg/horizontal-connector.svg"/>			  
			</div>	
			<div class="rounded-box">
				<span>
<?php
					echo $donnees['WORD'];
?>
				</span>
			</div>
			  			
<?php
		}
?>		
		</div>
		<!-- fin du bloc -->		
		
	</body>
</html>		