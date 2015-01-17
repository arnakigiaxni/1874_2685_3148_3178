<html>
	<head>
		<link rel='stylesheet' type='text/css' href='kataxorisi.css' />
		<link rel='shortcut icon' href='photos/favicon.png' type='image/png'>
		<link rel='shortcut icon' type='image/png' href='photos/favicon.png' />
		<title>Διαγραφή συνταγής</title>
		<script type="text/javascript">
		function delayer(){
			window.location = "diagrafi.php"
		}
		</script>
	</head>
	<body onLoad="setTimeout('delayer()', 3000)">
	
<?php
	include_once("connect.php");
	error_reporting(0);
	
	$delete=$_POST["diagrafi"];
	
	if (is_numeric($delete))	{
		mysql_query("DELETE FROM sintages WHERE id=$delete");
	}
	
	if (mysql_affected_rows()==1){
		echo "<br /><br /><span class='green'>Επιτυχής διαγραφή συνταγής</span>";
	}
	else {
		echo "<br /><br /><span class='red'>Ανεπιτυχής διαγραφή συνταγής</span>";
	}
?>	
	</body>
</html>