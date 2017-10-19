<!DOCTYPE html>
<!-- saved from url=(0066)http://blackburn-division.de/forum/archive/index.php?thread-8.html -->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Entwicklerblog</title>

<meta name="robots" content="index,follow">
<link type="text/css" rel="stylesheet" rev="stylesheet" href="Entwicklerblog.css" >
<style type="text/css"></style></head>
<body>
<div id="container">
<h1><a href="Entwicklerblog.php">Entwicklerblog</a></h1>
<div class="navigation"><a href="index.php">Start</a> > <a href="changelog.html">Changelog</a> > Entwicklerblog</div>
<div id="content">	
<div class="post">
<?php
		include dirname(__FILE__)."/global.php";
		global $db_link_i;

		//
		if (!$db_link_i) {
		die ('<br>'.'Connect Error: ' . mysqli_connect_errno().' (terminierung)');
		}
		//
		mysqli_select_db($db_link_i, $db_name) or die (mysqli_error());
		mysqli_query($db_link_i,"SET NAMES 'utf8'");
		//
		$abfrage1="SELECT Datum,Titel,Inhalt from entwicklerblog ORDER BY Datum DESC";
		//
		$ausgabe1_unfertig=mysqli_query($db_link_i,$abfrage1);
		//
		while ($row = mysqli_fetch_assoc($ausgabe1_unfertig))
		{
		$rows[] = $row ;
		}
		foreach($rows as $row){
		$Datum = strtotime($row["Datum"]);
		$Datum = date("d.m.y",$Datum);
		echo $Datum."<div class='header'>".$row["Titel"]."</div>";
		echo "<div class='message'>".$row["Inhalt"]."</div>";
		}
		
		
?>
</div>

<div class="navigation"><a href="index.php">Start</a> > <a href="changelog.html">Changelog</a> > Entwicklerblog</div>
<a href='Entwicklerblog_schreiben.php' class='linkfarbe2'><h2>Beitrag schreiben</h2></a>
	
</div>
Letzte Änderung: 14.02.2016 Aktuelle Version: 0.6.9
</div>
<script type="text/javascript" src="inc/js.inc.js"></script>