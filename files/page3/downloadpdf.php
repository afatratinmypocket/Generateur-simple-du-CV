<?php
	//Redirect vers la page du formulaire c'est l'utilisateur n'a pas entre les donnees dans le formulaire
	
	//si il a laisser les champs vide   //si l'image n'est pas entree
	if(empty($_POST['cvnom']) || empty($_POST['imgsrc']))
	{
		header("location: ../page2/insertion.php");
		exit();		
	}

	//Recuperer les valeurs des inputs dans le formulaire et les affecter au php variables
	$image = $_POST['imgsrc'];
	$nom=$_POST['cvnom'];
	$prenom=$_POST['cvprenom'];
	$age=$_POST['cvage'];
	$ville=$_POST['cvville'];	
	$adr=$_POST['cvadr'];	
	$tele=$_POST['cvtele'];
	$email=$_POST['cvemail'];
	$fr=$_POST['cvfr'];	
	$en=$_POST['cven'];
	$ch=$_POST['cvch'];
	$ru=$_POST['cvru'];
	$ar=$_POST['cvar'];
	$sp=$_POST['cvsp'];
	$dip1=$_POST['cvdip1'];
	$dip2=$_POST['cvdip2'];
	$dip3=$_POST['cvdip3'];
	$eta1=$_POST['cveta1'];
	$eta2=$_POST['cveta2'];
	$eta3=$_POST['cveta3'];
	$d1=$_POST['cvd1'];
	$d2=$_POST['cvd2'];
	$d3=$_POST['cvd3'];
	$e1=$_POST['cve1'];
	$e2=$_POST['cve2'];
	$e3=$_POST['cve3'];
	$p1=$_POST['cvp1'];
	$p2=$_POST['cvp2'];
	$p3=$_POST['cvp3'];
	$dm1=$_POST['cvdm1'];
	$dm2=$_POST['cvdm2'];
	$dm3=$_POST['cvdm3'];		
	$prop=$_POST['cvprop'];
	$couleur=$_POST['color'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!-- titre de la page -->
	<title>CV GENERATOR - TELECHARGER VOTRE CV</title>
	<!-- logo du site -->
	<link rel="shortcut icon" href="../images/site/gear.png" />
	<!-- appeler le fichier css -->
	<link rel="stylesheet" href="../pagestyle.css" />
	<!-- appeler le fichier javascript qui se trouve dans l'internet-->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<!-- fonction qui permet de transformer le cv (html) en pdf -->
    <script type="text/javascript">
		$("#btnPrint").live("click", function () {
            var divContents = $("#dvContainer").html();
            var printWindow = window.open('', '', 'height=400,width=800');  
            var style = "<style> #cvdwnld {border-top: 20px solid <?php echo $couleur; ?>; border-bottom: 20px solid <?php echo $couleur; ?>; } .nomprenom {color: <?php echo $couleur; ?>; border-top: 5px solid <?php echo $couleur; ?>; border-bottom: 5px solid <?php echo $couleur; ?>; } .ftitre {background-color: <?php echo $couleur; ?>; } .fzone .ftext {color: <?php echo $couleur; ?>; border-bottom: 2px solid <?php echo $couleur; ?>; } .profpic {border: 2px solid <?php echo $couleur; ?>; } </style>";

           	printWindow.document.write('<!DOCTYPE html><html><head><meta charset="utf-8"><link rel="stylesheet" href="../pagestyle.css"/><title>CV GENERATOR - IMPRIMER VOTRE CV</title><link rel="shortcut icon" href="../images/site/gear.png"/>');
            printWindow.document.write(style+'</head><body>');
            printWindow.document.write(divContents);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
        });
    </script>

    <style>
    	#cvdwnld {
    		border-top: 20px solid <?php echo $couleur; ?>;
			border-bottom: 20px solid <?php echo $couleur; ?>;
    	}
    	.nomprenom {
    		color: <?php echo $couleur; ?>;
    		border-top: 5px solid <?php echo $couleur; ?>;
			border-bottom: 5px solid <?php echo $couleur; ?>;
    	}
    	.ftitre {
    		background-color: <?php echo $couleur; ?>;
    	}
    	.fzone .ftext {
    		color: <?php echo $couleur; ?>;
    		border-bottom: 2px solid <?php echo $couleur; ?>;
    	}
    	.profpic {
    		border: 2px solid <?php echo $couleur; ?>;
    	}
    </style>
