<html>
	<head>
		<link rel='stylesheet' type='text/css' href='kataxorisi.css' />
		<link rel='shortcut icon' href='photos/favicon.png' type='image/png'>
		<link rel='shortcut icon' type='image/png' href='photos/favicon.png' />
		<title>Καταχώρηση νέας συνταγής</title>
	</head>
		
	<body>
	<div id='wrapper'>
	<br />
		<h1>Καταχώρηση νέας συνταγής</h1>
		<br />
		<br />
		<div id='menu'>
		<a href='kataxorisi.php' class='menu_item'>Καταχώρηση</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href='epeksergasia.php' class='menu_item'>Επεξεργασία</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href='diagrafi.php' class='menu_item'>Διαγραφή</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href='anazitisi.php' class='menu_item'>Αναζήτηση συνταγής</a>
		</div>
		<br />
		<br />
		<br />
		<span>*</span> Υποχρεωτικό πεδίο.
		<br />
		<br />
		<br />
		<form action='submit_add.php' method='post'>
			Όνομα συνταγής<span>*</span><br />
			<input type='text' name='onoma_sintagis' size='50'
			<?php 
				session_start();
				if(isset($_SESSION["onoma"])) {
					echo "value='".$_SESSION["onoma"]."'";
					unset($_SESSION["onoma"]);
				}
			?>
			/>
			<br />
			<br />
			<br />
			Υλικά και οι αναλογίες τους<span>*</span><br />
			<textarea name='ilika' rows='15' cols='50'><?php
				if(isset($_SESSION["ilika"])) {
					echo $_SESSION["ilika"];
					unset($_SESSION["ilika"]);
				}
					?></textarea>
			<br />
			<br />
			<br />
			Συνολικός χρόνος εκτέλεσης της συνταγής (σε λεπτά της ώρας)<span>*</span><br />
			<input type='text' name='xronos' maxlength='3' size='3'
			<?php 
				if(isset($_SESSION["xronos"])) {
					echo "value='".$_SESSION["xronos"]."'";
					unset($_SESSION["xronos"]);
				}
			?>
			/>
			<br />
			<br />
			<br />
			Είδος συνταγής<span>*</span><br /> <select name='eidos'>
			
			<?php 
			if (isset($_SESSION["eidos"]) && $_SESSION["eidos"]=="zumarika"){
				echo"<option value='gluka'>Γλυκά</option>
				<option value='zumarika' selected='selected'>Ζυμαρικά</option>
				<option value='kreatika'>Κρεατικά</option>
				<option value='laxanika'>Λαχανικά</option>
				<option value='orektika'>Ορεκτικά</option>
				<option value='pites'>Πίτες</option>
				<option value='salates'>Σαλάτες</option>
				<option value='saltses'>Σάλτσες</option>
				<option value='soupes'>Σούπες</option>
				<option value='thalassina'>Θαλασσινά</option>
				<option value='psomia'>Ψωμιά</option>
				<option value='epoxiaka'>Εποχιακά</option>
				<option value='kokteils'>Κοκτέιλς</option>";
				unset($_SESSION["eidos"]);
			}
			else if (isset($_SESSION["eidos"]) && $_SESSION["eidos"]=="kreatika"){
				echo"<option value='gluka'>Γλυκά</option>
				<option value='zumarika'>Ζυμαρικά</option>
				<option value='kreatika' selected='selected'>Κρεατικά</option>
				<option value='laxanika'>Λαχανικά</option>
				<option value='orektika'>Ορεκτικά</option>
				<option value='pites'>Πίτες</option>
				<option value='salates'>Σαλάτες</option>
				<option value='saltses'>Σάλτσες</option>
				<option value='soupes'>Σούπες</option>
				<option value='thalassina'>Θαλασσινά</option>
				<option value='psomia'>Ψωμιά</option>
				<option value='epoxiaka'>Εποχιακά</option>
				<option value='kokteils'>Κοκτέιλς</option>";
				unset($_SESSION["eidos"]);
			}
			else if (isset($_SESSION["eidos"]) && $_SESSION["eidos"]=="laxanika"){
				echo"<option value='gluka'>Γλυκά</option>
				<option value='zumarika'>Ζυμαρικά</option>
				<option value='kreatika'>Κρεατικά</option>
				<option value='laxanika' selected='selected'>Λαχανικά</option>
				<option value='orektika'>Ορεκτικά</option>
				<option value='pites'>Πίτες</option>
				<option value='salates'>Σαλάτες</option>
				<option value='saltses'>Σάλτσες</option>
				<option value='soupes'>Σούπες</option>
				<option value='thalassina'>Θαλασσινά</option>
				<option value='psomia'>Ψωμιά</option>
				<option value='epoxiaka'>Εποχιακά</option>
				<option value='kokteils'>Κοκτέιλς</option>";
				unset($_SESSION["eidos"]);
			}
			else if (isset($_SESSION["eidos"]) && $_SESSION["eidos"]=="orektika"){
				echo"<option value='gluka'>Γλυκά</option>
				<option value='zumarika'>Ζυμαρικά</option>
				<option value='kreatika'>Κρεατικά</option>
				<option value='laxanika'>Λαχανικά</option>
				<option value='orektika' selected='selected'>Ορεκτικά</option>
				<option value='pites'>Πίτες</option>
				<option value='salates'>Σαλάτες</option>
				<option value='saltses'>Σάλτσες</option>
				<option value='soupes'>Σούπες</option>
				<option value='thalassina'>Θαλασσινά</option>
				<option value='psomia'>Ψωμιά</option>
				<option value='epoxiaka'>Εποχιακά</option>
				<option value='kokteils'>Κοκτέιλς</option>";
				unset($_SESSION["eidos"]);
			}
			else if (isset($_SESSION["eidos"]) && $_SESSION["eidos"]=="pites"){
				echo"<option value='gluka'>Γλυκά</option>
				<option value='zumarika'>Ζυμαρικά</option>
				<option value='kreatika'>Κρεατικά</option>
				<option value='laxanika'>Λαχανικά</option>
				<option value='orektika'>Ορεκτικά</option>
				<option value='pites' selected='selected'>Πίτες</option>
				<option value='salates'>Σαλάτες</option>
				<option value='saltses'>Σάλτσες</option>
				<option value='soupes'>Σούπες</option>
				<option value='thalassina'>Θαλασσινά</option>
				<option value='psomia'>Ψωμιά</option>
				<option value='epoxiaka'>Εποχιακά</option>
				<option value='kokteils'>Κοκτέιλς</option>";
				unset($_SESSION["eidos"]);
			}
			else if (isset($_SESSION["eidos"]) && $_SESSION["eidos"]=="salates"){
				echo"<option value='gluka'>Γλυκά</option>
				<option value='zumarika'>Ζυμαρικά</option>
				<option value='kreatika'>Κρεατικά</option>
				<option value='laxanika'>Λαχανικά</option>
				<option value='orektika'>Ορεκτικά</option>
				<option value='pites'>Πίτες</option>
				<option value='salates' selected='selected'>Σαλάτες</option>
				<option value='saltses'>Σάλτσες</option>
				<option value='soupes'>Σούπες</option>
				<option value='thalassina'>Θαλασσινά</option>
				<option value='psomia'>Ψωμιά</option>
				<option value='epoxiaka'>Εποχιακά</option>
				<option value='kokteils'>Κοκτέιλς</option>";
				unset($_SESSION["eidos"]);
			}
			else if (isset($_SESSION["eidos"]) && $_SESSION["eidos"]=="saltses"){
				echo"<option value='gluka'>Γλυκά</option>
				<option value='zumarika'>Ζυμαρικά</option>
				<option value='kreatika'>Κρεατικά</option>
				<option value='laxanika'>Λαχανικά</option>
				<option value='orektika'>Ορεκτικά</option>
				<option value='pites'>Πίτες</option>
				<option value='salates'>Σαλάτες</option>
				<option value='saltses' selected='selected'>Σάλτσες</option>
				<option value='soupes'>Σούπες</option>
				<option value='thalassina'>Θαλασσινά</option>
				<option value='psomia'>Ψωμιά</option>
				<option value='epoxiaka'>Εποχιακά</option>
				<option value='kokteils'>Κοκτέιλς</option>";
				unset($_SESSION["eidos"]);
			}
			else if (isset($_SESSION["eidos"]) && $_SESSION["eidos"]=="soupes"){
				echo"<option value='gluka'>Γλυκά</option>
				<option value='zumarika'>Ζυμαρικά</option>
				<option value='kreatika'>Κρεατικά</option>
				<option value='laxanika'>Λαχανικά</option>
				<option value='orektika'>Ορεκτικά</option>
				<option value='pites'>Πίτες</option>
				<option value='salates'>Σαλάτες</option>
				<option value='saltses'>Σάλτσες</option>
				<option value='soupes' selected='selected'>Σούπες</option>
				<option value='thalassina'>Θαλασσινά</option>
				<option value='psomia'>Ψωμιά</option>
				<option value='epoxiaka'>Εποχιακά</option>
				<option value='kokteils'>Κοκτέιλς</option>";
				unset($_SESSION["eidos"]);
			}
			else if (isset($_SESSION["eidos"]) && $_SESSION["eidos"]=="thalassina"){
				echo"<option value='gluka'>Γλυκά</option>
				<option value='zumarika'>Ζυμαρικά</option>
				<option value='kreatika'>Κρεατικά</option>
				<option value='laxanika'>Λαχανικά</option>
				<option value='orektika'>Ορεκτικά</option>
				<option value='pites'>Πίτες</option>
				<option value='salates'>Σαλάτες</option>
				<option value='saltses'>Σάλτσες</option>
				<option value='soupes'>Σούπες</option>
				<option value='thalassina' selected='selected'>Θαλασσινά</option>
				<option value='psomia'>Ψωμιά</option>
				<option value='epoxiaka'>Εποχιακά</option>
				<option value='kokteils'>Κοκτέιλς</option>";
				unset($_SESSION["eidos"]);
			}
			else if (isset($_SESSION["eidos"]) && $_SESSION["eidos"]=="psomia"){
				echo"<option value='gluka'>Γλυκά</option>
				<option value='zumarika'>Ζυμαρικά</option>
				<option value='kreatika'>Κρεατικά</option>
				<option value='laxanika'>Λαχανικά</option>
				<option value='orektika'>Ορεκτικά</option>
				<option value='pites'>Πίτες</option>
				<option value='salates'>Σαλάτες</option>
				<option value='saltses'>Σάλτσες</option>
				<option value='soupes'>Σούπες</option>
				<option value='thalassina'>Θαλασσινά</option>
				<option value='psomia' selected='selected'>Ψωμιά</option>
				<option value='epoxiaka'>Εποχιακά</option>
				<option value='kokteils'>Κοκτέιλς</option>";
				unset($_SESSION["eidos"]);
			}
			else if (isset($_SESSION["eidos"]) && $_SESSION["eidos"]=="epoxiaka"){
				echo"<option value='gluka'>Γλυκά</option>
				<option value='zumarika'>Ζυμαρικά</option>
				<option value='kreatika'>Κρεατικά</option>
				<option value='laxanika'>Λαχανικά</option>
				<option value='orektika'>Ορεκτικά</option>
				<option value='pites'>Πίτες</option>
				<option value='salates'>Σαλάτες</option>
				<option value='saltses'>Σάλτσες</option>
				<option value='soupes'>Σούπες</option>
				<option value='thalassina'>Θαλασσινά</option>
				<option value='psomia'>Ψωμιά</option>
				<option value='epoxiaka' selected='selected'>Εποχιακά</option>
				<option value='kokteils'>Κοκτέιλς</option>";
				unset($_SESSION["eidos"]);
			}
			else if (isset($_SESSION["eidos"]) && $_SESSION["eidos"]=="kokteils"){
				echo"<option value='gluka'>Γλυκά</option>
				<option value='zumarika'>Ζυμαρικά</option>
				<option value='kreatika'>Κρεατικά</option>
				<option value='laxanika'>Λαχανικά</option>
				<option value='orektika'>Ορεκτικά</option>
				<option value='pites'>Πίτες</option>
				<option value='salates'>Σαλάτες</option>
				<option value='saltses'>Σάλτσες</option>
				<option value='soupes'>Σούπες</option>
				<option value='thalassina'>Θαλασσινά</option>
				<option value='psomia'>Ψωμιά</option>
				<option value='epoxiaka'>Εποχιακά</option>
				<option value='kokteils' selected='selected'>Κοκτέιλς</option>";
				unset($_SESSION["eidos"]);
			}
			else {
				echo"<option value='gluka'>Γλυκά</option>
				<option value='zumarika'>Ζυμαρικά</option>
				<option value='kreatika'>Κρεατικά</option>
				<option value='laxanika'>Λαχανικά</option>
				<option value='orektika'>Ορεκτικά</option>
				<option value='pites'>Πίτες</option>
				<option value='salates'>Σαλάτες</option>
				<option value='saltses'>Σάλτσες</option>
				<option value='soupes'>Σούπες</option>
				<option value='thalassina'>Θαλασσινά</option>
				<option value='psomia'>Ψωμιά</option>
				<option value='epoxiaka'>Εποχιακά</option>
				<option value='kokteils'>Κοκτέιλς</option>";
			}
			?>
			</select>
			<br />
			<br />
			<br />
			Τρόπος εκτέλεσης της συνταγής<span>*</span><br />
			<textarea name='ektelesi' rows='15' cols='100'><?php
				if(isset($_SESSION["ektelesi"])) {
					echo $_SESSION["ektelesi"];
					unset($_SESSION["ektelesi"]);
				}
			?></textarea>
			<br />
			<br />
			<br />
			Επιλογή φωτογραφίας<br />
			<input type='file' name='photo'/>			
			<br />
			<br />
			<br />
			<input type='submit' value='Καταχώρηση νέας συνταγής' /> 
			<br />
			<br />
		</form>
		<div>
	</body>
</html>