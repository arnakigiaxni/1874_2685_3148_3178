<html>
	<head>
		<link rel='stylesheet' type='text/css' href='kataxorisi.css' />
		<link rel='shortcut icon' href='photos/favicon.png' type='image/png'>
		<link rel='shortcut icon' type='image/png' href='photos/favicon.png' />
		<title>Καταχώρηση νέας συνταγής</title>
		<script type="text/javascript">
		function delayer(){
			window.location = "kataxorisi.php"
		}
		</script>
	</head>
	<body onLoad="setTimeout('delayer()', 3000)">
<?php
	session_start();
	include_once("connect.php");
	error_reporting(0);
	
	$name=$_POST["onoma_sintagis"];
	$ilika=$_POST["ilika"];
	$time=$_POST["xronos"];
	$eidos=$_POST["eidos"];
	$exec=$_POST["ektelesi"];
	$photo=$_POST["photo"];
	$path="photos/";
	
	if ($photo==NULL) {
		$photo="no_image.jpg";
	}
	
	$image=$path.$photo;
		
	if($name==NULL || $ilika==NULL || $time==NULL || $eidos==NULL || $exec==NULL ) {
				echo"<br /><br /><span class='red'>Δεν έχετε συμπληρώσει κάποιο από τα πεδία</span>";
				
				$_SESSION["ilika"]=$ilika;
				$_SESSION["ektelesi"]=$exec;
				$_SESSION["xronos"]=$time;
				$_SESSION["onoma"]=$name;
				$_SESSION["eidos"]=$eidos;
		}

	else if (is_numeric($time)){
			if ($eidos=="gluka") {
				mysql_query("INSERT INTO sintages (onoma, ulika, eidos, xronos_ektelesis, 
					tropos_ektelesis, pic_path)
					VALUES ('".$name."', '".$ilika."', 'Γλυκά', '".$time."', '".$exec."', '".$image."')");	
			}
			else if ($eidos=="zumarika") {
				mysql_query("INSERT INTO sintages (onoma, ulika, eidos, xronos_ektelesis, 
					tropos_ektelesis, pic_path)
					VALUES ('".$name."', '".$ilika."', 'Ζυμαρικά', '".$time."', '".$exec."', '".$image."')");
			}
			else if ($eidos=="kreatika") {
				mysql_query("INSERT INTO sintages (onoma, ulika, eidos, xronos_ektelesis, 
					tropos_ektelesis, pic_path)
					VALUES ('".$name."', '".$ilika."', 'Κρεατικά', '".$time."', '".$exec."', '".$image."')");
			}
			else if ($eidos=="laxanika") {
				mysql_query("INSERT INTO sintages (onoma, ulika, eidos, xronos_ektelesis, 
					tropos_ektelesis, pic_path)
					VALUES ('".$name."', '".$ilika."', 'Λαχανικά', '".$time."', '".$exec."', '".$image."')");
			}
			else if ($eidos=="orektika") {
				mysql_query("INSERT INTO sintages (onoma, ulika, eidos, xronos_ektelesis, 
					tropos_ektelesis, pic_path)
					VALUES ('".$name."', '".$ilika."', 'Ορεκτικά', '".$time."', '".$exec."', '".$image."')");
			}
			else if ($eidos=="pites") {
				mysql_query("INSERT INTO sintages (onoma, ulika, eidos, xronos_ektelesis, 
					tropos_ektelesis, pic_path)
					VALUES ('".$name."', '".$ilika."', 'Πίτες', '".$time."', '".$exec."', '".$image."')");
			}
			else if ($eidos=="salates") {
				mysql_query("INSERT INTO sintages (onoma, ulika, eidos, xronos_ektelesis, 
					tropos_ektelesis, pic_path)
					VALUES ('".$name."', '".$ilika."', 'Σαλάτες', '".$time."', '".$exec."', '".$image."')");
			}
			else if ($eidos=="saltses") {
				mysql_query("INSERT INTO sintages (onoma, ulika, eidos, xronos_ektelesis, 
					tropos_ektelesis, pic_path)
					VALUES ('".$name."', '".$ilika."', 'Σάλτσες', '".$time."', '".$exec."', '".$image."')");
			}
			else if ($eidos=="soupes") {
				mysql_query("INSERT INTO sintages (onoma, ulika, eidos, xronos_ektelesis, 
					tropos_ektelesis, pic_path)
					VALUES ('".$name."', '".$ilika."', 'Σούπες', '".$time."', '".$exec."', '".$image."')");
			}
			else if ($eidos=="thalassina") {
				mysql_query("INSERT INTO sintages (onoma, ulika, eidos, xronos_ektelesis, 
					tropos_ektelesis, pic_path)
					VALUES ('".$name."', '".$ilika."', 'Θαλασσινά', '".$time."', '".$exec."', '".$image."')");
			}
			else if ($eidos=="psomia") {
				mysql_query("INSERT INTO sintages (onoma, ulika, eidos, xronos_ektelesis, 
					tropos_ektelesis, pic_path)
					VALUES ('".$name."', '".$ilika."', 'Ψωμιά', '".$time."', '".$exec."', '".$image."')");
			}
			else if ($eidos=="epoxiaka") {
				mysql_query("INSERT INTO sintages (onoma, ulika, eidos, xronos_ektelesis, 
					tropos_ektelesis, pic_path)
					VALUES ('".$name."', '".$ilika."', 'Εποχιακά', '".$time."', '".$exec."', '".$image."')");
			}
			else  {
				mysql_query("INSERT INTO sintages (onoma, ulika, eidos, xronos_ektelesis, 
					tropos_ektelesis, pic_path)
					VALUES ('".$name."', '".$ilika."', 'Κοκτέιλς', '".$time."', '".$exec."', '".$image."')");
			}
	}
	else {
		echo "<br /><br /><span class='red'>Βάλτε αριθμούς στο χρόνο εκτέλεσης της συνταγής</span>";
		
		$_SESSION["ilika"]=$ilika;
		$_SESSION["ektelesi"]=$exec;
		$_SESSION["xronos"]=$time;
		$_SESSION["onoma"]=$name;
		$_SESSION["eidos"]=$eidos;
	}
	if (mysql_affected_rows()==1){
		echo "<br /><br /><span class='green'>Η συνταγή <b>\"$name\"</b> προστέθηκε επιτυχώς<span>";
	}
?>
	</body>
</html>