<html>
	<head>
		<meta charset="utf-8" />
		<!-- titre de la page -->
		<title>CV GENERATOR - INSERTION</title>
		<!-- logo du site -->
		<link rel="shortcut icon" href="../images/site/gear.png" />
		<!-- appeler le fichier css -->
		<link rel="stylesheet" href="../pagestyle.css" />
		<!-- appeler le fichier javascript -->
		<script type="text/javascript" src="../pagejs.js"></script>
		<!-- fonction en js qui permet de recharger la page dans la premiere visite -->
		<script type="text/javascript">
			(function()
			{
			  if( window.localStorage )
			  {
			    if( !localStorage.getItem('firstLoad') )
			    {
			      localStorage['firstLoad'] = true;
			      window.location.reload();
			    }  
			    else
			      localStorage.removeItem('firstLoad');
			  }
			})();
		</script>
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
				<div class="defsite" style="width: 40%;margin-left: 30%;text-align: center;">
					<div class="txt">REMPLIR LES FORMULAIRES PAR VOS INFORMATIONS PERSONNELLES, ET PROFESSIONNELLES</div>
				</div>
			</div>
		</header>

		<section id="formulaires">
			<form id="infoprim" method="post" action="../page3/downloadpdf.php" enctype="multipart/form-data">

			<div class="titre"> <div class="logo"> <img height="30px" src="../images/site/form.png" style="pointer-events: none; margin-top: 2px;"> </div> INFORMATIONS PERSONNELLES </div> <div class="part" style="height: 585px;"> <div class="ele1img"></div> <div class="elemnts1"> <div class="ele2titre">INFORMATIONS PRIMAIRES</div>
				<div class="sousform1"> <div class="sousform2"> <div class="profilpic"> <img id="output_image"/></div> <div class="profilpicup"> <label for="upload" title="CHOISIR UNE IMAGE DANS VOTRE PC">IMAGE</label> <input type="file" id="upload" name="cvprofpic" hidden accept="image/*" onchange="preview_image(event)" required> </div> </div> <div class="sousform3"> <div class="ele2tap"> <label for="nom" class="part1" >NOM</label> <input type="text" name="cvnom" id="nom" maxlength="30" required placeholder="Entrez votre nom" class="part2"> </div> <div class="ele2tap" style="margin-top: 20px;"> <label for="prenom" class="part1" >PRENOM</label> <input type="text" name="cvprenom" id="prenom" maxlength="30" required placeholder="Entrez votre prenom" class="part2"> </div> <div class="ele2tap" style="margin-top: 20px;"> <label for="age" class="part1" >AGE</label> <input required type="number" name="cvage" id="age" min="18" max="65" placeholder="17 <" class="part2" style="width: 100px;"> <div class="ele2tap" style="margin-top: 0px;margin-left: 6px;width: 296px;"> <label for="sexe" class="part1" style="cursor: default;">SEXE</label> <select name="cvsexe" class="part2" style="width: 100px;height: 25px;"> <option style="color: black;background-color: white;">Homme</option> <option style="color: black;background-color: white;">Femme</option> </select> </div> </div> </div> <div class="sousform4"> <div class="ele2tap"> <label for="ville" class="part1" >VILLE</label> <input type="text" name="cvville" id="ville" maxlength="40" required placeholder="Entrez votre ville" class="part2"> </div> <div class="ele2tap" style="margin-top: 20px;"> <label for="adr" class="part1" >ADRESSE</label> <input type="text" name="cvadr" id="adr" maxlength="40" required placeholder="Entrez votre adresse" class="part2"> </div> <div class="ele2tap" style="margin-top: 20px;"> <label for="tele" class="part1" >TELEPHONE</label> <input type="text" name="cvtele" id="tele" maxlength="25" required placeholder="Entrez votre numero du telephone" class="part2"> </div> <div class="ele2tap" style="margin-top: 50px;"> <label for="email" class="part1" >EMAIL</label> <input type="email" name="cvemail" id="email" maxlength="40" required placeholder="Entrez votre email" class="part2"> </div> </div> </div> <div class="elemnts3"> <div class="ele2tap"> <div class="logo" style="margin-top: 2px;"> <img height="22px" src="../images/site/reset.png" style="cursor: pointer;" onclick="resetinfoprim();"> </div> <input type="button" value="RESTORER" onclick="resetinfoprim();" class="btn" title="CLIQUEZ POUR RESTORER LES DONNEES"> </div> </div> </div> </div>

			<div class="part" style="height: 310px;"> <div class="ele1img"></div> <div class="elemnts1" >  <div class="ele2titre">NIVEAU DE LANGAGE</div> <div class="sousform1"> <div class="sousform5"> <div class="ele2tap"> <label for="fr" class="part1"  style="width: 140px;">FRANCAIS</label> <input type="number" name="cvfr" id="fr" min="1" max="10" placeholder="1 > 10" class="part2" style="width: 100px;" required value="1"> </div> <div class="ele2tap" style="margin-left: 30px;"> <label for="en" class="part1"  style="width: 140px;">ANGLAIS</label> <input required type="number" name="cven" id="en" min="1" max="10" placeholder="1 > 10" class="part2" style="width: 100px;" value="1"> </div> <div class="ele2tap" style="margin-left: 30px;"> <label for="ar" class="part1"  style="width: 140px;">ARABE</label> <input required type="number" name="cvar" id="ar" min="1" max="10" placeholder="1 > 10" class="part2" style="width: 100px;" value="1"> </div> <div class="ele2tap" style="margin-top: 20px;"> <label for="ch" class="part1"  style="width: 140px;">CHINOI</label> <input required type="number" name="cvch" id="ch" min="0" max="10" placeholder="0 > 10" class="part2" style="width: 100px;"> </div> <div class="ele2tap" style="margin-top: 20px;margin-left: 30px;"> <label for="ru" class="part1"  style="width: 140px;">RUSSE</label> <input required type="number" name="cvru" id="ru" min="0" max="10" placeholder="0 > 10" class="part2" style="width: 100px;"> </div> <div class="ele2tap" style="margin-top: 20px;margin-left: 30px;"> <label for="sp" class="part1"  style="width: 140px;">ESPAGNOL</label> <input required type="number" name="cvsp" id="sp" min="0" max="10" placeholder="0 > 10" class="part2" style="width: 100px;"> </div> </div> </div> <div class="elemnts3"><div class="ele2tap"> <div class="logo" style="margin-top: 2px;"> <img height="22px" src="../images/site/reset.png" style="cursor: pointer;" onclick="resetinfolang();"> </div> <input type="button" value="RESTORER" onclick="resetinfolang();" class="btn" title="CLIQUEZ POUR RESTORER LES DONNEES"> </div> </div> </div> </div>

			<div class="titre" style="margin-left: 30%; margin-top: 30px;"> <div class="logo"> <img height="28px;" src="../images/site/bag.png" style="pointer-events: none;"> </div> INFORMATIONS PROFESSIONNELLES </div> <div class="part"  style="height: 530px;">
				<div class="ele1img"></div><div class="elemnts1"><div class="ele2titre">CHEMIN SCOLAIRE</div><div class="sousform1"> <div class="sousformele1"> <div class="ele2tap"> <label for="dip1" class="part1" >DIPLOME 1</label> <input type="text" name="cvdip1" id="dip1" maxlength="30" required placeholder="Entrez votre diplome" class="part2" style="width: 300px;"> </div> <div class="ele2tap" style="margin-top: 20px;" > <label for="eta1" class="part1" >ETABLISSEMENT</label> <input type="text" name="cveta1" id="eta1" maxlength="40" required placeholder="Entrez l'etablissement" class="part2" style="width: 300px;"> </div> </div> <div class="sousformele2"> <div class="ele2tap"> <label for="d1" class="part1"  style="width: 130px;">ANNEE</label> <input required type="number" name="cvd1" id="d1" min="1900" max="2100" placeholder="Annee" class="part2" style="width: 100px;"> </div> </div> <div class="sousformele1"> <div class="ele2tap"> <label for="dip2" class="part1" >DIPLOME 2</label> <input type="text" name="cvdip2" id="dip2" maxlength="30" required placeholder="Entrez votre diplome" class="part2" style="width: 300px;"> </div> <div class="ele2tap" style="margin-top: 20px;" > <label for="eta2" class="part1" >ETABLISSEMENT</label> <input type="text" name="cveta2" id="eta2" maxlength="40" required placeholder="Entrez l'etablissement" class="part2" style="width: 300px;"> </div> </div> <div class="sousformele2"> <div class="ele2tap"> <label for="d2" class="part1"  style="width: 130px;">ANNEE</label> <input required type="number" name="cvd2" id="d2" min="1900" max="2100" placeholder="Annee" class="part2" style="width: 100px;"> </div> </div> <div class="sousformele1" style="margin-bottom: 40px;"> <div class="ele2tap"> <label for="dip3" class="part1" >DIPLOME 3</label> <input type="text" name="cvdip3" id="dip3" maxlength="30" required placeholder="Entrez votre diplome" class="part2" style="width: 300px;"> </div> <div class="ele2tap" style="margin-top: 20px;" > <label for="eta3" class="part1" >ETABLISSEMENT</label> <input type="text" name="cveta3" id="eta3" maxlength="40" required placeholder="Entrez l'etablissement" class="part2" style="width: 300px;"> </div> </div> <div class="sousformele2"> <div class="ele2tap"> <label for="d3" class="part1"  style="width: 130px;">ANNEE</label> <input required type="number" name="cvd3" id="d3" min="1900" max="2100" placeholder="Annee" class="part2" style="width: 100px;"> </div> </div> </div> <div class="elemnts3"><div class="ele2tap"> <div class="logo" style="margin-top: 2px;"> <img height="22px" src="../images/site/reset.png" style="cursor: pointer;" onclick="resetinfocs();"> </div> <input type="button" value="RESTORER" onclick="resetinfocs();" class="btn" title="CLIQUEZ POUR RESTORER LES DONNEES"> </div></div></div></div>

				<div class="part" style="height: 530px;"><div class="ele1img"></div><div class="elemnts1"><div class="ele2titre">EXPERIENCES</div><div class="sousform1"> <div class="sousformele1"> <div class="ele2tap"> <label for="e1" class="part1" >EXPERIENCE 1</label> <input type="text" name="cve1" id="e1" maxlength="30" required placeholder="Experience en/au/dans" class="part2" style="width: 300px;"> </div> <div class="ele2tap" style="margin-top: 20px;" > <label for="p1" class="part1" >TACHE</label> <input type="text" name="cvp1" id="p1" maxlength="40" required placeholder="Entrez votre tache" class="part2" style="width: 300px;"> </div> </div> <div class="sousformele2"> <div class="ele2tap"> <label for="dm1" class="part1"  style="width: 130px;">DUREE (MOIS)</label> <input required type="number" name="cvdm1" id="dm1" min="1" max="99999" placeholder="1 > .." class="part2" style="width: 100px;"> </div> </div> <div class="sousformele1"> <div class="ele2tap"> <label for="e2" class="part1" >EXPERIENCE 2</label> <input type="text" name="cve2" id="e2" maxlength="30" required placeholder="Experience en/au/dans" class="part2" style="width: 300px;"> </div> <div class="ele2tap" style="margin-top: 20px;" > <label for="p2" class="part1" >TACHE</label> <input type="text" name="cvp2" id="p2" maxlength="40" required placeholder="Entrez votre tache" class="part2" style="width: 300px;"> </div> </div> <div class="sousformele2"> <div class="ele2tap"> <label for="dm2" class="part1"  style="width: 130px;">DUREE (MOIS)</label> <input required type="number" name="cvdm2" id="dm2" min="1" max="99999" placeholder="1 > .." class="part2" style="width: 100px;"> </div> </div> <div class="sousformele1" style="margin-bottom: 40px;"> <div class="ele2tap"> <label for="e3" class="part1" >EXPERIENCE 3</label> <input type="text" name="cve3" id="e3" maxlength="30" required placeholder="Experience en/au/dans" class="part2" style="width: 300px;"> </div> <div class="ele2tap" style="margin-top: 20px;" > <label for="p3" class="part1" >TACHE</label> <input type="text" name="cvp3" id="p3" maxlength="40" required placeholder="Entrez votre tache" class="part2" style="width: 300px;"> </div> </div> <div class="sousformele2"> <div class="ele2tap"> <label for="dm3" class="part1"  style="width: 130px;">DUREE (MOIS)</label> <input required type="number" name="cvdm3" id="dm3" min="1" max="99999" placeholder="1 > .." class="part2" style="width: 100px;"> </div> </div> </div> <div class="elemnts3"> <div class="ele2tap"> <div class="logo" style="margin-top: 2px;"> <img height="22px" src="../images/site/reset.png" style="cursor: pointer;" onclick="resetinfoex();"> </div> <input type="button" value="RESTORER" onclick="resetinfoex();" class="btn" title="CLIQUEZ POUR RESTORER LES DONNEES"> </div></div></div></div>

			<div class="part" style="height: 440px;"><div class="ele1img"></div><div class="elemnts1"><div class="ele2titre">PROFIL</div><div class="sousform1" style="height: 280px;"> <div class="sousform5"> <label for="prop" class="part1"  style="border-radius:20px; width: 220px;">TEXTE LIBRE</label> <div class="ele2tap" style="margin-top: 20px;"> <textarea rows="5" type="text" name="cvprop" id="prop" maxlength="400" required placeholder="Parlez un peu de vos formations, competences et votre but" class="part2" style="border-top-right-radius: 0px;border-bottom-right-radius: 0px; text-align: left; width: 800px;"></textarea> </div> </div> </div> <div class="elemnts3"><div class="ele2tap"> <div class="logo" style="margin-top: 2px;"> <img height="22px" src="../images/site/reset.png" style="cursor: pointer;" onclick="resetinfota();"> </div> <input type="button" value="RESTORER" onclick="resetinfota();" class="btn" title="CLIQUEZ POUR RESTORER LES DONNEES"> </div></div></div></div>
	
			<div style="float: left; width: 100%; margin-top: 40px;">
				<div class="subdown" style="margin-left: 30%"><input type="submit" class="btn" title="CLIQUEZ POUR CONFIRMER" value="CONFIRMER" onclick="oublierimage();" href="#upload"></div>
				<div class="subdown">
					<div id="textsub">AVEC LA</div>
				</div>
				<div class="subdown">
					<label for="couleur">
						<div class="colorsT" title="CHOISIR LE COULEUR PRINCIPAL DANS VOTRE CV">
							<div class="colorsS">
								COULEUR
								<input type="color" name="color" id="couleur" value="black" list="liste" value="#000000">
								<datalist id="liste">
									<option>#000000</option>
									<option>#ff0000</option>
								    <option>#00ff00</option>					    
								    <option>#00ffff</option>
						        </datalist>
							</div>
						</div>
					</label>
				</div>
			</div>

			<?php
				 echo '<input type="hidden" name="imgsrc" id="imgsrc">';
			?>		
		</form>

		</section>

		<!-- la derniere partie dans la page -->
		<footer>
			<div class="startend">
				<div class="setxt">CV GENERATOR 2022 <span>&copy;&nbsp;</span>TOUS LES DROITS RESERVER</div>
				<div id="devl" title="PAR EMAIL : ossamaett2002@gmail.com" style="margin-right: 200px;">CONTACT</div>
				<div id="devl" title="ETTAQAFI OSSAMA">DEVELOPPEUR</div>		
			</div>
		</footer>
	</body>
</html>