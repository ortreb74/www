
<!doctype html>
<html>
   <head>
      <meta charset="utf-8" />
	  <link rel="stylesheet" style="text/css" href="style.css" />
	  <title>page</title>
	</head>


	<body>
	<h1>bonjour</h1>
	<div id="menu">
		<ul id="onglets">
		<li ><a href="index.php"> Index </a></li>
			<li><a href="sonny.php"> Sonny </a></li>
			<li><a href="donatien.php"> Donatien </a></li>
			<li class="active"><a href="christopher.php"> Christopher </a></li>
		</ul>
	</div>
	<table>
                <tr>
                    <th>date</th>
                    <th>Nom</th>
                    <th>Description</th>
                </tr>
            <?php
			try{
			$bdd = new PDO('mysql:host=localhost;dbname=basics','root','');
			$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}catch(Exception $e)
			{
			die('Erreur : '.$e->getMessage());
			}

		$reponse = $bdd->query("SELECT * FROM information WHERE nom='Christopher'");
            $date ="";
            while($donnees = $reponse->fetch())
            {
				if ($date !=$donnees['date']){
					$date=$donnees['date'];
					?>
					<tr><td colspan="3" style="height:2px; background-color:#000000;"></td></tr>
					<?php
				}else{
            ?>
			<tr><td colspan="3" style="height:0.05px; background-color:#808080;"></td></tr>
				<?php } ?>
            
                <tr>
                    <th><?php echo $donnees['date'];?></th>
                    <th><?php echo $donnees['nom'];?></th>
                    <th><?php echo $donnees['description'];?></th>
                </tr>
            <?php
            } 
            ?>
        </table>
	</body>
</html>		