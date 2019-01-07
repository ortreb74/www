<!doctype html>
<html>
   <head>
      <meta charset="utf-8" />
	  <link rel="stylesheet" style="text/css" href="css/schema.css"/>
	  <script src="js/click.js" type="text/javascript"></script>
	  <title>page</title>
	</head>
	
	<body>
		<div class = "line">
			<div class="rounded-box">
			  <span>trt</span>
			</div>
			<div class="horizontal-connector">
			  <svg:svg height="16" width="40">
				<svg:line stroke="black" x1="0" x2="40" y1="13" y2="13"></svg:line>
			  </svg:svg>
			</div>      
			<div class="rounded-box">
				<span>cd-rom</span>
			</div>
		</div>
<?php
		try{
			$bdd = new PDO('mysql:host=localhost;dbname=basics','root','');
			$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(Exception $e) {
			die('Erreur : '.$e->getMessage());
		}

		$reponse = $bdd->query("select * from ARRAY_LIST order by ORD");

		while($donnees = $reponse->fetch()) {
			echo "<p>" . $donnees['WORD'] . "<p>";
		}
?>		
		

	</body>
</html>		