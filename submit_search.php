<html>
	<head>
		<link rel='shortcut icon' href='photos/favicon.png' type='image/png'>
		<link rel='shortcut icon' type='image/png' href='photos/favicon.png' />
	</head>
<?php
	include_once("connect.php");
	include_once("anazitisi.php");
	error_reporting(0);
	
	
	$search=$_POST["anazitisi"];
	echo"<div class='wrapper'>Αναζήτηση συνταγής για: $search<br /><br /></div>";
	
	$query="SELECT * FROM sintages
	WHERE onoma LIKE '%".$search."%' OR ulika LIKE '%".$search."%'";
	
	if(isset($_GET["order_by"])) {
	$query.=" ORDER BY ".$_GET["order_by"];
	
	if(isset($_GET["order"])) $query.=" ".$_GET["order"];
		else $order="ASC";
	}

	$all_recipes=mysql_query($query);
	
	if (mysql_num_rows($all_recipes)==0){
		echo "<span>Δεν βρέθηκε καμία συνταγή</span><br /><br />";
	}
	else {
	
		echo"Αποτελέσματα: ".mysql_num_rows($all_recipes)."<br />
		<body>
				
				<br />
				<div id='wrapper2'>
				<table border=1>
				
			<tr>
				<th>Φωτογραφία</th>
				<th id='onoma'><a href='submit_search.php?order_by=onoma&order=asc' class='no_line'>&#8593;</a>&nbsp;Όνομα συνταγής&nbsp;
					<a href='submit_search.php?order_by=onoma&order=desc' class='no_line'>&#8595;</a></th>
				<th>Υλικά</th>
				<th>Τρόπος εκτέλεσης</th>
				<th id='xronos'><a href='submit_search.php?order_by=xronos_ektelesis&order=asc' class='no_line'>&#8593;</a>&nbsp;Χρόνος&nbsp;
					<a href='submit_search.php?order_by=xronos_ektelesis&order=desc' class='no_line'>&#8595;</a></th>
				<th id='eidos'><a href='submit_search.php?order_by=eidos&order=asc' class='no_line'>&#8593;</a>&nbsp;Είδος&nbsp;
					<a href='submit_search.php?order_by=eidos&order=desc' class='no_line'>&#8595;</a></th>
			</tr>";

	while($recipe_row=mysql_fetch_array($all_recipes)) {
		echo"<tr>
			<td><a href='".$recipe_row["pic_path"]."' target='_blank'><img src='".$recipe_row["pic_path"]."' /></a></td>
			<td>".$recipe_row["onoma"]."</td>
			<td>".$recipe_row["ulika"]."</td>
			<td>".$recipe_row["tropos_ektelesis"]."</td>
			<td>".$recipe_row["xronos_ektelesis"]."</td>
			<td>".$recipe_row["eidos"]."</td>
		</tr>";
	}
	echo"</table></div>";
	}
	
	echo"</body>
</html>";	

?>