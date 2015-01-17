<html>
	<head>
		<link rel='shortcut icon' href='photos/favicon.png' type='image/png'>
		<link rel='shortcut icon' type='image/png' href='photos/favicon.png' />
		<link rel='stylesheet' type='text/css' href='kataxorisi.css' />
		<title>Επεξεργασία συνταγής</title>
		<script type="text/javascript">
			function delayer(){
			window.location = "epeksergasia.php"
		}
		</script>
	</head>
		
	<body onLoad="setTimeout('delayer()', 3000)">
<?php
	include_once("connect.php");
	include_once("submit_upd.php");
	error_reporting(0);
	
	$name=$_POST["onoma_sintagis"];
	$ilika=$_POST["ilika"];
	$time=$_POST["xronos"];
	$eidos=$_POST["eidos"];
	$exec=$_POST["ektelesi"];
	$id=$_POST["id"];
	$photo=$_POST["photo"];
	$path="photos/";
	
	if ($photo==NULL) {
		$photo="no_image.jpg";
	}
	
	$image=$path.$photo;
	
	if($name==NULL || $ilika==NULL || $time==NULL || $eidos==NULL || $exec==NULL ) {
				echo"<br /><br /><span class='red'>Δεν έχετε συμπληρώσει κάποιο από τα πεδία</span>";
		}
	else if (is_numeric($time)) {
			if ($eidos=="gluka") {
				mysql_query("UPDATE sintages 
				SET onoma='".$name."', ulika='".$ilika."', eidos='Γλυκά', xronos_ektelesis='".$time."', tropos_ektelesis='".$exec."', pic_path='".$image."'
				WHERE id=$id");
			}
			else if ($eidos=="zumarika") {
				mysql_query("UPDATE sintages 
				SET onoma='".$name."', ulika='".$ilika."', eidos='Ζυμαρικά', xronos_ektelesis='".$time."', tropos_ektelesis='".$exec."', pic_path='".$image."'
				WHERE id=$id");
			}
			else if ($eidos=="kreatika") {
				mysql_query("UPDATE sintages 
				SET onoma='".$name."', ulika='".$ilika."', eidos='Κρεατικά', xronos_ektelesis='".$time."', tropos_ektelesis='".$exec."', pic_path='".$image."'
				WHERE id=$id");
			}
			else if ($eidos=="laxanika") {
				mysql_query("UPDATE sintages 
				SET onoma='".$name."', ulika='".$ilika."', eidos='Λαχανικά', xronos_ektelesis='".$time."', tropos_ektelesis='".$exec."', pic_path='".$image."'
				WHERE id=$id");
			}
			else if ($eidos=="orektika") {
				mysql_query("UPDATE sintages 
				SET onoma='".$name."', ulika='".$ilika."', eidos='Ορεκτικά', xronos_ektelesis='".$time."', tropos_ektelesis='".$exec."', pic_path='".$image."'
				WHERE id=$id");
			}
			else if ($eidos=="pites") {
				mysql_query("UPDATE sintages 
				SET onoma='".$name."', ulika='".$ilika."', eidos='Πίτες', xronos_ektelesis='".$time."', tropos_ektelesis='".$exec."', pic_path='".$image."'
				WHERE id=$id");
			}
			else if ($eidos=="salates") {
				mysql_query("UPDATE sintages 
				SET onoma='".$name."', ulika='".$ilika."', eidos='Σαλάτες', xronos_ektelesis='".$time."', tropos_ektelesis='".$exec."', pic_path='".$image."'
				WHERE id=$id");
			}
			else if ($eidos=="saltses") {
				mysql_query("UPDATE sintages 
				SET onoma='".$name."', ulika='".$ilika."', eidos='Σάλτσες', xronos_ektelesis='".$time."', tropos_ektelesis='".$exec."', pic_path='".$image."'
				WHERE id=$id");
			}
			else if ($eidos=="soupes") {
				mysql_query("UPDATE sintages 
				SET onoma='".$name."', ulika='".$ilika."', eidos='Σούπες', xronos_ektelesis='".$time."', tropos_ektelesis='".$exec."', pic_path='".$image."'
				WHERE id=$id");
			}
			else if ($eidos=="thalassina") {
				mysql_query("UPDATE sintages 
				SET onoma='".$name."', ulika='".$ilika."', eidos='Θαλασσινά', xronos_ektelesis='".$time."', tropos_ektelesis='".$exec."', pic_path='".$image."'
				WHERE id=$id");
			}
			else if ($eidos=="psomia") {
				mysql_query("UPDATE sintages 
				SET onoma='".$name."', ulika='".$ilika."', eidos='Ψωμιά', xronos_ektelesis='".$time."', tropos_ektelesis='".$exec."', pic_path='".$image."'
				WHERE id=$id");
			}
			else if ($eidos=="epoxiaka") {
				mysql_query("UPDATE sintages 
				SET onoma='".$name."', ulika='".$ilika."', eidos='Εποχιακά', xronos_ektelesis='".$time."', tropos_ektelesis='".$exec."', pic_path='".$image."'
				WHERE id=$id");
			}
			else  {
				mysql_query("UPDATE sintages 
				SET onoma='".$name."', ulika='".$ilika."', eidos='Κοκτέιλς', xronos_ektelesis='".$time."', tropos_ektelesis='".$exec."', pic_path='".$image."'
				WHERE id=$id");
			}
		}
	else {
		echo "<br /><br /><span class='red'>Βάλτε αριθμούς στο χρόνο εκτέλεσης της συνταγής</span>";
	}
	if (mysql_affected_rows()==1){
		echo "<br /><br /><span class='green'>Επιτυχής επεξεργασία συνταγής</span>";
	}
	else {
		echo "<br /><br /><span class='red'>Δεν έγινε κάποια αλλαγή</span>";
	}
?>
	</body>
</html>