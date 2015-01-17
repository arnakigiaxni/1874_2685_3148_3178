<html>
	<head>
		<link rel='stylesheet' type='text/css' href='kataxorisi.css' />
		<link rel='shortcut icon' href='photos/favicon.png' type='image/png'>
		<link rel='shortcut icon' type='image/png' href='photos/favicon.png' />
		<title>Επεξεργασία συνταγής</title>
	</head>
<?php
	error_reporting(0);
	include_once("connect.php");
	
	$update=$_POST["epeksergasia"];
	
	$all_rows=mysql_query("SELECT onoma, ulika, eidos, xronos_ektelesis, tropos_ektelesis 
	FROM sintages
	WHERE id=$update"); 

	while($row=mysql_fetch_array($all_rows)) { 
	  
echo"<body>
	<div id='wrapper'>
		<br />
		<h1>Επεξεργασία συνταγής \"".$row['onoma']."\"</h1>
		<br />
		<span>*</span> Υποχρεωτικό πεδίο.
		<br />
		<br />
		<br />
		<form action='submit_upd2.php' method='post'>
			<input type='hidden' name='id' value='".$update."' />
			Όνομα συνταγής<span>*</span><br />
			<input type='text' size='50' name='onoma_sintagis' value='".$row['onoma']."'/>
			<br />
			<br />
			<br />
			Υλικά και οι αναλογίες τους<span>*</span><br />
			<textarea name='ilika' rows='15' cols='50'>".$row['ulika']."</textarea>
			<br />
			<br />
			<br />
			Συνολικός χρόνος εκτέλεσης της συνταγής (σε λεπτά της ώρας)<span>*</span><br />
			<input type='text' name='xronos' maxlength='3' size='3' value='".$row['xronos_ektelesis']."'/>
			<br />
			<br />
			<br />
			Είδος συνταγής<span>*</span> <br /><select name='eidos'>
			<option value='gluka'>Γλυκά</option>
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
			<option value='kokteils'>Κοκτέιλς</option>
			</select>
			<br />
			<br />
			<br />
			Τρόπος εκτέλεσης συνταγής<span>*</span><br />
			<textarea name='ektelesi' rows='15' cols='100'>".$row['tropos_ektelesis']."</textarea>
			<br />
			<br />
			<br />
			Επιλογή φωτογραφίας<br />
			<input type='file' name='photo'/>			
			<br />
			<br />
			<br />
			<input type='submit' value='Αποδοχή επεξεργασίας' />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href='epeksergasia.php'><span id='red2'>Ακύρωση επεξεργασίας</span></a>
			<br />
			<br />
		</form>
		</div>
	</body>
</html>";
}

?>