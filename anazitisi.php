<html>
	<head>
		<link rel='stylesheet' type='text/css' href='view.css' />
		<link rel='shortcut icon' href='photos/favicon.png' type='image/png'>
		<link rel='shortcut icon' type='image/png' href='photos/favicon.png' />
		<title>Αναζήτηση συνταγής</title>
	</head>
		
	<body>
		<div class='wrapper'>
		<br />
		<h1>Αναζήτηση συνταγής</h1>
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
		<form action='submit_search.php' method='post'>
		Πληκτρολογήστε όνομα ή υλικά που σχετίζονται με τη συνταγή που ψάχνετε<br /><br />
		<input type='text' name='anazitisi'/>
		<input type='submit' value='Αναζήτηση' />
		<br /><br />
		</form>
	</body>
</html>