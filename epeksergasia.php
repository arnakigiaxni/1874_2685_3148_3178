 <html>
	<head>
		<link rel='stylesheet' type='text/css' href='kataxorisi.css' />
		<link rel='shortcut icon' href='photos/favicon.png' type='image/png'>
		<link rel='shortcut icon' type='image/png' href='photos/favicon.png' />
		<title>Επεξεργασία συνταγής</title>
	</head>
		
	<body>
	<div id='wrapper'>
	<br />
		<h1>Επεξεργασία συνταγής</h1>
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
		<form action='submit_upd.php' method='post'>
<?php
	include_once("connect.php");
	error_reporting(0);

	echo "Επιλογή συνταγής για επεξεργασία: <select name='epeksergasia'>";
	$all_rows=mysql_query("SELECT id, onoma FROM sintages"); 

	while($row=mysql_fetch_array($all_rows)) { 
	echo '<option value="'.$row['id'].'">'.$row['onoma'].'</option>'; 
	} 
	echo "</select>";
?>				
			
			<br />
			<br />
			<input type='submit' value='Επεξεργασία συνταγής' />
		</form>
		<br />
	</body>
</html> 