</head>
<body>
	<header>
		<div class="startend">
			<marquee class="setxt" style="width: 700px;margin-left: 20%;">CV GENERATOR - BIENVENU DANS NOTRE SITE, VOUS POUVEZ CREER ET TELECHARGER VOTRE CV AVEC SUCCES</marquee>
		</div>
		<div class="hautsite">
			<div class="logonamesite" title="CLIQUER POUR REVENIR A LA PAGE HOME" style="margin-left: 42%;cursor: pointer;">
				<a href="../page1/home.html">
				<div class="logo">
					<img height="25px" src="../images/site/gear.png" style="pointer-events: none;">
				</div>
				<div class="txt">CV GENERATOR</div></a>
			</div>
			<div class="defsite" style="margin-left: 450px;text-align: center;">
				<div class="txt">VOICI LA DERNIERE FORME DE VOTRE CV, VOUS POUVEZ LE RE-FAIRE OU LE TELECHAGER</div>
			</div>
		</div>
	</header>
	<section id="cvcomplet">
		<div class="part">
			<div class="titre">
				<div class="logo">
					<img height="30px" src="../images/site/cv.png" style="pointer-events: none;">
				</div>	
				CV COMPLET
			</div>
		<div class="cvaff">
			<div id="dvContainer">
				<center id="cvdwnld">
						<div class="nomprenom">
								<!-- afficher le contenu des variables -->
								<?php
									echo strtoupper($nom)." ".ucfirst(strtolower($prenom));
								?>
						</div>
						<div class="continfo" style="float: left;">
							<div class="continfoparts" style="margin-left: 7px;">
								<div class="ftitre">PROFILE</div>
								<div class="fzone" style="width: 450px;text-align: left; margin-left: 85px;">
									<!-- afficher le contenu des variables -->
									<?php
										echo ucfirst(strtolower($prop));
									?>
								</div>
								<div class="ftitre">FORMATION</div>
								<div class="fzone" style="margin-left: 45px;width: 500px;">
									<!-- afficher le contenu des variables -->
									<div class="ftext"><?php echo $d1; ?></div>
									<div class="fdesc"><?php echo $dip1 . " - " . $eta1; ?></div>
									<div class="ftext"><?php echo $d2; ?></div>
									<div class="fdesc"><?php echo $dip2 . " - " . $eta2; ?></div>
									<div class="ftext"><?php echo $d3; ?></div>
									<div class="fdesc"><?php echo $dip3 . " - " . $eta3; ?></div>
								</div>
							</div>
							<div class="continfoparts">
								<div class="ftitre">CONTACT</div>
								<div class="fzone" style="width: 430px;text-align: left;float: left;margin-left: 100px;">
									<!-- afficher le contenu des variables -->
									<?php
										echo "TEL : <span>".$tele. "</span><br><br>";
										echo "VILLE : <span>" .$ville. "</span><br><br>";
										echo "ADDRESSE : <span>" .$adr. "</span><br><br>";
										echo "EMAIL : <span style=\"text-decoration: underline grey;\">".$email. "</span>";
									?>
								</div>
								<div class="ftitre">PHOTO</div>
								<div class="fzone">
									<div class="profpic">
										<?php 
											echo "<img src=\"".$image."\">";
										?>
									</div>													
								</div>						
							</div>
						<div style="float:left">
							<div class="continfoparts" style="margin-left: 7px;">
								<div class="ftitre">LANGAGES</div>
								<div class="fzone" style="width: 500px;margin-left: 50px;">
									<!-- afficher seulement les langages qui sont plus que zero -->
									<?php
										if($en != 0){
											echo "<div class=\"ftext\" style=\"float: right;width: 30%;\">ANGLAIS</div>
															<div class=\"fdesc\" style=\"text-align: right;float: right;width: 60px; margin-top: 30px;\">".$en."/10</div>";
										}
										if($fr != 0){
											echo "<div class=\"ftext\" style=\"float: right;width: 30%;\">FRANCAIS</div>
															<div class=\"fdesc\" style=\"text-align: right;float: right;width: 60px; margin-top: 30px\">".$fr."/10</div>";
										}
										if($ar != 0){
											echo "<div class=\"ftext\" style=\"float: right;width: 30%; \">ARABE</div>
															<div class=\"fdesc\" style=\"text-align: right;float: right;width: 60px; margin-top: 30px\">".$ar."/10</div>";
										}
										if($ch != 0){
											echo "<div class=\"ftext\" style=\"float: right;width: 30%;\">CHINIOIS</div>
															<div class=\"fdesc\" style=\"text-align: right;float: right;width: 60px; margin-top: 30px\">".$ch."/10</div>";
										}
										if($ru != 0){
											echo "<div class=\"ftext\" style=\"float: right;width: 30%;\">RUSSE</div>
															<div class=\"fdesc\" style=\"text-align: right;float: right;width: 60px; margin-top: 30px\">".$ru."/10</div>";
										}
										if($sp != 0){
											echo "<div class=\"ftext\" style=\"float: right;width: 30%; \">ESPAGNOL</div>
															<div class=\"fdesc\" style=\"text-align: right;float: right;width: 60px; margin-top: 30px\">".$sp."/10</div>";
										}
									?>							
								</div>
							</div>

							<div class="continfoparts" style="float: left;height:400px;">
								<div class="ftitre">EXPERIENCE</div>
								<div class="fzone" style="margin-left: 45px;width: 500px;">
									<!-- afficher le contenu des variables -->
									<div class="ftext"><?php echo $dm1." MOIS"; ?></div>
									<div class="fdesc"><?php echo $p1 . " - " . $e1; ?></div>
									<div class="ftext"><?php echo $dm2." MOIS"; ?></div>
									<div class="fdesc"><?php echo $p2 . " - " . $e2; ?></div>
									<div class="ftext"><?php echo $dm3." MOIS"; ?></div>
									<div class="fdesc"><?php echo $p3 . " - " . $e3; ?></div>
								</div>						
							</div>	
						</div>							
					</div>
				</center>
			</div>
		</div>	
		<div class="downrezone">
			<div class="subdown">
				<a href="../page2/insertion.php"><div class="btn" title="CLIQUEZ POUR RE-FAIRE LE CV" style="height: 35px;padding-top: 12px;cursor: pointer;float: left;">RE-FAIRE</div></a>
				<div class="btn" title="CLIQUEZ POUR TELECH ARGER VOTRE CV" style="height: 35px;padding-top: 12px;cursor: pointer;float: left;" id="btnPrint">TELECHARGER</div>
			</div>
		</div>
	</section>
	<footer>
		<div class="startend">
			<div class="setxt">CV GENERATOR 2022 <span>&copy;&nbsp;</span>TOUS LES DROITS RESERVER</div>
			<div id="devl" title="PAR EMAIL : ossamaett2002@gmail.com" style="margin-right: 200px;">CONTACT</div>
			<div id="devl" title="ETTAQAFI OSSAMA" >DEVELOPPEUR</div>		
		</div>
	</footer>	
</body>
</html>